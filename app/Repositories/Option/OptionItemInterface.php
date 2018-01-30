<?php

namespace App\Repositories\OptionItem;

interface OptionItemRepositoryInterface
{
    public function index();
    public function create();
    public function store($request);
    public function edit($id);
    public function update($request);
    public function destroy($request);
    public function duplicate();
}
