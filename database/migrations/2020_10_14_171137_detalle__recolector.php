<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetalleRecolector extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_recolector', function (Blueprint $table) {
            $table->unsignedBigInteger('id_punto');
            $table->unsignedBigInteger('id_recolector');

            $table->id();
            $table->foreign('id_punto')->references('id')->on('puntos');
            $table->foreign('id_recolector')->references('id')->on('recolectores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_recolector');
    }
}
