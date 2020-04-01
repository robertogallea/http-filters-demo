<?php

namespace App\Http\Controllers;

use App\Category;
use App\Filters\CategoryFilters;

class CategoriesController extends Controller
{
    public function index(CategoryFilters $categoryFilters)
    {
        $categories = Category::filter($categoryFilters)
            ->get();

        return response()->json($categories);
    }
}
