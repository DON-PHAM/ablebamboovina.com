<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return view('Admin_cp.Users.index');
    }

    public function getAll() {
        $data = $this->userRepository->getUsers();
        return response()->json(['status'=>true,'data'=>$data]);
    }

    public function create(UserRequest $request)
    {
        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'phonenumber' => $request->phonenumber,
            'avatar'=> ''

        ];
        $result = $this->userRepository->createUser($data);
        return response()->json(['success'=>true,'result'=>$result]);
    }


}
