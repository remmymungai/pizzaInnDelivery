<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meals extends Model
{
    protected $table='menu';
    protected $fillable=['menu_type'];
}
