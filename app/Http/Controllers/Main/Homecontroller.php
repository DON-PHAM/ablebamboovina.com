<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Homecontroller extends Controller
{

    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $locale = session()->get('locale');
        if ($locale == null)
            $locale = App::getLocale();
        $products = $this->productService->getAll($locale);
        return view('Main.index',compact('products'));
    }

    public function changLanguage($language)
    {
        App::setLocale($language);
        Session::put('locale', $language);
        return redirect()->back();
    }
}
