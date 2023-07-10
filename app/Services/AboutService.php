<?php
namespace  App\Services;
use App\Http\Requests\AboutRequest;

interface  AboutService
{
    public function getById($id);
    public function getHomeById($id);
    public function create(AboutRequest $request);
    public function update($id,AboutRequest $request);
    public function getAll(string $locale);
    public function delete(int $id);
}
