<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dados_anp extends Model
{
    // Se o nome da tabela não corresponder ao nome padrão em plural
    protected $table = 'dados_anp'; // Verifique se o nome está correto

    // Se a tabela tem uma chave primária diferente
    protected $primaryKey = 'id';

    // Se a tabela não usa timestamps (created_at, updated_at)
    public $timestamps = false;
}
