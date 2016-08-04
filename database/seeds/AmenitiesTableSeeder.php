<?php

use Illuminate\Database\Seeder;

class AmenitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	//delete table records
        DB::table('amenities')->delete();

        //seed table records
        DB::table('amenities')->insert(array(
             array('title'=> str_random(10), 'class'=> str_random(10), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")),
             array('title'=> str_random(10), 'class'=> str_random(10), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")) 
        ));
    }
}
