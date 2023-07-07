<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingRequest;
use App\Services\SettingService;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    protected $settingService;
    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }

    public function create() {
        $setting = $this->settingService->getSetting() ?? [];
        return view('Admin_cp.Setting.index',compact('setting'));
    }
    public function CreateOrUpdate(SettingRequest $request,$id = 0) {
        return $this->settingService->createOrUpdate($id,$request);
    }
}
