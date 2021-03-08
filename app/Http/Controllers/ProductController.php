<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('supplier')->paginate(9);
        $title = 'Products';

        session()->put('active', 2);
        return view('product', compact('title', 'products'));
    }

    public function show($slug)
    {
        $product = Product::with('supplier')->where('slug', '=', $slug)->firstOrFail();
        $title = $product->name;
        session()->put('active', 2);
        return view('detail_product', compact('title', 'product'));
    }
}