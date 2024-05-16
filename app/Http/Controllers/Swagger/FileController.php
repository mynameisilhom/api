<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * @OA\Get(
 *     path="/api/v1/files",
 *     summary="Получение списка всех файлов",
 *     tags={"Файлы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Response(response=200, description="Список файлов",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="title", type="string", example="Мой документ"),
 *                 @OA\Property(property="slug", type="string", example="moi-dokument"),
 *                 @OA\Property(property="author_id", type="integer", example=1),
 *                 @OA\Property(property="user_id", type="integer", example=2),
 *                 @OA\Property(property="types_id", type="integer", example=1),
 *                 @OA\Property(property="format_id", type="integer", example=1),
 *                 @OA\Property(property="group_of", type="integer", example=1),
 *                 @OA\Property(property="part_of", type="integer", example=1),
 *                 @OA\Property(property="used_times", type="integer", example=0),
 *                 @OA\Property(property="zip", type="string", example="my-document.zip"),
 *                 @OA\Property(property="active", type="boolean", example=true),
 *                 @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
 *                 @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00Z")
 *             )
 *         )
 *     ),
 *     @OA\Response(response=401, description="Неавторизованный запрос")
 * )
 * @OA\Post(
 *     path="/api/v1/files",
 *     summary="Создание файла",
 *     tags={"Файлы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для создания файла",
 *         @OA\JsonContent(
 *             required={"title", "slug", "author_id", "user_id", "types_id", "format_id"},
 *             @OA\Property(property="title", type="string", example="Мой документ"),
 *             @OA\Property(property="slug", type="string", example="moi-dokument"),
 *             @OA\Property(property="author_id", type="integer", example=1),
 *             @OA\Property(property="user_id", type="integer", example=2),
 *             @OA\Property(property="types_id", type="integer", example=1),
 *             @OA\Property(property="format_id", type="integer", example=1),
 *             @OA\Property(property="group_of", type="integer", example=1),
 *             @OA\Property(property="part_of", type="integer", example=1),
 *             @OA\Property(property="used_times", type="integer", example=0),
 *             @OA\Property(property="zip", type="string", example="my-document.zip"),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=201, description="Файл успешно создан"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Get(
 *     path="/api/v1/files/{id}",
 *     summary="Получение файла",
 *     tags={"Файлы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID файла",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Файл найден"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Файл не найден"),
 * )
 * @OA\Put(
 *     path="/api/v1/files/{id}",
 *     summary="Обновление файла",
 *     tags={"Файлы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID файла",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для обновления файла",
 *         @OA\JsonContent(
 *             required={"title", "slug", "author_id", "user_id", "types_id", "format_id"},
 *             @OA\Property(property="title", type="string", example="Мой обновленный документ"),
 *             @OA\Property(property="slug", type="string", example="moi-obnovlennyi-dokument"),
 *             @OA\Property(property="author_id", type="integer", example=1),
 *             @OA\Property(property="user_id", type="integer", example=2),
 *             @OA\Property(property="types_id", type="integer", example=1),
 *             @OA\Property(property="format_id", type="integer", example=1),
 *             @OA\Property(property="group_of", type="integer", example=1),
 *             @OA\Property(property="part_of", type="integer", example=1),
 *             @OA\Property(property="used_times", type="integer", example=1),
 *             @OA\Property(property="zip", type="string", example="my-updated-document.zip"),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=200, description="Файл успешно обновлен"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Файл не найден"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Delete(
 *     path="/api/v1/files/{id}",
 *     summary="Удаление файла",
 *     tags={"Файлы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID файла",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Файл успешно удален"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Файл не найден"),
 * )
 */
class FileController extends Controller
{
    //
}
