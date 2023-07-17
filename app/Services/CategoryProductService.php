<?php
namespace App\Services;

interface CategoryProductService
{
    public function create(array $data);

    public function update(int $id, array $data);

    public function delete(int $id);

    public function getById(int $id);

    public function getAll(string $locale);
    public function getCategoryProduct($locale,$typeid);
    public function getCategoryParent($locale);

    public function getCategoryChildren($locale, $parentId);
}
