<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ApiResponser;
use Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $attr = $request->validate([
            'email' => 'required|string|email|',
            'password' => 'required|string|min:6'
        ]);

        if (!Auth::attempt($attr)) {
            response()->json(['message' => 'Usuario y/o Contraseña Incorrectos'], 401);
        }

        $user = auth()->user();
        return response()->json([
            'token' => $user->createToken('API Token')->plainTextToken,
            'user' => $user,
        ], 200);
    }

    public function logout()
    {
        Auth::user()->tokens()->delete();
        response()->json(['message' => "Chao Pesca'o"], 200);
    }
}