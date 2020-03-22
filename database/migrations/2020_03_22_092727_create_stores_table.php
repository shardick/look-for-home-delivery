<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->unsignedBigInteger('store_category_id');
            $table->string('address', 255);
            $table->string('zipcode', 5);
            $table->string('locality', 255);
            $table->string('province', 2);
            $table->string('country', 2);
            $table->string('telephone_number', 255);
            $table->string('email', 255);
            $table->decimal('lat', 10, 8);
            $table->decimal('lng', 11, 8);
            $table->string('logo', 255)->nullable();
            $table->longText('comments')->nullable();
            $table->boolean('home_delivery_enabled')->nullable(false);
            $table->boolean('pickup_in_store_enabled')->nullable(false);
            $table->timestamps();

            $table->foreign('store_category_id')->references('id')->on('store_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
