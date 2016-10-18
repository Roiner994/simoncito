<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asistencia_empleado extends Model
{
    protected $table= 'asistencias_empleados';
    protected $primarykey = ['cedula','dia_laboral'];

    protected $fillable = [
    'presente','observacion'
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
    public function dia_laboral()
    {
        return $this->belongsTo(Dia_laboral::class);
    }
}
