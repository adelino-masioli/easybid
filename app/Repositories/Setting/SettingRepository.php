<?php

namespace App\Repositories\Setting;

use App\Models\Setting;

class SettingRepository implements SettingRepositoryInterface
{
    private $model;

    public function __construct(Setting $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return $this->model->all();
    }
    public function store($request)
    {
        return $this->model->create($request->all());
    }
    public function show($setting)
    {
        return $setting;
    }
    public function update($request, $setting)
    {
        $setting->update($request->all());
        return $setting;
    }
    public function destroy($request, $setting)
    {
        $setting->delete();
        return $setting;
    }
}
