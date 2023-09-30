<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\PaymentService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $paymentService;
    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function index(){
        $payments = $this->paymentService->getById(1);
        return view('Admin_cp.payment.index',compact('payments'));
    }

    public function update(Request $request)
    {
        if (isset($request->id))
        {
            $this->paymentService->update($request->id,$request);
            return response()->json(['status'=>true,'message'=>'Cập nhật thành công']);
        }
        $this->paymentService->create($request);
        return  response()->json(['status'=>true,'message'=>'Tạo thành công']);

    }
    public function create()
    {
        return view('Admin_cp.Payment.create');
    }
}
