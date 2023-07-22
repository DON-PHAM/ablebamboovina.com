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
            'status'=> $data['status'] == 'on' ? 1: 0,
            'image'=> $data['image'],
            'typeid'=>$data['typeid'],
            'banner'=>$data['banner'],
            'parentid'=>$data['parentid']
        ];
        $result = $this->category->create($category);

        $categoryTranslateVi = [
            'productcategoryid' => $result->id,
            'languageid' =>'vi',
            'name' => $data['vi_name'],
            'description' => $data['vi_description'],
            'keyword' => $data['vi_keyword']
        ];

        $this->categoryTranslate->create($categoryTranslateVi);
        $categoryTranslateKo = [
            'productcategoryid' => $result->id,
            'languageid' =>'ko',
            'name' => $data['ko_name'],
            'description' => $data['ko_description'],
            'keyword' => $data['ko_keyword']
        ];
        $this->categoryTranslate->create($categoryTranslateKo);
        return $result;

    }

    public function update(int $id, array $data)
    {
        $category = [
            'slug' => Str::Slug($data['vi_name']),
            'status' => isset($data['status']) && $data['status'] == 'on' ? 1 : 0,
            'typeid' => $data['typeid'],
            'parentid'=>$data['parentid']
        ];

        if (isset($data['image'])) {
            $category['image'] = $data['image'];
        }
        if (isset($data['banner'])) {
            $category['banner'] = $data['banner'];
        }

        $result = $this->category->find($id)->update($category);

        $catTranslatevi = $this->categoryTranslate
            ->where('productcategoryid', $id)
            ->where('languageid', 'vi')
            ->first();
        $catTranslatevi->update([
            'name' => $data['vi_name'],
            'description' => $data['vi_description'],
            'keyword' => $data['vi_keyword']
        ]);

        $catTranslateko = $this->categoryTranslate
            ->where('productcategoryid', $id)
            ->where('languageid', 'ko')
            ->first();
        $catTranslateko->update([
            'name' => $data['ko_name'],
            'description' => $data['ko_description'],
            'keyword' => $data['ko_keyword']
        ]);

        return $result;
    }

    public function delete(int $id)
    {
        $categoryTranslate = $this->categoryTranslate->where('productcategoryid','=',$id)->take(2)->get();
        foreach ($categoryTranslate as $item)
        {
            $item->delete();
        }
    }

    public function getById(int $id)
    {
        $category = $this->category->with(['translates'])->find($id);
        return $category;
    }

    public function getAll($locale)
    {
        $category = ProductCategory::join('product_category_translates', 'product_categories.id', '=', 'product_category_translates.productcategoryid')
            ->where('product_category_translates.languageid', '=', $locale)
            ->paginate(15, ['product_categories.*', 'product_category_translates.*']);
        return $category;
    }

    public function getCategoryProduct($locale,$typeid)
    {
        $category = $this->category
            ->where('status',1)
            ->where('typeid',$typeid)
            ->with(['translate' => function ($query) use ($locale) {
                $query->where('languageid', $locale);
            }])->get();
        return $category;

    }

    public function getCategoryParent($locale)
    {
        $category = $this->category->where('parentid',0)->where('status',1)->with(['translate' => function ($query) use ($locale) {
            $query->where('languageid', $locale);
        }])->get();
        return $category;
    }

    public function getCategoryChildren($locale, $parentId)
    {
        $category = $this->category->where('parentid', $parentId)->where('status',1)->with(['translate' => function ($query) use ($locale) {
            $query->where('languageid', $locale);
        }])->get();
        return $category;
    }
}
