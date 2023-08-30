<?php
namespace App\Services;
use App\Http\Requests\Admin\PostRequest;

interface PostService
{
    public function create(PostRequest $request);

    public function update(int $id, PostRequest $request);

    public function delete(int $id);

    public function getById(int $id);
    public function getHomeById($locale,$id);
    public function getAll(string $locale);
    public function changeStatus(int $id);
    public function getPostHot(string $locale);
}
