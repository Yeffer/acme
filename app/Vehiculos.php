<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    protected $fillable = [
        'placa',
        'color',
        'marca',
        'tipo',
        'conductor_id',
        'propietario_id',
    ];
}
