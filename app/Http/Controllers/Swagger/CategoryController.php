<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
///**
// * @OA\Post(
// *     path="/api/v1/categories",
// *     summary="Turkum ochish",
// *     tags={"Turkumlar"},
// *     security={{"bearerAuth": {}}},
// *     @OA\RequestBody(
// *         required=true,
// *         description="Turkum ochish",
// *         @OA\JsonContent(
// *             required={"title"},
// *             @OA\Property(property="title", type="string", minLength=3, maxLength=255, example="Turkum nomi")
// *         )
// *     ),
// *     @OA\Response(response=201, description="Turkum muvaffaqiyatli ochildi"),
// *     @OA\Response(response=401, description="Avtorizatsiyadan o'tilmagan"),
// *     @OA\Response(response=422, description="Noto'g'ri ma'lumotlar"),
// * )
// * @OA\Get(
// *     path="/api/v1/categories/{id}",
// *     summary="Turkum haqida ma'lumot olish",
// *     tags={"Turkumlar"},
// *     security={{"bearerAuth": {}}},
// *     @OA\Parameter(
// *         name="id",
// *         in="path",
// *         required=true,
// *         description="Turkum IDsi",
// *         @OA\Schema(type="integer")
// *     ),
// *     @OA\Response(response=200, description="Turkum haqida ma'lumot"),
// *     @OA\Response(response=401, description="Avtorizatsiyadan o'tilmagan"),
// *     @OA\Response(response=404, description="Bunday turkum topilmadi"),
// * )
// * @OA\Put(
// *     path="/api/v1/categories/{id}",
// *     summary="Turkumni yangilash",
// *     tags={"Turkumlar"},
// *     security={{"bearerAuth": {}}},
// *     @OA\Parameter(
// *         name="id",
// *         in="path",
// *         required=true,
// *         description="Turkum IDsi",
// *         @OA\Schema(type="integer")
// *     ),
// *     @OA\RequestBody(
// *         required=true,
// *         description="Turkumnin yangilash uchun so'rov",
// *         @OA\JsonContent(
// *             required={"title"},
// *             @OA\Property(property="title", type="string", maxLength=255, example="Turkum yangi nomi")
// *         )
// *     ),
// *     @OA\Response(response=200, description="Turkum muvaffaqiyatli yangilandi"),
// *     @OA\Response(response=401, description="Avtorizatsiyadan o'tilmagan"),
// *     @OA\Response(response=404, description="Bunday turkum topilmadi"),
// *     @OA\Response(response=422, description="Noto'g'ri ma'lumotlar"),
// * )
// *
// * @OA\Delete(
// *     path="/api/v1/categories/{id}",
// *     summary="Turkumni o'chirish",
// *     tags={"Turkumlar"},
// *     security={{"bearerAuth": {}}},
// *     @OA\Parameter(
// *         name="id",
// *         in="path",
// *         required=true,
// *         description="Turkum IDsi",
// *         @OA\Schema(type="integer")
// *     ),
// *     @OA\Response(response=204, description="Turkum muvaffaqiyatli o'chirildi"),
// *     @OA\Response(response=401, description="Avtorizatsiyadan o'tilmagan"),
// *     @OA\Response(response=404, description="Bunday turkum topilmadi"),
// * )
// */
class CategoryController extends Controller
{
    //
}
