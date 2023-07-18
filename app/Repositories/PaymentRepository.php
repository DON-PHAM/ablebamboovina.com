<?php

namespace App\Repositories;

use App\Http\Requests\Admin\PaymentRequest;
use App\Models\Payment;
use App\Services\PaymentService;

class PaymentRepository implements PaymentService
{
    protected $model;
    public function __construct(Payment $model)
    {
        $this->model = $model;
    }

    public function create(PaymentRequest $request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status == 'on' ? 1 : 0,
        ];
        return $this->model->create($data);
    }

    public function update($id, PaymentRequest $request)
    {
        $payment = $this->model->find($id);
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status == 'on' ? 1 : 0,
        ];
        $payment->update($data);
        return $payment;
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function getAll()
    {
        return $this->model->paginate(15);
    }
}
