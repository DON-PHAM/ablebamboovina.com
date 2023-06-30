<?php

namespace App\Repositories;

use App\Models\PostCategory;
use App\Models\PostCategory_translate;
use App\Services\CategoryPostService;
use Illuminate\Support\Str;

class CategoryPostRepository implements CategoryPostService {
    protected $categoryPost;
    protected $categoryPostTranslate;
    public function __construct(PostCategory $categoryPost, PostCategory_translate $categoryPostTranslate)
    {
        $this->categoryPost = $categoryPost;
        $this->categoryPostTranslate = $categoryPostTranslate;
    }

    public function create(array $data)
    {
        $category = [
            'slug' => Str::Slug($data['vi_name']),
            'status'=> $data['status'] == 'on' ? 1: 0
        ];
        $result = $this->categoryPost->create($category);
        $categoryTranslateVi = [
            'postcategoryid' => $result->id,
            'languageid' =>'vi',
            'name' => $data['vi_name'],
            'description' => $data['vi_description']
        ];

        $this->categoryPostTranslate->create($categoryTranslateVi);

        $categoryTranslateKo = [
            'postcategoryid' => $result->id,
            'languageid' =>'ko',
            'name' => $data['ko_name'],
            'description' => $data['ko_description']
        ];
        $this->categoryPostTranslate->create($categoryTranslateKo);
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
        $category = PostCategory::join('post_category_translates','post_categories.id','=','post_category_translates.postcategoryid')
            ->where('post_categories.id','=',$id)
            ->get(['post_categories.*','post_category_translates.*']);
        return $category;
    }

    public function getAll(string $locale)
    {
        $category = PostCategory::join('post_category_translates','post_categories.id','=','post_category_translates.postcategoryid')
            ->where('post_category_translates.languageid','=',$locale)
            ->get(['post_categories.*','post_category_translates.*']);
        return $category;
    }
}
