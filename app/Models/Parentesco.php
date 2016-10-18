<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{
    protected $table= 'parentescos';
    protected $primarykey = 'id';

    protected $fillable = [
    'nombre'
    ];

    public function representante()
    {
        return $this->hasMany(Representante::class);
    }
}
