<?php

namespace App\Http\Controllers;

use App\Http\Resources\DayResource;
use App\Models\Day;
use App\Http\Requests\StoreDayRequest;
use App\Http\Requests\UpdateDayRequest;
use Carbon\Carbon;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $d = date('d');
        $day = Day::where('id', $d)->get();
        return DayResource::collection($day);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDayRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Day $day)
    {
        $today = Carbon::now();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDayRequest $request, Day $day)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Day $day)
    {
        //
    }
}
