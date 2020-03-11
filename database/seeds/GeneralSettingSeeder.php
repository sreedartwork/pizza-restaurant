<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('general_settings')->insert([
            'site_title' => 'Savage Pizza',
            'logo_image_url' => '/img/savage-pics/savage-logo.gif',
            'address_1' => '484 Moreland Ave,',
            'address_2' => '',
            'city' => 'Atlanta',
            'state' => 'GA',
            'zipcode' => '30307',
            'phone_number' => '404-523-0500',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
