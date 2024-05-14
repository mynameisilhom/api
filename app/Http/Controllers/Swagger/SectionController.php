<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * @OA\Post(
 *     path="/api/v1/sections",
 *     summary="Создание раздела",
 *     tags={"Разделы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для создания раздела",
 *         @OA\JsonContent(
 *             required={"name", "department_id"},
 *             @OA\Property(property="name", type="string", example="Раздел продаж"),
 *             @OA\Property(property="department_id", type="integer", example=1),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=201, description="Раздел успешно создан"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 */

class SectionController extends Controller
{
    //
}
