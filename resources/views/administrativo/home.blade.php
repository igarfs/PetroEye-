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
            <div id="table">
                <table>

                    <thead>
                        <tr>
                            <th scope="col">distribuição terra/mar</th>
                            <td> </td>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">total petroleo</th>
                            <td>xxxton</td>

                        </tr>
                        <tr>
                            <th scope="row">total gas</th>
                            <td>xxxton</td>

                        </tr>


                    </tbody>

                </table>
            </div>
            <div id="text-001">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dapibus ultricies ante vitae facilisis.
                    Vestibulum iaculis ultricies mattis. Aliquam erat volutpat. Fusce lectus lorem, ornare nec accumsan ut,
                    venenatis vitae purus. Nunc eu urna ipsum. Nulla facilisi. Nullam vitae sollicitudin leo, quis egestas
                    tellus. Praesent sagittis magna eget magna maximus, non cursus justo interdum. Vivamus non finibus
                    neque, quis elementum elit. Vivamus vulputate efficitur efficitur.</p>
            </div>

            <div class="drag-title">
                <h1>bacia de campos</h1>
            </div>
            <div class="drag-next">
                <h2>campos>></h2>
            </div>
            <div id="dragbutton"></div>

        </div>

    </div>


    </div>
@endsection





@push('scripts')


<script>
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
            new google.maps.Marker({
                position: position,
                map: map,
                title: location.title
            });


        });

    }
</script>
@endpush
