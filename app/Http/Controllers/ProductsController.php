<?php

namespace App\Http\Controllers;

use App\Filters\ProductFilters;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request, ProductFilters $productFilters)
    {
        $products = Product::query()
            ->filter($productFilters)
            ->get();

        return response()->json($products);
    }
}
