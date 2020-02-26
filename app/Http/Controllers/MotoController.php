<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moto;

class MotoController extends Controller
{
    public function getMotosPorCiudad($nombreCiudad){
        return Moto::selectRaw('motos.*, marcas.nombre as marca, modelos.nombre as modelo')
        ->join('ciudades', 'motos.idCiudad', '=', 'ciudades.id')
        ->join('marcas', 'motos.idMarca', '=', 'marcas.id')
        ->join('modelos', 'motos.idModelo', '=', 'modelos.id')
        ->where('ciudades.nombre', '=',$nombreCiudad)
        ->get();

    }
}
