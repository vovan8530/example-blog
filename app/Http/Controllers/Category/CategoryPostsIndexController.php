<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;


class CategoryPostsIndexController extends Controller
{
    public function __invoke(Category $category)
    {
        $posts = $category->posts()->paginate(6);
        $myPosts = Auth::user()->posts ?? null;
        $popularPosts = Post::withCount('userLikes')->orderBy('likes', 'desc')->limit(3)->get();
        return view('main.index', compact('posts', 'myPosts', 'popularPosts'));
    }
}
