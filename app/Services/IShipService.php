<?php
namespace App\Services;
interface IShipService
{
    public function getById($id);
    public function create($data);
    public function update($id,$data);
    public function getAll($locale);
    public function delete($id);
}
