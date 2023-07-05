<?php
namespace App\Helper;

use App\Http\Requests\Admin\ProductRequest;
use App\Services\BranchService;
use App\Services\CategoryProductService;
use App\Services\ProductService;
use Illuminate\Support\Facades\App;

class ProductData
{
    protected $productService;
    protected $categoryService;
    protected $branchService;

    public function __construct(ProductService $productService, CategoryProductService $categoryService, BranchService $branchService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
        $this->branchService = $branchService;
    }
    public function getDataCreate()
    {
        $locale = session()->get('locale') ?? App::getLocale();
        $categories = $this->categoryService->getCategoryProduct($locale);
        $branchs = $this->branchService->getAll();
        return compact('categories', 'branchs');
    }

    public function getDataEdit($id)
    {
        $locale = session()->get('locale') ?? App::getLocale();
        $categories = $this->categoryService->getCategoryProduct($locale);
        $branchs = $this->branchService->getAll();
        $product = $this->productService->getById($id);
        $product_ko = $product->translates->firstWhere('languageid', 'ko');
        $product_vi = $product->translates->firstWhere('languageid', 'vi');
        return compact('product', 'categories', 'branchs', 'product_ko', 'product_vi');
    }
    public function create(ProductRequest $request)
    {
        return  $this->productService->create($request);
    }
    public function getAll($locale)
    {
        return $this->productService->getAll($locale);
    }
    public function delete($id)
    {
        return $this->productService->delete($id);
    }

    public function changeStatus($id)
    {
        return $this->productService->changeStatus($id);
    }
}
