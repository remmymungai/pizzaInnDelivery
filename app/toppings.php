<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class toppings extends Model
{
    protected $table='toppings';
    protected $fillable=['topping_name','topping_price'];
}
