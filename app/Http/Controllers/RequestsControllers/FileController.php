<?php

namespace App\Http\Controllers\RequestsControllers;

use App\Http\Requests\StoreRequests\StoreFileRequest;
use App\Http\Requests\UpdateRequests\UpdateFileRequest;
use App\Http\Resources\FileResource;
use App\Models\File;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return FileResource::collection(File::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFileRequest $request)
    {
        return new FileResource(File::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(File $file)
    {
        return new FileResource($file);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFileRequest $request, File $file)
    {
        $file->update($request->all());
        return new FileResource($file);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        $file->delete();
        return response()->json(null, 204);
    }
}
