<?php

namespace App\Http\Controllers\RequestsControllers;

use App\Http\Requests\StoreRequests\StoreVisitorRequest;
use App\Http\Requests\UpdateRequests\UpdateVisitorRequest;
use App\Http\Resources\VisitorResource;
use App\Models\Visitor;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return VisitorResource::collection(Visitor::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVisitorRequest $request)
    {
        return new VisitorResource(Visitor::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Visitor $visitor)
    {
        return new VisitorResource($visitor);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVisitorRequest $request, Visitor $visitor)
    {
        $visitor->update($request->all());
        return new VisitorResource($visitor);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visitor $visitor)
    {
        $visitor->delete();
        return response()->json(null, 204);
    }
}
