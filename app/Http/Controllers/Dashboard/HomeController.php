<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\SettingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    protected $settingService;

    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }

    public function index()
    {
        $setting = $this->settingService->getSetting() ?? [];
        Session::put('setting', $setting);
        return view('Admin_cp.index');
    }

    public function changLanguage($language)
    {
        if ($language == null)
        {
            $language = 'ko';
            App::setLocale($language);
        }
        Session::put('locale', $language);
        $data = [
            'message' => trans('message.success'),

        ];
        return response()->json($data);
    }
}
