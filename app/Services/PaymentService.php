<?php
namespace App\Services;
use App\Http\Requests\Admin\PaymentRequest;
use Illuminate\Http\Request;

interface PaymentService
{
    public function create(Request $request);
    public function update($id,Request $request);
    public function getById($id);
    public function getAll();
}
