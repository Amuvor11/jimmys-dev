<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class ImageArticleController extends Controller
{
    public function store(Request $request)
    {
        $valid = $request->validate([
            'id' => ['required', 'integer', Rule::exists('articles')->where(function ($query) use ($request) {
                $query->where('id', $request->id);
            })],
            'file' => 'array|min:1',
            'file.*' => 'required|image|max:10000',
        ]);
        $article = Article::findOrFail($valid['id']);
        $dir_name = "public/articles/".$article->slug;
        foreach ($valid['file'] as $file){
            $filename = $file->getClientOriginalName();
            if (Image::where('filename', $filename)->exists()) {
                $filename = str_replace('.' . File::extension($filename), '_' . time() .'_'.Str::random(3). '.' .  File::extension($filename), $filename);
            }
            $image = new Image();
            $image->filename = $filename;
            $image->imageable_id = $valid['id'];
            $image->imageable_type = 'App\Models\Article';
            $image->save();
            $file->storeAs(
                $dir_name, $filename
            );
        }

    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return response()->json([
            'images' => $article->images
        ]);
    }

    public function destroy(Image $image)
    {
        $article = $image->imageable;
        $dir_name = "public/articles/".$article->slug.'/';
        Storage::delete($dir_name . $image->filename);

        $image->delete();
        $article = Article::findOrFail($article->id);
        return response()->json([
            'msg' => 'Imaginea a fost ștearsă cu succes!',
            'images' => $article->images
        ])->setStatusCode(Response::HTTP_OK);
    }
}
