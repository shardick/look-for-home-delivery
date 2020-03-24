<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('display_name', 255);
            $table->unsignedBigInteger("user_id");
            $table->string('address', 255);
            $table->string('zipcode', 5);
            $table->string('locality', 255);
            $table->string('province', 2);
            $table->string('country', 2)->default('IT');
            $table->string('telephone_number', 255);
            $table->string('email', 255)->nullable();
            $table->longText('comments')->nullable();
            $table->decimal('lat', 10, 8);
            $table->decimal('lng', 11, 8);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');

            $table->index([ 'lat', 'lng']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteers');
    }
}
