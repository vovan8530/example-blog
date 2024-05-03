<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;


class CategoryIndexController extends Controller
{
    public function __invoke()
    {
        return view('categories.index', ['categories' => Category::all()]);
    }
}
