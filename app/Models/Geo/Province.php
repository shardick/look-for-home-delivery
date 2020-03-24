<?php

namespace App\Models\Geo;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = [
        "name", "code", "region_id"
    ];

    public function region()
    {
        return  $this->hasOne('App\Models\Geo\Region', 'id', 'region_id');
    }
}
