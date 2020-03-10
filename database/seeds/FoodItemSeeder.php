<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'pizza specialties',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices of Tomato, Red Onions, Dill Pickles, Mustard, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce.',
            'image_url' => 'img/savage-pics/kissclipart-pizza-marinara-png-c.png',
            // 'size' => 'small',
            'price' => 7.75,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'build your own',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices of Tomato, Red Onions, Dill Pickles, Mustard, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce.',
            'image_url' => 'img/savage-pics/calzoni-png-7.png',
            // 'size' => 'small',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'sauces &amp; crust',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices of Tomato, Red Onions, Dill Pickles, Mustard, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce.',
            'image_url' => 'img/savage-pics/pizza_ranch.png',
            // 'size' => 'small',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
