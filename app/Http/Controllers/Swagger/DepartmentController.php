<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Post(
 *     path="/api/v1/departments",
 *     summary="Создание отдела",
 *     tags={"Отделы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для создания отдела",
 *         @OA\JsonContent(
 *             required={"name", "phone", "code"},
 *             @OA\Property(property="name", type="string", example="Отдел продаж"),
 *             @OA\Property(property="info", type="string", example="Информация об отделе"),
 *             @OA\Property(property="phone", type="string", example="123456789"),
 *             @OA\Property(property="code", type="string", maxLength=10, example="DEPT1234"),
 *             @OA\Property(property="structure_type_name", type="string", example="Название типа структуры"),
 *             @OA\Property(property="structure_type_code", type="string", example="STRUCT123"),
 *             @OA\Property(property="locality_type_name", type="string", example="Название типа местности"),
 *             @OA\Property(property="locality_type_code", type="string", example="LOC123"),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=201, description="Отдел успешно создан"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Get(
 *     path="/api/v1/departments/{id}",
 *     summary="Получение отдела",
 *     tags={"Отделы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID отдела",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Отдел найден"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Отдел не найден"),
 * )
 * @OA\Put(
 *     path="/api/v1/departments/{id}",
 *     summary="Обновление отдела",
 *     tags={"Отделы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID отдела",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         description="Данные для обновления отдела",
 *         @OA\JsonContent(
 *             required={"name", "phone", "code"},
 *             @OA\Property(property="name", type="string", example="Отдел продаж"),
 *             @OA\Property(property="info", type="string", example="Информация об отделе"),
 *             @OA\Property(property="phone", type="string", example="123456789"),
 *             @OA\Property(property="code", type="string", maxLength=10, example="DEPT1234"),
 *             @OA\Property(property="structure_type_name", type="string", example="Название типа структуры"),
 *             @OA\Property(property="structure_type_code", type="string", example="STRUCT123"),
 *             @OA\Property(property="locality_type_name", type="string", example="Название типа местности"),
 *             @OA\Property(property="locality_type_code", type="string", example="LOC123"),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=200, description="Отдел успешно обновлен"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Отдел не найден"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Delete(
 *     path="/api/v1/departments/{id}",
 *     summary="Удаление отдела",
 *     tags={"Отделы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID отдела",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Отдел успешно удален"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Отдел не найден"),
 * )
 */


class DepartmentController extends Controller
{
    //
}
