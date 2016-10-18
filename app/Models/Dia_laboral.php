<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dia_laboral extends Model
{
    protected $table= 'dias_laborales';
    protected $primarykey = ['fecha','periodo_escolar'];

    protected $fillable = [
    'en_aula'
    ];

    public function periodo_escolar()
    {
        return $this->belongsTo(Periodo_escolar::class);
    }
    public function asistencia_empleado()
    {
        return $this->hasMany(Asistencia_empleado::class);
    }

    public function asistencia_alumno()
    {
        return $this->hasMany(Asistencia_alumno::class);
    }

    public function suplencia()
    {
        return $this->hasMany(Suplencia::class);
    }

    public function retiro()
    {
        return $this->hasMany(Retiro::class);
    }

    public function inscripcion()
    {
        return $this->hasMany(Inscripcion::class);
    }
}
