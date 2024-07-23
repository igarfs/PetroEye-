@extends('administrativo.index')

@section('conteudo')
    <div class="backgroundmap">




        <div id="map"></div>

        <!--
                 The 'defer' attribute causes the callback to execute after the full HTML
                 document has been parsed. For non-blocking uses, avoiding race conditions,
                 and consistent behavior across browsers, consider loading using Promises
                 with https://www.npmjs.com/package/@googlemaps/js-api-loader.
                -->






    </div>


    <div id="elements4">


        <div class="bottomdrag">
            <div id="item-list"></div>
            <div id="dragbutton"></div>

        </div>

    </div>


    </div>
@endsection





@push('scripts')
<script>
 setTimeout(initMap, 1000);

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: {
                lat: -15.7801,
                lng: -47.9292
            }
        });

        var locations = @json($locations);

        locations.forEach(function(location) {
            var position = {
                lat: parseFloat(location.lat),
                lng: parseFloat(location.lng)
            };
            var marker = new google.maps.Marker({
                position: position,
                map: map,
               
            });

            marker.addListener("click", () => {
                currentMarker = location; // Salva a localização atual
                loadPoço(location.id); // Carrega os detalhes do poço

            });

            marker.addListener("click", () => {
                $("#elements4").toggle();
                $(".bottomdrag").css("top", "900px");

            });

        });
    }


    function loadPoço(id) {
            fetch(`/conteudo/${id}`)
                .then(response => response.json())
                .then(item => {
                    var itemList = document.getElementById('item-list');
                    itemList.innerHTML = ''; // Limpa o conteúdo anterior

                    if (item.message) {
                        itemList.textContent = item.message; // Exibe mensagem de erro se o poço não for encontrado
                    } else {
                        var itemElement = document.createElement('p');
                        itemElement.textContent = `Tipo de Poço: ${item.tp}, Localização: ${item.loc}, Início: ${item.ini}, Profundidade: ${item.prof}, Status: ${item.stat}, Operador: ${item.ope}, Campo: ${item.cam}, Bacia: ${item.bac}`;
                        itemList.appendChild(itemElement);
                    }
                })
                .catch(error => console.error('Erro ao carregar poço:', error));
        }




</script>




@endpush
