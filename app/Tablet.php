<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tablet extends Model
{
    use SoftDeletes;

    /**
     * Mass Assigned
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'recipe', 'count', 'in_stock'];


    /**
     * Turn Off created_at and updated_at
     *
     * @var bool
     */
    public $timestamps = false;


    /**
     * Soft Delete
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
