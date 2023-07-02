<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BranchRequest;
use App\Services\BranchService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BranchController extends Controller
{
    protected $branchRepository;
    public function __construct(BranchService $branchRepository)
    {
        $this->branchRepository = $branchRepository;
    }

    public function index() {
        $branchs = $this->branchRepository->getAll();
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
        $result = $this->branchRepository->create($data);
        return redirect()->back();
    }

    public function delete($id) {
        return $this->branchRepository->delete($id);
    }
}
