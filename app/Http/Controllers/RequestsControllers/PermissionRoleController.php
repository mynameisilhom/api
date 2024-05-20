<?php

namespace App\Http\Controllers\RequestsControllers;

use App\Http\Requests\StoreRequests\StorePermission_RoleRequest;
use App\Http\Requests\UpdateRequests\UpdatePermission_RoleRequest;
use App\Http\Resources\Permission_RoleResource;
use App\Models\Permission_Role;

class PermissionRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Permission_RoleResource::collection(Permission_Role::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePermission_RoleRequest $request)
    {
        return new Permission_RoleResource(Permission_Role::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission_Role $permission_Role)
    {
        return new Permission_RoleResource($permission_Role);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePermission_RoleRequest $request, Permission_Role $permission_Role)
    {
        $permission_Role->update($request->all());
        return new Permission_RoleResource($permission_Role);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission_Role $permission_Role)
    {
        $permission_Role->delete();
        return response()->json(null, 204);
    }
}
