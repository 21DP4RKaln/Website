<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prize;

class PrizeController extends Controller
{
    public function index()
    {
        $prizes = Prize::all();
        return view('wheel', compact('prizes'));
    }
}

