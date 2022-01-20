<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documentos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'status',
        'sol_academica',
        'rec_academico',
        'cont_culminacionSV',
        'ActEvaPasantias',
        'CertPasantias',
        'ActDefensaTrabGrado',
        'ConstPracticas',
        'ActPasantiasHosp',
        'reingresoTrans',
        'RecoAmonestaciones',
        'FondoNegro',
        'copiaTituloB',
        'CopiaSimple',
        'CopiaPnacimiento',
        'PlanillaRusni',
        'PlanilladefensaInt',
    ];
}
