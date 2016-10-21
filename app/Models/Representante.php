<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    protected $table= 'representantes';
    protected $primarykey = 'cedula';

    protected $fillable = [
    'cedula','otros_niños','dispuesto a colaborar','parentesco_id'
    ];

     public function parentesco()
    {       
        return $this->belongsTo(Parentesco::class);
    }

    public function persona()
    {       
        return $this->belongsTo(Persona::class);
    }

    public function CargarRepresentante($cedula,$otros_niños,$dispuesto_colaborar,$parentesco_id)
    {
        $representante =[
            'cedula' => $cedula,
            'otros_niños' => $otros_niños,
            'dispuesto_colaborar' => $dispuesto_colaborar,
            'parentesco_id' => $parentesco_id
        ];
        return $representante;
    }
}
