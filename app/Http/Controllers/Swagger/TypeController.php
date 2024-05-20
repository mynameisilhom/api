<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\RequestsControllers\Controller;

/**
 * @OA\Get(
 *      path="/api/v1/types",
 *      summary="Получение списка всех типов",
 *      tags={"Типы"},
 *      security={{"bearerAuth": {}}},
 *      @OA\Response(response=200, description="Список типов",
 *          @OA\JsonContent(
 *              type="array",
 *              @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Тип документа"),
 *                  @OA\Property(property="department_id", type="integer", example=1),
 *                  @OA\Property(property="section_id", type="integer", example=1),
 *                  @OA\Property(property="active", type="boolean", example=true),
 *                  @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
 *                  @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00Z")
 *              )
 *          )
 *      ),
 *      @OA\Response(response=401, description="Неавторизованный запрос")
 *  )
 * @OA\Post(
 *     path="/api/v1/types",
 *     summary="Создание типа",
 *     tags={"Типы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=false,
 *         description="Данные для создания типа",
 *         @OA\JsonContent(
 *             required={"name"},
 *             @OA\Property(property="name", type="string", example="Тип документа"),
 *             @OA\Property(property="department_id", type="integer", example=1),
 *             @OA\Property(property="section_id", type="integer", example=1),
 *         )
 *     ),
 *     @OA\Response(response=201, description="Тип успешно создан"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Get(
 *     path="/api/v1/types/{id}",
 *     summary="Получение типа",
 *     tags={"Типы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=false,
 *         description="ID типа",
 *         @OA\Schema(type="integer")
 *     ),
 *      @OA\Parameter(
 *      name="name",
 *      in="query",
 *      required=false,
 *      description="Название",
 *      @OA\Schema(type="string", maxLength=255)
 *  ),
 *  @OA\Parameter(
 *      name="department_id",
 *      in="query",
 *      required=false,
 *      description="ID отдела, должен существовать в таблице departments",
 *      @OA\Schema(type="integer", nullable=true)
 *  ),
 *  @OA\Parameter(
 *      name="section_id",
 *      in="query",
 *      required=false,
 *      description="ID секции, должен существовать в таблице sections",
 *      @OA\Schema(type="integer", nullable=true)
 *  ),
 *     @OA\Response(response=200, description="Тип найден"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Тип не найден"),
 * )
 * @OA\Put(
 *     path="/api/v1/types/{id}",
 *     summary="Обновление типа",
 *     tags={"Типы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=false,
 *         description="ID типа",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=false,
 *         description="Данные для обновления типа",
 *         @OA\JsonContent(
 *             required={"name"},
 *             @OA\Property(property="name", type="string", example="Тип документа"),
 *             @OA\Property(property="department_id", type="integer", example=1),
 *             @OA\Property(property="section_id", type="integer", example=1),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=200, description="Тип успешно обновлен"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Тип не найден"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Delete(
 *     path="/api/v1/types/{id}",
 *     summary="Удаление типа",
 *     tags={"Типы"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=false,
 *         description="ID типа",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Тип успешно удален"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Тип не найден"),
 * )
 */
class TypeController extends Controller
{
    //
}
