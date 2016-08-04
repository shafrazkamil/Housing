<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyBhkSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_bhk-size', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id')->unsigned()->index();
            $table->integer('building_id');
            $table->integer('floor_id');
            $table->integer('bhk-type_id')->unsigned()->index();
            $table->string('title');//size sqft
            $table->string('2d_mg');
            $table->string('3d_img');
            $table->integer('no_rooms');
            $table->integer('no_bathrooms');
            $table->integer('no_parkings');
            $table->integer('facing');
            $table->integer('price');
            $table->integer('price_per_sqft');
            $table->integer('bhk-duplex');//1 if a duplex else 0.   to make query fast
            $table->integer('listing_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('property_bhk-size');
    }
}
