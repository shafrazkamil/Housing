<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('property_type')->unsigned()->index();//appartment, villa, ...
            $table->integer('user_type');
            $table->mediumText('address');
            $table->integer('province');//location
            $table->integer('status');//new,resale
            $table->string('title');
            $table->longText('overview');
            $table->integer('property_age');
            $table->integer('property_possession');
            $table->longText('amenities');
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
        Schema::drop('properties');
    }
}
