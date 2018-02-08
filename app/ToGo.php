<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToGo extends Model
{
    //
    protected $fillable = ['title', 'lat', 'lng', 'is_visited'];
}
