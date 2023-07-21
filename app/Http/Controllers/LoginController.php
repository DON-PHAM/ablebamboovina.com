<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\VerifyEmail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


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
        else if($user->email_verification_token != null)
        {
            return redirect()->to('login')->withErrors(trans('message.inverify'));
        }
        Auth::login($user);
        Session::put('user', $user);
        if ($user->role == 1)
        {
            return redirect()->route('admin');
        }
        return  redirect()->route('homepage');

    }

    public function logOut() {
        if (Auth::user()->role == 1)
        {
            Session::flush();
            Auth::logout();
            return redirect('login');
        }
        Session::flush();
        Auth::logout();
        return redirect()->back();

    }

    public function register()
    {
        return view('User.register');
    }
    public function postRegister(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'phonenumber' => $request->phonenumber ? $request->phonenumber : '',
            'avatar' => '',
            'status' => 1,
            'role' => 0,
            'email_verification_token'=>Str::random()
        ]);
        $url = url('/verify-email/'.$user->id.'/'.$user->email_verification_token);
        Mail::to($user->email)->send(new VerifyEmail($user,$url));
        return redirect()->route('login')->with(['success'=>trans('user.register-success')]);
    }
    public function verifyEmail($id, $token)
    {
        $user = User::find($id);

        if ($user && $user->email_verification_token == $token) {
            $user->email_verified_at = now();
            $user->email_verification_token = null;
            $user->save();
            return redirect('/login')->with('success', 'Your email has been verified. Please log in.');
        } else {
            return redirect('/register')->with('error', 'Invalid verification link.');
        }
    }


}
