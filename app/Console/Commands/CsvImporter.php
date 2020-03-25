<?php

namespace App\Console\Commands;

use App\Models\Stores\Store;
use App\Models\Stores\StoreCategory;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use SKAgarwal\GoogleApi\PlacesApi;
use League\Csv\Reader;
use League\Csv\Statement;

class CsvImporter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stores:import {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $file = $this->argument('file');

        $csv = Reader::createFromPath($file, 'r');
        $csv->setDelimiter(';');
        $csv->setHeaderOffset(0); //set the CSV header offset
        $records = $csv->getRecords();
        $googlePlaces = new PlacesApi(env("GOOGLE_PLACES_API_KEY"));

        foreach ($records as $record) {

            try
            {
                $name = $record["name"];
                $address = $record["address"];
                $category_text = $record["category"];
                //dd($category_text);
                $category_id = $this->getCategory($category_text);
                $telephone_number = $record["telephone"];
                $website = $record["website"];
                $email = $record["email"];
                $country = "";
                $province = "";
                $zipCode = $record["postalcode"];
                $locality = $record["locality"];

                Log::debug('Processing ' . $name);

                if ($record["y"] != "" && $record["x"] != "")
                {
                    //$placesResponse = $googlePlaces->nearbySearch(str_replace(",", ".", $record["y"]) . ',' . str_replace(",", ".", $record["x"]), 100);
                    $geocodingResponse = app('geocoder')->reverse(str_replace(",", ".", $record["y"]), str_replace(",", ".", $record["x"]))->get();
                }
                else
                {
                    $geocodingResponse = app('geocoder')->geocode($address . ' ' . $zipCode . ' ' . $locality)->get();
                }

                if ($geocodingResponse->count() > 0)
                {
                    $coords = $geocodingResponse[0]->getCoordinates();

                    $address = $geocodingResponse[0]->getStreetName() . ", " . $geocodingResponse[0]->getStreetNumber();

                    $locality = $geocodingResponse[0]->getLocality();

                    if ($geocodingResponse[0]->getPostalcode() != null && $geocodingResponse[0]->getPostalcode() != null)
                        $zipCode = $geocodingResponse[0]->getPostalcode();

                    $country =  $geocodingResponse[0]->getCountry()->getCode();

                    $place = $name . " " . $address . " " . $locality;

                    $placesResponse = $googlePlaces->textSearch($place);

                    if ($placesResponse->count() > 0 && sizeof($placesResponse["results"]) > 0)
                    {
                        //dd($placesResponse);

                        $resolvedPlace = $placesResponse["results"][0];
                        $name = $resolvedPlace["name"];
                        $place_id = $resolvedPlace["place_id"];

                        $placeDetailsResponse = $googlePlaces->placeDetails($place_id);

                        if ($placeDetailsResponse->count() > 0)
                        {
                            $placeDetails = $placeDetailsResponse["result"];

                            if (array_key_exists("formatted_phone_number", $placeDetails) && $placeDetails["formatted_phone_number"] != null && $placeDetails["formatted_phone_number"] != "")
                                $telephone_number = $placeDetails["formatted_phone_number"];

                            if (array_key_exists("website", $placeDetails) && $placeDetails["website"] != null && $placeDetails["website"] != "")
                                $website = $placeDetails["website"];
                        }
                    }

                    Store::create([
                        "name" => $name,
                        "address" => $address,
                        "zipcode" => $zipCode ?? '',
                        "locality" => $locality,
                        "country" => $country,
                        "lat" => $coords->getLatitude(),
                        "lng" => $coords->getLongitude(),
                        "province" => $province,
                        "telephone_number" => $telephone_number,
                        "comments" => "",
                        "home_delivery_enabled" => 1,
                        "pickup_in_store_enabled" => 0,
                        "store_category_id" => $category_id,
                        "website" => $website,
                        "email" => $email
                    ]);
                }
            }
            catch (Exception $e)
            {
                dd($e);
            }
        }
    }

    private function getCategory($text)
    {
        $category = StoreCategory::where('name', $text)->first();

        if ($category != null)
            return $category->id;
        else
            return StoreCategory::where('name', 'Altro')->first()->id;
    }
}
