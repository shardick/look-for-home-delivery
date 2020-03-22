<?php

namespace App\Http\Controllers\Stores;

use App\Http\Controllers\Controller;
use App\Models\Stores\Store;
use App\Models\Stores\StoreCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class StoreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('stores.index');
    }

    public function locate(Request $request)
    {
        $stores = Store::byBounds($request->ne_lat, $request->sw_lat, $request->ne_lon, $request->sw_lon)->with('category')->get();

        return response()->json($stores);
    }

    public function register()
    {
        $categories = StoreCategory::all();

        return view('stores.register', [ "categories" => $categories ]);
    }

    public function registerAction(Request $request)
    {
        //$geocodingResponse = Http::get('https://nominatim.openstreetmap.org/search?street=' . $request->address . '&postalcode=' . $request->zipcode . '&city=' . $request->city . '&format=json');

        //$url = 'https://nominatim.openstreetmap.org/search?street=' . urlencode($request->input('address')) . '&postalcode=' . $request->input('zipcode') . '&city=' . $request->input('locality') . '&format=json';

        //dd($url);

        //$geocodingResponse = Http::get($url)->json();


        $geocodingResponse = app('geocoder')->geocode($request->input('address') . ' ' . $request->input('zipcode') . ' ' . $request->input('locality'))->get();

        //dd($geocodingResponse->body());

        $data = $request->all();

        //dd($geocodingResponse->first());

        $data["lat"] = $geocodingResponse->first()->getCoordinates()->getLatitude();
        $data["lng"] = $geocodingResponse->first()->getCoordinates()->getLongitude();

        $store = new Store();
        $store->create($data);

        return view('stores.confirm');
    }
}
