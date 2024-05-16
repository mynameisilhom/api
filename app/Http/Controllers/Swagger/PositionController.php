<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Get(
 *      path="/api/v1/positions",
 *      summary="Получение списка всех должностей",
 *      tags={"Должности"},
 *      security={{"bearerAuth": {}}},
 *      @OA\Response(response=200, description="Список должностей",
 *          @OA\JsonContent(
 *              type="array",
 *              @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Менеджер"),
 *                  @OA\Property(property="time_id", type="integer", example=1),
 *                  @OA\Property(property="department_id", type="integer", example=1),
 *                  @OA\Property(property="section_id", type="integer", example=1),
 *                  @OA\Property(property="role_id", type="integer", example=1),
 *                  @OA\Property(property="phone", type="string", example="123456789"),
 *                  @OA\Property(property="active", type="boolean", example=true),
 *                  @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
 *                  @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00Z")
 *              )
 *          )
 *      ),
 *      @OA\Response(response=401, description="Неавторизованный запрос")
 *  )
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
 * @OA\Get(
 *     path="/api/v1/positions/{id}",
 *     summary="Получение должности",
 *     tags={"Должности"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID должности",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Должность найдена"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Должность не найдена"),
 * )
 * @OA\Put(
 *     path="/api/v1/positions/{id}",
 *     summary="Обновление должности",
 *     tags={"Должности"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID должности",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для обновления должности",
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
 *     @OA\Response(response=200, description="Должность успешно обновлена"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Должность не найдена"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Delete(
 *     path="/api/v1/positions/{id}",
 *     summary="Удаление должности",
 *     tags={"Должности"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID должности",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Должность успешно удалена"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Должность не найдена"),
 * )
 */
class PositionController extends Controller
{
    //
}
