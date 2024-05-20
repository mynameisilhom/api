<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\RequestsControllers\Controller;

/**
* @OA\Get(
*     path="/api/v1/pages",
*     summary="Получение списка всех страниц",
*     tags={"Страницы"},
*     security={{"bearerAuth": {}}},
*     @OA\Response(response=200, description="Список страниц",
*         @OA\JsonContent(
*             type="array",
*             @OA\Items(
*                 @OA\Property(property="id", type="integer", example=1),
*                 @OA\Property(property="title", type="string", example="Главная страница"),
*                 @OA\Property(property="route", type="string", example="/home"),
*                 @OA\Property(property="type", type="string", example="Главная"),
*                 @OA\Property(property="active", type="boolean", example=true),
*                 @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
*                 @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00Z")
*             )
*         )
*     ),
*     @OA\Response(response=401, description="Неавторизованный запрос")
* )
* @OA\Post(
*       path="/api/v1/pages",
*       summary="Создание страницы",
*       tags={"Страницы"},
*       security={{"bearerAuth": {}}},
*   @OA\RequestBody(
*       required=false,
*       description="Данные для создания страницы",
*   @OA\JsonContent(
*       required={"title", "route", "type"},
*   @OA\Property(property="title", type="string", example="Главная страница"),
*   @OA\Property(property="route", type="string", example="/home"),
*   @OA\Property(property="type", type="string", example="Главная"),
*   @OA\Property(property="active", type="boolean", example=true),
*   )
* ),
*   @OA\Response(response=201, description="Страница успешно создана"),
*   @OA\Response(response=401, description="Неавторизованный запрос"),
*   @OA\Response(response=422, description="Некорректные данные"),
*     )
* @OA\Get(
*     path="/api/v1/pages/{id}",
*     summary="Получение страницы",
*     tags={"Страницы"},
*     security={{"bearerAuth": {}}},
*     @OA\Parameter(
*         name="id",
*         in="path",
*         required=false,
*         description="ID страницы",
*         @OA\Schema(type="integer")
*     ),
 *      @OA\Parameter(
 *      name="title",
 *      in="query",
 *      required=false,
 *      description="Заголовок",
 *      @OA\Schema(type="string", maxLength=255, nullable=true)
 *  ),
 *  @OA\Parameter(
 *      name="route",
 *      in="query",
 *      required=false,
 *      description="Маршрут",
 *      @OA\Schema(type="string", maxLength=255, nullable=true)
 *  ),
 *  @OA\Parameter(
 *      name="type",
 *      in="query",
 *      required=false,
 *      description="Тип",
 *      @OA\Schema(type="string", maxLength=255, nullable=true)
 *  ),
 *  @OA\Parameter(
 *      name="active",
 *      in="query",
 *      required=false,
 *      description="Активность",
 *      @OA\Schema(type="boolean")
 *  ),
 *     @OA\Response(response=200, description="Страница найдена"),
*     @OA\Response(response=401, description="Неавторизованный запрос"),
*     @OA\Response(response=404, description="Страница не найдена"),
* )
* @OA\Put(
*     path="/api/v1/pages/{id}",
*     summary="Обновление страницы",
*     tags={"Страницы"},
*     security={{"bearerAuth": {}}},
*     @OA\Parameter(
*         name="id",
*         in="path",
*         required=false,
*         description="ID страницы",
*         @OA\Schema(type="integer")
*     ),
*     @OA\RequestBody(
*         required=false,
*         description="Данные для обновления страницы",
*         @OA\JsonContent(
*             required={"title", "route", "type"},
*             @OA\Property(property="title", type="string", example="Главная страница"),
*             @OA\Property(property="route", type="string", example="/home"),
*             @OA\Property(property="type", type="string", example="Главная"),
*             @OA\Property(property="active", type="boolean", example=true),
*         )
*     ),
*     @OA\Response(response=200, description="Страница успешно обновлена"),
*     @OA\Response(response=401, description="Неавторизованный запрос"),
*     @OA\Response(response=404, description="Страница не найдена"),
*     @OA\Response(response=422, description="Некорректные данные"),
* )
* @OA\Delete(
*     path="/api/v1/pages/{id}",
*     summary="Удаление страницы",
*     tags={"Страницы"},
*     security={{"bearerAuth": {}}},
*     @OA\Parameter(
*         name="id",
*         in="path",
*         required=false,
*         description="ID страницы",
*         @OA\Schema(type="integer")
*     ),
*     @OA\Response(response=204, description="Страница успешно удалена"),
*     @OA\Response(response=401, description="Неавторизованный запрос"),
*     @OA\Response(response=404, description="Страница не найдена"),
* )
*/
class PageController extends Controller
{
//
}
