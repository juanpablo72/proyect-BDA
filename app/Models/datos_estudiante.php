<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datos_estudiante extends Model
{
    use HasFactory;
    protected $fillable = [
    	'id',
        'ciest',
        'nombre',
        'apellidos',
        'lugarnac',
         'edad',
         'correo',

    ];
}
