<?php

namespace App\Repositories;

use App\Http\Requests\Admin\SettingRequest;
use App\Models\Setting;
use App\Services\SettingService;

class SettingRespository implements SettingService
{
    protected $model;
    public function __construct(Setting $model)
    {
        $this->model = $model;
    }

    public function createOrUpdate($id,SettingRequest $request)
    {
        $data = [
            'logo' => $request->logo,
            'company' => $request->company,
            'slogan' => $request->slogan,
            'tax' => $request->tax,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'morningstart' => $request->morningstart,
            'lunchstart' => $request->lunchstart,
            'facebook' => $request->facebook,
            'tiktok' => $request->tiktok,
            'intagram' => $request->intagram,
            'kakaotalk' => $request->kakaotalk
        ];
        $setting = $id != 0 ? $this->model->find($id) : new Setting;
        if (!$setting)
        {
            return redirect()->back()->with('error','Setting not found');
        }
        $setting->fill($data);
        $setting->save();
        return  redirect()->back()->with('success','setting saved success fully');
    }

    public function getSetting()
    {
        return $this->model->first();
    }
}
