<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\RequestsControllers\Controller;

/**
 * @OA\Get(
 *      path="/api/v1/people",
 *      summary="Получение списка всех записей о людях",
 *      tags={"Люди"},
 *      security={{"bearerAuth": {}}},
 *      @OA\Response(response=200, description="Список записей",
 *          @OA\JsonContent(
 *              type="array",
 *              @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="user_id", type="integer", example=1),
 *                  @OA\Property(property="department_id", type="integer", example=1),
 *                  @OA\Property(property="section_id", type="integer", example=1),
 *                  @OA\Property(property="position_id", type="integer", example=1),
 *                  @OA\Property(property="role_id", type="integer", example=1),
 *                  @OA\Property(property="avatar", type="string", example="avatar.jpg"),
 *                  @OA\Property(property="phone", type="string", example="123456789"),
 *                  @OA\Property(property="passport_number", type="string", example="AB1234567"),
 *                  @OA\Property(property="passport_pin", type="integer", example=123456789),
 *                  @OA\Property(property="active", type="boolean", example=true),
 *                  @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
 *                  @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00Z")
 *              )
 *          )
 *      ),
 *      @OA\Response(response=401, description="Неавторизованный запрос")
 *  )
 * @OA\Post(
 *     path="/api/v1/people",
 *     summary="Создание записи о человеке",
 *     tags={"Люди"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=false,
 *         description="Данные для создания записи о человеке",
 *         @OA\JsonContent(
 *             required={"user_id", "department_id", "section_id", "position_id", "role_id"},
 *             @OA\Property(property="user_id", type="integer", example=1),
 *             @OA\Property(property="department_id", type="integer", example=1),
 *             @OA\Property(property="section_id", type="integer", example=1),
 *             @OA\Property(property="position_id", type="integer", example=1),
 *             @OA\Property(property="role_id", type="integer", example=1),
 *             @OA\Property(property="avatar", type="string", example="avatar.jpg"),
 *             @OA\Property(property="phone", type="string", example="123456789"),
 *             @OA\Property(property="passport_number", type="string", example="AB1234567"),
 *             @OA\Property(property="passport_pin", type="integer", example=123456789),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=201, description="Запись о человеке успешно создана"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Get(
 *     path="/api/v1/people/{id}",
 *     summary="Получение записи о человеке",
 *     tags={"Люди"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=false,
 *         description="ID записи о человеке",
 *         @OA\Schema(type="integer")
 *     ),
 *      @OA\Parameter(
 *      name="user_id",
 *      in="query",
 *      required=false,
 *      description="ID пользователя, должен существовать в таблице users",
 *      @OA\Schema(type="integer", nullable=true)
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
 *  @OA\Parameter(
 *      name="position_id",
 *      in="query",
 *      required=false,
 *      description="ID позиции, должен существовать в таблице positions",
 *      @OA\Schema(type="integer", nullable=true)
 *  ),
 *  @OA\Parameter(
 *      name="role_id",
 *      in="query",
 *      required=false,
 *      description="ID роли, должен существовать в таблице roles",
 *      @OA\Schema(type="integer", nullable=true)
 *  ),
 *  @OA\Parameter(
 *      name="avatar",
 *      in="query",
 *      required=false,
 *      description="Аватар",
 *      @OA\Schema(type="string", maxLength=255, nullable=true)
 *  ),
 *  @OA\Parameter(
 *      name="phone",
 *      in="query",
 *      required=false,
 *      description="Телефон, максимальная длина 20 символов",
 *      @OA\Schema(type="string", maxLength=20, nullable=true)
 *  ),
 *  @OA\Parameter(
 *      name="passport_number",
 *      in="query",
 *      required=false,
 *      description="Уникальный номер паспорта в таблице people",
 *      @OA\Schema(type="string", maxLength=255, nullable=true)
 *  ),
 *  @OA\Parameter(
 *      name="passport_pin",
 *      in="query",
 *      required=false,
 *      description="Уникальный PIN паспорта в таблице people",
 *      @OA\Schema(type="integer", nullable=true)
 *  ),
 *  @OA\Parameter(
 *      name="active",
 *      in="query",
 *      required=false,
 *      description="Активность",
 *      @OA\Schema(type="boolean")
 *  ),
 *     @OA\Response(response=200, description="Запись о человеке найдена"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Запись о человеке не найдена"),
 * )
 * @OA\Put(
 *     path="/api/v1/people/{id}",
 *     summary="Обновление записи о человеке",
 *     tags={"Люди"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=false,
 *         description="ID записи о человеке",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=false,
 *         description="Данные для обновления записи о человеке",
 *         @OA\JsonContent(
 *             required={"user_id", "department_id", "section_id", "position_id", "role_id"},
 *             @OA\Property(property="user_id", type="integer", example=1),
 *             @OA\Property(property="department_id", type="integer", example=1),
 *             @OA\Property(property="section_id", type="integer", example=1),
 *             @OA\Property(property="position_id", type="integer", example=1),
 *             @OA\Property(property="role_id", type="integer", example=1),
 *             @OA\Property(property="avatar", type="string", example="avatar.jpg"),
 *             @OA\Property(property="phone", type="string", example="123456789"),
 *             @OA\Property(property="passport_number", type="string", example="AB1234567"),
 *             @OA\Property(property="passport_pin", type="integer", example=123456789),
 *             @OA\Property(property="active", type="boolean", example=true),
 *         )
 *     ),
 *     @OA\Response(response=200, description="Запись о человеке успешно обновлена"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Запись о человеке не найдена"),
 *     @OA\Response(response=422, description="Некорректные данные"),
 * )
 * @OA\Delete(
 *     path="/api/v1/people/{id}",
 *     summary="Удаление записи о человеке",
 *     tags={"Люди"},
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=false,
 *         description="ID записи о человеке",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Запись о человеке успешно удалена"),
 *     @OA\Response(response=401, description="Неавторизованный запрос"),
 *     @OA\Response(response=404, description="Запись о человеке не найдена"),
 * )
 */
class PersonController extends Controller
{
    //
}
