<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WishlistItem;

class WishlistController extends Controller
{
    public function index()
    {
        $wishListItems = auth()->user()->wishListItems;
        return view('wishlist.index', compact('wishListItems'));
    }
}

