<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    protected $table= 'encargado';
    protected $primarykey = ['cedula','seccion','periodo_escolar'];

    protected $fillable = [
    
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    public function periodo_escolar()
    {
        return $this->belongsTo(Periodo_escolar::class);
    }

    public function seccion()
    {
        return $this->belongsTo(Seccion::class);
    }
}
