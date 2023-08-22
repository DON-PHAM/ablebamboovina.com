<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function index()
    {
        if (Auth::check())
        {
            return view('Main.MyAccount.index');
        }
        return view('Main.Error.404');
    }
}
