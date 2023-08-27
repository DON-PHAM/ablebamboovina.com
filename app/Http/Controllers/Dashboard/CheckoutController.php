<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\CheckoutService;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    protected $checkoutService;
    public function __construct(CheckoutService $checkoutService)
    {
        $this->checkoutService = $checkoutService;
    }

    public function index() {
        $checkouts = $this->checkoutService->getAll();
        return view("Admin_cp.Order.index",compact("checkouts"));
    }
    public function show($id)
    {
        $checkout = $this->checkoutService->findById($id);
        return view("Admin_cp.Order.detail",compact('checkout'));
    }
}
