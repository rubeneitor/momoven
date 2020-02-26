<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function motos()
    {
        return $this->hasMany('App\Moto');
    }
}
