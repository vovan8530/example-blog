<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::with('category')->latest()->paginate(6);
        $myPosts = Auth::user()->posts ?? null;
        $popularPosts = Post::withCount('userLikes')->orderBy('likes', 'desc')->limit(3)->get();
        return view('main.index', [
            'posts' => $posts,
            'myPosts' => $myPosts,
            'popularPosts' => $popularPosts,
        ]);
    }
}
