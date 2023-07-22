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
        $categories_compose = $this->categoryProduct->getCategoryProduct($locale,1);
        $parentCategories_compose = $categories_compose->where('parentid',0);
        $subCategories_compose = $categories_compose->where('parentid','!=',0);
        $view->with(['categories_compose'=>$categories_compose,'parentCategories_compose'=>$parentCategories_compose, 'subCategories_compose' => $subCategories_compose]);
    }
}
