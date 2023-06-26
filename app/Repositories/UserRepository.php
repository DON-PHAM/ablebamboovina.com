<?php
namespace App\Repositories;

use App\Models\User;
use App\Services\UserService;

class UserRepository implements UserService {

    protected $model;
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function createUser(array $data)
    {
        return $this->model->create($data);
    }

    public function updateUser(int $id, array $data)
    {
        $user = User::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function deleteUser(int $id)
    {
        // TODO: Implement deleteUser() method.
    }

    public function getUser(int $id)
    {
        // TODO: Implement getUser() method.
    }

    public function getUsers()
    {
        return $this->model->all();
    }
}
