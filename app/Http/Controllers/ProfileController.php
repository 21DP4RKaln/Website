<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        $sellingItems = $user->sellingItems()->latest()->take(3)->get();
        $wishListItems = $user->wishListItems()->latest()->take(3)->get();
        return view('profile', compact('user', 'sellingItems', 'wishListItems'));
    }

    public function updateAvatar(Request $request)
    {
        $request->validate(['avatar' => 'image']);
        $path = $request->file('avatar')->store('avatars', 'public');
        auth()->user()->update(['avatar' => $path]);
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $request->validate(['name' => 'required', 'email' => 'required|email']);
        auth()->user()->update($request->only('name', 'email'));
        return redirect()->back();
    }

    public function linkAccount($provider)
    {
        // Logic to link account with provider (Facebook, Google, etc.)
    }
}








