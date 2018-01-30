<?php

namespace App\Repositories\Product;

interface ProductOptionRepositoryInterface
{
    public function store($request);
    public function update($request);
    public function destroy($request);
}
