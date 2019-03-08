<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MemberResource extends JsonResource
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
            'profile_image' => $this->profile_image,
            'name' => $this->name,
            'sport_event' => $this->sport_event,
            'area' => $this->area,
            'introduction' => $this->introduction
        ];
    }
}
