<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * @OA\Get(
 *     path="/api/v1/permission_roles",
 *     summary="Получение списка всех связей между разрешениями и ролями",
 *     tags={"Разрешения и Роли"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Response(response=200, description="Список связей",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="role_id", type="integer", example=1),
 *                 @OA\Property(property="permission_id", type="integer", example=1),
 *                 @OA\Property(property="active", type="boolean", example=true),
 *                 @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
 *                 @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00Z")
 *             )
 *         )
 *     ),
 *     @OA\Response(response=401, description="Неавторизованный запрос")
 * )
 * @OA\Post(
 *      path="/api/v1/permission_roles",
 *      summary="Создание связи между разрешениями и ролями",
 *      tags={"Разрешения и Роли"},
 *      security={{"bearerAuth": {}}},
 *      @OA\RequestBody(
 *          required=true,
 *          description="Данные для создания связи",
 *          @OA\JsonContent(
 *              required={"role_id", "permission_id"},
 *              @OA\Property(property="role_id", type="integer", example=1),
 *              @OA\Property(property="permission_id", type="integer", example=1),
 *              @OA\Property(property="active", type="boolean", example=true),
 *          )
 *      ),
 *      @OA\Response(response=201, description="Связь успешно создана"),
 *      @OA\Response(response=401, description="Неавторизованный запрос"),
 *      @OA\Response(response=422, description="Некорректные данные"),
 *  )
 * @OA\Get(
 *     path="/api/v1/permission_roles/{id}",
 *     summary="Получение связи между разрешением и ролью",
 *     tags={"Разрешения и Роли"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID связи",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Связь найдена"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Связь не найдена"),
 * )
 * @OA\Put(
 *     path="/api/v1/permission_roles/{id}",
 *     summary="Обновление связи между разрешением и ролью",
 *     tags={"Разрешения и Роли"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID связи",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для обновления связи",
 *         @OA\JsonContent(
 *             required={"role_id", "permission_id"},
 *             @OA\Property(property="role_id", type="integer", example=1),
 *             @OA\Property(property="permission_id", type="integer", example=1),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=200, description="Связь успешно обновлена"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Связь не найдена"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Delete(
 *     path="/api/v1/permission_roles/{id}",
 *     summary="Удаление связи между разрешением и ролью",
 *     tags={"Разрешения и Роли"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID связи",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Связь успешно удалена"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Связь не найдена"),
 * )
 */
class Permission_RoleController extends Controller
{
    //
}

