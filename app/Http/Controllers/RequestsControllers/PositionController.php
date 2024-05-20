<?php

namespace App\Http\Controllers\RequestsControllers;

use App\Http\Requests\StoreRequests\StorePositionRequest;
use App\Http\Requests\UpdateRequests\UpdatePositionRequest;
use App\Http\Resources\PositionResource;
use App\Models\Position;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PositionResource::collection(Position::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePositionRequest $request)
    {
        return new PositionResource(Position::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Position $position)
    {
        return new PositionResource($position);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePositionRequest $request, Position $position)
    {
        $position->update($request->all());
        return new PositionResource($position);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position)
    {
        $position->delete();
        return response()->json(null, 204);
    }
}
