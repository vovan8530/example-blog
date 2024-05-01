<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CommentController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $comments = Auth::user()->comments;
        return view('personal.comments.index',
            ['comments' => $comments]
        );
    }

    /**
     * @param  Comment  $comment
     * @return View
     */
    public function edit(Comment $comment): View
    {
        return view('personal.comments.edit', ['comment' => $comment]);
    }

    /**
     * @param  CommentRequest  $request
     * @param  Comment  $comment
     * @return RedirectResponse
     */
    public function update(CommentRequest $request, Comment $comment): RedirectResponse
    {
        $comment->update($request->validated());
        return redirect()->route('comments.index');
    }

    /**
     * @param  Comment  $comment
     * @return RedirectResponse
     */
    public function destroy(Comment $comment): RedirectResponse
    {
        $comment->delete();
        return redirect()->route('comments.index');
    }
}
