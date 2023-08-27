<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Models\District;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Province;
use App\Models\Ward;
use App\Services\CheckoutService;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Http\Request;


class CheckoutRepository implements CheckoutService
{
    protected $order;
    protected $customer;
    protected $orderDetail;

    public function __construct(Order $order, Customer $customer, OrderDetail $orderDetail)
    {
        $this->order = $order;
        $this->orderDetail = $orderDetail;
        $this->customer = $customer;
    }

    public function getAll()
    {
        return $this->order->paginate(15);
    }

    public function changeStatusShip()
    {
        // TODO: Implement changeStatusShip() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function create(Request $request)
    {
        $customer = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'province' => Province::where('code',$request->province)->first()->name,
            'District' => District::where('code',$request->district)->first()->name,
            'ward' => Ward::where('code',$request->ward)->first()->name,
            'street' => $request->street,
            'address' => $request->address
        ];
        $customResult = $this->customer->create($customer);
        $order = [
            'customerid' => $customResult->id,
            'discount' => 0,
            'orderdate' => Carbon::now(),
            'status' => 1,
            'payment' => $request->payment . "_" . $request->orderid,
            'note' => $request->note,
            'totalmoney' => $request->total,
            'shipper' => $request->ship,
            'shippingstatus' => 0
        ];
        $orderResult = $this->order->create($order);
        $cart = session()->get('cart');
        foreach (session('cart') as $id => $details) {
            $orderDetail = [
                'orderid' => $orderResult->id,
                'productid' => $details['productid'],
                'quantity' => $details['quantity'],
                'price' => $details['price'],
                'total' => intval($details['quantity']) * intval($details['price'])
            ];
            $this->orderDetail->create($orderDetail);
            unset($cart[$id]);
            session()->put('cart',$cart);
        }
        return $orderResult;
    }
}
