<?php

namespace App\Http\Controllers;

use App\Filters\ProductFilters;
use App\Product;

class ProductsController extends Controller
{
    public function index(ProductFilters $productFilters)
    {
        $products = Product::filter($productFilters)
            ->get();

        return response()->json($products);
    }
}
