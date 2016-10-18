<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table= 'alumnos';
    protected $primarykey = 'cedula';

    protected $fillable = [
    'edad_meses'
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
}
