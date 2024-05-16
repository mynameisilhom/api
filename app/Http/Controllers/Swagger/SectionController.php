<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Get(
 *      path="/api/v1/sections",
 *      summary="Получение списка всех разделов",
 *      tags={"Разделы"},
 *      security={{"bearerAuth": {}}},
 *      @OA\Response(response=200, description="Список разделов",
 *          @OA\JsonContent(
 *              type="array",
 *              @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Раздел продаж"),
 *                  @OA\Property(property="department_id", type="integer", example=1),
 *                  @OA\Property(property="active", type="boolean", example=true),
 *                  @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
 *                  @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00Z")
 *              )
 *          )
 *      ),
 *      @OA\Response(response=401, description="Неавторизованный запрос")
 *  )
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
 * @OA\Get(
 *     path="/api/v1/sections/{id}",
 *     summary="Получение раздела",
 *     tags={"Разделы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID раздела",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Раздел найден"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Раздел не найден"),
 * )
 * @OA\Put(
 *     path="/api/v1/sections/{id}",
 *     summary="Обновление раздела",
 *     tags={"Разделы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID раздела",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для обновления раздела",
 *         @OA\JsonContent(
 *             required={"name", "department_id"},
 *             @OA\Property(property="name", type="string", example="Раздел продаж"),
 *             @OA\Property(property="department_id", type="integer", example=1),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=200, description="Раздел успешно обновлен"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Раздел не найден"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Delete(
 *     path="/api/v1/sections/{id}",
 *     summary="Удаление раздела",
 *     tags={"Разделы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID раздела",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Раздел успешно удален"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Раздел не найден"),
 * )
 */
class SectionController extends Controller
{
    //
}
