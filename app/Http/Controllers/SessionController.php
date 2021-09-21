<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller
{
    public function create ()
    {
        return view('sessions.index');
    }

    public function store (User $user)
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (auth()->attempt($attributes)) {
            return redirect('/')->with('success', 'You are now logged in.');
        }

        return back()->withInput()->withErrors(['failedLogin' => 'credentials incorrect']);
    }

    public function destroy ()
    {
        auth()->logout();

        return redirect('/')->with('success', 'You are now logged out.');
    }
}
