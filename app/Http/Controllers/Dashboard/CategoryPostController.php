<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryPostRequest;
use App\Services\CategoryPostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CategoryPostController extends Controller
{
    protected $categoryPost;
    public function __construct(CategoryPostService $categoryPost)
    {
        $this->categoryPost = $categoryPost;
    }
    public function index() {
        $locale = session()->get('locale');
        if ($locale == null)
            $locale = App::getLocale();
        $categories = $this->categoryPost->getAll($locale);
        return view('Admin_cp.Categories.index',compact('categories'));
    }

    public function create()
    {
        return view('Admin_cp.Categories.create');
    }
    public function postCreate(CategoryPostRequest $request)
    {
        $data = [
            'vi_name'=>$request->vi_name,
            'vi_description'=> $request->vi_description,
            'ko_name' => $request->ko_name,
            'ko_description' => $request->ko_description,
            'status' => $request->status
        ];
        $result = $this->categoryPost->create($data);

        return redirect()->route('category-new-list')->with('success','Thêm mới thành công');
    }

    public function edit($id) {
        $result = $this->categoryPost->getById($id);
        return view('Admin_cp.Categories.edit',compact('result'));
    }
}
