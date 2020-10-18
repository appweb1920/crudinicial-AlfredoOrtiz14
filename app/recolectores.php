<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class recolectores extends Model
{
    protected $table="recolectores";
    protected $fillable = ['nombre', 'dias_recoleccion'];

    public function getPuntos(){
        $puntos = DB::select('SELECT puntos.id, puntos.tipo_basura FROM puntos INNER JOIN detalle_recolector 
        ON puntos.id = detalle_recolector.id_punto INNER JOIN recolectores 
        ON recolectores.id = detalle_recolector.id_recolector WHERE recolectores.id = '. $this->id);
        return $puntos;
    }

    public function getDetalles($id_punto){
        $detalles = DB::select('SELECT * FROM detalle_recolector 
        WHERE detalle_recolector.id_recolector = '.$this->id .' AND detalle_recolector.id_punto = '.$id_punto); 
        //dd($detalles);
        return $detalles;
    }

    /*public function getPuntosSinRelacion(){
        $puntos = DB::select('SELECT puntos.id, puntos.tipo_basura FROM puntos INNER JOIN detalle_recolector 
        ON puntos.id != detalle_recolector.id_punto INNER JOIN recolectores 
        ON recolectores.id = detalle_recolector.id_recolector WHERE recolectores.id = '. $this->id);
        return $puntos;
    }*/

    public function getPuntosSinRelacion(){
        $puntos = DB::select('SELECT puntos.id, puntos.tipo_basura FROM puntos');
        return $puntos;
    }
}
