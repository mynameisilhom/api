<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
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
 */
class FileController extends Controller
{
    //
}
