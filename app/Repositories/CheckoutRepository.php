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
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


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
        return $this->order->with(['customer','orderDetails','ship'])->paginate(15);
    }

    public function changeStatusShip($id)
    {
        $status = $this->order->find($id);
        if (!$status)
        {
            return response()->json(['status'=>false]);
        }
        $status->shippingstatus = !$status->shippingstatus;
        $status->save();
        return response()->json(['status' => 'change successfully','data'=> $status]);
    }

    public function findById($id)
    {
        $locale = session()->get('locale') ?? App::getLocale();
        return $this->order->with(['customer','orderDetails.product' => function ($query) use ($locale) {
            $query->where('languageid', $locale);
        },'ship','shipTranslate'=> function ($query) use ($locale) {
            $query->where('languageid', $locale);
        }])->find($id);
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

    public function getSearchData($startData, $endData)
    {
        return $this->order->with(['customer','orderDetails','ship'])->whereBetween('orderdate',[$startData,$endData])->get();
    }
}
