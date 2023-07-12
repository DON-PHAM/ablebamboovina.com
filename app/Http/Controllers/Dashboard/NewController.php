<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostRequest;
use App\Services\CategoryProductService;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class NewController extends Controller
{
    protected $postService;
    protected $categoryService;
    public function __construct(PostService $postService,CategoryProductService $categoryService)
    {
        $this->postService = $postService;
        $this->categoryService = $categoryService;
    }

    public function index() {
        return view('Admin_cp.Post.index');
    }
    public function create()
    {
        $locale = session()->get('locale') ?? App::getLocale();
        $categories = $this->categoryService->getCategoryProduct($locale,0);
        return view('Admin_cp.Post.create',compact('categories'));
    }
    public function postCreate(PostRequest $request)
    {
        $this->postService->create($request);
        return redirect()->route('new-list')->with('success','Thêm thành công');
    }
    public function edit($id)
    {
        $this->postService->getById($id);
        return view('Admin_cp.Post.edit');
    }
    public function update($id, PostRequest $request)
    {
        $this->postService->update($id,$request);
        return redirect()->route('new-list')->with('success','Sửa thành công');
    }
    public function delete($id) {
        return $this->postService->delete($id);
    }
    public function changeStatus($id)
    {
        return $this->postService->changeStatus($id);
    }
}
