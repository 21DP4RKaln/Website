<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $sellingItems = $user->sellingItems()->latest()->take(3)->get();
        $wishListItems = $user->wishListItems()->latest()->take(3)->get();

        return view('home', compact('user', 'sellingItems', 'wishListItems'));
    }
}

