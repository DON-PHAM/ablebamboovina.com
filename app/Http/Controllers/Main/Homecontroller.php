<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Services\CategoryProductService;
use App\Services\ProductService;
use App\Services\SliderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Homecontroller extends Controller
{

    protected $productService;
    protected $sliderService;
    protected $categoryService;

    public function __construct(ProductService $productService, SliderService $sliderService, CategoryProductService $categoryProductService)
    {
        $this->productService = $productService;
        $this->sliderService = $sliderService;
        $this->categoryService = $categoryProductService;
    }

    public function index()
    {
        $locale = session()->get('locale');
        if ($locale == null)
            $locale = App::getLocale();
        $products = $this->productService->getAll($locale);
        $sliders = $this->sliderService->getAll();
        $categories = $this->categoryService->getAll($locale);
        return view('Main.index', compact('products', 'sliders', 'categories'));
    }

    public function changLanguage($language)
    {
        App::setLocale($language);
        Session::put('locale', $language);
        return redirect()->back();
    }
}
