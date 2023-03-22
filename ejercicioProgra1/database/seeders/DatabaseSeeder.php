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
        $this->call(CamionSeeder::class);
        $proveedor = new proveedo(); //objeto y y atributos de la clase.
        $proveedor->id='45879858';
        $proveedor->nombre='toledo';
        $proveedor->razon_social='camiones';
        $proveedor->save();

    }
}
