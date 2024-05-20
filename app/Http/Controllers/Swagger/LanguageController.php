<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\RequestsControllers\Controller;

/**
 * @OA\Get(
 *     path="/api/v1/languages",
 *     summary="Получение списка всех языков",
 *     tags={"Языки"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Response(response=200, description="Список языков",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="language", type="string", example="Русский"),
 *                 @OA\Property(property="active", type="boolean", example=true),
 *                 @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
 *                 @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00Z")
 *             )
 *         )
 *     ),
 *     @OA\Response(response=401, description="Неавторизованный запрос")
 * )
 * @OA\Post(
 *     path="/api/v1/languages",
 *     summary="Создание языка",
 *     tags={"Языки"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для создания языка",
 *         @OA\JsonContent(
 *             required={"language"},
 *             @OA\Property(property="language", type="string", example="Русский"),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=201, description="Язык успешно создан"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Get(
 *     path="/api/v1/languages/{id}",
 *     summary="Получение языка",
 *     tags={"Языки"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID языка",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Язык найден"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Язык не найден"),
 * )
 * @OA\Put(
 *     path="/api/v1/languages/{id}",
 *     summary="Обновление языка",
 *     tags={"Языки"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID языка",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для обновления языка",
 *         @OA\JsonContent(
 *             required={"language"},
 *             @OA\Property(property="language", type="string", example="Русский"),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=200, description="Язык успешно обновлен"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Язык не найден"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Delete(
 *     path="/api/v1/languages/{id}",
 *     summary="Удаление языка",
 *     tags={"Языки"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID языка",
 *         @OA\Schema(type="integer")
 *     ),
 *      @OA\Parameter(
 *      name="language",
 *      in="query",
 *      required=true,
 *      description="Язык",
 *      @OA\Schema(type="string", maxLength=255)
 *      ),
 *      @OA\Parameter(
 *      name="active",
 *      in="query",
 *      required=false,
 *      description="Активность",
 *      @OA\Schema(type="boolean")
 *      ),
 *     @OA\Response(response=204, description="Язык успешно удален"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Язык не найден"),
 * )
 */
class LanguageController extends Controller
{
    // Методы контроллера будут здесь
}
