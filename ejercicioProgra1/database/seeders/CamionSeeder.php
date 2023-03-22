<?php

namespace Database\Seeders;
use App\Models\camion;

use Illuminate\Database\Seeder;

class CamionSeeder extends Seeder
{
    //Christian Aldana
    public function run()
    {
        $camiones=new camion();
        $camiones-> id= '5489421';
        $camiones-> placa_camion= 'guate';
        $camiones-> marca='camiones';
        $camiones->color='amarillo';
        $camiones->model='Lampa';
        $camiones->capacidad_toneladas='10';
        $camiones-> transportes_id='147896548';
        $camiones -> save();
    }
}


