<?php

namespace App\Http\Controllers;

use App\Models\Month;
use App\Http\Requests\StoreMonthRequest;
use App\Http\Requests\UpdateMonthRequest;
use App\Http\Resources\MonthResource;

class MonthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MonthResource::collection(Month::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMonthRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Month $month)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMonthRequest $request, Month $month)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Month $month)
    {
        //
    }
}
