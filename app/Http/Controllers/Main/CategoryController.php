<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Services\CategoryProductService;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryProductService $categoryProductService)
    {
        $this->categoryService = $categoryProductService;
    }

    public function index($id)
    {
        $locale = session()->get('locale');
        if ($locale == null)
            $locale = App::getLocale();
        $categoryParent = $this->categoryService->getById($id);
        $categoryChildren = $this->categoryService->getCategoryChildren($locale, $id);
        return view('Main.Category.index', compact('categoryParent', 'categoryChildren'));
    }

}
