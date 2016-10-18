<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table= 'personas';
    protected $primarykey = 'cedula';

    protected $fillable = [
    'nombre','segundo_nombre','apellido','segundo_apellido','lugar_nacimiento','fecha_nacimiento','edad','ocupacion','direccion'
    ];

     public function empleado()
    {       
        return $this->hasMany(Empleado::class);
    }

    public function representante()
    {
        return $this->hasMany(Representante::class);
    }
}
