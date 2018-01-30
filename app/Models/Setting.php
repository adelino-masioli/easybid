<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $table = 'settings';
    protected $fillable = [
        'name',
        'site',
        'email',
        'telephone',
        'cellphone',
        'zipcode',
        'neighborhood',
        'address',
        'number',
        'complement',
        'state_id',
        'city_id',
        'status_id'
    ];
    public $timestamps = true;

    public function status() {
        return $this->belongsTo('App\Models\Status', 'status_id');
    }
}
