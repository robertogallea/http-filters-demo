<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query()
            ->when($request->search, function ($q) use ($request) {
                $q->where('name', 'like', "%{$request->search}%");
            })
            ->when($request->sort, function ($q) use ($request) {
                $q->orderBy($request->sort, $request->dir === 'desc' ? 'desc' : 'asc');
            })
            ->get();

        return response()->json($products);
    }
}
