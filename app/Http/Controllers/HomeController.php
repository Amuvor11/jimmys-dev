<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Region;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function index() {
        return redirect()->route('admin.dashboard');
    }
    public function home() {
       return view('admin.dashboard');
    }
    public function getBlog()
    {
        try {
            $latest = Article::orderBy('created_at', 'desc')->first();
            if (!$latest) {
                $blogs = new LengthAwarePaginator([], 0, 6);
                return view('blog')->with(['blogs' => $blogs, 'latest' => null, 'article_type' => 'blog']);
            }
            $blogs = Article::where('id', '<>', $latest->id)->orderBy('created_at', 'desc')->paginate(6);
            return view('blog')->with(['blogs' => $blogs, 'latest' => $latest, 'article_type' => 'blog']);
        } catch (\Throwable $e) {
            $blogs = new LengthAwarePaginator([], 0, 6);
            return view('blog')->with(['blogs' => $blogs, 'latest' => null, 'article_type' => 'blog']);
        }
    }

    public function getArticle($slug)
    {
        try {
            $blog = Article::where('slug', $slug)->firstOrFail();
            $related = Article::where('id', '<>', $blog->id)->orderBy('created_at', 'desc')->limit(3)->get();
            return view('blog_article')->with(['blog' => $blog, 'related' => $related, 'article_type' => 'blog']);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404);
        } catch (\Throwable $e) {
            abort(503, __('Service temporarily unavailable. Please try again later.'));
        }
    }
}
