<?php

namespace App\Repositories\Setting;

interface SettingRepositoryInterface
{
    public function index();
    public function store($request);
    public function show($setting);
    public function update($request, $setting);
    public function destroy($request, $setting);
}
