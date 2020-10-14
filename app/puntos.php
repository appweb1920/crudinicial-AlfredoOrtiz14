<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puntos extends Model
{
    protected $table="puntos";
    protected $fillable = ['tipo_basura', 'direccion', 'hora_apertura', 'hora_cierre'];
}
