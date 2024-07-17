
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.4" />
  <title></title>

  <link rel="stylesheet" href="/assets/css/style_header.css" />
  <link rel="stylesheet" href="/assets/css/perfil.css" />
  <link rel="stylesheet" href="/assets/css/style_formularios.css" />


  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

    <script async src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap"> </script>

  <script src="/assets/js/header.js"></script>
  <script src="/assets/js/formularios.js"></script>
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
        <a href="bacia.php">Bacia</a>
        <a href="campo.php">Campos</a>
        <a href="pocos.php">Poços</a>
        <a href="perfil.php">Perfil</a>
        <a href="logistica.php">Logística</a>
        <a href="historico.php">Historico</a>
        <a href="sobre_nos.php">Sobre</a>
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
