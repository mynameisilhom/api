<?php

namespace App\Http\Controllers\RequestsControllers;

use App\Http\Requests\StoreRequests\StoreLanguageRequest;
use App\Http\Requests\UpdateRequests\UpdateLanguageRequest;
use App\Http\Resources\LanguageResource;
use App\Models\Language;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return LanguageResource::collection(Language::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLanguageRequest $request)
    {
        return new LanguageResource(Language::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Language $language)
    {
        return new LanguageResource($language);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLanguageRequest $request, Language $language)
    {
        $language->update($request->all());
        return new LanguageResource($language);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        $language->delete();
        return response()->json(null, 204);
    }
}
