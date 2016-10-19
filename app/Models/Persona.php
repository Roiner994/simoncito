<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table= 'personas';
    protected $primarykey = 'cedula';

    protected $fillable = [
    'cedula','nombre','segundo_nombre','apellido','segundo_apellido','lugar_nacimiento','fecha_nacimiento','edad','ocupacion','direccion'
    ];



    public function cargarPersona($cedula,$nombre,$segundo_nombre,$apellido,$segundo_apellido,$lugar_nacimiento,$fecha_nacimiento,$edad,$ocupacion,$direccion)
    {
        $persona=[
        'cedula'=> $cedula,
        'nombre'=> $nombre,
        'segundo_nombre'=> $segundo_nombre,
        'apellido'=> $apellido,
        'segundo_apellido'=> $segundo_apellido,
        'lugar_nacimiento'=> $lugar_nacimiento,
        'fecha_nacimiento'=> $fecha_nacimiento,
        'edad'=> $edad,
        'ocupacion'=> $ocupacion,
        'direccion'=> $direccion];
        return $persona;
    }

     public function empleado()
    {       
        return $this->hasMany(Empleado::class);
    }

    public function representante()
    {
        return $this->hasMany(Representante::class);
    }

}
