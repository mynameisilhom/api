<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\RequestsControllers\Controller;

/**
 * @OA\Info(
 *     title="AndMI API/Open API Specification",
 *     description="Открытая API спецификация Андижанского Машиностроительного Института",
 *     version="1.0.0",
 *     @OA\Contact(
 *         email="andmiatmdev@gmail.com"
 *     )
 *      )
 *      @OA\Server(
 *      url="http://localhost",
 *      description="Основной сервер API"
 *      )
 *      @OA\PathItem(
 *     path="/api/v1/documentation"
 * )
 *      @OA\SecurityScheme(
 *     type="http",
 *     description="Авторизация с использованием Bearer токена",
 *     name="Authorization",
 *     in="header",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 *     securityScheme="bearerAuth"
 * )
 */
class MainController extends Controller
{
    //
}
