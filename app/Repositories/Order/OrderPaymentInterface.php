<?php

namespace App\Repositories\OrderPayment;

interface OrderPaymentRepositoryInterface
{
    public function payment($order_id);
    public function store($request);
    public function edit($id);
    public function update($request);
    public function destroy($request);
}
