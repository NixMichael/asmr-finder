<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WatchList;
use App\Models\User;

class AccountController extends Controller
{
    public function myasmr (User $user)
    {
        return view('account.myasmr', [
            'watchlist' => $user->watchlist,
            'favourites' => $user->favourites
        ]);
    }

    public function account ()
    {
        return view('account.account');
    }
}
