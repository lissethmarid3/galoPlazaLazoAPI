<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Models\Mensajes;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function __construct()
    {
        //['index','noticias']
        $this->middleware('auth:sanctum');
    }
    public function listaUsuarios(){
        $usuario = Auth::user();
        $usuarios = User::where('id_rol', '!=', $usuario->id_rol)->get();
        return $usuarios;
    }
    public function enviarMensaje(Request $request){
        $message = $request->messaje;
        $mensaje =  new Mensajes();
        $mensaje->user_id_remitente = Auth::user()->id;
        $mensaje->user_id_destinatario = $request->id;
        $mensaje->leido = false;
        $mensaje->mensaje = $message;
        $mensaje->save();
        event(new ChatEvent($message));
        return response()->json(['message' => 'Mensaje enviado']);
    }
}
