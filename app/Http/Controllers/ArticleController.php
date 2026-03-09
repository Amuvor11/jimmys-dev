<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;
use Image;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view('admin.articles')->withMedia($article);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'title_en' => 'required|string|max:999999',
            'title_de' => 'required|string|max:999999',
            'body_en' => 'nullable|string|max:9999999',
            'body_de' => 'nullable|string|max:9999999',
            'intro_en' => 'nullable|string|max:999999',
            'intro_de' => 'nullable|string|max:999999',
            'cover_video' => 'nullable|string|max:191',
            'start_date' => 'nullable|string|max:191',
            'end_date' => 'nullable|string|max:191',
            'file' => 'nullable|image|max:20000',
        ]);
        $title =  mb_substr($valid['title_de'], 0, 175 );
        $slug = Str::slug($title);
        if (Article::where('slug', $slug)->get()->count()) {
            $slug = Str::slug($title + '_' + time());
        }
        $valid['slug'] = $slug;
        $dir_name = "articles/" . $slug;
        $dir_name_public = public_path("storage/articles/" . $slug);
        if(!File::isDirectory($dir_name_public)){
            File::makeDirectory($dir_name_public, 0777, true, true);
        }
        if (key_exists('file', $valid)) {
            $image = $request->file('file');
            $new_filename = $slug .'.'. $image->extension();
            if (Article::where('cover_image', $new_filename)->exists()) {
                $new_filename = str_replace('.' . $image->extension(), '_' . time() . '.' .  $image->extension(), $new_filename);
            }
            $valid['cover_image'] = $new_filename;

            $img = Image::make($image->path());
            $img->resize(1500, 1500, function ($const) {
                $const->aspectRatio();
                $const->upsize();
            })->save($dir_name_public.'/'.$new_filename);
        }
        $row = new Article();
        $row->fill($valid);
        $row->save();
        $media = Article::all();
        return response()->json([
            'msg' => 'Article added successfully!',
            'media' => $media
        ])->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $valid = $request->validate([
            'title_en' => 'required|string|max:999999',
            'title_de' => 'required|string|max:999999',
            'body_en' => 'nullable|string|max:9999999',
            'body_de' => 'nullable|string|max:9999999',
            'cover_video' => 'nullable|string|max:191',
            'cover_image' => 'nullable|string|max:191',
            'file' => 'nullable|image|max:20000',
        ]);

        $dir_name = "storage/articles/" . $article->slug;
        $dir_name_storage = "public/articles/" . $article->slug . "/";
        if (!key_exists('body_en', $valid)) {
            $valid['body_en'] = null;
        }
        if (!key_exists('body_de', $valid)) {
            $valid['body_de'] = null;
        }
        if (!key_exists('cover_video', $valid)) {
            $valid['cover_video'] = null;
        }
        if (!key_exists('article_date', $valid)) {
            $valid['article_date'] = null;
        }

        if (!key_exists('cover_image', $valid)) {
            $valid['cover_image'] = null;
            if (Storage::exists($dir_name_storage . DIRECTORY_SEPARATOR . $article->cover_image)) {
                Storage::delete($dir_name_storage . DIRECTORY_SEPARATOR . $article->cover_image);
            }
        }
        if (key_exists('file', $valid)) {
            $image = $request->file('file');
            $new_filename = $article->slug .'.'.$image->extension();
            if (Article::where('cover_image', $new_filename)->exists()) {
                $new_filename = str_replace('.' . $image->extension(), '_' . time() . '.' .  $image->extension(), $new_filename);
            }
            $valid['cover_image'] = $new_filename;

            $img = Image::make($image->path());
            $img->resize(1500, 1500, function ($const) {
                $const->aspectRatio();
                $const->upsize();
            })->save($dir_name.'/'.$new_filename);
        }
        $article->update($valid);
        $media = Article::all();
        return response()->json([
            'msg' => 'Article updated successfully!',
            'media' => $media
        ])->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $dir_name = "storage/articles/" . $article->slug . "/";
        if (Storage::exists($dir_name . DIRECTORY_SEPARATOR . $article->cover_image)) {
            Storage::delete($dir_name . DIRECTORY_SEPARATOR . $article->cover_image);
        }
        foreach ($article->images as $image) {
            $image->delete();
        }
        $article->delete();
        $media = Article::all();
        return response()->json([
            'msg' => 'Article deleted successfully!',
            'media' => $media
        ])->setStatusCode(Response::HTTP_OK);
    }
}
