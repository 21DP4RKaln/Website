<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Only admins can access these routes
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'category' => 'required',
            'specifics' => 'required',
            'image_url' => 'nullable|url',
        ]);

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category' => $request->category,
            'specifics' => json_decode($request->specifics, true),
            'image_url' => $request->image_url,
        ]);

        return redirect()->route('products.index')->with('success', 'Product added successfully');
    }
}


