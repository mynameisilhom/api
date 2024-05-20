<?php

namespace App\Http\Controllers\RequestsControllers;

use App\Http\Requests\StoreRequests\StoreNews_EnRequest;
use App\Http\Requests\UpdateRequests\UpdateNews_EnRequest;
use App\Http\Resources\News_EnResource;
use App\Models\News_En;

class NewsEnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return News_EnResource::collection(News_En::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNews_EnRequest $request)
    {
        return new News_EnResource(News_En::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(News_En $news_En)
    {
        return new News_EnResource($news_En);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNews_EnRequest $request, News_En $news_En)
    {
        $news_En->update($request->all());
        return new News_EnResource($news_En);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News_En $news_En)
    {
        $news_En->delete();
        return response()->json(null, 204);
    }
}
