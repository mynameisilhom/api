<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * @OA\Post(
 *     path="/api/v1/permission_roles",
 *     summary="Создание связи между разрешениями и ролями",
 *     tags={"Разрешения и Роли"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для создания связи",
 *         @OA\JsonContent(
 *             required={"role_id", "permission_id"},
 *             @OA\Property(property="role_id", type="integer", example=1),
 *             @OA\Property(property="permission_id", type="integer", example=1),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=201, description="Связь успешно создана"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 */

class Permission_RoleController extends Controller
{
    //
}
