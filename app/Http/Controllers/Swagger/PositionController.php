<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * @OA\Post(
 *     path="/api/v1/positions",
 *     summary="Создание должности",
 *     tags={"Должности"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для создания должности",
 *         @OA\JsonContent(
 *             required={"name", "time_id", "department_id", "section_id", "role_id"},
 *             @OA\Property(property="name", type="string", example="Менеджер"),
 *             @OA\Property(property="time_id", type="integer", example=1),
 *             @OA\Property(property="department_id", type="integer", example=1),
 *             @OA\Property(property="section_id", type="integer", example=1),
 *             @OA\Property(property="role_id", type="integer", example=1),
 *             @OA\Property(property="phone", type="string", example="123456789"),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=201, description="Должность успешно создана"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 */

class PositionController extends Controller
{
    //
}
