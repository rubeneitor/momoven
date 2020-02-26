<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    protected $table = "motos";
    protected $fillable = [
        'nombre', 'idCiudad', 'idModelo', 'idMarca'
    ];

    public function ciudad()
    {
        return $this->belongsTo('App\Ciudad','idCiudad','id');
    }

   
    public function modelo()
    {
     return $this->belongsTo('App\Modelo', 'idModelo', 'id');
    }

    public function marca()
    {
     return $this->belongsTo('App\Marca', 'idMarca', 'id');
    }



    
}
