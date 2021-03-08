<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function index()
    {
        session()->put('active', 2);
        $title = 'Products';
        $products = Product::with('suppliers')->get();
        return view('product', compact('title', 'products'));
    }
}