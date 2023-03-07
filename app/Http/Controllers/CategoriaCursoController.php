<?php

namespace App\Http\Controllers;

use App\Models\CategoriaCurso;
use Illuminate\Http\Request;

class CategoriaCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias_cursos = CategoriaCurso::all();
        return $categorias_cursos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorias_curso = new CategoriaCurso();
        $categorias_curso->nombre = $request->nombre;
        $categorias_curso->descripcion = $request->descripcion;
        $categorias_curso->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorias_curso = CategoriaCurso::find($id);
        return $categorias_curso;
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
        $categoria_curso = CategoriaCurso::find($id);
        $categoria_curso->nombre = $request->nombre;
        $categoria_curso->descripcion = $request->descripcion;
        $categoria_curso->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria_curso = CategoriaCurso::find($id);
        $categoria_curso->delete();
    }
}
