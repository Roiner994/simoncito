<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periodo_escolar extends Model
{
    protected $table= 'periodos_escolares';
    protected $primarykey = 'id';

    protected $fillable = [
    'nombre','fecha_inicio','fecha_fin'
    ];

    public function encargado()
    {
        return $this->hasMany(Encargado::class);
    }

    public function dia_laboral()
    {
        return $this->hasMany(Dia_laboral::class);
    }

    public function inscripcion()
    {
        return $this->hasMany(Encargado::class);
    }
}
