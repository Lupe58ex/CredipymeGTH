<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'internal_code'
    ];
}