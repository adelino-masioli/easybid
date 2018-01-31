<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest as Request;
use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;


class UserController extends Controller
{
    private $repository;
    public function __construct(UserRepositoryInterface $repository)
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
    public function show(User $user)
    {
        return $this->repository->show($user);
    }
    public function update(Request $request, User $user)
    {
        return $this->repository->update($request, $user);
    }
    public function destroy(Request $request, User $user)
    {
        return $this->repository->destroy($request, $user);
    }
}
