<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Get(
 *     path="/api/v1/news_rus",
 *     summary="Получение списка всех новостей на русском",
 *     tags={"Новости"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Response(response=200, description="Список новостей",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="title", type="string", example="Заголовок новости"),
 *                 @OA\Property(property="slug", type="string", example="slug-novosti"),
 *                 @OA\Property(property="content", type="string", example="Содержание новости..."),
 *                 @OA\Property(property="likes", type="integer", example=0),
 *                 @OA\Property(property="file_id", type="integer", example=1),
 *                 @OA\Property(property="user_id", type="integer", example=1),
 *                 @OA\Property(property="views", type="integer", example=0),
 *                 @OA\Property(property="published", type="boolean", example=true),
 *                 @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
 *                 @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00Z")
 *             )
 *         )
 *     ),
 *     @OA\Response(response=401, description="Неавторизованный запрос")
 * )
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
 * @OA\Get(
 *     path="/api/v1/news_rus/{id}",
 *     summary="Получение новости на русском",
 *     tags={"Новости"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID новости",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Новость найдена"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Новость не найдена"),
 * )
 * @OA\Put(
 *     path="/api/v1/news_rus/{id}",
 *     summary="Обновление новости на русском",
 *     tags={"Новости"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID новости",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для обновления новости",
 *         @OA\JsonContent(
 *             required={"title", "slug", "content", "likes", "file_id", "user_id"},
 *             @OA\Property(property="title", type="string", example="Обновленный заголовок новости"),
 *             @OA\Property(property="slug", type="string", example="updated-slug-novosti"),
 *             @OA\Property(property="content", type="string", example="Обновленное содержание новости..."),
 *             @OA\Property(property="likes", type="integer", example=10),
 *             @OA\Property(property="file_id", type="integer", example=1),
 *             @OA\Property(property="user_id", type="integer", example=1),
 *             @OA\Property(property="views", type="integer", example=100),
 *             @OA\Property(property="published", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=200, description="Новость успешно обновлена"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Новость не найдена"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Delete(
 *     path="/api/v1/news_rus/{id}",
 *     summary="Удаление новости на русском",
 *     tags={"Новости"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID новости",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Новость успешно удалена"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Новость не найдена"),
 * )
 */
class News_RuController extends Controller
{
    // Методы контроллера будут здесь
}
