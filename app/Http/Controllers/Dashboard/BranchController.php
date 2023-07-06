<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BranchRequest;
use App\Services\BranchService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BranchController extends Controller
{
    protected $branchService;
    public function __construct(BranchService $branchService)
    {
        $this->branchService = $branchService;
    }

    public function index() {
        $branchs = $this->branchService->getAll();
        return view('Admin_cp.Branch.index',compact('branchs'));
    }
    public function postCreate(BranchRequest $request)
    {
        $data = [
            'name'=>$request->name,
            'slug'=> Str::slug($request->name),
            'phone' => $request->phone,
            'website' => $request->website,
            'email' => $request->email,
            'address'=> $request->address,
            'status'=> $request->status == 'on'? 1: 0
        ];
        $result = $this->branchService->create($data);
        return redirect()->back();
    }
    public function edit($id)
    {
        $bran = $this->branchService->getById($id);
        return view('Admin_cp.Branch.edit',compact('bran'));
    }
    public function update($id, BranchRequest $request)
    {
        $data = [
            'name'=>$request->name,
            'slug'=> Str::slug($request->name),
            'phone' => $request->phone,
            'website' => $request->website,
            'email' => $request->email,
            'address'=> $request->address,
            'status'=> $request->status == 'on'? 1: 0
        ];
        $result = $this->branchService->update($id,$data);
        return redirect()->route('branch-list')->with('success','Sửa thành công');
    }
    public function delete($id) {
        return $this->branchService->delete($id);
    }
}
