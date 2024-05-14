<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequests\StoreSectionRequest;
use App\Http\Requests\UpdateRequests\UpdateSectionRequest;
use App\Http\Resources\SectionResource;
use App\Models\Section;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SectionResource::collection(Section::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSectionRequest $request)
    {
        return new SectionResource(Section::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        return new SectionResource($section);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSectionRequest $request, Section $section)
    {
        $section->update($request->all());
        return new SectionResource($section);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        $section->delete();
        return response()->json(null, 204);
    }
}
