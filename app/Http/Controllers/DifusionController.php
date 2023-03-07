<?php

namespace App\Http\Controllers;

use App\Models\Difusion;
use Illuminate\Http\Request;

class DifusionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $difusiones = Difusion::with('tipo_difusion')-> get();
       return $difusiones;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $difusion = new Difusion();
        $difusion->titulo = $request->titulo;
        $difusion->imagen = $request->imagen;
        $difusion->id_tipo_difusion = $request->id_tipo_difusion;
        $difusion->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $disusion = Difusion::find($id);
        return $disusion;
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
        $difusion = Difusion::find($id);
        $difusion->titulo = $request->titulo;
        $difusion->imagen = $request->imagen;
        $difusion->id_tipo_difusion = $request->id_tipo_difusion;
        $difusion->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $difusion = Difusion::find($id);
        $difusion->delete();
    }
}
