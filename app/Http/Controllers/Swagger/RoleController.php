<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\RequestsControllers\Controller;

/**
 * @OA\Get(
 *      path="/api/v1/roles",
 *      summary="Получение списка всех ролей",
 *      tags={"Роли"},
 *      security={{"bearerAuth": {}}},
 *      @OA\Response(response=200, description="Список ролей",
 *          @OA\JsonContent(
 *              type="array",
 *              @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Менеджер"),
 *                  @OA\Property(property="active", type="boolean", example=true),
 *                  @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
 *                  @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00Z")
 *              )
 *          )
 *      ),
 *      @OA\Response(response=401, description="Неавторизованный запрос")
 *  )
 * @OA\Post(
 *     path="/api/v1/roles",
 *     summary="Создание роли",
 *     tags={"Роли"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=false,
 *         description="Данные для создания роли",
 *         @OA\JsonContent(
 *             required={"name"},
 *             @OA\Property(property="name", type="string", example="Менеджер"),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=201, description="Роль успешно создана"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Get(
 *     path="/api/v1/roles/{id}",
 *     summary="Получение роли",
 *     tags={"Роли"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=false,
 *         description="ID роли",
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
 *     @OA\Response(response=200, description="Роль найдена"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Роль не найдена"),
 * )
 * @OA\Put(
 *     path="/api/v1/roles/{id}",
 *     summary="Обновление роли",
 *     tags={"Роли"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=false,
 *         description="ID роли",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=false,
 *         description="Данные для обновления роли",
 *         @OA\JsonContent(
 *             required={"name"},
 *             @OA\Property(property="name", type="string", example="Менеджер"),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=200, description="Роль успешно обновлена"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Роль не найдена"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Delete(
 *     path="/api/v1/roles/{id}",
 *     summary="Удаление роли",
 *     tags={"Роли"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=false,
 *         description="ID роли",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Роль успешно удалена"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Роль не найдена"),
 * )
 */
class RoleController extends Controller
{
    //
}
