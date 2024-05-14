<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequests\StorePageRequest;
use App\Http\Requests\UpdateRequests\UpdatePageRequest;
use App\Http\Resources\PageResource;
use App\Models\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PageResource::collection(Page::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageRequest $request)
    {
        return new PageResource(Page::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        return new PageResource($page);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $page->update($request->all());
        return new PageResource($page);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return response()->json(null, 204);
    }
}
