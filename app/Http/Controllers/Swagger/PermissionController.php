<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\RequestsControllers\Controller;

/**
 * @OA\Get(
 *      path="/api/v1/permissions",
 *      summary="Получение списка всех разрешений",
 *      tags={"Разрешения"},
 *      security={{"bearerAuth": {}}},
 *      @OA\Response(response=200, description="Список разрешений",
 *          @OA\JsonContent(
 *              type="array",
 *              @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Разрешение на чтение"),
 *                  @OA\Property(property="active", type="boolean", example=true),
 *                  @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
 *                  @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00Z")
 *              )
 *          )
 *      ),
 *      @OA\Response(response=401, description="Неавторизованный запрос")
 *  )
 * @OA\Post(
 *     path="/api/v1/permissions",
 *     summary="Создание разрешения",
 *     tags={"Разрешения"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=false,
 *         description="Данные для создания разрешения",
 *         @OA\JsonContent(
 *             required={"name"},
 *             @OA\Property(property="name", type="string", example="Разрешение на чтение"),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=201, description="Разрешение успешно создано"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Get(
 *     path="/api/v1/permissions/{id}",
 *     summary="Получение разрешения",
 *     tags={"Разрешения"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=false,
 *         description="ID разрешения",
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
 *      name="active",
 *      in="query",
 *      required=false,
 *      description="Активность",
 *      @OA\Schema(type="boolean")
 *  ),
 *     @OA\Response(response=200, description="Разрешение найдено"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Разрешение не найдено"),
 * )
 * @OA\Put(
 *     path="/api/v1/permissions/{id}",
 *     summary="Обновление разрешения",
 *     tags={"Разрешения"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=false,
 *         description="ID разрешения",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=false,
 *         description="Данные для обновления разрешения",
 *         @OA\JsonContent(
 *             required={"name"},
 *             @OA\Property(property="name", type="string", example="Разрешение на чтение"),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=200, description="Разрешение успешно обновлено"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Разрешение не найдено"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Delete(
 *     path="/api/v1/permissions/{id}",
 *     summary="Удаление разрешения",
 *     tags={"Разрешения"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=false,
 *         description="ID разрешения",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Разрешение успешно удалено"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Разрешение не найдено"),
 * )
 */
class PermissionController extends Controller
{
    //
}
