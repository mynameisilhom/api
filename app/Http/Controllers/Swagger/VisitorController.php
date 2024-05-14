<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * @OA\Post(
 *     path="/api/v1/visitors",
 *     summary="Создание записи о посетителе",
 *     tags={"Посетители"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для создания записи о посетителе",
 *         @OA\JsonContent(
 *             required={"site", "uz", "ru", "en", "auto", "machine", "electrics", "logistics", "intellectual", "economics"},
 *             @OA\Property(property="site", type="integer", example=1),
 *             @OA\Property(property="uz", type="integer", example=10),
 *             @OA\Property(property="ru", type="integer", example=5),
 *             @OA\Property(property="en", type="integer", example=3),
 *             @OA\Property(property="auto", type="integer", example=2),
 *             @OA\Property(property="machine", type="integer", example=3),
 *             @OA\Property(property="electrics", type="integer", example=4),
 *             @OA\Property(property="logistics", type="integer", example=5),
 *             @OA\Property(property="intellectual", type="integer", example=6),
 *             @OA\Property(property="economics", type="integer", example=7),
 *         )
 *     ),
 *     @OA\Response(response=201, description="Запись о посетителе успешно создана"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 */

class VisitorController extends Controller
{
    //
}
