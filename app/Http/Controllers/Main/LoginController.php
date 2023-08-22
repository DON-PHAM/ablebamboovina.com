<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\VerifyEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Spatie\FlareClient\Http\Exceptions\NotFound;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check())
        {
            throw new NotFoundHttpException();
        }
        return view('Main.Login.index');
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
        return redirect()->route('login-page')->with(['success'=>trans('user.register-success')]);
    }
    public function login(LoginRequest $request) {
        $credentials = $request->getCredentials();

        if (!Auth::validate($credentials)):
            return redirect()->to('login-page')->withErrors(trans('message.fail'));
        endif;
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        if ($user->status != 1)
        {
            return redirect()->to('login-page')->withErrors(trans('message.inactive'));
        }
        else if($user->email_verification_token != null)
        {
            return redirect()->to('login-page')->withErrors(trans('message.inverify'));
        }
        Auth::login($user);
        Session::put('user', $user);
        if ($user->role == 1)
        {
            return redirect()->route('admin');
        }
        return  redirect()->route('homepage');

    }
}
