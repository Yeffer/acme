<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductores extends Model
{
    protected $fillable = [
        'cedula',
        'primer_nombre',
        'segundo_nombre',
        'apellidos',
        'direccion',
        'telefono',
        'ciudad_id',
    ];
}
