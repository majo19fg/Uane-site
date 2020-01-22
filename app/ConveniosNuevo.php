<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConveniosNuevo extends Model
{
    protected $guarded = [];

    protected $dates = [
        'fecha_inicio'
    ];

    public function setFechaInicioAttribute($value)
    {
        $this->attributes['fecha_inicio'] = (new \Carbon\Carbon($value));
    }


    
}