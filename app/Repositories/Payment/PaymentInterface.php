<?php

namespace App\Repositories\Payment;

interface PaymentRepositoryInterface
{
    public function index();
    public function create();
    public function store($request);
    public function edit($id);
    public function update($request);
    public function destroy($request);
    public function duplicate();
}
