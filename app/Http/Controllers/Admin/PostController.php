<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Services\Admin\PostService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PostController extends Controller
{

    /**
     * @param  PostService  $service
     */
    public function __construct(protected PostService $service)
    {
    }

    public function index()
    {
//        $this->authorize('viewAny', Post::class);

        return view('admin.posts.index',
            ['posts' => PostResource::collection(Post::all())]
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('admin.posts.create', [
            'categories' => Category::all(),
            'tags' => Tag::all()
        ]);
    }

    /**
     * @param  PostRequest  $request
     * @return RedirectResponse
     */
    public function store(PostRequest $request): RedirectResponse
    {
//        $this->authorize('create', Post::class);
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('posts.index');
    }

    /**
     * @param  Post  $post
     * @return View
     */
    public function show(Post $post): View
    {
//        $this->authorize('view', $post);
        return view('admin.posts.show', ['post' => new PostResource($post)]);
    }

    /**
     * @param  Post  $post
     * @return View
     */
    public function edit(Post $post): View
    {
        //        $this->authorize('view', $post);
        return view('admin.posts.edit', [
                'post' => new PostResource($post),
                'categories' => Category::all(),
                'tags' => Tag::all(),
            ]
        );
    }

    /**
     * @param  PostRequest  $request
     * @param  Post  $post
     * @return RedirectResponse
     */
    public function update(PostRequest $request, Post $post): RedirectResponse
    {
//        $this->authorize('update', $post);

        $data = $request->validated();

        $this->service->update($data, $post);

        return redirect()->route('posts.index');
    }

    /**
     * @param  Post  $post
     * @return RedirectResponse
     */
    public function destroy(Post $post): RedirectResponse
    {
//        $this->authorize('delete', $post);

        $post->delete();

        return redirect()->route('posts.index');
    }
}
