<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContractType extends Model
{
    //
    protected $fillable = [
        'name',
        'short_name',
        'suggested_duration',
        'description',
        'appears'
    ];
}