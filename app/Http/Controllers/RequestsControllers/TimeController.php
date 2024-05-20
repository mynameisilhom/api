<?php

namespace App\Http\Controllers\RequestsControllers;

use App\Http\Requests\StoreRequests\StoreTimeRequest;
use App\Http\Requests\UpdateRequests\UpdateTimeRequest;
use App\Http\Resources\TimeResource;
use App\Models\Time;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TimeResource::collection(Time::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTimeRequest $request)
    {
        return new TimeResource(Time::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Time $time)
    {
        return new TimeResource($time);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTimeRequest $request, Time $time)
    {
        $time->update($request->all());
        return new TimeResource($time);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Time $time)
    {
        $time->delete();
        return response()->json(null, 204);
    }
}
