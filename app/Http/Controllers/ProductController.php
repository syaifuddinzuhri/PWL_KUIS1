<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('supplier')->get();
        $title = 'Products';

        session()->put('active', 2);
        return view('product', compact('title', 'products'));
    }

    public function show($slug)
    {
        $products = Product::with('supplier')->where('slug', '=', $slug)->get();
        $title = 'Products';
        session()->put('active', 2);
        return view('product', compact('title', 'products'));
    }
}