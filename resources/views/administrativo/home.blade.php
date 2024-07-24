@extends('administrativo.index')

@section('conteudo')
    <div class="backgroundmap">
        <div id="map"></div>
    </div>

    <div id="elements4">
        <div class="bottomdrag">
            <div class="conteudo"></div>

            <div id="dragbutton"></div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        setTimeout(initMap, 1000);

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: {
                    lat: -3.007801,
                    lng: -38.9292
                }
            });

            var locations = @json($locations);
            console.log('Locations:', locations);  // Verifique a estrutura dos dados

            var markers = locations.map(function(location) {
                var position = {
                    lat: parseFloat(location.LATITUDE_BASE_DD),
                    lng: parseFloat(location.LONGITUDE_BASE_DD)
                };

                var marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    id: location.id  // Armazenar o ID no marcador
                });

                marker.addListener("click", function() {
                    var markerId = this.id;  // Acessar o ID armazenado

                    // Encontre o local correspondente para obter outras informações
                    var locationData = locations.find(loc => loc.id == markerId);

                    if (locationData) {
                        var content = `
                            <h3>Informações do Marcador</h3>
                            <p>ID: ${locationData.id}</p>
                            <p>POCO: ${locationData.POCO}</p>
                            <p>CADASTRO: ${locationData.CADASTRO}</p>
                            <p>OPERADOR: ${locationData.OPERADOR}</p>
                            <p>POCO_OPERADOR: ${locationData.POCO_OPERADOR}</p>
                            <p>ESTADO: ${locationData.ESTADO}</p>
                            <p>BACIA: ${locationData.BACIA}</p>
                            <p>BLOCO: ${locationData.BLOCO}</p>
                            <p>SIG_CAMPO: ${locationData.SIG_CAMPO}</p>
                            <p>CAMPO: ${locationData.CAMPO || 'Não disponível'}</p>
                            <p>TERRA_MAR: ${locationData.TERRA_MAR}</p>
                            <p>POCO_POS_ANP: ${locationData.POCO_POS_ANP}</p>
                            <p>TIPO: ${locationData.TIPO}</p>
                            <p>CATEGORIA: ${locationData.CATEGORIA}</p>
                            <p>RECLASSIFICACAO: ${locationData.RECLASSIFICACAO}</p>
                            <p>SITUACAO: ${locationData.SITUACAO}</p>
                            <p>INICIO: ${locationData.INICIO}</p>
                            <p>TERMINO: ${locationData.TERMINO}</p>
                            <p>CONCLUSAO: ${locationData.CONCLUSAO}</p>
                            <p>TITULARIDADE: ${locationData.TITULARIDADE}</p>
                            <p>LATITUDE_BASE_4C: ${locationData.LATITUDE_BASE_4C}</p>
                            <p>LONGITUDE_BASE_4C: ${locationData.LONGITUDE_BASE_4C}</p>
                            <p>LATITUDE_BASE_DD: ${locationData.LATITUDE_BASE_DD}</p>
                            <p>LONGITUDE_BASE_DD: ${locationData.LONGITUDE_BASE_DD}</p>
                            <p>DATUM_HORIZONTAL: ${locationData.DATUM_HORIZONTAL}</p>
                            <p>TIPO_DE_COORDENADA_DE_BASE: ${locationData.TIPO_DE_COORDENADA_DE_BASE}</p>
                            <p>DIRECAO: ${locationData.DIRECAO}</p>
                            <p>PROFUNDIDADE_VERTICAL_M: ${locationData.PROFUNDIDADE_VERTICAL_M}</p>
                            <p>PROFUNDIDADE_SONDADOR_M: ${locationData.PROFUNDIDADE_SONDADOR_M}</p>
                            <p>PROFUNDIDADE_MEDIDA_M: ${locationData.PROFUNDIDADE_MEDIDA_M}</p>
                            <p>REFERENCIA_DE_PROFUNDIDADE: ${locationData.REFERENCIA_DE_PROFUNDIDADE}</p>
                            <p>MESA_ROTATIVA: ${locationData.MESA_ROTATIVA}</p>
                            <p>COTA_ALTIMETRICA_M: ${locationData.COTA_ALTIMETRICA_M}</p>
                            <p>LAMINA_D_AGUA_M: ${locationData.LAMINA_D_AGUA_M}</p>
                            <p>DATUM_VERTICAL: ${locationData.DATUM_VERTICAL}</p>
                            <p>UNIDADE_ESTRATIGRAFICA: ${locationData.UNIDADE_ESTRATIGRAFICA}</p>
                            <p>GEOLOGIA_GRUPO_FINAL: ${locationData.GEOLOGIA_GRUPO_FINAL}</p>
                            <p>GEOLOGIA_FORMACAO_FINAL: ${locationData.GEOLOGIA_FORMACAO_FINAL}</p>
                            <p>GEOLOGIA_MEMBRO_FINAL: ${locationData.GEOLOGIA_MEMBRO_FINAL}</p>
                            <p>CDPE: ${locationData.CDPE}</p>
                            <p>AGP: ${locationData.AGP}</p>
                            <p>PC: ${locationData.PC}</p>
                            <p>PAG: ${locationData.PAG}</p>
                            <p>PERFIS_CONVENCIONAIS: ${locationData.PERFIS_CONVENCIONAIS}</p>
                            <p>DURANTE_PERFURACAO: ${locationData.DURANTE_PERFURACAO}</p>
                            <p>PERFIS_DIGITAIS: ${locationData.PERFIS_DIGITAIS}</p>
                            <p>PERFIS_PROCESSADOS: ${locationData.PERFIS_PROCESSADOS}</p>
                            <p>PERFIS_ESPECIAIS: ${locationData.PERFIS_ESPECIAIS}</p>
                            <p>AMOSTRA_LATERAL: ${locationData.AMOSTRA_LATERAL}</p>
                            <p>SISMICA: ${locationData.SISMICA}</p>
                            <p>TABELA_TEMPO_PROFUNDIDADE: ${locationData.TABELA_TEMPO_PROFUNDIDADE}</p>
                            <p>DADOS_DIRECIONAIS: ${locationData.DADOS_DIRECIONAIS}</p>
                            <p>TESTE_A_CABO: ${locationData.TESTE_A_CABO}</p>
                            <p>TESTE_DE_FORMACAO: ${locationData.TESTE_DE_FORMACAO}</p>
                            <p>CANHONEIO: ${locationData.CANHONEIO}</p>
                            <p>TESTEMUNHO: ${locationData.TESTEMUNHO}</p>
                            <p>GEOQUIMICA: ${locationData.GEOQUIMICA}</p>
                            <p>SIG_SONDA: ${locationData.SIG_SONDA}</p>
                            <p>NOM_SONDA: ${locationData.NOM_SONDA}</p>
                            <p>ATINGIU_PRESAL: ${locationData.ATINGIU_PRESAL}</p>
                            <p>DHA_ATUALIZACAO: ${locationData.DHA_ATUALIZACAO}</p>
                        `;
                        $("#elements4").toggle();
                        $(".conteudo").html(content).show();
                        $(".bottomdrag").css("top", "900px");

                        // Estilizar dinamicamente a div
                        styleContentDiv(locationData);
                    }
                });

                return marker;
            });

            new markerClusterer.MarkerClusterer({
                map,
                markers,
                renderer: {
                    render({ count, position }) {
                        return new google.maps.Marker({
                            position,
                            label: String(count),
                            icon: {
                                url: "https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m1.png",
                                scaledSize: new google.maps.Size(56, 56),
                            },
                        });
                    },
                },
            });
        }

        
    </script>
@endpush
