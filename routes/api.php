<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DetalleCategoriaCursoController;
use App\Http\Controllers\DetalleDifusionController;
use App\Http\Controllers\DifusionController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\ParticipanteCursoController;
use App\Http\Controllers\SimuladorController;
use App\Models\Difusion;
use App\Models\DifusionDetalle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('curso')->group( function (){
    Route::get('/' ,[CursoController::class,'index']);
    Route::get('/{id}' ,[CursoController::class,'show']);
    Route::post('/' ,[CursoController::class,'store']);
    Route::put('/{id}' ,[CursoController::class,'update']);
    Route::delete('/{id}' ,[CursoController::class,'destroy']);
});
Route::prefix('participantes_curso')->group( function (){
    Route::get('/' ,[ParticipanteCursoController::class,'index']);
    Route::get('/mis_cursos' ,[ParticipanteCursoController::class,'mis_cursos']);
    Route::get('/{id}' ,[ParticipanteCursoController::class,'show']);
    Route::post('/' ,[ParticipanteCursoController::class,'store']);
    Route::put('/{id}' ,[ParticipanteCursoController::class,'update']);
    Route::delete('/{id}' ,[ParticipanteCursoController::class,'destroy']);
});
Route::prefix('detalle_categoria_curso')->group( function (){
    Route::get('/' ,[DetalleCategoriaCursoController::class,'index']);
    Route::get('/curso_detalle/{id}' ,[DetalleCategoriaCursoController::class,'curso_detalle']);
    Route::get('/{id}' ,[DetalleCategoriaCursoController::class,'show']);
    Route::post('/' ,[DetalleCategoriaCursoController::class,'store']);
    Route::put('/{id}' ,[DetalleCategoriaCursoController::class,'update']);
    Route::delete('/{id}' ,[DetalleCategoriaCursoController::class,'destroy']);
});
Route::prefix('chat')->group( function (){
    Route::get('/usuarios' ,[ChatController::class,'listaUsuarios']);
    Route::get('/' ,[ChatController::class,'index']);
    Route::get('/{id}' ,[ChatController::class,'show']);
    Route::post('/' ,[ChatController::class,'enviarMensaje']);
    Route::put('/{id}' ,[ChatController::class,'update']);
    Route::delete('/{id}' ,[ChatController::class,'destroy']);
});
Route::prefix('difusion')->group( function (){
    Route::get('/' ,[DifusionController::class,'index']);
    Route::get('/{id}' ,[DifusionController::class,'show']);
    Route::post('/' ,[DifusionController::class,'store']);
    Route::put('/{id}' ,[DifusionController::class,'update']);
    Route::delete('/{id}' ,[DifusionController::class,'destroy']);
});
Route::prefix('difusion_detalle')->group( function (){
    Route::get('/' ,[DetalleDifusionController::class,'index']);
    Route::get('/{id}' ,[DetalleDifusionController::class,'show']);
    Route::post('/' ,[DetalleDifusionController::class,'store']);
    Route::put('/{id}' ,[DetalleDifusionController::class,'update']);
    Route::delete('/{id}' ,[DetalleDifusionController::class,'destroy']);
});
Route::prefix('juego')->group( function (){
    Route::get('/' ,[JuegoController::class,'index']);
    Route::get('/{id}' ,[JuegoController::class,'show']);
    Route::post('/' ,[JuegoController::class,'store']);
    Route::put('/{id}' ,[JuegoController::class,'update']);
    Route::delete('/{id}' ,[JuegoController::class,'destroy']);
});
Route::prefix('simulador')->group( function (){
    Route::get('/' ,[SimuladorController::class,'index']);
    Route::get('/{id}' ,[SimuladorController::class,'show']);
    Route::post('/' ,[SimuladorController::class,'store']);
    Route::put('/{id}' ,[SimuladorController::class,'update']);
    Route::delete('/{id}' ,[SimuladorController::class,'destroy']);
});
