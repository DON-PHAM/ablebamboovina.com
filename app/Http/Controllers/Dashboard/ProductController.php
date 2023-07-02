<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('Admin_cp.Product.index');
    }
    public function create() {
        return view('Admin_cp.Product.create');
    }
    public function postCreate() {
        return redirect()->route('product-list');
    }
}
