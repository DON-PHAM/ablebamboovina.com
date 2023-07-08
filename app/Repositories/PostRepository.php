<?php
namespace App\Repositories;
use App\Http\Requests\Admin\PostRequest;
use App\Services\PostService;

class PostRepository implements PostService {

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }

    public function getById(int $id)
    {
        // TODO: Implement getById() method.
    }

    public function getAll(string $locale)
    {
        // TODO: Implement getAll() method.
    }

    public function create(PostRequest $request)
    {
        // TODO: Implement create() method.
    }

    public function update(int $id, PostRequest $request)
    {
        // TODO: Implement update() method.
    }

    public function changeStatus(int $id)
    {
        // TODO: Implement changeStatus() method.
    }
}
