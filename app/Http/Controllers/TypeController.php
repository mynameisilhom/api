<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequests\StoreTypeRequest;
use App\Http\Requests\UpdateRequests\UpdateTypeRequest;
use App\Http\Resources\TypeResource;
use App\Models\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TypeResource::collection(Type::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeRequest $request)
    {
        return new TypeResource(Type::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        return new TypeResource($type);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeRequest $request, Type $type)
    {
        $type->update($request->all());
        return new TypeResource($type);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return response()->json(null, 204);
    }
}
