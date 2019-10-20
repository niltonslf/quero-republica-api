<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Republic extends Model
{
    protected $table = 'republics';
    protected $fillable = [
        "name",
        "price",
        "city",
        "state",
        'picture',
        "description",
    ];
    public $timestamps = true;
}