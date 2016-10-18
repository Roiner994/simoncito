<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asistencia_alumno extends Model
{
    protected $table= 'asistencia_alumnos';
    protected $primarykey = ['cedula','seccion','dia_laboral'];

    protected $fillable = [
    ];

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }
    public function dia_laboral()
    {
        return $this->belongsTo(Dia_laboral::class);
    }
    public function seccion()
    {
        return $this->belongsTo(Seccion::class);
    }
}
