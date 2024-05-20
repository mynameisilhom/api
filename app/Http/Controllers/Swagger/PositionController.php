<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\RequestsControllers\Controller;

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
 *         required=false,
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
 *         required=false,
 *         description="ID должности",
 *         @OA\Schema(type="integer")
 *     ),
 *      @OA\Parameter(
 *      name="name",
 *      in="query",
 *      required=false,
 *      description="Название",
 *      @OA\Schema(type="string", maxLength=255)
 *  ),
 *  @OA\Parameter(
 *      name="time_id",
 *      in="query",
 *      required=false,
 *      description="ID времени, должен существовать в таблице times",
 *      @OA\Schema(type="integer", nullable=true)
 *  ),
 *  @OA\Parameter(
 *      name="department_id",
 *      in="query",
 *      required=false,
 *      description="ID отдела, должен существовать в таблице departments",
 *      @OA\Schema(type="integer", nullable=true)
 *  ),
 *  @OA\Parameter(
 *      name="section_id",
 *      in="query",
 *      required=false,
 *      description="ID секции, должен существовать в таблице sections",
 *      @OA\Schema(type="integer", nullable=true)
 *  ),
 *  @OA\Parameter(
 *      name="role_id",
 *      in="query",
 *      required=false,
 *      description="ID роли, должен существовать в таблице roles",
 *      @OA\Schema(type="integer", nullable=true)
 *  ),
 *  @OA\Parameter(
 *      name="phone",
 *      in="query",
 *      required=false,
 *      description="Телефон, максимальная длина 20 символов",
 *      @OA\Schema(type="string", maxLength=20, nullable=true)
 *  ),
 *  @OA\Parameter(
 *      name="active",
 *      in="query",
 *      required=false,
 *      description="Активность",
 *      @OA\Schema(type="boolean")
 *  ),
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
 *         required=false,
 *         description="ID должности",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=false,
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
 *         required=false,
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
