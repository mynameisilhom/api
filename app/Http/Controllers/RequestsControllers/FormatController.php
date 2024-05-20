<?php

namespace App\Http\Controllers\RequestsControllers;

use App\Http\Requests\StoreRequests\StoreFormatRequest;
use App\Http\Requests\UpdateRequests\UpdateFormatRequest;
use App\Http\Resources\FormatResource;
use App\Models\Format;

class FormatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return FormatResource::collection(Format::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormatRequest $request)
    {
        return new FormatResource(Format::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Format $format)
    {
        return new FormatResource($format);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormatRequest $request, Format $format)
    {
        $format->update($request->all());
        return new FormatResource($format);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Format $format)
    {
        $format->delete();
        return response()->json(null, 204);
    }
}
