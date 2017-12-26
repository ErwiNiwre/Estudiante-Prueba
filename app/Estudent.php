<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudent extends Model
{
    //
    use SoftDeletes;

    protected $table='estudents';
    protected $dates=['delete_at'];

    protected $fillable = [
        'ci',
        'nombre',
        'apellido',
        'genero',
        'fec_nac',
    ];
}
