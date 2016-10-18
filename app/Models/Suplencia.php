<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suplencia extends Model
{
    protected $table= 'suplencias';
    protected $primarykey = ['dia_laboral','suplente','suplantado'];

    protected $fillable = [
    'observacion'
    ];

    public function dias_laboral()
    {
        return $this->belongsTo(Dia_laboral::class);
    }
    public function empleado()
    {
        return $this->hasMany(Empleado::class);
    }
}
