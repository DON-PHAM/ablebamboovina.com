<?php
namespace  App\Services;
use App\Http\Requests\Admin\ProductRequest;
use App\Http\Requests\Admin\SettingRequest;

interface SettingService
{
    public function createOrUpdate($id,SettingRequest $request);
    public function getSetting();
}
