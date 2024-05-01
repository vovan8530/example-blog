<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LikeController extends Controller
{

    /**
     * @return View
     */
    public function index(): View
    {
        $posts = Auth::user()->postLikes;
        return view('personal.likes.index',
            ['posts' => $posts]
        );
    }

    /**
     * @param  Post  $post
     * @return RedirectResponse
     */
    public function destroy(Post $post): RedirectResponse
    {
        Auth::user()->postLikes()->detach($post->id);
        return redirect()->route('likes.index');
    }

}
