<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Info(
 *     title="AndMI API/Open API System",
 *     description="Andijon Mashinasozlik Instituti Ochiq API tizimi",
 *     version="1.0.0",
 *     contact={
 *         "email": "andmiatmdev@gmail.com"
 *     },
 * )
 * @OA\PathItem(
 *     path="/api/v1/documentation",
 * )
 * @OA\SecurityScheme(
 *     type="http",
 *     description="Аутентификация с использованием токена Bearer",
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
