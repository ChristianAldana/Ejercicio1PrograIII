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
        Schema::create('camiones', function (Blueprint $table) {
            $table->id();
            $table-> string('placa_camion',6);
            $table->string('marca',25);
            $table->string('color',25);
            $table->string('model');
            $table->integer('capacidad_toneladas');
            $table->unsignedBigInteger('transportes_id')->nullable();
            $table->foreign('transportes_id')->references('id')->on('transportes')->onDelete('set null');

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
