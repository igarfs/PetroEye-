@extends('administrativo.index')

@section('conteudo')
<div class="backgroundmap">
    <script src="assets/js/mapa.js"></script>



    <div id="map"></div>

    <!--
     The 'defer' attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi9y5a2nDWRix0IEa3RqyVHz8ANK1eD8U&callback=initMap&v=weekly&solution_channel=GMP_CCS_simpleclickevents_v2"
      defer
    ></script>
</div>

<div id="elements">

  <div class="oval"></div>

    <div class="base-2"></div>

  <div class="text">
    <div class="icon-right"></div>
    <span class="abingdon">Bacia de Campos</span>
  </div>
</div>
<div id="elements2">

  <div class="oval"></div>

    <div class="base-2"></div>

  <div class="text">
    <div class="icon-right"></div>
    <span class="abingdon">Bacia de Campos</span>
  </div>
</div>
<div id="elements3">

  <div class="oval"></div>

    <div class="base-2"></div>

  <div class="text">
    <div class="icon-right"></div>
    <span class="abingdon">Bacia de Campos</span>
  </div>
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
    <div id="text-001"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dapibus ultricies ante vitae facilisis. Vestibulum iaculis ultricies mattis. Aliquam erat volutpat. Fusce lectus lorem, ornare nec accumsan ut, venenatis vitae purus. Nunc eu urna ipsum. Nulla facilisi. Nullam vitae sollicitudin leo, quis egestas tellus. Praesent sagittis magna eget magna maximus, non cursus justo interdum. Vivamus non finibus neque, quis elementum elit. Vivamus vulputate efficitur efficitur.</p></div>
    <div id="text-002"><p>© 2024 ProtoEyeMonitoring    |    Política de Privacidade e Cookies</p><p>Agência Nacional de Petróleo, Gás Natural e Biocombustíveis (ANP)</p></div>
      <div class="drag-title"><h1>bacia de campos</h1></div>
      <div class="drag-next"><h2>campos>></h2></div>
      <div id="dragbutton"></div>

    </div>

</div>

<div class="ellipse"></div>
<div class="rectangle"></div>

</div>
@endsection
