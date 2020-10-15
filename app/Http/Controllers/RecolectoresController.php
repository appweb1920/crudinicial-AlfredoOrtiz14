<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recolectores;

class RecolectoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $r = recolectores::all();
        return view('recolectores')->with('recolectores', $r);
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
        $recolector = new recolectores;
        $recolector->nombre = $request->nombre;
        $recolector->dias_recoleccion = $request->dias_recoleccion;
        $recolector->save();

        return redirect('/recolectores');
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
        $recolector = recolectores::find($id);
        //pasarlo a la vista
        return view('editaRecolector')->with('recolector', $recolector);
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
        $recolector = recolectores::find($request->id);
        if(!is_null($recolector))
        {
            $recolector->nombre = $request->nombre;
            $recolector->dias_recoleccion = $request->dias_recoleccion;
            $recolector->save();   
        }
        return redirect('/recolectores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recolector = recolectores::find($id);
        $recolector->delete();
        return redirect('/recolectores');
    }
}
