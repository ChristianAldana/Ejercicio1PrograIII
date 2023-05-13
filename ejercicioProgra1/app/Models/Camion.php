<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class camion extends Model
{
    public $table='camiones';
    use HasFactory;


    public function transporte(){
        return $this->belongsTo('App\Models\transporte');



    }
}
