<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('Admin_cp.index');
    }

    public function changLanguage($language)
    {
       App::setLocale($language);

        Session::put('locale',$language);
        $data = [
            'message' => trans('message.success'),

        ];
        return response()->json($data);
    }
}
