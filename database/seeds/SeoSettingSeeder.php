<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => "Savage Pizza - All of our food is made from original recipes, using only fresh vegetables and first quality meats, cheeses, breads and pastas. What you get are innovative, homemade sauces, fresh dough, and thoughtfully prepared dishes, made from scratch – every day.

            ",
            'keywords' => "Pizza, Local Pizza, Savage, Salads, Best Pizza In Town, Pastas",
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
