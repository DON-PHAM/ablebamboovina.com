<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Services\CategoryProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use League\Flysystem\Config;

class CategoryProductController extends Controller
{
    protected $categoryProduct;
    public function __construct(CategoryProductService $categoryProduct)
    {
        $this->categoryProduct = $categoryProduct;
    }

    public function index() {
        $locale = session()->get('locale') ?? App::getLocale();
        $categories = $this->categoryProduct->getAll($locale);
        $parentCategories = $categories->where('parentid',0);
        $subCategories = $categories->where('parentid','!=',0);
        return view('Admin_cp.CategoryProduct.index', compact(['categories','parentCategories','subCategories']));
    }

    public function create()
    {
        $locale = session()->get('locale') ?? App::getLocale();
        $categories = $this->categoryProduct->getCategoryParent($locale);
        return view('Admin_cp.CategoryProduct.create',compact('categories'));
    }

    public function postCreate(CategoryRequest $request)
    {
        $data = [
            'vi_name' => $request->vi_name,
            'vi_description' => $request->vi_description,
            'ko_name' => $request->ko_name,
            'ko_description' => $request->ko_description,
            'vi_keyword' => $request->vi_keyword,
            'ko_keyword' => $request->ko_keyword,
            'status' => $request->status,
            'typeid' => $request->type,
            'parentid' => $request->parentid
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_new = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/category'), $image_new);
            $data['image'] = $image_new;
        }
        if ($request->hasFile('banner')) {
            $image = $request->file('banner');
            $image_banner = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/category'), $image_banner);
            $data['banner'] = $image_banner;
        }
        $this->categoryProduct->create($data);
        return redirect()->route('category-list')->with('Add new item success');
    }

    public function edit($id) {
        $locale = session()->get('locale') ?? App::getLocale();
        $categories = $this->categoryProduct->getCategoryParent($locale);
        $result = $this->categoryProduct->getById($id);
        $result_vi = $result->translates->where('languageid','vi')->first();
        $result_ko = $result->translates->where('languageid','ko')->first();
        return view('Admin_cp.CategoryProduct.edit',compact(['result','result_ko','result_vi','categories']));
    }

    public function update($id, CategoryRequest $request)
    {
        $data = [
            'vi_name' => $request->vi_name,
            'vi_description' => $request->vi_description,
            'ko_name' => $request->ko_name,
            'ko_description' => $request->ko_description,
            'vi_keyword' => $request->vi_keyword,
            'ko_keyword' => $request->ko_keyword,
            'status' => $request->status,
            'typeid' => $request->type,
            'parentid' => $request->parentid
        ];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_new = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/category'), $image_new);
            $data['image'] = $image_new;
        }
        if ($request->hasFile('banner')) {
            $image = $request->file('banner');
            $image_banner = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/category'), $image_banner);
            $data['banner'] = $image_banner;
        }
        $this->categoryProduct->update($id, $data);
        return redirect()->route('category-list')->with('Sửa thành công');
    }

    public function delete($id)
    {
        return $this->categoryProduct->delete($id);
    }
}
