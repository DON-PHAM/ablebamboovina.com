<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show()
    {
        return view('Admin_cp.Login.index');
    }

    public function login(LoginRequest $request) {
        $credentials = $request->getCredentials();

        if (!Auth::validate($credentials)):
            return redirect()->to('login')->withErrors(trans('message.fail'));
        endif;
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        if ($user->status != 1)
        {
            return redirect()->to('login')->withErrors(trans('message.inactive'));
        }
        Auth::login($user);
        // Store user information in session
        Session::put('user', $user);
        //Log::info('Login success with user:', $user);
        return redirect()->route('admin');
    }

    public function logOut() {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended();
    }
}
