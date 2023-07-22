<?php
namespace App\Libraires\ViewComposers;
use App\Services\CategoryProductService;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class CategoryComposer
{
    protected $categoryProduct;
    public function __construct(CategoryProductService $categoryProduct)
    {
        $this->categoryProduct = $categoryProduct;
    }
    public function compose(View $view)
    {
        $locale = session()->get('locale') ?? App::getLocale();
        $categories = $this->categoryProduct->getCategoryProduct($locale,1);
        $parentCategories = $categories->where('parentid',0);
        $subCategories = $categories->where('parentid','!=',0);
        $view->with(['categories'=>$categories,'parentCategories'=>$parentCategories, 'subCategories' => $subCategories]);
    }
}
