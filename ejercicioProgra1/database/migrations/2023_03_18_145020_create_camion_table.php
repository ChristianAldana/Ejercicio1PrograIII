<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camion', function (Blueprint $table) {
            $table->id();
            $table-> string('placa_camion', 75);
            $table-> string(' marca', 75);
            $table-> string('color', 75);
            $table-> string('modelo', 75);
            $table-> string('capacidad_toneladas', 75);
            $table-> string('transporte_codigo', 75);


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
        Schema::dropIfExists('camion');
    }
}
