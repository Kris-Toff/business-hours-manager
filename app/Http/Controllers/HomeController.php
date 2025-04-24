<?php

namespace App\Http\Controllers;

use App\Http\Resources\BusinessHourCollection;
use App\Http\Resources\BusinessHourResource;
use App\Models\BusinessHour;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

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
     * Get next opening day
     * return - date time
     */
    public function nextOpening()
    {
        $now = Carbon::now();
        $now->setTimezone('Asia/Hong_Kong');
        $is_store_open = false;

        do {
            $now->addDay(1);
            $day_of_the_week = $now->copy()->format("l");

            $result = new BusinessHourResource(BusinessHour::where('day', $day_of_the_week)->first());

            if ($result['is_open'])
                $is_store_open = true;
        } while (!$is_store_open);

        // $now->copy()->format("Y-m-d")
        return response()->json(['result' => $result, 'date' => $now->copy()->format("Y-m-d")], 200);
    }

    public function nextOpeningByDate(Request $request)
    {
        Validator::make($request->all(), [
            'date' => 'required|date_format:Y-m-d',
        ])->validate();

        $dt = Carbon::createFromFormat('Y-m-d', $request->date);
        $dt->setTimezone('Asia/Hong_Kong');
        $day_of_the_week = $dt->copy()->format("l");

        $result = new BusinessHourResource(BusinessHour::where('day', $day_of_the_week)->first());

        return response()->json(['result' => $result, 'date' => $dt->copy()->format("Y-m-d")], 200);
    }
}
