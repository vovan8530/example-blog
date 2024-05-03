<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;


class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $date = Carbon::parse($post->created_at);
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->limit(3)
            ->get();

        return view('post.show', [
            'post' => $post,
            'date' => $date,
            'relatedPosts' => $relatedPosts
        ]);
    }
}
