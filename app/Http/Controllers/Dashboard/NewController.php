<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostRequest;
use App\Services\PostService;
use Illuminate\Http\Request;

class NewController extends Controller
{
    protected $postService;
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index() {
        return view('Admin_cp.Post.index');
    }
    public function create()
    {
        return view('Admin_cp.Post.create');
    }
    public function postCreate(PostRequest $request)
    {
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
    public function changeStatu($id)
    {
        return $this->postService->changeStatus($id);
    }
}
