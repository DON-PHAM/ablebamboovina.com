<?php
namespace App\Repositories;

use App\Models\User;
use App\Services\UserService;

class UserRepository implements UserService {

    public function createUser(array $data)
    {
        return User::create($data);
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
        // TODO: Implement getUsers() method.
    }
}
