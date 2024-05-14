<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * @OA\Post(
 *     path="/api/v1/logs",
 *     summary="Создание лога",
 *     tags={"Логи"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для создания лога",
 *         @OA\JsonContent(
 *             required={"title", "from", "to", "year", "month", "day", "user_id", "url"},
 *             @OA\Property(property="title", type="string", example="Лог действия"),
 *             @OA\Property(property="from", type="string", example="Откуда"),
 *             @OA\Property(property="to", type="string", example="Куда"),
 *             @OA\Property(property="year", type="integer", example=2024),
 *             @OA\Property(property="month", type="integer", example=5),
 *             @OA\Property(property="day", type="integer", example=14),
 *             @OA\Property(property="user_id", type="integer", example=1),
 *             @OA\Property(property="url", type="string", example="/api/v1/logs"),
 *             @OA\Property(property="ip_address", type="string", example="192.168.1.1"),
 *         )
 *     ),
 *     @OA\Response(response=201, description="Лог успешно создан"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 */

class LogController extends Controller
{
    //
}
