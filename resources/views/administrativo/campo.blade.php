@extends('administrativo.index')

@section('conteudo')

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
    <label id="bacia" for="bacia">Nome do Campo:</label>
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

  @endsection
