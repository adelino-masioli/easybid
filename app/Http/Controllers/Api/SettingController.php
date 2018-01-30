<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingFormRequest as Request;
use App\Models\Setting;
use App\Repositories\Setting\SettingRepositoryInterface;


class SettingController extends Controller
{
    private $repository;
    public function __construct(SettingRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->index();
    }
    public function store(Request $request)
    {
        return $this->repository->store($request);
    }
    public function show(Setting $setting)
    {
        return $this->repository->show($setting);
    }
    public function update(Request $request, Setting $setting)
    {
        return $this->repository->update($request, $setting);
    }
    public function destroy(Request $request, Setting $setting)
    {
        return $this->repository->destroy($request, $setting);
    }
}
