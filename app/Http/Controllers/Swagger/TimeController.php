<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Get(
 *      path="/api/v1/times",
 *      summary="Получение списка всех временных интервалов",
 *      tags={"Временные интервалы"},
 *      security={{"bearerAuth": {}}},
 *      @OA\Response(response=200, description="Список временных интервалов",
 *          @OA\JsonContent(
 *              type="array",
 *              @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="title", type="string", example="Рабочее время"),
 *                  @OA\Property(property="start", type="string", format="time", example="08:00:00"),
 *                  @OA\Property(property="end", type="string", format="time", example="17:00:00"),
 *                  @OA\Property(property="monday", type="boolean", example=false),
 *                  @OA\Property(property="tuesday", type="boolean", example=false),
 *                  @OA\Property(property="wednesday", type="boolean", example=false),
 *                  @OA\Property(property="thursday", type="boolean", example=false),
 *                  @OA\Property(property="friday", type="boolean", example=false),
 *                  @OA\Property(property="saturday", type="boolean", example=false),
 *                  @OA\Property(property="sunday", type="boolean", example=false),
 *                  @OA\Property(property="active", type="boolean", example=true),
 *                  @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
 *                  @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00Z")
 *              )
 *          )
 *      ),
 *      @OA\Response(response=401, description="Неавторизованный запрос")
 *  )
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
 * @OA\Get(
 *     path="/api/v1/times/{id}",
 *     summary="Получение временного интервала",
 *     tags={"Временные интервалы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID временного интервала",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Временный интервал найден"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Временный интервал не найден"),
 * )
 * @OA\Put(
 *     path="/api/v1/times/{id}",
 *     summary="Обновление временного интервала",
 *     tags={"Временные интервалы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID временного интервала",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для обновления временного интервала",
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
 *     @OA\Response(response=200, description="Временный интервал успешно обновлен"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Временный интервал не найден"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Delete(
 *     path="/api/v1/times/{id}",
 *     summary="Удаление временного интервала",
 *     tags={"Временные интервалы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID временного интервала",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Временный интервал успешно удален"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Временный интервал не найден"),
 * )
 */
class TimeController extends Controller
{
    //
}
