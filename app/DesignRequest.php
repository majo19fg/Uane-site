<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesignRequest extends Model
{
    protected  $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class, 'designRequest_user');
    }
}
