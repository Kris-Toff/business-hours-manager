<?php

namespace App\Http\Controllers;

use App\Http\Resources\BusinessHourCollection;
use App\Http\Resources\BusinessHourResource;
use App\Models\BusinessHour;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $now = Carbon::now();
        $day_of_the_week = $now->setTimezone('Asia/Hong_Kong')->copy()->format("l");

        try {
            $result = new BusinessHourResource(BusinessHour::where('day', $day_of_the_week)->first());

            return response()->json($result, 200);
        } catch (\Throwable $th) {
            return $th;
        }

        // BusinessHour
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
