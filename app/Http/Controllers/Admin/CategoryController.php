<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Services\Admin\CategoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CategoryController extends Controller
{

    /**
     * @param  CategoryService  $service
     */
    public function __construct(protected CategoryService $service)
    {
    }

    public function index()
    {
//        $this->authorize('viewAny', Category::class);

        return view('admin.categories.index',
            ['categories' => CategoryResource::collection(Category::all())]
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('admin.categories.create');
    }

    /**
     * @param  CategoryRequest  $request
     * @return RedirectResponse
     */
    public function store(CategoryRequest $request): RedirectResponse
    {
//        $this->authorize('create', Category::class);

        $data = $request->validated();
        Category::firstOrcreate($data);

        return redirect()->route('categories.index');
    }

    /**
     * @param  Category  $category
     * @return View
     */
    public function show(Category $category): View
    {
//        $this->authorize('view', $category);

        return view('admin.categories.show', ['category' => new CategoryResource($category)]);
    }

    /**
     * @param  Category  $category
     * @return View
     */
    public function edit(Category $category): View
    {
        //        $this->authorize('view', $category);

        return view('admin.categories.edit', ['category' => new CategoryResource($category)]);
    }

    /**
     * @param  CategoryRequest  $request
     * @param  Category  $category
     * @return RedirectResponse
     */
    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
//        $this->authorize('update', $category);

        $category->update($request->validated());

        return redirect()->route('categories.show', ['category' => $category]);
    }

    /**
     * @param  Category  $category
     * @return RedirectResponse
     */
    public function destroy(Category $category): RedirectResponse
    {
//        $this->authorize('delete', $category);

        $category->delete();

        return redirect()->route('categories.index');
    }
}
