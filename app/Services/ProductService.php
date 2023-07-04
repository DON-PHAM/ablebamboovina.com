<?php
namespace  App\Services;
use App\Http\Requests\Admin\ProductRequest;

interface ProductService
{
    public function create(ProductRequest $request);

    public function update(int $id, ProductRequest $request);

    public function delete(int $id);

    public function getById(int $id);

    public function getAll(string $locale);
}
