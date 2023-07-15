<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Http\Requests\StoreDayRequest;
use App\Http\Requests\UpdateDayRequest;
use App\Http\Resources\DayResource;

class DayController extends Controller
{    public function index()
    {
        return new DayResource(Day::all());
    }

    public function store(StoreDayRequest $request)
    {
        //
    }

    public function show(Day $day)
    {
        //
    }

    public function update(UpdateDayRequest $request, Day $day)
    {
        //
    }

    public function destroy(Day $day)
    {
        //
    }
}
