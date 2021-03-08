<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    public function index()
    {
        $suppliers = Supplier::with('product')->paginate(9);
        $title = 'Suppliers';

        session()->put('active', 3);
        return view('suppliers', compact('title', 'suppliers'));
    }
    public function show($id)
    {
        $supplier = Supplier::with('product')->where('id', '=', $id)->firstOrFail();
        $title = $supplier->name;

        session()->put('active', 3);
        return view('detail_supplier', compact('title', 'supplier'));
    }
}