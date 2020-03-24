<?php

namespace App\Models\Volunteers;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = [
        'display_name', 'user_id', 'address', 'zipcode', 'country', 'province', 'lat', 'lng', 'locality', 'telephone_number',
            'comments'
    ];

    protected $attributes = [
        'country' => 'IT',
        'comments' => '',
    ];

    protected $hidden = [ 'user_id', 'address', 'zipcode', 'country', 'province', 'locality', 'telephone_number', 'comments'];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function scopeByBounds($query, $ne_lat, $sw_lat, $ne_lon, $sw_lon)
    {
        return $query->whereRaw('('.$sw_lat.'< '.$ne_lat.' AND lat BETWEEN '.$sw_lat.' AND '.$ne_lat.')
            OR ('.$sw_lat.' > '.$ne_lat.' AND (lat BETWEEN '.$sw_lat.' AND 180 OR lat BETWEEN -180 AND '.$ne_lat.'))
            AND ('.$sw_lon.' < '.$ne_lon.' AND lng BETWEEN '.$sw_lon.' AND '.$ne_lon.') OR ('.$sw_lon.'> '.$ne_lon.' AND (lng BETWEEN '.$sw_lon.' AND 180 OR lng BETWEEN -180 AND '.$ne_lon.'))');
    }
}
