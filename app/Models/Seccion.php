<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $table= 'secciones';
    protected $primarykey = 'nombre';

    protected $fillable = [
    'min_edad','max_edad','capacidad'
    ];

    public function encargado()
    {
        return $this->hasMany(Encargado::class);
    }

    public function inscripcion(){
        return $this->hasMany(Inscripcion::class);
    }

    public function asistencia_alumno()
    {
        return $this->hasMany(Asistencia_alumno::class);
    }
}
