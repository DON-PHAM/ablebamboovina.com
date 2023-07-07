<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function index()
    {
        return view('Main.Shop.index');
    }

}
