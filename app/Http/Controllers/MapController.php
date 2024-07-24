<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dados_anp;

class MapController extends Controller
{
    public function administrativohome()
    {
        // Busca todas as localizações com todos os campos explicitamente nomeados
        $locations = dados_anp::all([
            'id',
            'POCO',
            'CADASTRO',
            'OPERADOR',
            'POCO_OPERADOR',
            'ESTADO',
            'BACIA',
            'BLOCO',
            'SIG_CAMPO',
            'CAMPO',
            'TERRA_MAR',
            'POCO_POS_ANP',
            'TIPO',
            'CATEGORIA',
            'RECLASSIFICACAO',
            'SITUACAO',
            'INICIO',
            'TERMINO',
            'CONCLUSAO',
            'TITULARIDADE',
            'LATITUDE_BASE_4C',
            'LONGITUDE_BASE_4C',
            'LATITUDE_BASE_DD',
            'LONGITUDE_BASE_DD',
            'DATUM_HORIZONTAL',
            'TIPO_DE_COORDENADA_DE_BASE',
            'DIRECAO',
            'PROFUNDIDADE_VERTICAL_M',
            'PROFUNDIDADE_SONDADOR_M',
            'PROFUNDIDADE_MEDIDA_M',
            'REFERENCIA_DE_PROFUNDIDADE',
            'MESA_ROTATIVA',
            'COTA_ALTIMETRICA_M',
            'LAMINA_D_AGUA_M',
            'DATUM_VERTICAL',
            'UNIDADE_ESTRATIGRAFICA',
            'GEOLOGIA_GRUPO_FINAL',
            'GEOLOGIA_FORMACAO_FINAL',
            'GEOLOGIA_MEMBRO_FINAL',
            'CDPE',
            'AGP',
            'PC',
            'PAG',
            'PERFIS_CONVENCIONAIS',
            'DURANTE_PERFURACAO',
            'PERFIS_DIGITAIS',
            'PERFIS_PROCESSADOS',
            'PERFIS_ESPECIAIS',
            'AMOSTRA_LATERAL',
            'SISMICA',
            'TABELA_TEMPO_PROFUNDIDADE',
            'DADOS_DIRECIONAIS',
            'TESTE_A_CABO',
            'TESTE_DE_FORMACAO',
            'CANHONEIO',
            'TESTEMUNHO',
            'GEOQUIMICA',
            'SIG_SONDA',
            'NOM_SONDA',
            'ATINGIU_PRESAL',
            'DHA_ATUALIZACAO'
        ])->toArray();

        return view('administrativo.home', compact('locations'));
    }
}
