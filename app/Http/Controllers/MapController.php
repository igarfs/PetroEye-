<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dados_anp;

class MapController extends Controller
{
    public function administrativohome()
    {
        // Busca todas as localizações
        $locations = dados_anp::all(['id as id', 'LATITUDE_BASE_4C as lat', 'LONGITUDE_BASE_4C as lng', 'CAMPO as title'])->toArray();

        return view('administrativo.home', compact('locations'));
    }
}
