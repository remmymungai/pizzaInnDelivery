<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table='menus';
    protected $fillable=['Food_Name','Food_Price','Food_Image','food_description','meal_type'];
}
