<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * @OA\Post(
 *      path="/api/v1/register",
 *      summary="Ro'yhatdan o'tish",
 *      tags={"Avtorizatsiya"},
 *
 * @OA\RequestBody(
 *      request="RegistrationRequestBody",
 *      required=true,
 *      description="Ro'yhatdan o'tish so'rovi",
 *      @OA\JsonContent(
 *          type="object",
 *          @OA\Property(
 *              property="name",
 *              type="string",
 *              description="FIO",
 *              example="John Doe"
 *          ),
 *          @OA\Property(
 *              property="email",
 *              type="string",
 *              format="email",
 *              description="Foydalanuvchi Emaili",
 *              example="john@example.com"
 *          ),
 *          @OA\Property(
 *              property="password",
 *              type="string",
 *              description="Foydalanuvchi paroli",
 *              example="secret"
 *          ),
 *      ),
 * ),
 *     @OA\Response(
 *          response=201,
 *          description="Foydalanuvchi qo'shildi"
 *     ),
 * ),
 * @OA\Post(
 *       path="/api/v1/login",
 *       summary="Saytga kirish",
 *       tags={"Avtorizatsiya"},
 *
 *  @OA\RequestBody(
 *       request="LoginRequestBody",
 *       required=true,
 *       description="Kirish so'rovi",
 *       @OA\JsonContent(
 *           type="object",
 *           @OA\Property(
 *               property="email",
 *               type="string",
 *               format="email",
 *               description="Foydalanuvchi Emaili",
 *               example="john@example.com"
 *           ),
 *           @OA\Property(
 *               property="password",
 *               type="string",
 *               description="Foydalanuvchi paroli",
 *               example="secret"
 *           ),
 *       ),
 *  ),
 *      @OA\Response(
 *           response=200,
 *           description="Kirish amalga oshirildi"
 *      ),
 *  ),
 * @OA\Get(
 *         path="/api/v1/logout",
 *         summary="Saytdan chiqish",
 *         tags={"Avtorizatsiya"},
 *         @OA\RequestBody(
 *               request="LogoutRequestBody",
 *               required=true,
 *               description="Chiqish so'rovi",
 *               @OA\JsonContent(
 *                   type="object",
 *               @OA\Property(
 *                   property="token",
 *                   type="string",
 *                   description="Foydalanuvchi tokeni",
 *                   example="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MTIzNDU2Nzg5MCwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c"
 *            ),
 *        ),
 *   ),
 *          @OA\Response(
 *              response=200,
 *              description="Chiqish amalga oshirildi"
 *       ),
 *   ),
*/
class AuthController extends Controller
{
    //
}
