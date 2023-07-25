<?php

namespace App\Http\Resources;

use App\Models\Month;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class YearResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'year' => Carbon::now()->format('Y'),
            'namozlar' => MonthResource::collection(Month::all())
        ];
    }
}
