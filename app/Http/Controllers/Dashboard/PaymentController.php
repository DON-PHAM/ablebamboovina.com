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
        $payments = $this->paymentService->getAll();
        return view('Admin_cp.payment.index',compact('payments'));
    }
    public function create()
    {
        return view('Admin_cp.Payment.create');
    }
}
