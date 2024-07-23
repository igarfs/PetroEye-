<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadosAnp extends Model
{
    use HasFactory;

    // Se a tabela não seguir o padrão de nomenclatura do Laravel, especifique-a
    protected $table = 'dados_anp';

    // Se a tabela não tiver timestamps, desabilite-os
    public $timestamps = false;

    // Lista de atributos permitidos para mass assignment
    protected $fillable = ['LATITUDE_BASE_4C', 'LONGITUDE_BASE_4C', 'CAMPO'];
}
