<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(Request $request)
    {
        return Product::create($request->all());
    }
}
