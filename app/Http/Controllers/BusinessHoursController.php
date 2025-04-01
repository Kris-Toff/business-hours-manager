<?php

namespace App\Http\Controllers;

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
    public function show(BusinessHours $businessHours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusinessHours $businessHours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BusinessHours $businessHours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusinessHours $businessHours)
    {
        //
    }
}
