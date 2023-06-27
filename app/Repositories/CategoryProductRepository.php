<?php

namespace App\Repositories;

use App\Models\ProductCategory;
use App\Models\ProductCategoryTranslate;
use App\Services\CategoryProductService;
use Illuminate\Support\Str;

class CategoryProductRepository implements CategoryProductService {

    protected $category;
    protected $categoryTranslate;
    public function __construct(ProductCategory $category, ProductCategoryTranslate $categoryTranslate)
    {
        $this->category = $category;
        $this->categoryTranslate = $categoryTranslate;
    }

    public function create(array $data)
    {
        $category = [
            'slug' => Str::Slug($data['vi_name']),
            'status'=> $data['status'] == 'on' ? 1: 0
        ];
        $result = $this->category->create($category);

        $categoryTranslateVi = [
            'productcategoryid' => $result->id,
            'languageid' =>'vi',
            'name' => $data['vi_name'],
            'description' => $data['vi_description']
        ];

        $this->categoryTranslate->create($categoryTranslateVi);
        $categoryTranslateKo = [
            'productcategoryid' => $result->id,
            'languageid' =>'ko',
            'name' => $data['ko_name'],
            'description' => $data['ko_description']
        ];
        $this->categoryTranslate->create($categoryTranslateKo);
        return $result;

    }

    public function update(int $id, array $data)
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }

    public function getById(int $id)
    {
        $category = ProductCategory::join('product_category_translates','product_categories.id','=','product_category_translates.productcategoryid')
            ->where('product_categories.id','=',$id)
            ->get(['product_categories.*','product_category_translates.*']);
        return $category;
    }

    public function getAll($locale)
    {
        $category = ProductCategory::join('product_category_translates','product_categories.id','=','product_category_translates.productcategoryid')
                                        ->where('product_category_translates.languageid','=',$locale)
                                        ->get(['product_categories.*','product_category_translates.*']);
        return $category;
    }
}
