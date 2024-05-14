<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * @OA\Post(
 *     path="/api/v1/pages",
 *     summary="Создание страницы",
 *     tags={"Страницы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для создания страницы",
 *         @OA\JsonContent(
 *             required={"title", "route", "type"},
 *             @OA\Property(property="title", type="string", example="Главная страница"),
 *             @OA\Property(property="route", type="string", example="/home"),
 *             @OA\Property(property="type", type="string", example="Главная"),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=201, description="Страница успешно создана"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 */

class PageController extends Controller
{
    //
}
