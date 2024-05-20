<?php

namespace App\Http\Controllers\RequestsControllers;

use App\Http\Requests\StoreRequests\StorePersonRequest;
use App\Http\Requests\UpdateRequests\UpdatePersonRequest;
use App\Http\Resources\PersonResource;
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PersonResource::collection(Person::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonRequest $request)
    {
        return new PersonResource(Person::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        return new PersonResource($person);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonRequest $request, Person $person)
    {
        $person->update($request->all());
        return new PersonResource($person);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        $person->delete();
        return response()->json(null, 204);
    }
}
