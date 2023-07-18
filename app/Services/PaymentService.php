<?php
namespace App\Services;
use App\Http\Requests\Admin\PaymentRequest;

interface PaymentService
{
    public function create(PaymentRequest $request);
    public function update($id,PaymentRequest $request);
    public function getById($id);
    public function getAll();
}
