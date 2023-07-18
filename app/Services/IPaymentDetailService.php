<?php
namespace App\Services;
interface IPaymentDetailService
{
    public function create($data);
    public function update($id,$data);
    public function getById($id);
    public function getAll();
}
