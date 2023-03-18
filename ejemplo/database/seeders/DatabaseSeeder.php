<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $proveedor = new Proveedor(); //objeto y y atributos de la clase.
        $proveedor->codigo_proveedor='ABC1234';
        $proveedor->nombre_proveedor='Proveedor';
        $proveedor->direccion='Entre Rios';
        $proveedor->telefono_casa='79483212';
        $proveedor->save();


    }
}
