<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;


class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        return view('post.show', [
            'post' => $post,
        ]);
    }
}
