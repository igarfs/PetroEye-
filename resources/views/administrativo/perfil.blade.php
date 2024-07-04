@extends('administrativo.index')

@section('conteudo')
    <div id="jumper"></div>
    <div id="bloco-01">

    <div id="perfil">
    <img class="foto" src="https://cdn-icons-png.flaticon.com/512/12225/12225828.png">
    <p class="perfil">Mudar perfil</p>
    </div>
    <div class="campo">
        <label for="imputname">Nome da empresa:</label><br>
            <input type="text" id="imputname" name="imputname" required><br><br>
        <label for="imputname">Administrador:</label><br>
            <input type="text" id="imputname" name="imputname" required placeholder="Nome completo"><br><br>
        <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required >
    </div>

    <div class="campo2">
        <label for="cnpj">CNPJ:</label><br>
        <input type="tezt" id="cnpj" name="cnpj" required><br><br>
    <label for="imputname">Identificação:</label><br>
        <input type="text" id="imputname" name="imputname" required placeholder="Do administrador"><br>
    </div>
    </div>
    <hr/>
    <h3 id="senha-title">Senha</h3>

    <div class="campo3">
        <label for="senha">Nova Senha</label><br>
        <input type="password" id="senha" name="senha"><br>
        <i class="bi bi-eye-fill" id="btn-senha" onclick="mostrarSenha()" ></i><br>
        </div>
    <div class="campo4">
        <label for="senhas">Confirmar Senha</label><br>
        <input type="password" id="senhas" name="senhas" required>
    </div> <br>
    <button type="button" class="redefinir">Redefinir</button>


</body>
</html>

@endsection
