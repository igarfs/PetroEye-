<?php
namespace App\Http\Controllers\Administrativo;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Pocos;

class PocosController extends Controller
{
    public function listar(){

        return view('administrativo.pocos.listar');

   }

   public function cadastro(){

        return view('administrativo.pocos.cadastro');

    }

}




