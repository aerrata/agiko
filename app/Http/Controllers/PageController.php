<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::query()
            ->where('meta->type', 'article')
            ->latest()
            ->limit(4)
            ->get();

        return view('welcome', [
            'posts' => $posts
        ]);
    }

    public function blog()
    {
        $posts = Post::query()
            ->where('meta->type', 'article')
            ->latest()
            ->paginate(12);

        return view('blog', [
            'posts' => $posts
        ]);
    }

    public function about()
    {
        return view('about');
    }
}
