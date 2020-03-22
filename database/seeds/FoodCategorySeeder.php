<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'title' => 'pizza specialties',
            'description' => 'The following recommended Savage Pizza Combos are tried and true favorites from our kitchen.  Substitutions are extra.',
            'image_url' => 'img/savage-pics/kissclipart-pizza-marinara-png-c.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'build your own',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil?',
            'image_url' => 'img/savage-pics/calzoni-png-7.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'sauces & crust', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil?',
            'image_url' => 'img/savage-pics/pizza_ranch.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'pasta', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil?',
            'image_url' => 'img/savage-pics/lasagna-png-transpar.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'subs',
            'description' => 'Your choice of regular or whole wheat roll. All Subs served with choice of Regular, Salt & Vinegar, or BBQ Chips.',
            'image_url' => 'img/savage-pics/meatball1.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'Drinks',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil?',
            'image_url' => 'img/savage-pics/drinks.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
