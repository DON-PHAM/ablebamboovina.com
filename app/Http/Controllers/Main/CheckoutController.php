<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Province;
use App\Models\Ward;
use App\Services\CheckoutService;
use App\Services\IShipService;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use mysql_xdevapi\Exception;

class CheckoutController extends Controller
{
    protected $shipService;
    protected $checkoutService;
    protected $paymentService;
    public function __construct(IShipService $shipService, CheckoutService $checkoutService,PaymentService $paymentService)
    {
        $this->shipService = $shipService;
        $this->checkoutService = $checkoutService;
        $this->paymentService = $paymentService;
    }

    public function index()
    {
        $locale = session()->get('locale') ?? App::getLocale();
        $ships = $this->shipService->getAll($locale);
        $payment = $this->paymentService->getById(1);
        return view('Main.Checkout.index',compact('ships','payment'));
    }
    public function getProvince()
    {
        $provinces = Province::all();
        return response()->json(['status'=>true,'data'=>$provinces]);
    }
    public function getDistrict($province_code)
    {
        $districts = District::where('province_code',$province_code)->get();
        return response()->json(['status'=>true,'data'=>$districts]);
    }
    public function getWard($district_code)
    {
        $wards = Ward::where('district_code',$district_code)->get();
        return response()->json(['status'=>true,'data'=>$wards]);
    }

    public function checkout(Request $request) {
        if (session()->get('cart') == 0)
        {
            $errorMessage = 'Không thể thanh toán khi không có sản phẩm';
            session()->flash('error',$errorMessage);
            return redirect()->back()->withInput()->withErrors($errorMessage);
        }
        $result = $this->checkoutService->create($request);
        return redirect()->route('homepage')->with('success','Đặt hàng thành công!');
    }
}
