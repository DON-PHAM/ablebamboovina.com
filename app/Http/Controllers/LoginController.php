<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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
        Auth::login($user);

        return $this->authenticated($request,$user);
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
