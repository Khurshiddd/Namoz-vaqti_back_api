<?php

namespace Database\Seeders;

use App\Models\Month;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Month::create([
            'year_id'=>1,
            'name' => 'Yanvar'
        ]);
        Month::create([
            'year_id'=>1,
            'name' => 'Fevral'
        ]);
        Month::create([
            'year_id'=>1,
            'name' => 'Mart'
        ]);
        Month::create([
            'year_id'=>1,
            'name' => 'Aprel'
        ]);
        Month::create([
            'year_id'=>1,
            'name' => 'May'
        ]);
        Month::create([
            'year_id'=>1,
            'name' => 'Iyun'
        ]);
        Month::create([
            'year_id'=>1,
            'name' => 'Iyul'
        ]);
        Month::create([
            'year_id'=>1,
            'name' => 'Avgust'
        ]);
        Month::create([
            'year_id'=>1,
            'name' => 'Sentabr'
        ]);
        Month::create([
            'year_id'=>1,
            'name' => 'Oktabr'
        ]);
        Month::create([
            'year_id'=>1,
            'name' => 'Noyabr'
        ]);
        Month::create([
            'year_id'=>1,
            'name' => 'Dekabr'
        ]);
    }
}
