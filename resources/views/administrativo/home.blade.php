@extends('administrativo.index')

@section('conteudo')
    <div class="backgroundmap">
        <div id="map" style="height: 500px; width: 100%;"></div>
    </div>

    <div id="elements4">
        <div class="bottomdrag">
            <h1>Detalhes do Poço</h1>
    <p><strong>Tipo de Poço:</strong> {{ $item->tp }}</p>
    <p><strong>Cadastro:</strong> {{ $item->cad }}</p>
    <p><strong>Operador:</strong> {{ $item->ope }}</p>
    <p><strong>Poço Operador:</strong> {{ $item->pocoOpe }}</p>
    <p><strong>Estado:</strong> {{ $item->est }}</p>
    <p><strong>Bacia:</strong> {{ $item->bac }}</p>
    <p><strong>Bloco:</strong> {{ $item->blo }}</p>
    <p><strong>Sig Campo:</strong> {{ $item->sigCam }}</p>
    <p><strong>Campo:</strong> {{ $item->cam }}</p>
    <p><strong>TERRA MAR:</strong> {{ $item->terrMar }}</p>
    <p><strong>Poço Pos ANP:</strong> {{ $item->pocoPosAnp }}</p>
    <p><strong>Tipo:</strong> {{ $item->tipo }}</p>
    <p><strong>Categoria:</strong> {{ $item->cat }}</p>
    <p><strong>Reclassificação:</strong> {{ $item->rec }}</p>
    <p><strong>Situação:</strong> {{ $item->sit }}</p>
    <p><strong>Início:</strong> {{ $item->ini }}</p>
    <p><strong>Término:</strong> {{ $item->term }}</p>
    <p><strong>Conclusão:</strong> {{ $item->con }}</p>
    <p><strong>Titularidade:</strong> {{ $item->tit }}</p>
    <p><strong>Datum Horizontal:</strong> {{ $item->datumHor }}</p>
    <p><strong>Tipo de Coordenada de Base:</strong> {{ $item->tipoCoordBase }}</p>
    <p><strong>Direção:</strong> {{ $item->dir }}</p>
    <p><strong>Profundidade Vertical (m):</strong> {{ $item->profVert }}</p>
    <p><strong>Profundidade Sondador (m):</strong> {{ $item->profSondador }}</p>
    <p><strong>Profundidade Medida (m):</strong> {{ $item->profMedida }}</p>
    <p><strong>Referência de Profundidade:</strong> {{ $item->refProf }}</p>
    <p><strong>Mesa Rotativa:</strong> {{ $item->mesaRot }}</p>
    <p><strong>Cota Altimétrica (m):</strong> {{ $item->cotaAlt }}</p>
    <p><strong>Lâmina d'Água (m):</strong> {{ $item->laminaAgua }}</p>
    <p><strong>Datum Vertical:</strong> {{ $item->datumVert }}</p>
    <p><strong>Unidade Estratigráfica:</strong> {{ $item->unidadeEstrat }}</p>
    <p><strong>Geologia Grupo Final:</strong> {{ $item->geolGrupo }}</p>
    <p><strong>Geologia Formação Final:</strong> {{ $item->geolFormacao }}</p>
    <p><strong>Geologia Membro Final:</strong> {{ $item->geolMembro }}</p>
    <p><strong>CDPE:</strong> {{ $item->cdpe }}</p>
    <p><strong>AGP:</strong> {{ $item->agp }}</p>
    <p><strong>PC:</strong> {{ $item->pc }}</p>
    <p><strong>PAG:</strong> {{ $item->pag }}</p>
    <p><strong>Perfis Convencionais:</strong> {{ $item->perfConv }}</p>
    <p><strong>Durante Perfuração:</strong> {{ $item->durantePerf }}</p>
    <p><strong>Perfis Digitais:</strong> {{ $item->perfDig }}</p>
    <p><strong>Perfis Processados:</strong> {{ $item->perfProc }}</p>
    <p><strong>Perfis Especiais:</strong> {{ $item->perfEsp }}</p>
    <p><strong>Amostra Lateral:</strong> {{ $item->amostraLat }}</p>
    <p><strong>Sísmica:</strong> {{ $item->sismica }}</p>
    <p><strong>Tabela Tempo Profundidade:</strong> {{ $item->tabelaTempProf }}</p>
    <p><strong>Dados Direcionais:</strong> {{ $item->dadosDir }}</p>
    <p><strong>Teste a Cabo:</strong> {{ $item->testeCabo }}</p>
    <p><strong>Teste de Formação:</strong> {{ $item->testeFormacao }}</p>
    <p><strong>Canhoneio:</strong> {{ $item->canhoneio }}</p>
    <p><strong>Testemunho:</strong> {{ $item->testemunho }}</p>
    <p><strong>Geoquímica:</strong> {{ $item->geoquimica }}</p>
    <p><strong>Sig Sonda:</strong> {{ $item->sigSonda }}</p>
    <p><strong>Nome Sonda:</strong> {{ $item->nomSonda }}</p>
    <p><strong>Atingiu Presal:</strong> {{ $item->atingiPresal }}</p>
    <p><strong>DHA Atualização:</strong> {{ $item->dhaAtual }}</p>
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

            // Criar um array de markers
            var markers = locations.map(function(location) {
                var position = {
                    lat: parseFloat(location.lat),
                    lng: parseFloat(location.lng)
                };

                var marker = new google.maps.Marker({
                    position: position,
                    map: map
                });

                marker.addListener("click", () => {
                    currentMarker = location; // Salva a localização atual
                    loadPoço(location.id); // Carrega os detalhes do poço

                    $("#elements4").toggle();
                    $(".bottomdrag").css("top", "900px");
                });

                return marker;
            });

            // Criar o MarkerClusterer com todos os markers
            new markerClusterer.MarkerClusterer({
                map,
                markers,
                renderer: {
                    render({
                        count,
                        position
                    }) {
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

        async function loadPoço() {
    try {
        const response = await fetch('http://127.0.0.1:8000/conteudo/1');

        if (!response.ok) {
            throw new Error(`Erro na requisição: ${response.statusText}`);
        }

        const item = await response.json();
        var itemElement = document.createElement('p');
        itemElement.textContent =
            `Tipo de Poço: ${item.tp}, Cadastro: ${item.cad}, Operador: ${item.ope}, Poço Operador: ${item.pocoOpe}, Estado: ${item.est}, Bacia: ${item.bac}, Bloco: ${item.blo}, Sig Campo: ${item.sigCam}, Campo: ${item.cam}, Terra/Már: ${item.terrMar}, Poço Pos ANP: ${item.pocoPosAnp}, Tipo: ${item.tipo}, Categoria: ${item.cat}, Reclassificação: ${item.rec}, Situação: ${item.sit}, Início: ${item.ini}, Término: ${item.term}, Conclusão: ${item.con}, Titularidade: ${item.tit}, Datum Horizontal: ${item.datumHor}, Tipo de Coordenada de Base: ${item.tipoCoordBase}, Direção: ${item.dir}, Profundidade Vertical: ${item.profVert} m, Profundidade Sondador: ${item.profSondador} m, Profundidade Medida: ${item.profMedida} m, Referência de Profundidade: ${item.refProf}, Mesa Rotativa: ${item.mesaRot}, Cota Altimétrica: ${item.cotaAlt} m, Lâmina d’Água: ${item.laminaAgua} m, Datum Vertical: ${item.datumVert}, Unidade Estratigráfica: ${item.unidadeEstrat}, Geologia Grupo Final: ${item.geolGrupo}, Geologia Formação Final: ${item.geolFormacao}, Geologia Membro Final: ${item.geolMembro}, CDPE: ${item.cdpe}, AGP: ${item.agp}, PC: ${item.pc}, PAG: ${item.pag}, Perfis Convencionais: ${item.perfConv}, Durante Perfuração: ${item.durantePerf}, Perfis Digitais: ${item.perfDig}, Perfis Processados: ${item.perfProc}, Perfis Especiais: ${item.perfEsp}, Amostra Lateral: ${item.amostraLat}, Sísmica: ${item.sismica}, Tabela Tempo Profundidade: ${item.tabelaTempProf}, Dados Direcionais: ${item.dadosDir}, Teste a Cabo: ${item.testeCabo}, Teste de Formação: ${item.testeFormacao}, Canhoneio: ${item.canhoneio}, Testemunho: ${item.testemunho}, Geoquímica: ${item.geoquimica}, Sig Sonda: ${item.sigSonda}, Nom Sonda: ${item.nomSonda}, Atingiu Presal: ${item.atingiuPresal}, DHA Atualização: ${item.dhaAtual}`;
        itemList.appendChild(itemElement);
    } catch (error) {
        console.error('Erro ao carregar poço:', error);
    }
}
    </script>
@endpush
