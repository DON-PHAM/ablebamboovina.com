<?php

namespace App\Http\Controllers\Dashboard;

use App\Helper\ImagesHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use App\Repositories\UserRepository;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
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
        $users = $this->userService->getUsers();
        return view('Admin_cp.Users.index',compact('users'));
    }

    public function create() {
        return view('Admin_cp.Users.create');
    }

    public function edit($id) {
        $user = $this->userService->getUser($id);
        return view('Admin_cp.Users.edit',compact('user'));
    }
    public function postCreate(UserRequest $request)
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
            $message = $result ? 'Thêm mới thành công' : 'Thất bại';

            return redirect()->route('user')->with($result ? 'success' : 'false', $message);
        }
        catch (\Exception $ex) {
            return redirect()->route('user')->with('false','Thất bại');
        }

    }

    public function postEdit($id, UserUpdateRequest $request)
    {
        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'username' => $request->username,
            'phonenumber' => $request->phonenumber,
            'status' =>$request->status == 'on' ? 1: 0,
            'role' => $request->role

        ];
        if ($request->hasFile('avatar'))
        {
            $image = $request->file('avatar');
            $image_new = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/avatar'),$image_new);
            $data['avatar'] = $image_new;
        }

        $user = $this->userService->updateUser($id,$data);
        $message = $user ? 'Thêm mới thành công' : 'Thất bại';

        return redirect()->route('user')->with($user ? 'success' : 'false', $message);
    }

    public function delete($id)
    {
        if ($id == \session()->get('user')->id)
        {
            return redirect()->route('user')->with('error','Không thể xóa chính mình');
        }
        $result = $this->userService->deleteUser($id);
        if ($result) {
            return redirect()->route('user')->with('success', 'Xóa thành công');
        } else {
            return redirect()->route('user')->with('error', 'Xóa thất bại');
        }
    }

    public function profile()
    {
        $user = Session::get('user');
        return view('Admin_cp.Users.profile', compact('user'));
    }

    public function postProfile(Request $request)
    {

    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();
        $currentPassword = $user->password;
        $newPassword = Hash::make($request->password);
        if (Hash::check($request->password, $currentPassword)) {
            $user->password = $newPassword;
            $user->save();
            return redirect()->back()->with('success', 'Password changed successfully!');
        }
        else
        {
            return redirect()->back()->with('error', 'Your current password is incorrect.');
        }
    }


}
