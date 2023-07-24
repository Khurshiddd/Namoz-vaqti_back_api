<?php

namespace App\Http\Resources;

use Carbon\Carbon;
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
            'date' => Carbon::now(),
            'bomdod' => $this->bomdod,
            'tong' => $this->tong,
            'peshin' => $this->peshin,
            'asr' => $this->asr,
            'shom' => $this->shom,
            'xufton' => $this->xufton
        ];
    }
}
