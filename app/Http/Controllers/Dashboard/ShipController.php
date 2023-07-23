<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ShipRequest;
use App\Services\IShipService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ShipController extends Controller
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
        return view('Admin_cp.Ship.index',compact('ships'));
    }
    public function create()
    {
        return view('Admin_cp.Ship.create');
    }
    public function postCreate(ShipRequest $request)
    {
        $result = $this->shipService->create($request);
        return redirect()->route('ship');
    }
    public function edit($id)
    {
        $ship =  $this->shipService->getById($id);
        $ship_vi = $ship->translate->where('languageid','vi')->first();
        $ship_ko = $ship->translate->where('languageid','ko')->first();
        return view('Admin_cp.Ship.edit',compact(['ship','ship_vi','ship_ko']));
    }
    public function update($id,ShipRequest $request)
    {
        $ship = $this->shipService->update($id,$request);
        if (!$ship)
            return redirect()->back()->with(['success'=>trans('ship.error-edit')]);
        return redirect()->route('ship')->with('success',trans('ship.success'));
    }
    public function delete($id)
    {
        return $this->shipService->delete($id);
    }
}
