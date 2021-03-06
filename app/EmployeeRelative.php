<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;


class EmployeeRelative extends Pivot
{
    //
    protected $fillable =[
        'relationship',
        'observation',
        'bail_letter',
        'guarantor',
        'droped',
        'is_student',
        'employee1_id',
        'relative_id',
        'employee_id'
    ];
    public function employee(){
        return $this->belongsTo(Employee::class,'employee1_id');
    }

}
