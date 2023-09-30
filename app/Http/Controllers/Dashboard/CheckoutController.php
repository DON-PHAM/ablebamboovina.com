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

    public function index()
    {
        $checkouts = $this->checkoutService->getAll();
        return view("Admin_cp.Order.index", compact("checkouts"));
    }

    public function show($id)
    {
        $checkout = $this->checkoutService->findById($id);
        return view("Admin_cp.Order.detail", compact('checkout'));
    }

    public function changeShipStatus($id)
    {
        return $this->checkoutService->changeStatusShip($id);
    }

    public function loadData()
    {
        $checkouts = $this->checkoutService->getAll();
        if ($checkouts != null) {
            $html = $this->createHtml($checkouts);
            return response()->json(['status' => true, 'data' => $html]);
        }
        return response()->json(['status' => false, 'data' => 'No data']);
    }


    public function searchData(Request $request)
    {
        $startDate = $request->start_date;
        $endDate = $request->end_date;
        $search = $this->checkoutService->getSearchData($startDate, $endDate);
        if ($search != null) {
            $html = $this->createHtml($search);
            return response()->json(['status' => true, 'data' => $html]);
        }
        return response()->json(['status' => false, 'data' => 'No data']);
    }

    public function createHtml($checkouts)
    {
        $html = '';

        foreach ($checkouts as $checkout) {
            $html .= '<tr>';
            $html .= '<td>' . $checkout->customer->email . '</td>';
            $html .= '<td>' . number_format($checkout->totalmoney) . ' VNĐ</td>';
            $ship = intval($checkout->totalmoney) > intval($checkout->ship->price_free) ? 0 : intval($checkout->ship->price);
            $html .= '<td>' . number_format($ship) . ' VNĐ</td>';
            $html .= ' <td>' . $checkout->discount . ' VNĐ</td>';
            $totalMoney = intval($checkout->totalmoney) + intval($ship);
            $html .= '<td>' . number_format($totalMoney) . '</td>';
            $html .= '<td>' . $checkout->payment . '</td>';
            $html .= '<td><span class="badge badge-info">New</span></td>';
            $html .= ' <td>' . $checkout->orderdate . '</td>';
            $html .= ' <td> <a href="' . route("show-checkout", $checkout->id) . '"><span title="' . trans("checkout.view") . '" type="button" class="btn btn-flat btn-sm btn-primary"><i class="fa fa-eye"></i></span></a></td>';
            $html .= '<tr>';
        }
        return $html;
    }
}
