<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class menuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert(
            [
               'menu_type'=>'Classic pizzas' 
            ]    
        );
        DB::table('menu')->insert( [
            'menu_type'=>'Deluxe Pizzas'
        ]);
        DB::table('menu')->insert(
            [
            'menu_type'=>'Supreme Pizzas'
        ]);
        DB::table('menu')->insert(
            [
            'menu_type'=>'Drinks'
        ]);
        DB::table('menu')->insert(
            [
            'menu_type'=>'Extras'
        ]);
    }
}
