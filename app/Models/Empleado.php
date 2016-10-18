<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table= 'empleados';
    protected $primarykey = 'cedula';

    protected $fillable = [
    'cedula','estado'
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
