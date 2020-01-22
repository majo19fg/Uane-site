<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{

    protected $guarded = [];
    
    protected $dates = ['inicio_curso'];

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function tipoPrograma() 
    {
        return $this->belongsTo('App\TipoPrograma', 'tipoPrograma_id');
    }

    public function modalidadPrograma()
    {
        return $this->belongsTo('App\ModalidadPrograma', 'modalidadPrograma_id');
    }

    public function campus()
    {
        return $this->belongsToMany(Campus::class);
    }
}
