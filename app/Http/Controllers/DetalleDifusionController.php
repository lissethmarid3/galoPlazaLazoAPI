<?php

namespace App\Http\Controllers;

use App\Models\DifusionDetalle;
use Illuminate\Http\Request;

class DetalleDifusionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detallesDifusion = DifusionDetalle::with('difusion')->get();
        return $detallesDifusion;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $detalleDifusion = DifusionDetalle::with('difusion')->where('id_difusion',$id)->get();
         return $detalleDifusion;
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
        $detalleDifusion = DifusionDetalle::find($id);
        $detalleDifusion->update($request->all());
        return $detalleDifusion;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalleDifusion = DifusionDetalle::find($id);
        $detalleDifusion->delete();
        return $detalleDifusion;
    }
}
