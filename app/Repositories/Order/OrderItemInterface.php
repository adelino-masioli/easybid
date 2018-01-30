<?php

namespace App\Repositories\OrderItem;

interface OrderItemRepositoryInterface
{
    public function items($order_id);
    public function store($request);
    public function edit($id);
    public function update($request);
    public function destroy($request);
}
