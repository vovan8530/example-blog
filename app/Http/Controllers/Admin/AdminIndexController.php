<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class AdminIndexController extends Controller
{
    public function __invoke()
    {
        $data['postsCount'] = Post::count();
        $data['catCount'] = Category::count();
        $data['usersCount'] = User::count();
        $data['tagsCount'] = Tag::count();

        return view('admin.main.index', ['data' => $data]);
    }
}
