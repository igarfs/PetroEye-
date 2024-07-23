<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class conteudo extends Controller
{
    public function conteudo($id)
    {
        // Filtra o poço específico baseado no ID
        $item = Location::where('id', $id)
            ->first(['tipo_de_poco as tp', 'localizacao as loc', 'inicio as ini', 'profundidade as prof', 'status as stat', 'operador as ope', 'campo as cam', 'bacia as bac']);

        // Verifica se o poço foi encontrado
        if ($item) {
            return response()->json($item);
        } else {
            return response()->json(['message' => 'Poço não encontrado'], 404);
        }
    }
}
