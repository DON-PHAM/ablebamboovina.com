<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryPostController extends Controller
{
    public function index() {
        return view('Admin_cp.CategoryProduct.index');
    }
}
