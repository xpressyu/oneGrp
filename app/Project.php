<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = ['name', 'developer', 'status', 'priceList', 'pic'];

    // cast price list from json to array
    // protected $casts = [
    //     'priceList' => 'array',
    // ];
}
