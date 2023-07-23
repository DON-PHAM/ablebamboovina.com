<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Province;
use App\Models\Ward;
use App\Services\IShipService;
use Illuminate\Support\Facades\App;

class CheckoutController extends Controller
{
    protected $shipService;
    public function __construct(IShipService $shipService)
    {
        $this->shipService = $shipService;
    }

    public function index()
    {
        $locale = session()->get('locale') ?? App::getLocale();
        $ships = $this->shipService->getAll($locale);
        return view('Main.Checkout.index',compact('ships'));
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
}
