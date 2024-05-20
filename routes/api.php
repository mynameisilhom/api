<?php

use App\Http\Controllers\RequestsControllers\AuthController;
use App\Http\Controllers\RequestsControllers\CategoryController;
use App\Http\Controllers\RequestsControllers\DepartmentController;
use App\Http\Controllers\RequestsControllers\FileController;
use App\Http\Controllers\RequestsControllers\FormatController;
use App\Http\Controllers\RequestsControllers\LanguageController;
use App\Http\Controllers\RequestsControllers\LogController;
use App\Http\Controllers\RequestsControllers\NewsEnController;
use App\Http\Controllers\RequestsControllers\NewsRuController;
use App\Http\Controllers\RequestsControllers\NewsUzController;
use App\Http\Controllers\RequestsControllers\PageController;
use App\Http\Controllers\RequestsControllers\PermissionController;
use App\Http\Controllers\RequestsControllers\PermissionRoleController;
use App\Http\Controllers\RequestsControllers\PersonController;
use App\Http\Controllers\RequestsControllers\PositionController;
use App\Http\Controllers\RequestsControllers\PostController;
use App\Http\Controllers\RequestsControllers\RoleController;
use App\Http\Controllers\RequestsControllers\SectionController;
use App\Http\Controllers\RequestsControllers\TimeController;
use App\Http\Controllers\RequestsControllers\TypeController;
use App\Http\Controllers\RequestsControllers\VisitorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->middleware('throttle:api')->group(function () {
    Route::post('register', [AuthController::class,'register']);
    Route::post('login', [AuthController::class,'login']);
});

Route::prefix('v1')->middleware(['auth:sanctum','throttle:api'])->group(function () {
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('posts', PostController::class);

    Route::apiResource('departments', DepartmentController::class);
    Route::apiResource('files', FileController::class);
    Route::apiResource('formats', FormatController::class);
    Route::apiResource('languages', LanguageController::class);
    Route::apiResource('logs', LogController::class);
    Route::apiResource('news-en', NewsEnController::class);
    Route::apiResource('news-ru', NewsRuController::class);
    Route::apiResource('news-uz', NewsUzController::class);
    Route::apiResource('pages', PageController::class);
    Route::apiResource('permissions', PermissionController::class);
    Route::apiResource('permission-roles', PermissionRoleController::class);
    Route::apiResource('persons', PersonController::class);
    Route::apiResource('positions', PositionController::class);
    Route::apiResource('roles', RoleController::class);
    Route::apiResource('sections', SectionController::class);
    Route::apiResource('times', TimeController::class);
    Route::apiResource('types', TypeController::class);
    Route::apiResource('visitors', VisitorController::class);

    Route::get('logout', [AuthController::class,'logout'])->name('logout');
});
