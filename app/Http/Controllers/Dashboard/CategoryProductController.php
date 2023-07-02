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
        return view('Admin_cp.CategoryProduct.index', compact('categories'));
    }

    public function create()
    {
        return view('Admin_cp.CategoryProduct.create');
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
            'typeid' => $request->type
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_new = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/category'), $image_new);
            $data['image'] = $image_new;
        }
        $this->categoryProduct->create($data);
        return redirect()->route('category-list')->with('Add new item success');
    }

    public function edit($id) {
        $result = $this->categoryProduct->getById($id);
        return view('Admin_cp.CategoryProduct.edit',compact('result'));
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
            'typeid' => $request->type
        ];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_new = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/category'), $image_new);
            $data['image'] = $image_new;
        }
        $this->categoryProduct->update($id, $data);
        return redirect()->route('category-list')->with('Sửa thành công');
    }

    public function delete($id)
    {
        $this->categoryProduct->delete($id);
        return redirect()->route('category-list')->with('success', 'Xóa thành công');
    }
}
