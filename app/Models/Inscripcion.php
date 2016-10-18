<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table= 'inscripciones';
    protected $primarykey = ['id','periodo_escolar'];

    protected $fillable = [
    'empleado','seccion','fecha','alumnos'
    ];

    public function periodo_escolar()
    {
        return $this->belongsTo(Periodo_escolar::class);
    }
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
    public function seccion()
    {
        return $this->belongsTo(Secciones::class);
    }
    public function dia_laboral()
    {
        return $this->belongsTo(Dia_laboral::class);
    }
    public function detalle_inscripcion()
    {
        return $this->hasMany(Detalle_inscripcion::class);
    }
}
