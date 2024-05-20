<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\RequestsControllers\Controller;

/**
 * @OA\Post(
 *      path="/api/v1/register",
 *      summary="Регистрация",
 *      tags={"Авторизация"},
 *      @OA\RequestBody(
 *          request="RegistrationRequestBody",
 *          required=true,
 *          description="Запрос на регистрацию",
 *          @OA\JsonContent(
 *              type="object",
 *              @OA\Property(
 *                  property="name",
 *                  type="string",
 *                  description="ФИО",
 *                  example="Имя Фамилия"
 *              ),
 *              @OA\Property(
 *                  property="email",
 *                  type="string",
 *                  format="email",
 *                  description="Электронная почта пользователя",
 *                  example="name@example.com"
 *              ),
 *              @OA\Property(
 *                  property="password",
 *                  type="string",
 *                  description="Пароль пользователя",
 *                  example="секрет"
 *              ),
 *          ),
 *      ),
 *      @OA\Response(
 *          response=201,
 *          description="Пользователь добавлен",
 *          @OA\JsonContent(
 *              example={
 *                  "message": "Пользователь успешно зарегистрирован",
 *                  "user": {
 *                      "id": 1,
 *                      "name": "Имя Фамилия",
 *                      "email": "name@example.com"
 *                  }
 *              }
 *          )
 *      ),
 * ),
 * @OA\Post(
 *       path="/api/v1/login",
 *       summary="Вход",
 *       tags={"Авторизация"},
 *       @OA\RequestBody(
 *           request="LoginRequestBody",
 *           required=true,
 *           description="Запрос на вход",
 *           @OA\JsonContent(
 *               type="object",
 *               @OA\Property(
 *                   property="email",
 *                   type="string",
 *                   format="email",
 *                   description="Электронная почта пользователя",
 *                   example="name@example.com"
 *               ),
 *               @OA\Property(
 *                   property="password",
 *                   type="string",
 *                   description="Пароль пользователя",
 *                   example="секрет"
 *               ),
 *           ),
 *       ),
 *       @OA\Response(
 *           response=200,
 *           description="Вход выполнен",
 *           @OA\JsonContent(
 *               example={
 *                   "message": "Вход выполнен успешно",
 *                   "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9..."
 *               }
 *           )
 *       ),
 * ),
 * @OA\Get(
 *         path="/api/v1/logout",
 *         summary="Выход",
 *         tags={"Авторизация"},
 *         @OA\RequestBody(
 *             request="LogoutRequestBody",
 *             required=true,
 *             description="Запрос на выход",
 *             @OA\JsonContent(
 *                 type="object",
 *                 @OA\Property(
 *                     property="token",
 *                     type="string",
 *                     description="Токен пользователя",
 *                     example="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9..."
 *                 ),
 *             ),
 *         ),
 *         @OA\Response(
 *             response=200,
 *             description="Выход выполнен",
 *             @OA\JsonContent(
 *                 example={
 *                     "message": "Выход выполнен успешно"
 *                 }
 *             )
 *         ),
 *     ),
 */
class AuthController extends Controller
{
    //
}
