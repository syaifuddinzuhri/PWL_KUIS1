<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $title = 'Home';
        session()->put('active', 1);
        return view('home', compact('title'));
    }
}