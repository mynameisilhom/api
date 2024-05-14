<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequests\StoreNews_RuRequest;
use App\Http\Requests\UpdateRequests\UpdateNews_RuRequest;
use App\Http\Resources\News_RuResource;
use App\Models\News_Ru;

class NewsRuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return News_RuResource::collection(News_Ru::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNews_RuRequest $request)
    {
        return new News_RuResource(News_Ru::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(News_Ru $news_Ru)
    {
        return new News_RuResource($news_Ru);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNews_RuRequest $request, News_Ru $news_Ru)
    {
        $news_Ru->update($request->all());
        return new News_RuResource($news_Ru);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News_Ru $news_Ru)
    {
        $news_Ru->delete();
        return response()->json(null, 204);
    }
}
