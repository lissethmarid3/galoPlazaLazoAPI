<?php

namespace App\Http\Controllers;

use App\Models\ClasesCurso;
use Illuminate\Http\Request;

class ClasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ClasesCurso = ClasesCurso::all();
        return $ClasesCurso;
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
        $ClasesCurso = new ClasesCurso();
        $ClasesCurso->nombre = $request->nombre;
        $ClasesCurso->descripcion = $request->descripcion;
        $ClasesCurso->save();
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
        $ClasesCurso = ClasesCurso::find($id);
        return $ClasesCurso;
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
        $ClasesCurso = ClasesCurso::find($id);
        $ClasesCurso->nombre = $request->nombre;
        $ClasesCurso->descripcion = $request->descripcion;
        $ClasesCurso->save();
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
        $ClasesCurso = ClasesCurso::find($id);
        $ClasesCurso->delete();
    }
}
