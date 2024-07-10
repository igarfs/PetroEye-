<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.4" />
  <title></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
  <link rel="stylesheet" href="/assets/css/bacias 01 (1).css" />
  <link rel="stylesheet" href="/assets/css/css.css" />
  <link rel="stylesheet" href="/assets/css/filtros.css" />
  <link rel="stylesheet" href="/assets/css/perfil.css" />
  <link rel="stylesheet" href="/assets/css/mapa.css" />
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

  <script src="/assets/js/bacias 01 (1).js"></script>
</head>

<body>

  <header>
    <ul>
      <img src="/assets/images/logo.PNG" alt="Logo da Empresa" class="logo">
      <h1>Bacias</h1>
      <img src="/assets/images/lupa2.png" alt="lupa" class="lupa" id="lupa" onclick="pesquisar()">
      <div class="search-wrapper">

        <input type="text" class="search-bar" placeholder="Pesquisar...">
      </div>
      <img src="/assets/images/menu.PNG" alt="menu" class="menu" id="menu">
      <div class="menu-wrapper">
        <ul>

          <li><a href="bacias 01 (1).html">bacias</a></li>
          <li><a href="campo.html">campos</a></li>
          <li><a href="poco.html">poços</a></li>
          <hr>
          <li><A href="perfil.html">perfil</A></li>
          <li>historico</li>
          <li>logistica</li>
          <li><a href="sobre.html">sobre</a></li>
          <li>modo noturno</li>

        </ul>

      </div>
    </ul>
  </header>

  <div class="main-container">
  @yield('conteudo')
</div>

  <div class="bg-foot">

    <div class="footer-links">
      <span class="copyright">© 2024 ProtoEyeMonitoring </span><span class="privacy-policy">| aaaaPolítica de Privacidade e
        Cookies</span>
    </div>
  </div>



</body>

</html>
