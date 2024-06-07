<?php

namespace App\Http\Controllers;

use App\Models\Product;

class WelcomeController extends Controller
{
    public function index()
    {
        $productsByCategory = Product::all()->groupBy('category');
        return view('welcome', compact('productsByCategory'));
    }
}

