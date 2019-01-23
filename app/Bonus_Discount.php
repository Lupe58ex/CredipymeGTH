<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bonus_Discount extends Model
{
    //
    protected $fillable =[
        'quantity',
        'reason',
        'employee_id',
        'user_id',
        'month',
        'year',
        'bonus_discount_category_id'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    public function bonus_discount_category(){
        return $this->belongTo(Bonus_discount_category::class);
    }
    Public function user(){
        return $this->belongsTo(User::class);
    }
}
