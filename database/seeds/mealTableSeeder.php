<?php

use Illuminate\Database\Seeder;

class mealTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meal')->insert(
            [
                ('meal_type')=>'Deluxe pizza',
                ('meal_name')=>'BBQ Steak',
                ('meal_description')=>'Beef , Cheese , onions , BBQ sauce',
                ('meal_price')=>'1000'
            ]);
        DB::table('meal')->insert(
            [
                ('meal_type')=>'Classic pizza',
                ('meal_name')=>'Hawaiian',
                ('meal_description')=>'Pineapples and bacon',
                ('meal_price')=>'2000'
            ]);
        DB::table('meal')->insert( [
            ('meal_type')=>'Classic pizza',
            ('meal_name')=>'Pepperoni',
            ('meal_description')=>'pepperoni , black olives',
            ('meal_price')=>'3000'
        ]);
    }
}
