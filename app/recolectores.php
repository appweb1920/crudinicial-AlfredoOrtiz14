<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class recolectores extends Model
{
    protected $table="recolectores";
    protected $fillable = ['nombre', 'dias_recoleccion'];

    public function getPuntos(){
        $puntos = DB::select('SELECT puntos.tipo_basura FROM puntos INNER JOIN detalle_recolector 
        ON puntos.id = detalle_recolector.id_punto INNER JOIN recolectores 
        ON recolectores.id = detalle_recolector.id_recolector WHERE recolectores.id = '. $this->id);
        return $puntos;
    }

    public function getDetalles(){
        $detalles = DB::select('SELECT * FROM detalle_recolector 
        WHERE detalle_recolector.id_recolector = '.$this->id); 
        dd($detalles);
        return $detalles;
    }

    /*public function getPuntosSinRelacion(){
        $puntos = DB::select('SELECT puntos.id, puntos.tipo_basura FROM puntos INNER JOIN detalle_recolector 
        ON puntos.id != detalle_recolector.id_punto INNER JOIN recolectores 
        ON recolectores.id = detalle_recolector.id_recolector WHERE recolectores.id = '. $this->id);//Esta mal pero puede servir para la edicion
        return $puntos;
    }*/

    public function getPuntosSinRelacion(){
        $puntos = DB::select('SELECT puntos.id, puntos.tipo_basura FROM puntos');//Esta mal pero puede servir para la edicion
        return $puntos;
    }
}
