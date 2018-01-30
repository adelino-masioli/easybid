<?php

namespace App\Repositories\City;

interface CityRepositoryInterface
{
    public function getAll();
    public function get_by_state_id($id);
    public function combo_cities_by_state_id($id);
}
