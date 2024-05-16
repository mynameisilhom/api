<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Get(
 *     path="/api/v1/logs",
 *     summary="Получение списка всех логов",
 *     tags={"Логи"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Response(response=200, description="Список логов",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="title", type="string", example="Лог действия"),
 *                 @OA\Property(property="from", type="string", example="Откуда"),
 *                 @OA\Property(property="to", type="string", example="Куда"),
 *                 @OA\Property(property="year", type="integer", example=2024),
 *                 @OA\Property(property="month", type="integer", example=5),
 *                 @OA\Property(property="day", type="integer", example=14),
 *                 @OA\Property(property="user_id", type="integer", example=1),
 *                 @OA\Property(property="url", type="string", example="/api/v1/logs"),
 *                 @OA\Property(property="ip_address", type="string", example="192.168.1.1"),
 *                 @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
 *                 @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00Z")
 *             )
 *         )
 *     ),
 *     @OA\Response(response=401, description="Неавторизованный запрос")
 * )
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
 * @OA\Get(
 *     path="/api/v1/logs/{id}",
 *     summary="Получение лога",
 *     tags={"Логи"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID лога",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Лог найден"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Лог не найден"),
 * )
 * @OA\Put(
 *     path="/api/v1/logs/{id}",
 *     summary="Обновление лога",
 *     tags={"Логи"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID лога",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для обновления лога",
 *         @OA\JsonContent(
 *             required={"title", "from", "to", "year", "month", "day", "user_id", "url"},
 *             @OA\Property(property="title", type="string", example="Обновленный лог действия"),
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
 *     @OA\Response(response=200, description="Лог успешно обновлен"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Лог не найден"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Delete(
 *     path="/api/v1/logs/{id}",
 *     summary="Удаление лога",
 *     tags={"Логи"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID лога",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Лог успешно удален"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Лог не найден"),
 * )
 */
class LogController extends Controller
{
    // Методы контроллера будут здесь
}
