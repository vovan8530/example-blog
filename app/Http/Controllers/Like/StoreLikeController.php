<?php

namespace App\Http\Controllers\Like;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;


class StoreLikeController extends Controller
{
    public function __invoke(Post $post)
    {
        Auth::user()->postLikes()->toggle($post);
        return redirect()->route('main.index');
    }
}
