<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RewardProgramController extends Controller
{
    /**
     * Display the reward program page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('reward-program');
    }
}

