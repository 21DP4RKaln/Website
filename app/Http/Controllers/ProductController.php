<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(3)->get();
        return view('products', compact('products'));
    }

    public function add()
    {
        // Logic to add a new product
    }

    public function viewAll()
    {
        $products = Product::all();
        return view('products.viewAll', compact('products'));
    }
}

