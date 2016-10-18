<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Retiro extends Model
{
    protected $table= 'retiros';
    protected $primarykey = ['cedula','dia_laboral'];

    protected $fillable = [
    'observacion'
    ];

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }
    public function dia_laboral()
    {
        return $this->belongsTo(Dia_laboral::class);
    }
}
