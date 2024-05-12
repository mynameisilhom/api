<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginUserRequest;
use App\Http\Requests\Auth\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(StoreUserRequest $request)
    {
//        return 'Registered';
        return User::query()->create($request->all());

    }



    public function login(LoginUserRequest $request)
    {
//        return 'Logined';
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return response()->json([
                'message' => 'Unauthorized'
            ],401);
        }

        $user = Auth::user();
//        $user = User::query()->where('email', $request->email)->first();
        $user->tokens()->delete();
        return response()->json([
            'user' => $user,
            'token' => $user->createToken("Token of user: {$user->name}")->plainTextToken
//        'user' => [
//            'name' => $user->name,
//            ]
        ]);
    }



    public function logout()
    {
//        return 'Logged out';
        Auth::user()->currentAccessToken()->delete();
        return response()->json([
            'message'=> 'Token removed'
        ]);
    }
}
