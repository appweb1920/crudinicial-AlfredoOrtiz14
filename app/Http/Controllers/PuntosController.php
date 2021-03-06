<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\puntos;

class PuntosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p = puntos::all();
        return view('welcome')->with('puntos', $p);
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
        /*$tipoBasura = $request->tipoBasura;
        $direccion = $request->direccion;
        $horaAp = $request->horaAp;
        $horaCierre = $request->horaCierre;*/
        $punto = new puntos;
        $punto->tipo_basura = $request->tipo_basura;
        $punto->direccion = $request->direccion;
        $punto->hora_apertura = $request->hora_apertura;
        $punto->hora_cierre = $request->hora_cierre;
        $punto->save();

        return redirect('/puntos');
        //return view('welcome')->with('t', $tipoBasura)->with('d', $direccion)->with('hA', $horaAp)->with('hC', $horaCierre);
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
        $punto = puntos::find($id);
        //pasarlo a la vista
        return view('editaPunto')->with('punto', $punto);
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
        $punto = puntos::find($request->id);
        if(!is_null($punto))
        {
            $punto->tipo_basura = $request->tipo_basura;
            $punto->direccion = $request->direccion;
            $punto->hora_apertura = $request->hora_apertura;
            $punto->hora_cierre = $request->hora_cierre;
            $punto->save();   
        }
        return redirect('/puntos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $punto = puntos::find($id);
        $punto->delete();
        return redirect('/puntos');
    }
}
