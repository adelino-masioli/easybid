<?php

namespace App\Repositories\User;

interface UserRepositoryInterface
{
    public function index();
    public function store($request);
    public function show($user);
    public function update($request, $user);
    public function destroy($request, $user);
}
