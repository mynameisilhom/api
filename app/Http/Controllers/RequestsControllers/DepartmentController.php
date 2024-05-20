<?php

namespace App\Http\Controllers\RequestsControllers;

use App\Http\Requests\StoreRequests\StoreDepartmentRequest;
use App\Http\Requests\UpdateRequests\UpdateDepartmentRequest;
use App\Http\Resources\DepartmentResource;
use App\Models\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DepartmentResource::collection(Department::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartmentRequest $request)
    {
        return new DepartmentResource(Department::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return new DepartmentResource($department);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        $department->update($request->all());
        return new DepartmentResource($department);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return response()->json(null, 204);
    }
}
