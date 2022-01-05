<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class representante extends Model
{
    use HasFactory;
    protected $fillable = [
        'ciest',
        'cirep',
      
    ];
}
