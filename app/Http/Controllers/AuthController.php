<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(
                [
                    'message' => 'Email o contraseña invalido',
                ],
                401
            );
        }
        $user = User::where('email', $request['email'])->with('rol','persona')->first();

        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'User'=> $user,
        ]);
    }

    public function register(Request $request)
    {
        $persona = new Persona();
        $persona->dni = $request->dni;
        $persona->nombre_persona = $request->nombre_persona;
        $persona->apellido_persona = $request->apellido_persona;
        $persona->direccion_persona = $request->direccion_persona;
        $persona->telefono_persona = $request->telefono_persona;
        $persona->ciudad_persona = $request->ciudad_persona;
        $persona->pais_persona = $request->pais_persona;
        $persona->estado_persona = 'A';
        $persona->save();
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->id_persona = $persona->id_persona;
        $user->id_rol = 2;
        $user->save();
    }
}
