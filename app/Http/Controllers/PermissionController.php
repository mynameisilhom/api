<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequests\StorePermissionRequest;
use App\Http\Requests\UpdateRequests\UpdatePermissionRequest;
use App\Http\Resources\PermissionResource;
use App\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PermissionResource::collection(Permission::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePermissionRequest $request)
    {
        return new PermissionResource(Permission::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        return new PermissionResource($permission);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        $permission->update($request->all());
        return new PermissionResource($permission);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return response()->json(null, 204);
    }
}
