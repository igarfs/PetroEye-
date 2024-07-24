
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.4" />
  <title></title>

  <link rel="stylesheet" href="/assets/css/style_header.css" />
  <link rel="stylesheet" href="/assets/css/perfil.css" />
  <link rel="stylesheet" href="/assets/css/style_formularios.css" />
  <link rel="stylesheet" href="/assets/css/mapa.css" />
  <link rel="stylesheet" href="/assets/css/css.css" />
  <link rel="stylesheet" href="/assets/css/css2.css" />


  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

    <script async src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap"> </script>
    <!-- Adicione esta linha para usar a nova versão através de um CDN -->
<script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>

  <script src="/assets/js/header.js"></script>
  <script src="/assets/js/formularios.js"></script>
  <script src="/assets/js/js2.js"></script>
  <script src="/assets/js/js.js"></script>
</head>

<body>

    <div class="header">
        <div class="hamburger" onclick="toggleMenu()">&#9776;</div>
        <div class="logo">
          <img src="assets/images/logo.png" alt="Logo">
        </div>
    </div>

    <div id="myNav" class="nav-list">
        <a href="javascript:void(0)" class="closebtn" onclick="toggleMenu()">&times;</a>
        <a href="{{ route('bacia') }}">Bacia</a>
    <a href="{{ route('campo') }}">Campos</a>
    <a href="{{ route('pocos') }}">Poços</a>
    <a href="{{ route('perfil') }}">Perfil</a>
    <a href="{{ route('logistica') }}">Logística</a>
    <a href="{{ route('historico') }}">Histórico</a>
    <a href="{{ route('sobre_nos') }}">Sobre</a>
    </div>

  <div class="main-container">
  @yield('conteudo')
</div>

  <div class="bg-foot">

    <div class="footer-links">
      <span class="copyright">© 2024 ProtoEyeMonitoring </span><span class="privacy-policy">| aaaaPolítica de Privacidade e
        Cookies</span>
    </div>
  </div>


@stack('scripts')
</body>

</html>
