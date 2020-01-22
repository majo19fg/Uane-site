<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $fillable = [
        'name', 'miniatura', 'url', 'direccion', 'latitud', 'longitud', 'history'
    ];

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function programa()
    {
        return $this->belongsToMany(Programa::class);
    }

    public function galeria()
    {
        return $this->hasMany(GalleryCampus::class);
    }

}
