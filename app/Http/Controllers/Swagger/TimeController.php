<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * @OA\Post(
 *     path="/api/v1/times",
 *     summary="Создание временного интервала",
 *     tags={"Временные интервалы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для создания временного интервала",
 *         @OA\JsonContent(
 *             required={"title", "start", "end", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"},
 *             @OA\Property(property="title", type="string", example="Рабочее время"),
 *             @OA\Property(property="start", type="string", format="time", example="08:00:00"),
 *             @OA\Property(property="end", type="string", format="time", example="17:00:00"),
 *             @OA\Property(property="monday", type="boolean", example=false),
 *             @OA\Property(property="tuesday", type="boolean", example=false),
 *             @OA\Property(property="wednesday", type="boolean", example=false),
 *             @OA\Property(property="thursday", type="boolean", example=false),
 *             @OA\Property(property="friday", type="boolean", example=false),
 *             @OA\Property(property="saturday", type="boolean", example=false),
 *             @OA\Property(property="sunday", type="boolean", example=false),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=201, description="Временный интервал успешно создан"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 */

class TimeController extends Controller
{
    //
}
