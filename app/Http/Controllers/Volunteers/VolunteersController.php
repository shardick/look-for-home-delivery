<?php

namespace App\Http\Controllers\Volunteers;

use App\Http\Controllers\Controller;
use App\Models\Geo\Province;
use App\Models\Volunteers\Volunteer;
use Illuminate\Http\Request;

class VolunteersController extends Controller
{
    //
    public function register()
    {
        $provinces = Province::orderBy('name')->all();

        return view('volunteers.register', [ "provinces" => $provinces ]);
    }

    public function registerAction(Request $request)
    {
        $geocodingResponse = app('geocoder')->geocode($request->input('address') . ' ' . $request->input('zipcode') . ' ' . $request->input('locality'))->get();

        $data = $request->all();

        $data["lat"] = $geocodingResponse->first()->getCoordinates()->getLatitude();
        $data["lng"] = $geocodingResponse->first()->getCoordinates()->getLongitude();

        $volunteer = new Volunteer();
        $volunteer->create($data);

        return view('volunteers.confirm');
    }
}
