<?php

namespace App\Repositories;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Product;
use App\Models\ProductTranslate;
use App\Services\ProductService;

class ProductRepository implements ProductService {

    protected $product;
    protected $productTranslate;
    public function __construct(Product $product, ProductTranslate $productTranslate)
    {
        $this->product = $product;
        $this->productTranslate = $productTranslate;
    }

    public function create(ProductRequest $request)
    {
        // TODO: Implement create() method.
    }

    public function update(int $id, ProductRequest $request)
    {
        // TODO: Implement update() method.
    }

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
}
