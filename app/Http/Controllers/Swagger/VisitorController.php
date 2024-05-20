<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\RequestsControllers\Controller;

/**
 * @OA\Get(
 *      path="/api/v1/visitors",
 *      summary="Получение списка всех посетителей",
 *      tags={"Посетители"},
 *      security={{"bearerAuth": {}}},
 *      @OA\Response(response=200, description="Список посетителей",
 *          @OA\JsonContent(
 *              type="array",
 *              @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="site", type="integer", example=1),
 *                  @OA\Property(property="uz", type="integer", example=10),
 *                  @OA\Property(property="ru", type="integer", example=5),
 *                  @OA\Property(property="en", type="integer", example=3),
 *                  @OA\Property(property="auto", type="integer", example=2),
 *                  @OA\Property(property="machine", type="integer", example=3),
 *                  @OA\Property(property="electrics", type="integer", example=4),
 *                  @OA\Property(property="logistics", type="integer", example=5),
 *                  @OA\Property(property="intellectual", type="integer", example=6),
 *                  @OA\Property(property="economics", type="integer", example=7),
 *                  @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
 *                  @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00Z")
 *              )
 *          )
 *      ),
 *      @OA\Response(response=401, description="Неавторизованный запрос")
 *  )
 * @OA\Post(
 *     path="/api/v1/visitors",
 *     summary="Создание записи о посетителе",
 *     tags={"Посетители"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=false,
 *         description="Данные для создания записи о посетителе",
 *         @OA\JsonContent(
 *             required={"site", "uz", "ru", "en", "auto", "machine", "electrics", "logistics", "intellectual", "economics"},
 *             @OA\Property(property="site", type="integer", example=1),
 *             @OA\Property(property="uz", type="integer", example=10),
 *             @OA\Property(property="ru", type="integer", example=5),
 *             @OA\Property(property="en", type="integer", example=3),
 *             @OA\Property(property="auto", type="integer", example=2),
 *             @OA\Property(property="machine", type="integer", example=3),
 *             @OA\Property(property="electrics", type="integer", example=4),
 *             @OA\Property(property="logistics", type="integer", example=5),
 *             @OA\Property(property="intellectual", type="integer", example=6),
 *             @OA\Property(property="economics", type="integer", example=7),
 *         )
 *     ),
 *     @OA\Response(response=201, description="Запись о посетителе успешно создана"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Get(
 *     path="/api/v1/visitors/{id}",
 *     summary="Получение записи о посетителе",
 *     tags={"Посетители"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=false,
 *         description="ID записи о посетителе",
 *         @OA\Schema(type="integer")
 *     ),
 *      @OA\Parameter(
 *      name="site",
 *      in="query",
 *      required=false,
 *      description="Счетчик для сайта, минимум 0",
 *      @OA\Schema(type="integer", minimum=0)
 *  ),
 *  @OA\Parameter(
 *      name="uz",
 *      in="query",
 *      required=false,
 *      description="Счетчик для узбекского языка, минимум 0",
 *      @OA\Schema(type="integer", minimum=0)
 *  ),
 *  @OA\Parameter(
 *      name="ru",
 *      in="query",
 *      required=false,
 *      description="Счетчик для русского языка, минимум 0",
 *      @OA\Schema(type="integer", minimum=0)
 *  ),
 *  @OA\Parameter(
 *      name="en",
 *      in="query",
 *      required=false,
 *      description="Счетчик для английского языка, минимум 0",
 *      @OA\Schema(type="integer", minimum=0)
 *  ),
 *  @OA\Parameter(
 *      name="auto",
 *      in="query",
 *      required=false,
 *      description="Счетчик для автомобильной тематики, минимум 0",
 *      @OA\Schema(type="integer", minimum=0)
 *  ),
 *  @OA\Parameter(
 *      name="machine",
 *      in="query",
 *      required=false,
 *      description="Счетчик для машиностроения, минимум 0",
 *      @OA\Schema(type="integer", minimum=0)
 *  ),
 *  @OA\Parameter(
 *      name="electrics",
 *      in="query",
 *      required=false,
 *      description="Счетчик для электротехники, минимум 0",
 *      @OA\Schema(type="integer", minimum=0)
 *  ),
 *  @OA\Parameter(
 *      name="logistics",
 *      in="query",
 *      required=false,
 *      description="Счетчик для логистики, минимум 0",
 *      @OA\Schema(type="integer", minimum=0)
 *  ),
 *  @OA\Parameter(
 *      name="intellectual",
 *      in="query",
 *      required=false,
 *      description="Счетчик для интеллектуальной тематики, минимум 0",
 *      @OA\Schema(type="integer", minimum=0)
 *  ),
 *  @OA\Parameter(
 *      name="economics",
 *      in="query",
 *      required=false,
 *      description="Счетчик для экономики, минимум 0",
 *      @OA\Schema(type="integer", minimum=0)
 *  ),
 *     @OA\Response(response=200, description="Запись найдена"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Запись не найдена"),
 * )
 * @OA\Put(
 *     path="/api/v1/visitors/{id}",
 *     summary="Обновление записи о посетителе",
 *     tags={"Посетители"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=false,
 *         description="ID записи о посетителе",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=false,
 *         description="Данные для обновления записи о посетителе",
 *         @OA\JsonContent(
 *             required={"site", "uz", "ru", "en", "auto", "machine", "electrics", "logistics", "intellectual", "economics"},
 *             @OA\Property(property="site", type="integer", example=1),
 *             @OA\Property(property="uz", type="integer", example=10),
 *             @OA\Property(property="ru", type="integer", example=5),
 *             @OA\Property(property="en", type="integer", example=3),
 *             @OA\Property(property="auto", type="integer", example=2),
 *             @OA\Property(property="machine", type="integer", example=3),
 *             @OA\Property(property="electrics", type="integer", example=4),
 *             @OA\Property(property="logistics", type="integer", example=5),
 *             @OA\Property(property="intellectual", type="integer", example=6),
 *             @OA\Property(property="economics", type="integer", example=7),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=200, description="Запись успешно обновлена"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Запись не найдена"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Delete(
 *     path="/api/v1/visitors/{id}",
 *     summary="Удаление записи о посетителе",
 *     tags={"Посетители"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=false,
 *         description="ID записи о посетителе",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Запись успешно удалена"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Запись не найдена"),
 * )
 */

class VisitorController extends Controller
{
    //
}
