<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
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
 */

class LanguageController extends Controller
{
    //
}
