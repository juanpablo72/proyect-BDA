<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso_estudiante extends Model
{
    use HasFactory;
      protected $fillable = [
        'ciest',
        'codmat',
        'secmat',

    ];

}
