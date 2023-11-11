<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // 1. Autenticação
        // 2. e geração do token
        // 3. entregar o token JWT

        $email = $request->input('email');
        $password = $request->input('password');

        $usuario = User::where('email', $email)->first();

        if ($usuario === null) {
            return response('', 401);
        }

        if (password_verify($password, $usuario->password)) {
            // Autenticado!
            return response()->json([
                'access_token' => 'blablablabla'
            ]);
        }
        return response('', 401);
    }
}
