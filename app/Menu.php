<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table='menus';
    protected $fillable=['Food_Name','Food_Price','Food_Image'];
}
