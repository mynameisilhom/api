<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequests\StoreNews_UzRequest;
use App\Http\Requests\UpdateRequests\UpdateNews_UzRequest;
use App\Http\Resources\News_UzResource;
use App\Models\News_Uz;

class NewsUzController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return News_UzResource::collection(News_Uz::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNews_UzRequest $request)
    {
        return new News_UzResource(News_Uz::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(News_Uz $news_Uz)
    {
        return new News_UzResource($news_Uz);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNews_UzRequest $request, News_Uz $news_Uz)
    {
        $news_Uz->update($request->all());
        return new News_UzResource($news_Uz);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News_Uz $news_Uz)
    {
        $news_Uz->delete();
        return response()->json(null, 204);
    }
}
