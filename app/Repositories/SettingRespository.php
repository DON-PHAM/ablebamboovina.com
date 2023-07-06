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
        $data = [];
        $setting = $id ? $this->model->find($id) : new Setting;
        if (!$setting)
        {
            return redirect()->back()->with('error','Setting not found');
        }
        $setting->fill($data);
        $setting->save();
        return  redirect()->back()->with('success','setting saved success fully');
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }
}
