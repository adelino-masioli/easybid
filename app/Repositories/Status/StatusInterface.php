<?php
namespace App\Repositories\Status;

interface StatusRepositoryInterface
{
    public function getAll();
    public function comboStatus();
}