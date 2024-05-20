<?php

namespace App\Http\Controllers\RequestsControllers;

use App\Http\Requests\StoreRequests\StoreLogRequest;
use App\Http\Requests\UpdateRequests\UpdateLogRequest;
use App\Http\Resources\LogResource;
use App\Models\Log;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return LogResource::collection(Log::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLogRequest $request)
    {
        return new LogResource(Log::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Log $log)
    {
        return new LogResource($log);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLogRequest $request, Log $log)
    {
        $log->update($request->all());
        return new LogResource($log);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Log $log)
    {
        $log->delete();
        return response()->json(null, 204);
    }
}
