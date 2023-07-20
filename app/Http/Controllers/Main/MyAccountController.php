<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class MyAccountController extends Controller
{
    public function index()
    {
        return view('Main.MyAccount.index');
    }
}
