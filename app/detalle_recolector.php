<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class detalle_recolector extends Model
{
    protected $table="detalle_recolector";
    protected $fillable = ['id_punto', 'id_recolector'];

    public function getTipo(){
        $puntos = DB::select('SELECT puntos.id, puntos.tipo_basura FROM puntos INNER JOIN detalle_recolector 
        ON puntos.id = detalle_recolector.id_punto WHERE detalle_recolector.id = '.$this->id);
        return $puntos;
    }
    
}
