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
            'password' => ['required', 'min:8']
        ]);

        try {
            $currentUser = $user::create($attributes);
    
            auth()->login($currentUser);
    
            return redirect('/')->with('success', 'Thanks for registering. You are now logged in!');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['failedRegistration'=> 'Failed to register your account.']);
        }
    }
}
