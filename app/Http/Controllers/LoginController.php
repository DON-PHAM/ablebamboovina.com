<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('Admin_cp.Login.index');
    }

    public function login(LoginRequest $request) {

    }
}
