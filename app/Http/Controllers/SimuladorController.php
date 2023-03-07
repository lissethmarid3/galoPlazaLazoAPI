<?php

namespace App\Http\Controllers;

use App\Models\Simulador;
use Illuminate\Http\Request;

class SimuladorController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Simulador = Simulador::all();
        return $Simulador;
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
        $Simulador = new Simulador();
        $Simulador->nombre = $request->nombre;
        $Simulador->enlace = $request->enlace;
        $Simulador->id_curso = $request->id_curso;
        $Simulador->save();
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
        $Simulador = Simulador::find($id);
        return $Simulador;
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
        $Simulador = Simulador::find($id);
        $Simulador->nombre = $request->nombre;
        $Simulador->enlace = $request->enlace;
        $Simulador->id_curso = $request->id_curso;
        $Simulador->save();
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
        $Simulador = Simulador::find($id);
        $Simulador->delete();
    }
}
