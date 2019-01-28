<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JustificationResource extends JsonResource
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
            'reason'=>$this->reason,
            'justified_date'=>$this->justified_date,
            'schedule_id'=>ScheduleResource::collection($this->schedule),
            'user_id'=>UserResource::collection($this->user),
            'observation'=>$this->observation,
            'is_discount'=>$this->is_discount,
        ];
    }
}
