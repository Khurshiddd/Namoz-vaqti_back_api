<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DayResource extends JsonResource
{
    /**
    * Transform the resource into an array.
    *
    * @return array<string, mixed>
    */
    public function toArray(Request $request): array
    {
        return [
            'bomdod' => $this->bomdod,
            'sunrise' => $this->sunrise,
            'peshin' => $this->peshin,
            'asr' => $this->asr,
            'shom' => $this->shom,
            'xufton' => $this->xufton
        ];
    }
}
