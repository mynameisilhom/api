<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * @OA\Post(
 *     path="/api/v1/news_rus",
 *     summary="Создание новости на русском",
 *     tags={"Новости"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для создания новости",
 *         @OA\JsonContent(
 *             required={"title", "slug", "content", "likes", "file_id", "user_id"},
 *             @OA\Property(property="title", type="string", example="Заголовок новости"),
 *             @OA\Property(property="slug", type="string", example="slug-novosti"),
 *             @OA\Property(property="content", type="string", example="Содержание новости..."),
 *             @OA\Property(property="likes", type="integer", example=0),
 *             @OA\Property(property="file_id", type="integer", example=1),
 *             @OA\Property(property="user_id", type="integer", example=1),
 *             @OA\Property(property="views", type="integer", example=0),
 *             @OA\Property(property="published", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=201, description="Новость успешно создана"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 */

class News_RuController extends Controller
{
    //
}
