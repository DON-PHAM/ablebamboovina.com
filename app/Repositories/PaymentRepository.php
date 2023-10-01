<?php

namespace App\Repositories;

use App\Http\Requests\Admin\PaymentRequest;
use App\Models\Payment;
use App\Models\PaymentDetail;
use App\Services\PaymentService;
use Illuminate\Http\Request;

class PaymentRepository implements PaymentService
{
    protected $model;
    public function __construct(PaymentDetail $model)
    {
        $this->model = $model;
    }

    public function create(Request $request)
    {
        $data = [
            'paymentid' => 1,
            'tennganhang' => $request->tennganhang,
            'logonganhang' => '',
            'sotaikhoan' => $request->sotaikhoan,
            'chutaikhoan' => $request->chutaikhoan,
        ];
        if ($request->file('qrcode'))
        {
            $file = $request->file('qrcode');
            $file_name =  rand().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('upload/payment/'),$file_name);
            $data['qrcode'] = $file;
        }
        return $this->model->create($data);
    }

    public function update($id, Request $request)
    {
        $payment = $this->model->find($id);
        $data = [
            'paymentid' => 1,
            'tennganhang' => $request->tennganhang,
            'logonganhang' => '',
            'sotaikhoan' => $request->sotaikhoan,
            'chutaikhoan' => $request->chutaikhoan,
        ];
        if ($request->file('qrcode'))
        {
            $file = $request->file('qrcode');
            $file_name = rand().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('upload/payment/'),$file_name);
            $data['qrcode'] = $file_name;
        }
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
