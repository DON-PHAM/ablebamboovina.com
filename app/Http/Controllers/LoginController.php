<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {

            App::setLocale(session()->get('locale'));

    }

    public function show()
    {
        return view('Admin_cp.Login.index');
    }

    public function login(LoginRequest $request) {

    }
}
