<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Get(
 *     path="/api/v1/formats",
 *     summary="Получение списка всех форматов",
 *     tags={"Форматы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Response(response=200, description="Список форматов",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="name", type="string", example="PDF"),
 *                 @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
 *                 @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00Z")
 *             )
 *         )
 *     ),
 *     @OA\Response(response=401, description="Неавторизованный запрос")
 * )
 * @OA\Post(
 *     path="/api/v1/formats",
 *     summary="Создание формата",
 *     tags={"Форматы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для создания формата",
 *         @OA\JsonContent(
 *             required={"name"},
 *             @OA\Property(property="name", type="string", example="PDF"),
 *         )
 *     ),
 *     @OA\Response(response=201, description="Формат успешно создан"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Get(
 *     path="/api/v1/formats/{id}",
 *     summary="Получение формата",
 *     tags={"Форматы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID формата",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Формат найден"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Формат не найден"),
 * )
 * @OA\Put(
 *     path="/api/v1/formats/{id}",
 *     summary="Обновление формата",
 *     tags={"Форматы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID формата",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для обновления формата",
 *         @OA\JsonContent(
 *             required={"name"},
 *             @OA\Property(property="name", type="string", example="PDF"),
 *         )
 *     ),
 *     @OA\Response(response=200, description="Формат успешно обновлен"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Формат не найден"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Delete(
 *     path="/api/v1/formats/{id}",
 *     summary="Удаление формата",
 *     tags={"Форматы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID формата",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Формат успешно удален"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Формат не найден"),
 * )
 */
class FormatController extends Controller
{
    // Методы контроллера будут здесь
}
