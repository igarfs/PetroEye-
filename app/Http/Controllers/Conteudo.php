<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class conteudo extends Controller
{
    public function show($id)
    {
        $item = Location::select([
            'POCO as tp',
            'CADASTRO as cad',
            'OPERADOR as ope',
            'POCO_OPERADOR as pocoOpe',
            'ESTADO as est',
            'BACIA as bac',
            'BLOCO as blo',
            'SIG_CAMPO as sigCam',
            'CAMPO as cam',
            'TERRA_MAR as terrMar',
            'POCO_POS_ANP as pocoPosAnp',
            'TIPO as tipo',
            'CATEGORIA as cat',
            'RECLASSIFICACAO as rec',
            'SITUACAO as sit',
            'INICIO as ini',
            'TERMINO as term',
            'CONCLUSAO as con',
            'TITULARIDADE as tit',
            'DATUM_HORIZONTAL as datumHor',
            'TIPO_DE_COORDENADA_DE_BASE as tipoCoordBase',
            'DIRECAO as dir',
            'PROFUNDIDADE_VERTICAL_M as profVert',
            'PROFUNDIDADE_SONDADOR_M as profSondador',
            'PROFUNDIDADE_MEDIDA_M as profMedida',
            'REFERENCIA_DE_PROFUNDIDADE as refProf',
            'MESA_ROTATIVA as mesaRot',
            'COTA_ALTIMETRICA_M as cotaAlt',
            'LAMINA_D_AGUA_M as laminaAgua',
            'DATUM_VERTICAL as datumVert',
            'UNIDADE_ESTRATIGRAFICA as unidadeEstrat',
            'GEOLOGIA_GRUPO_FINAL as geolGrupo',
            'GEOLOGIA_FORMACAO_FINAL as geolFormacao',
            'GEOLOGIA_MEMBRO_FINAL as geolMembro',
            'CDPE as cdpe',
            'AGP as agp',
            'PC as pc',
            'PAG as pag',
            'PERFIS_CONVENCIONAIS as perfConv',
            'DURANTE_PERFURACAO as durantePerf',
            'PERFIS_DIGITAIS as perfDig',
            'PERFIS_PROCESSADOS as perfProc',
            'PERFIS_ESPECIAIS as perfEsp',
            'AMOSTRA_LATERAL as amostraLat',
            'SISMICA as sismica',
            'TABELA_TEMPO_PROFUNDIDADE as tabelaTempProf',
            'DADOS_DIRECIONAIS as dadosDir',
            'TESTE_A_CABO as testeCabo',
            'TESTE_DE_FORMACAO as testeFormacao',
            'CANHONEIO as canhoneio',
            'TESTEMUNHO as testemunho',
            'GEOQUIMICA as geoquimica',
            'SIG_SONDA as sigSonda',
            'NOM_SONDA as nomSonda',
            'ATINGIU_PRESAL as atingiPresal',
            'DHA_ATUALIZACAO as dhaAtual'
        ])->where('id', $id)->first();

        if ($item) {
            return view('conteudo', ['item' => $item]);
        } else {
            return abort(404, 'Poço não encontrado');
        }
    }
}
