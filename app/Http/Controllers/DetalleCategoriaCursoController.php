<?php

namespace App\Http\Controllers;

use App\Models\DetalleCategoriaCurso;
use Illuminate\Http\Request;

class DetalleCategoriaCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleCategoriaCurso = DetalleCategoriaCurso::all();
        return $detalleCategoriaCurso;

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalleCategoriaCurso = new DetalleCategoriaCurso();
        $detalleCategoriaCurso->idCategoriaCurso = $request->idCategoriaCurso;
        $detalleCategoriaCurso->idCurso = $request->idCurso;
        $detalleCategoriaCurso->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleCategoriaCurso = DetalleCategoriaCurso::where('id_detalle_categoria_curso',$id);
        return $detalleCategoriaCurso;
    }
    public function curso_detalle($id)
    {
        $detalleCategoriaCurso = DetalleCategoriaCurso::with('categoria','curso','clases')->where('id_curso',$id)->get();
        return $detalleCategoriaCurso;
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
        $detalleCategoriaCurso = DetalleCategoriaCurso::find($id);
        $detalleCategoriaCurso->idCategoriaCurso = $request->idCategoriaCurso;
        $detalleCategoriaCurso->idCurso = $request->idCurso;
        $detalleCategoriaCurso->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalleCategoriaCurso = DetalleCategoriaCurso::find($id);
        $detalleCategoriaCurso->delete();
    }
}
