<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusinessHourRequest;
use App\Http\Resources\BusinessHourCollection;
use App\Http\Resources\BusinessHourResource;
use App\Models\BusinessHour;
use Illuminate\Http\Request;

class BusinessHoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return response()->json(new BusinessHourCollection(BusinessHour::all()), 200);
        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BusinessHour $businessHour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusinessHour $businessHour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BusinessHourRequest $request, BusinessHour $businessHour)
    {
        try {
            $result = $businessHour->update($request->all());
            return response()->json(['message' => 'Successfully saved item'], 200);
        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusinessHour $businessHour)
    {
        //
    }
}
