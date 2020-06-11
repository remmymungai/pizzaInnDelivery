<?php

use Illuminate\Database\Seeder;

class toppingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('toppings')->insert(
            [
            'topping_name'=>'Extra Cheese',
            'topping_price'=>'50'
        ]);
        DB::table('toppings')->insert(
            [
            'topping_name'=>'Extra Bacon',
            'topping_price'=>'100'
        ]);
        DB::table('toppings')->insert(
            [
            'topping_name'=>'Pineapples',
            'topping_price'=>'50'
        ]);
        DB::table('toppings')->insert(
            [
            'topping_name'=>'Olives',
            'topping_price'=>'70'
        ]);
    }
}
