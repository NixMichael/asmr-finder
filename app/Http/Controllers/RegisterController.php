<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create ()
    {
        return view('register.index');
    }

    public function store (User $user)
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:256'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $currentUser = $user::create($attributes);

        auth()->login($currentUser);

        return redirect('/')->with('success', 'Thanks for registering. You are now logged in!');
    }
}
