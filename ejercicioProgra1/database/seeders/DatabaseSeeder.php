<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();
        $proveedor = new proveedor(); //objeto y y atributos de la clase.
        $proveedor->codigo='ABC1234';
        $proveedor->nombre='Proveedor';
        $proveedor->razon_social='Razon_publica';
        $proveedor->save();

    }
}
