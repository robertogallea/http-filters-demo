<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query()
            ->filter($request)
            ->get();

        return response()->json($products);
    }
}
