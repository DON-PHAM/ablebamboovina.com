<?php

namespace App\Http\Controllers\Dashboard;

use App\Helper\ImagesHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Repositories\UserRepository;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use mysql_xdevapi\Exception;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return view('Admin_cp.Users.index');
    }

    public function getAll() {
        $data = $this->userService->getUsers();
        return response()->json(['status'=>true,'data'=>$data]);
    }

    public function postCreate(Request $request)
    {
        try {
            $image_new = "";
            if ($request->hasFile('avatar'))
            {
                $image = $request->file('avatar');
                $image_new = rand().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('upload/avatar'),$image_new);
            }
            $data = [
                'email' => $request->email,
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'phonenumber' => $request->phonenumber,
                'avatar'=> $image_new,
                'status' =>$request->status == 'on' ? 1: 0,
                'role' => $request->role

            ];
            $result = $this->userService->createUser($data);
            if ($result)
            {
                return redirect()->route('user')->with('success','Thêm mới thành công');
            }
            return redirect()->route('user')->with('false','Thất bại');
        }
        catch (\Exception $ex) {
            return redirect()->route('user')->with('false','Thất bại');
        }

    }

    public function postEdit($id, Request $request)
    {
        return response()->json(['success'=>'data']);
    }

    public function delete($id)
    {
        $result = $this->userService->deleteUser($id);
        return redirect()->route('user')->with('success','Xóa thành công');
    }


}
