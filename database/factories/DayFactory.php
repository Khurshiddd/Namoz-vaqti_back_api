<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Day>
 */
class DayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startTime = Carbon::createFromTime(03, 00);
        $endTime = Carbon::createFromTime(05, 30);
        $factor = mt_rand() / mt_getrandmax();

        $startTime1 = Carbon::createFromTime(05, 30);
        $endTime1 = Carbon::createFromTime(07, 30);
        $factor1 = mt_rand() / mt_getrandmax();

        $startTime2 = Carbon::createFromTime(13, 0);
        $endTime2 = Carbon::createFromTime(17, 30);
        $factor2 = mt_rand() / mt_getrandmax();

        $startTime3 = Carbon::createFromTime(17, 30);
        $endTime3 = Carbon::createFromTime(20, 00);
        $factor3 = mt_rand() / mt_getrandmax();

        $startTime4 = Carbon::createFromTime(20, 00);
        $endTime4 = Carbon::createFromTime(21, 30);
        $factor4 = mt_rand() / mt_getrandmax();

        $startTime5 = Carbon::createFromTime(21, 30);
        $endTime5 = Carbon::createFromTime(03, 30);
        $factor5 = mt_rand() / mt_getrandmax();

        return [
            'bomdod' => $startTime->addSeconds($factor * $startTime->diffInSeconds($endTime)),
            'sunrise' => $startTime1->addSeconds($factor1 * $startTime1->diffInSeconds($endTime1)),
            'peshin' =>$startTime2->addSeconds($factor2 * $startTime2->diffInSeconds($endTime2)),
            'asr' =>$startTime3->addSeconds($factor3 * $startTime3->diffInSeconds($endTime3)),
            'shom' =>$startTime4->addSeconds($factor4 * $startTime4->diffInSeconds($endTime4)),
            'xufton' =>$startTime5->addSeconds($factor5 * $startTime5->diffInSeconds($endTime5)),
        ];
    }
}
