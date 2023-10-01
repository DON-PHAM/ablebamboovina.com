<?php
namespace  App\Services;
use App\Http\Requests\Admin\ProductRequest;

interface ProductService
{
    public function create(ProductRequest $request);

    public function update(int $id, ProductRequest $request);

    public function delete(int $id);

    public function getById(int $id);
    public function showHomeById(string $locale,int $id);
    public function showShopById(string $locale, int $id);

    public function getAll(string $locale);
    public function changeStatus(int $id);
    public function changeProductHot(int $id);

    public function deleteImage(int $idimage);
    public function review($id,$request);

}
