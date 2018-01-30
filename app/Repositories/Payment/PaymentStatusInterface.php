<?php

namespace App\Repositories\Payment;

interface PaymentStatusRepositoryInterfaces
{
    public function store($request);
    public function update($request);
    public function destroy($request);
}
