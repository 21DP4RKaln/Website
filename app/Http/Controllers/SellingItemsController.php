<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SellingItem;

class SellingItemController extends Controller
{
    public function index()
    {
        $sellingItems = auth()->user()->sellingItems;
        return view('sellingItems.index', compact('sellingItems'));
    }
}


