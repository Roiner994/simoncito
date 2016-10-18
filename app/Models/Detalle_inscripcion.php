<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle_inscripcion extends Model
{
    protected $table= 'detalles_inscripciones';
    protected $primarykey = ['cedula','inscripcion_id','alumno'];

    protected $fillable = [
    'representante','partida_nacimiento','certificado_vacunas','carta_residencia','constancia_trabajo','copia_cedula_madre','foto'
    ];

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }
    public function inscripcion()
    {
        return $this->belongsTo(Inscripcion::class);
    }
    public function representante()
    {
        return $this->belongsTo(Representante::class);
    }
}
