<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\RequestsControllers\Controller;

/**
 * @OA\Get(
 *     path="/api/v1/departments",
 *     summary="Получение списка всех отделов",
 *     tags={"Отделы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Response(response=200, description="Список отделов",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="name", type="string", example="Отдел маркетинга"),
 *                 @OA\Property(property="info", type="string", example="Информация об отделе"),
 *                 @OA\Property(property="phone", type="string", example="123456789"),
 *                 @OA\Property(property="code", type="string", maxLength=10, example="DEPT1234"),
 *                 @OA\Property(property="structure_type_name", type="string", example="Название типа структуры"),
 *                 @OA\Property(property="structure_type_code", type="string", example="STRUCT123"),
 *                 @OA\Property(property="locality_type_name", type="string", example="Название типа локализации"),
 *                 @OA\Property(property="locality_type_code", type="string", example="LOC123"),
 *                 @OA\Property(property="active", type="boolean", example=true),
 *                 @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
 *                 @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00Z")
 *             )
 *         )
 *     ),
 *     @OA\Response(response=401, description="Неавторизованный запрос")
 * )
 * @OA\Post(
 *     path="/api/v1/departments",
 *     summary="Создание отдела",
 *     tags={"Отделы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=false,
 *         description="Данные для создания отдела",
 *         @OA\JsonContent(
 *             required={"name", "phone", "code"},
 *             @OA\Property(property="name", type="string", example="Отдел маркетинга"),
 *             @OA\Property(property="info", type="string", example="Информация об отделе"),
 *             @OA\Property(property="phone", type="string", example="123456789"),
 *             @OA\Property(property="code", type="string", maxLength=10, example="DEPT1234"),
 *             @OA\Property(property="structure_type_name", type="string", example="Название типа структуры"),
 *             @OA\Property(property="structure_type_code", type="string", example="STRUCT123"),
 *             @OA\Property(property="locality_type_name", type="string", example="Название типа локализации"),
 *             @OA\Property(property="locality_type_code", type="string", example="LOC123"),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(
 *          response=201,
 *          description="Отдел успешно создан",
 *          @OA\JsonContent(
 *              example={
 *                  "message": "Отдел успешно создан",
 *                  "department": {
 *                      "id": 1,
 *                      "name": "Отдел маркетинга",
 *                      "info": "Информация об отделе",
 *                      "phone": "123456789",
 *                      "code": "DEPT1234",
 *                      "structure_type_name": "Название типа структуры",
 *                      "structure_type_code": "STRUCT123",
 *                      "locality_type_name": "Название типа локализации",
 *                      "locality_type_code": "LOC123",
 *                      "active": true,
 *                      "created_at": "2023-01-01T00:00:00Z",
 *                      "updated_at": "2023-01-01T00:00:00Z"
 *                  }
 *              }
 *          )
 *     ),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(
 *          response=422,
 *          description="Некорректные данные")
 * )
 * @OA\Get(
 *     path="/api/v1/departments/{id}",
 *     summary="Получение отдела",
 *     tags={"Отделы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=false,
 *         description="ID отдела",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Parameter(
 *         name="name",
 *         in="query",
 *         required=false,
 *         description="Название отдела",
 *         @OA\Schema(type="string", maxLength=255)
 *     ),
 *     @OA\Parameter(
 *         name="info",
 *         in="query",
 *         required=false,
 *         description="Информация об отделе",
 *         @OA\Schema(type="string", nullable=true)
 *     ),
 *     @OA\Parameter(
 *         name="phone",
 *         in="query",
 *         required=false,
 *         description="Телефон отдела",
 *         @OA\Schema(type="string", maxLength=20)
 *     ),
 *     @OA\Parameter(
 *         name="code",
 *         in="query",
 *         required=false,
 *         description="Код отдела",
 *         @OA\Schema(type="string", maxLength=10)
 *     ),
 *     @OA\Parameter(
 *         name="structure_type_name",
 *         in="query",
 *         required=false,
 *         description="Название типа структуры",
 *         @OA\Schema(type="string", maxLength=255, nullable=true)
 *     ),
 *     @OA\Parameter(
 *         name="structure_type_code",
 *         in="query",
 *         required=false,
 *         description="Код типа структуры",
 *         @OA\Schema(type="string", maxLength=255, nullable=true)
 *     ),
 *     @OA\Parameter(
 *         name="locality_type_name",
 *         in="query",
 *         required=false,
 *         description="Название типа локализации",
 *         @OA\Schema(type="string", maxLength=255, nullable=true)
 *     ),
 *     @OA\Parameter(
 *         name="locality_type_code",
 *         in="query",
 *         required=false,
 *         description="Код типа локализации",
 *         @OA\Schema(type="string", maxLength=255, nullable=true)
 *     ),
 *     @OA\Parameter(
 *         name="active",
 *         in="query",
 *         required=false,
 *         description="Активность отдела",
 *         @OA\Schema(type="boolean")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Отдел найден",
 *         @OA\JsonContent(
 *             example={
 *                 "id": 1,
 *                 "name": "Отдел маркетинга",
 *                 "info": "Информация об отделе",
 *                 "phone": "123456789",
 *                 "code": "DEPT1234",
 *                 "structure_type_name": "Название типа структуры",
 *                 "structure_type_code": "STRUCT123",
 *                 "locality_type_name": "Название типа локализации",
 *                 "locality_type_code": "LOC123",
 *                 "active": true
 *             }
 *         )
 *     ),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(
 *         response=404,
 *         description="Отдел не найден")
 * )
 * @OA\Put(
 *     path="/api/v1/departments/{id}",
 *     summary="Обновление отдела",
 *     tags={"Отделы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=false,
 *         description="ID отдела",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=false,
 *         description="Данные для обновления отдела",
 *         @OA\JsonContent(
 *             required={"name", "phone", "code"},
 *             @OA\Property(property="name", type="string", example="Отдел маркетинга"),
 *             @OA\Property(property="info", type="string", example="Информация об отделе"),
 *             @OA\Property(property="phone", type="string", example="123456789"),
 *             @OA\Property(property="code", type="string", maxLength=10, example="DEPT1234"),
 *             @OA\Property(property="structure_type_name", type="string", example="Название типа структуры"),
 *             @OA\Property(property="structure_type_code", type="string", example="STRUCT123"),
 *             @OA\Property(property="locality_type_name", type="string", example="Название типа локализации"),
 *             @OA\Property(property="locality_type_code", type="string", example="LOC123"),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=200, description="Отдел успешно обновлен"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Отдел не найден"),
 *     @OA\Response(response=422, description="Некорректные данные")
 * )
 * @OA\Delete(
 *     path="/api/v1/departments/{id}",
 *     summary="Удаление отдела",
 *     tags={"Отделы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=false,
 *         description="ID отдела",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Отдел успешно удален"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Отдел не найден")
 * )
 */


class DepartmentController extends Controller
{
    //
}
