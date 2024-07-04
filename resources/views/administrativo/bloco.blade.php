<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
    <link rel="stylesheet" href="css/css.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
    <script src="js/js.js"></script>
   
</head>
<body>
    <!--Cabeçalho-->
    <header>
      <ul>
        <img src="assets/images/logo.PNG" alt="Logo da Empresa" class="logo">
        <h1>Bacias</h1>
        <img src="assets/images/lupa2.png" alt="lupa" class="lupa" id="lupa" onclick="pesquisar()">
        <div class="search-wrapper">
  
          <input type="text" class="search-bar" placeholder="Pesquisar...">
        </div>
        <img src="assets/images/menu.PNG" alt="menu" class="menu" id="menu">
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
    <div class="menu-lateral">
        <div class="menu-l">
            <a href="adm.html">Bacia</a>
            <a href="campo.html">Campo</a>
            <a href="bloco.html">Bloco</a>
            <a href="poco.html">Poço</a>
        </div>
    </div>
    <!--Campo de identificação-->
<h2>Preencha os campos</h2>
<form id="myForm">
    <label id="bacia" for="bacia">Nome do Bloco:</label>
    <input type="text" id="bacia" name="bacia">

    <label id="loc" for="localizacao">Localização:</label><br>
    <input type="text" id="localizacao" name="localizacao">

    <h3>Funcionários no local:</h3>
    <table id="infoTable">
      <tr>
        <th>Data</th>
        <th>Quanntidade</th>
      </tr>
      <tr>
        <td><input type="text" name="col1[]"></td>
        <td><input type="text" name="col2[]"></td>
      </tr>
    </table><br>
    <button id="adc" type="button" onclick="addRow()">Adicionar Linha</button><br>
    <h3>Produtos:</h3>
    <table id="infoTable">
      <tr>
        <th>Tipo</th>
        <th>Produto</th>
        <th>Quanntidade</th>
      </tr>
      <tr>
        <td><input type="text" name="col1[]"></td>
        <td><input type="text" name="col2[]"></td>
        <td><input type="text" name="col3[]"></td>
      </tr>
    </table><br>
    <button calss="adc" type="button" onclick="addRow()">Adicionar Linha</button><br>
    <button class="limpa" type="button" onclick="clearForm()">Cancelar</button>
    <button class="enviar" type="button" onclick="submitForm()">Enviar</button>
  </form>
</body>
</html>