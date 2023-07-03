<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Services\BranchService;
use App\Services\CategoryProductService;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProductController extends Controller
{
    protected $productService;
    protected $categoryService;
    protected $branchService;
    public function __construct(ProductService $productService, CategoryProductService $categoryService, BranchService $branchService)
    {
        $this->productService = $productService;
        $this->categoryService =$categoryService;
        $this->branchService = $branchService;
    }

    public function index() {

        return view('Admin_cp.Product.index');
    }
    public function create() {
        $locale = session()->get('locale') ?? App::getLocale();
        $categories = $this->categoryService->getCategoryProduct($locale);
        $branchs = $this->branchService->getAll();
        return view('Admin_cp.Product.create',compact(['categories','branchs']));
    }
    public function postCreate(ProductRequest $request) {

        return redirect()->route('product-list');
    }
}
