<?php

namespace App\Http\Resources;

use App\Models\Day;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MonthResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'namozlar' => DayResource::collection(Day::all())
        ];
    }
}
