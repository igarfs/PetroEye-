@extends('administrativo.index')

@section('conteudo')

<body>
    <div class="container">
        <div class="menu-block">
            <ul>
                <li><button onclick="location.href='formulario_bacia.php'">Formulário Bacias</button></li>
            </ul>
        </div>
        <div class="menu-block">
            <ul>
                <li><button onclick="location.href='formulario_poco.php'">Formulário Poços</button></li>
            </ul>
        </div>
        <div class="menu-block">
            <ul>
                <li><button onclick="location.href='formulario_campos.php'">Formulário Campos</button></li>
            </ul>
        </div>
    </div>
    <h1>Preencha os campos</h1>
    <div class="form-group">
        <label for="nome">Nome</label><br><br>
        <input type="text" id="nome" placeholder="Nome do poço" required>
    </div>
    <div class="form-group">
        <label id="estado" for="estado">Estado</label><br><br>
        <input type="text" id="estado" placeholder="Ex: ES" required>
    </div>

    <!-- Tabela de pessoas presentes -->
    <p>Quantidade de pessoas no local</p>
    <table id="tablePessoas" class="dataTable">
        <thead>
            <tr>
                <th>Data</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <button class="botton" onclick="addRow('tablePessoas')">+Adicionar Linha</button>

    <!-- Tabela de produtos -->
    <p>Produtos extraídos do local e sua quantidade</p>
    <table id="tableProdutos" class="dataTable">
        <thead>
            <tr>
                <th>Data</th>
                <th>Produto</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <button class="botton" onclick="addRow('tableProdutos')">+Adicionar Linha</button>
</body>
</html>
