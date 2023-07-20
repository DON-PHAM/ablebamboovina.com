<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LoginController extends Controller
{
    public function index()
    {
//        $locale = session()->get('locale');
//        if ($locale == null)
//            $locale = App::getLocale();
//        $abouts = $this->aboutService->getAll($locale);
        return view('Main.Login.index');
    }
}
