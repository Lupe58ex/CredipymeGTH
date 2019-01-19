<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bonus_Discount_Category extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'enabled',
        'appears_in'
    ];
}