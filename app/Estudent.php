<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudent extends Model
{
    //
    protected $fillable = [
        'ci',
        'nombre',
        'apellido',
        'genero',
        'fec_nac',
    ];
}
