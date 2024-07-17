@extends('administrativo.index')

@section('conteudo')


<body>
    <div class="container">
        <!-- Quadro de foto -->
        <div class="foto_perfil">
            <img id="Image" src="https://media.bzi.ro/unsafe/0x600/smart/filters:contrast(3):format(jpeg):quality(100)/http://www.bzi.ro/wp-content/uploads/2022/01/farapoza-de-profil.jpg" alt="Foto de Perfil">
        </div>
        <!-- Link para alterar foto -->
        <a class="editar" href="https://www.remove.bg/pt-br/upload">Editar foto</a>

        <!-- Formulário -->
        <div class="form-group">
            <label for="empresa">Nome da empresa</label>
            <input type="text" id="empresa" required>
        </div>

        <div class="form-group">
            <label for="administrador">Administrador</label>
            <input type="text" id="administrador" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="cnpj">CNPJ</label>
            <input type="text" id="cnpj" maxlength="14" required>
        </div>

        <div class="form-group">
            <label for="identificacao">Identificação</label>
            <input type="text" id="identificacao" required>
        </div>

        <hr class="hr">
        <h1>Senha</h1>
        <div class="form-group">
            <label for="senha">Redefinir senha</label>
            <input type="password" id="senha" required>
        </div>

        <div class="form-group">
            <label for="confirmar_senha">Confirmar Senha</label>
            <input type="password" id="confirmar_senha" required>
            <button class="concluir" type="submit">Concluído</button>
        </div>

        <div class="button-group">

        <button class="cancelar" type="button">Cancelar</button>
            <button class="enviar" type="submit">Enviar</button>

        </div>
    </div>
</body>
</html>


</body>
</html>

@endsection
