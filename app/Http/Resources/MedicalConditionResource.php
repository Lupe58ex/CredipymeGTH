<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MedicalConditionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'description'=>$this->description,
            'user_id',
            'expedition_date'=>$this->expedition_date,
            'employee_id',
            'document'=>$this->document,
            'expired_date'=>$this->expired_date,
            'removed'=>$this->removed,
        ];
    }
}
