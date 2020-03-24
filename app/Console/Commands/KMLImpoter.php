<?php

namespace App\Console\Commands;

use App\Models\Stores\Store;
use App\Models\Stores\StoreCategory;
use Illuminate\Console\Command;
use StepanDalecky\KmlParser\Parser;

class KMLImpoter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kml:import {file}';

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

        $parser = Parser::fromFile($file);

        $kml = $parser->getKml();
        $document = $kml->getDocument();

        $styles = $document->getStyles();

        $folders = $document->getFolders();

        $placemarks = [];

        foreach ($folders as $f)
        {
            foreach ($f->getPlacemarks() as $p)
            {
                $placemark = [
                    "name" => $p->getName(),
                    "point" => trim(str_replace("\n", "", $p->getPoint()->getCoordinates())),
                    "style" => $p->getStyleUrl()
                ];

                $coordinates = explode(',', $placemark["point"]);

                $color = $p->getColorStyle()->getStyleUrl();

                $category = StoreCategory::where('name', 'Altro')->first()->id;

                $geocodingResponse = app('geocoder')->reverse($coordinates[1], $coordinates[0])->get();

                if ($geocodingResponse->count() > 0)
                {
                    $address = $geocodingResponse[0]->getStreetName();
                    $streetNumber = $geocodingResponse[0]->getStreetNumber();
                    $placemark["zipcode"] = $geocodingResponse[0]->getPostalcode();
                    $placemark["locality"] = $geocodingResponse[0]->getLocality();
                    $placemark["country"] = $geocodingResponse[0]->getCountry()->getCode();

                    if ($address != null)
                    {
                        $store = Store::create([
                            "name" => $placemark["name"],
                            "address" => $address . ', ' . $streetNumber,
                            "zipcode" => $placemark["zipcode"] ?? '',
                            "locality" => $placemark["locality"],
                            "country" => $placemark["country"],
                            "lat" => $geocodingResponse[0]->getCoordinates()->getLatitude(),
                            "lng" => $geocodingResponse[0]->getCoordinates()->getLongitude(),
                            "province" => "MI",
                            "telephone_number" => '',
                            "comments" => "",
                            "home_delivery_enabled" => 1,
                            "pickup_in_store_enabled" => 0,
                            "store_category_id" => $category
                        ]);
                    }
                }            
            }
        }            

        dd($placemarks);
    }
}
