<?php

namespace App\Http\Controllers;

use App\Models\ParticipanteCurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParticipanteCursoController extends Controller
{
    public function __construct()
    {
        //['index','noticias']
        $this->middleware('auth:sanctum');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $participantes= ParticipanteCurso::all();
        return $participantes;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $participante = new ParticipanteCurso();
        $participante->nombre = $request->nombre;
        $participante->descripcion = $request->descripcion;
        $participante->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $participante = ParticipanteCurso::find($id);
        return $participante;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $participante = ParticipanteCurso::find($id);
        $participante->nombre = $request->nombre;
        $participante->descripcion = $request->descripcion;
        $participante->save();
    }
    public function mis_cursos()
    {
        $id =  Auth::user()->id_usuario;
        $participante = ParticipanteCurso::with('curso')->where('id_usuario',$id)->get();
        return $participante;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $participante = ParticipanteCurso::find($id);
        $participante->delete();
    }
}
