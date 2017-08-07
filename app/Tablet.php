<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tablet extends Model
{
    protected $fillable = array('title', 'description', 'recipe', 'count');


    public $timestamps = false;
}
