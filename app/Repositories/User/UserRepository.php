<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    private $model;

    public function __construct(User $model)
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
    public function show($user)
    {
        return $user;
    }
    public function update($request, $user)
    {
        $user->update($request->all());
        return $user;
    }
    public function destroy($request, $user)
    {
        $user->delete();
        return $user;
    }
}
