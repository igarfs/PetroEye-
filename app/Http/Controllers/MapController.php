<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MapController extends Controller
{
    public function administrativohome()
    {
        // Array de endereços - pode vir de um banco de dados ou outra fonte de dados
        $locations = [
            ['lat' => -23.550520, 'lng' => -46.633308, 'title' => 'São Paulo'],
            ['lat' => -22.906847, 'lng' => -43.172896, 'title' => 'Rio de Janeiro'],
            ['lat' => -15.7801, 'lng' => -47.9292, 'title' => 'Brasília'],
            // Adicione mais endereços conforme necessário
        ];

        return view('administrativo.home', compact('locations'));
    }
}

