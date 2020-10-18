<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalle_recolector;
use App\recolectores;
use App\puntos;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('relacionarPunto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $detalle = new detalle_recolector;
        //dd($request);
        $detalle->id_punto = $request->id_punto;
        $detalle->id_recolector = $request->id_recolector;
        $detalle->save();

        return redirect('/relacionarPunto/'.$detalle->id_recolector);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //buscar el dato
        //$detalle = detalle_recolector::find($id);
        $recolector = recolectores::find($id);
        //pasarlo a la vista
        return view('relacionarPunto')->with('recolector', $recolector);
    }

    public function muestraDetalle($id)
    {
        //buscar el dato
        //$detalle = detalle_recolector::find($id);
        $detalle = detalle_recolector::find($id);
        //pasarlo a la vista
        return view('editaRelacionar')->with('detalle', $detalle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

    public function actualiza(Request $request)
    {
        $detalle = detalle_recolector::find($request->id);
        if(!is_null($detalle))
        {
            $detalle->id_punto = $request->id_punto;
            $detalle->id_recolector = $request->id_recolector;
            $detalle->save();   
        }
        return redirect('/relacionarPunto/'.$detalle->id_recolector);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle = detalle_recolector::find($id);
        $id_rec = $detalle->id_recolector;
        $detalle->delete();
        return redirect('/relacionarPunto/'.$id_rec);
    }
}
