<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criminal_background extends Model
{
    //
    protected $fillable = [
        'description',
        'user_id',
        'expedition_date',
        'expiry_date',
        'employee_id',
        'document',
        'removed'
    ];
}