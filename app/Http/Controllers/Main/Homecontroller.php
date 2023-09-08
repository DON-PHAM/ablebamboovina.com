<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Policy;
use App\Services\CategoryProductService;
use App\Services\PostService;
use App\Services\ProductService;
use App\Services\SettingService;
use App\Services\SliderService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Homecontroller extends Controller
{

    protected $productService;
    protected $sliderService;
    protected $categoryService;
    protected $settingService;
    protected $postService;

    public function __construct(ProductService $productService, SliderService $sliderService, CategoryProductService $categoryProductService, SettingService $settingService,PostService $postService)
    {
        $this->productService = $productService;
        $this->sliderService = $sliderService;
        $this->categoryService = $categoryProductService;
        $this->settingService = $settingService;
        $this->postService = $postService;
    }

    public function index()
    {
        $setting = $this->settingService->getSetting() ?? [];
        Session::put('setting', $setting);
        $locale = session()->get('locale');
        if ($locale == null)
            $locale = App::getLocale();
        $products = $this->productService->getAll($locale);
        $sliders = $this->sliderService->getAll();
        $categories = $this->categoryService->getCategoryParent($locale);
        $posts = $this->postService->getPostHot($locale);
        $policy = Policy::find(1);
        return view('Main.index', compact('products', 'sliders', 'categories','posts','policy'));
    }

    public function showPostById($id)
    {
        $locale = session()->get('locale');
        $result = $this->postService->getHomeById($locale,$id);
        return response()->json(['status'=>true,'data'=> $result]);
    }

    public function changLanguage($language)
    {
        App::setLocale($language);
        Session::put('locale', $language);
        return redirect()->back();
    }
}
