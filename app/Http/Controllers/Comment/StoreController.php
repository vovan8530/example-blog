<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Post;



class StoreController extends Controller
{
    public function __invoke(CommentRequest $request, Post $post)
    {
        $data = $request->validated();
        $data['post_id'] = $post->id;
        $data['user_id'] = auth()->id();

        Comment::create($data);

        return redirect()->route('main.show', ['post' => $post->id]);

    }
}
