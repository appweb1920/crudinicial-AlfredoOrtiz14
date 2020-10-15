<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recolectores extends Model
{
    protected $table="recolectores";
    protected $fillable = ['nombre', 'dias_recoleccion'];
}
