<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class MapController extends Controller
{
    public function administrativohome()
    {
        // Array de endereços - pode vir de um banco de dados ou outra fonte de dados
          // Busca todas as localizações do banco de dados

          $locations = Location::all(['latitude as lat', 'longitude as lng', 'campo as title']);


        return view('administrativo.home', compact('locations'));
    }
}


