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
            'title' => 'Tomato Basil',
            'description' => 'Garlic tomato sauce, lots of fresh basil, mozzarella and parmesan cheeses.',
            'image_url' => 'img/savage-pics/kissclipart-pizza-marinara-png-c.png',
            // 'size' => 'small',
            'price' => 7.75,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Sav-veg',
            'description' => 'Whole wheat crust with garlic tomato sauce, mushrooms, broccoli, yellow onion, roasted red peppers, sun dried tomatoes, thyme-seasoned ricotta, mozzarella and parmesan cheeses.',
            'image_url' => 'img/savage-pics/calzoni-png-7.png',
            // 'size' => 'small',
            'price' => 9.75,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Cajun',
            'description' => 'Spicy red pepper sauce, roasted chicken, shrimp, andouille sausage, red onions, green peppers, Gruyère, mozzarella and parmesan cheeses.',
            'image_url' => 'img/savage-pics/pizza_ranch.png',
            // 'size' => 'small',
            'price' => 10.50,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Chicken Florentine',
            'description' => 'Garlic white sauce, roasted chicken, fresh spinach, yellow onions, Gruyère, mozzarella and parmesan cheeses.',
            'image_url' => 'img/savage-pics/pizza_ranch.png',
            // 'size' => 'small',
            'price' => 9.75,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'White on White',
            'description' => 'Thyme-seasoned ricotta, Monterey Jack, chèvre, parmesan and mozzarella over garlic white sauce.',
            'image_url' => 'img/savage-pics/lasagna-png-transpar.png',
            // 'size' => 'small',
            'price' => 9.25,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'White on Red',
            'description' => 'Thyme-seasoned ricotta, Monterey Jack, chèvre, parmesan and mozzarella over garlic tomato sauce.',
            'image_url' => 'img/savage-pics/meatball1.png',
            // 'size' => 'small',
            'price' => 8.75,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Mexican',
            'description' => 'Salsa fresca, refried beans, green chiles and Monterey Jack cheese. Jalapeños and/or sour cream at your request.',
            'image_url' => 'img/savage-pics/steakandcheese.png',
            // 'size' => 'small',
            'price' => 9.25,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Mexican Deluxe',
            'description' => 'Garlic white sauce, roasted chicken, prosciutto ham, red onion, roasted red peppers, mozzarella and parmesan cheeses.',
            'image_url' => 'img/savage-pics/chicken-parm-sub.png',
            // 'size' => 'small',
            'price' => 9.75,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Chicken Cordon Bleu',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices of Tomato, Red Onions, Dill Pickles, Mustard, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce.',
            'image_url' => 'img/savage-pics/drinks.png',
            // 'size' => 'small',
            'price' => 10.25,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Greek',
            'description' => 'Garlic tomato sauce, feta, artichoke hearts, Greek olives, red onion, fresh spinach, mozzarella and parmesan cheeses. Anchovies at your request.',
            'image_url' => 'img/savage-pics/drinks.png',
            // 'size' => 'small',
            'price' => 9.25,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Mediterranean',
            'description' => 'Garlic white sauce, baked eggplant, artichoke hearts, fresh tomatoes, mushrooms, mozzarella and parmesan cheeses.',
            'image_url' => 'img/savage-pics/drinks.png',
            // 'size' => 'small',
            'price' => 9.25,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Mai Pai',
            'description' => 'Spicy red pepper sauce, Canadian bacon, green peppers, red onions, fresh pineapple, pepperoncini, mozzarella and parmesan cheeses.',
            'image_url' => 'img/savage-pics/drinks.png',
            // 'size' => 'small',
            'price' => 9.25,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Bolognese',
            'description' => 'Red wine marinara sauce, Italian sausage, sun-dried tomatoes, red onions, mushrooms, parmesan and mozzarella cheeses.',
            'image_url' => 'img/savage-pics/drinks.png',
            // 'size' => 'small',
            'price' => 9.25,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Pizza Buttafuoco',
            'description' => 'Red tomato sauce, Italian sausage, seasoned ground beef, Canadian bacon, pepperoni, mozzarella and parmesan cheeses.',
            'image_url' => 'img/savage-pics/drinks.png',
            // 'size' => 'small',
            'price' => 9.75,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'No-Brainer',
            'description' => 'Red tomato sauce, Italian sausage, pepperoni, green peppers, black olives, mushrooms, yellow onions, mozzarella and parmesan cheeses.',
            'image_url' => 'img/savage-pics/drinks.png',
            // 'size' => 'small',
            'price' => 10.00,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Bacon, Spinach and Tomato',
            'description' => 'Applewood smoked bacon, fresh spinach and roma tomatoes on an olive oil/roasted garlic sauce with mozzarella and parmesan cheeses.',
            'image_url' => 'img/savage-pics/drinks.png',
            // 'size' => 'small',
            'price' => 9.25,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'The Southern Que',
            'description' => 'Fox Bros. BBQ sauce, pulled pork or roasted chicken, yellow onions, green peppers, applewood smoked bacon and Monterey Jack cheese.',
            'image_url' => 'img/savage-pics/drinks.png',
            // 'size' => 'small',
            'price' => 9.75,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'The Southern Que',
            'description' => 'Fox Bros. BBQ sauce, pulled pork or roasted chicken, yellow onions, green peppers, applewood smoked bacon and Monterey Jack cheese.',
            'image_url' => 'img/savage-pics/drinks.png',
            // 'size' => 'small',
            'price' => 9.75,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Sauces',
            'description' => 'red tomato sauce * garlic tomato sauce * garlic white sauce * salsa fresca with cilantro * red wine marinara * spicy red pepper sauce (additional charge)* Fox Bros. Barbeque Sauce (additional charge).',
            'image_url' => 'img/savage-pics/pizza_ranch.png',
            // 'size' => 'small',
            'price' =>  1.00,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Toppings 1',
            'description' => 'anchovies, black olives, broccoli, Canadian bacon, extra cheese, extra sauce, feta, fresh tomatoes, green chiles, green olives, green peppers, jalapeños,
            Monterey Jack, mushrooms, pepperoni, red onion, spinach, yellow onion.',
            'image_url' => 'img/savage-pics/pizza_ranch.png',
            // 'size' => 'small',
            'price' =>  1.00,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Toppings 2',
            'description' => 'artichoke hearts, banana peppers, capicolla, eggplant breaded & baked, fresh basil, fresh garlic, fresh pineapple, Greek olives, ground beef, Italian sausage, pepperoncini, red peppers, roasted garlic, salami, thyme-seasoned ricotta.',
            'image_url' => 'img/savage-pics/pizza_ranch.png',
            // 'size' => 'small',
            'price' =>  1.00,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Toppings 3',
            'description' => 'andouille sausage, applewood smoked bacon, caramelized onions, chèvre, chicken roasted with rosemary & lemon, gorgonzola, Gruyère, meatballs, pesto, prosciutto ham, roasted red peppers, shrimp, sun dried tomatoes.',
            'image_url' => 'img/savage-pics/pizza_ranch.png',
            // 'size' => 'small',
            'price' =>  1.50,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Sauces',
            'description' => 'red tomato sauce * garlic tomato sauce * garlic white sauce * salsa fresca with cilantro * red wine marinara * spicy red pepper sauce (additional charge)* Fox Bros. Barbeque Sauce (additional charge).',
            'image_url' => 'img/savage-pics/pizza_ranch.png',
            // 'size' => 'small',
            'price' =>  1.00,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Toppings 1',
            'description' => 'anchovies, black olives, broccoli, Canadian bacon, extra cheese, extra sauce, feta, fresh tomatoes, green chiles, green olives, green peppers, jalapeños,
            Monterey Jack, mushrooms, pepperoni, red onion, spinach, yellow onion.',
            'image_url' => 'img/savage-pics/pizza_ranch.png',
            // 'size' => 'small',
            'price' =>  1.00,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Toppings 2',
            'description' => 'artichoke hearts, banana peppers, capicolla, eggplant breaded & baked, fresh basil, fresh garlic, fresh pineapple, Greek olives, ground beef, Italian sausage, pepperoncini, red peppers, roasted garlic, salami, thyme-seasoned ricotta.',
            'image_url' => 'img/savage-pics/pizza_ranch.png',
            // 'size' => 'small',
            'price' =>  1.00,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Toppings 3',
            'description' => 'andouille sausage, applewood smoked bacon, caramelized onions, chèvre, chicken roasted with rosemary & lemon, gorgonzola, Gruyère, meatballs, pesto, prosciutto ham, roasted red peppers, shrimp, sun dried tomatoes.',
            'image_url' => 'img/savage-pics/pizza_ranch.png',
            // 'size' => 'small',
            'price' =>  1.50,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Spinach Lasagna',
            'description' => 'Fresh lasagna noodles layered with a special red wine tomato sauce with a touch of serrano peppers, spinach and ricotta cheese and topped with lots of parmesan and mozzarella.
            Served with garlic bread and salad with your choice of dressing.',
            'image_url' => 'img/savage-pics/lasagna-png-transpar.png',
            // 'size' => 'small',
            'price' =>  10.00,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Spinach Lasagna Sausage or Ground Beef',
            'description' => 'Fresh lasagna noodles layered with a special red wine tomato sauce with a touch of serrano peppers, spinach and ricotta cheese and topped with lots of parmesan and mozzarella.
            Served with garlic bread and salad with your choice of dressing.',
            'image_url' => 'img/savage-pics/lasagna-png-transpar.png',
            // 'size' => 'small',
            'price' =>  11.00,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Meatball Sub',
            'description' => 'Spicy all-beef meatballs, red tomato sauce, mozzarella and parmesan on a sub roll.',
            'image_url' => 'img/savage-pics/meatball1.png',
            // 'size' => 'small',
            'price' =>  8.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Fresh Veggie Sub',
            'description' => 'Mozzarella melted over spinach, red onions, mushrooms, fresh green peppers, green and black olives on a sub roll with mayo, mustard, lettuce, tomato and vinaigrette.',
            'image_url' => 'img/savage-pics/fresh_veggie_sub.png',
            // 'size' => 'small',
            'price' =>  8.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Turkey Cheddar Sub',
            'description' => 'Smoked Black Forest turkey and cheddar cheese on a sub roll with mayonnaise, mustard, lettuce and tomato. Served hot.',
            'image_url' => 'img/savage-pics/turkey_cheddar_sub.png',
            // 'size' => 'small',
            'price' =>  8.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Marinated Chicken Sub',
            'description' => 'Strips of chicken breast marinated in olive oil, white wine and cajun seasonings, sauteed with red and green peppers and onions, and topped with melted Monterey Jack.',
            'image_url' => 'img/savage-pics/grilled-chicken-sandwich.png',
            // 'size' => 'small',
            'price' =>  9.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Eggplant Parmesan Sub',
            'description' => 'Breaded and baked eggplant, red tomato sauce, mozzarella and parmesan on a sub roll.',
            'image_url' => 'img/savage-pics/eggplantparm.png',
            // 'size' => 'small',
            'price' =>  9.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Italian Sub',
            'description' => 'Fresh cuts of capicolla, salami, pepperoni and mozzarella on a sub roll with mayo, mustard, lettuce, tomato and vinaigrette – served hot, crusty and melty.',
            'image_url' => 'img/savage-pics/italian_sub.png',
            // 'size' => 'small',
            'price' =>  8.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Cheese Steak Sub',
            'description' => 'Our version of a Philly Cheesesteak – thinly sliced steak seasoned and sauteed with mushrooms, green peppers and yellow onions, on a white or whole wheat roll with melted Swiss cheese.',
            'image_url' => 'img/savage-pics/steakandcheese.png',
            // 'size' => 'small',
            'price' =>  9.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Fountain Coke',
            'description' => 'is a carbonated soft drink manufactured by The Coca-Cola Company.',
            'image_url' => 'img/savage-pics/drinks.png',
            // 'size' => 'small',
            'price' =>  1.75,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Fountain Diet Coke',
            'description' => 'is a carbonated soft drink manufactured by The Coca-Cola Company.',
            'image_url' => 'img/savage-pics/drinks.png',
            // 'size' => 'small',
            'price' =>  1.75,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Fountain Sprite',
            'description' => 'is a carbonated soft drink manufactured by The Coca-Cola Company.',
            'image_url' => 'img/savage-pics/drinks.png',
            // 'size' => 'small',
            'price' =>  1.75,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Blueberry Izze',
            'description' => 'is a carbonated soft drink manufactured by The Coca-Cola Company.',
            'image_url' => 'img/savage-pics/blueberry_Izze.png',
            // 'size' => 'small',
            'price' =>  1.75,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Bottled Water',
            'description' => 'is a carbonated soft drink manufactured by The Coca-Cola Company.',
            'image_url' => 'img/savage-pics/bottle_water.png',
            // 'size' => 'small',
            'price' =>  1.75,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Apple Juice',
            'description' => 'is a carbonated soft drink manufactured by The Coca-Cola Company.',
            'image_url' => 'img/savage-pics/doleapple.png',
            // 'size' => 'small',
            'price' =>  1.75,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
    
