<?php
namespace App\Services;

interface UserService
{
    public function createUser(array $data);

    public function updateUser(int $id, array $data);

    public function deleteUser(int $id);

    public function getUser(int $id);

    public function getUsers();
}
