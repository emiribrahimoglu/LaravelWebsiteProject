<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('index', ['products'=>$data]);
    }
    function productsIndex()
    {
        $data = Product::all();
        return view('products', ['products'=>$data]);
    }
}
