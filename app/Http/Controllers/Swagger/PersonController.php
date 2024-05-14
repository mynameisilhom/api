<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * @OA\Post(
 *     path="/api/v1/people",
 *     summary="Создание записи о человеке",
 *     tags={"Люди"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для создания записи о человеке",
 *         @OA\JsonContent(
 *             required={"user_id", "department_id", "section_id", "position_id", "role_id"},
 *             @OA\Property(property="user_id", type="integer", example=1),
 *             @OA\Property(property="department_id", type="integer", example=1),
 *             @OA\Property(property="section_id", type="integer", example=1),
 *             @OA\Property(property="position_id", type="integer", example=1),
 *             @OA\Property(property="role_id", type="integer", example=1),
 *             @OA\Property(property="avatar", type="string", example="avatar.jpg"),
 *             @OA\Property(property="phone", type="string", example="123456789"),
 *             @OA\Property(property="passport_number", type="string", example="AB1234567"),
 *             @OA\Property(property="passport_pin", type="integer", example=123456789),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=201, description="Запись о человеке успешно создана"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 */

class PersonController extends Controller
{
    //
}
