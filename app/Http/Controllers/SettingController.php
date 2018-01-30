<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingCreateFormRequest;
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
    public function create()
    {}
    public function store(SettingCreateFormRequest $request)
    {
        return $this->repository->store($request);
    }
    public function edit($id)
    {}
    public function update($request)
    {}
    public function destroy($request)
    {}
    public function duplicate()
    {}
}
