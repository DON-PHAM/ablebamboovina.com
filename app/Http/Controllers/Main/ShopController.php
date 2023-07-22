<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Services\CategoryProductService;
use App\Services\ProductService;
use Illuminate\Support\Facades\App;

class ShopController extends Controller
{
    protected $productService;
    protected $categoryService;

    public function __construct(ProductService $productService, CategoryProductService $categoryProductService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryProductService;
    }

    public function index($id)
    {
        $locale = session()->get('locale');
        if ($locale == null)
            $locale = App::getLocale();
        $products = $this->productService->showShopById($locale, $id);
        return view('Main.Shop.index', compact('products', ));
    }

}
