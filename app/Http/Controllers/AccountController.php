<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function myasmr ()
    {
        return view('account.myasmr');
    }

    public function account ()
    {
        return view('account.account');
    }
}
