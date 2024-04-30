<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use App\Services\Admin\TagService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TagController extends Controller
{

    /**
     * @param  TagService  $service
     */
    public function __construct(protected TagService $service)
    {
    }

    public function index()
    {
//        $this->authorize('viewAny', Tag::class);

        return view('admin.tags.index',
            ['tags' => TagResource::collection(Tag::all())]
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('admin.tags.create');
    }

    /**
     * @param  TagRequest  $request
     * @return RedirectResponse
     */
    public function store(TagRequest $request): RedirectResponse
    {
//        $this->authorize('create', Tag::class);

        $data = $request->validated();
        Tag::firstOrcreate($data);

        return redirect()->route('tags.index');
    }

    /**
     * @param  Tag  $tag
     * @return View
     */
    public function show(Tag $tag): View
    {
//        $this->authorize('view', $tag);

        return view('admin.tags.show', ['tag' => new TagResource($tag)]);
    }

    /**
     * @param  Tag  $tag
     * @return View
     */
    public function edit(Tag $tag): View
    {
        //        $this->authorize('view', $tag);

        return view('admin.tags.edit', ['tag' => new TagResource($tag)]);
    }

    /**
     * @param  TagRequest  $request
     * @param  Tag  $tag
     * @return RedirectResponse
     */
    public function update(TagRequest $request, Tag $tag): RedirectResponse
    {
//        $this->authorize('update', $tag);

        $tag->update($request->validated());

        return redirect()->route('tags.show', ['tag' => $tag]);
    }

    /**
     * @param  Tag  $tag
     * @return RedirectResponse
     */
    public function destroy(Tag $tag): RedirectResponse
    {
//        $this->authorize('delete', $tag);

        $tag->delete();

        return redirect()->route('tags.index');
    }
}
