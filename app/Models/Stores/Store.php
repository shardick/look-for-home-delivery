<?php

namespace App\Models\Stores;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Store extends Model
{
    protected $fillable = [
        'name', 'store_category_id', 'address', 'zipcode', 'country', 'province', 'lat', 'lng', 'logo', 'locality', 'telephone_number', 'email',
            'comments', 'home_delivery_enabled', 'pickup_in_store_enabled'
    ];
    //

    protected $attributes = [
        'country' => 'IT',
        'comments' => '',
        'home_delivery_enabled' => false,
        'pickup_in_store_enabled' => false
    ];

    public function category()
    {
        return $this->hasOne('App\Models\Stores\StoreCategory', 'id', 'store_category_id');
    }

    public function scopeByBounds($query, $ne_lat, $sw_lat, $ne_lon, $sw_lon)
    {
        return $query->whereRaw('('.$sw_lat.'< '.$ne_lat.' AND lat BETWEEN '.$sw_lat.' AND '.$ne_lat.')
            OR ('.$sw_lat.' > '.$ne_lat.' AND (lat BETWEEN '.$sw_lat.' AND 180 OR lat BETWEEN -180 AND '.$ne_lat.'))
            AND ('.$sw_lon.' < '.$ne_lon.' AND lng BETWEEN '.$sw_lon.' AND '.$ne_lon.') OR ('.$sw_lon.'> '.$ne_lon.' AND (lng BETWEEN '.$sw_lon.' AND 180 OR lng BETWEEN -180 AND '.$ne_lon.'))');
    }
}
