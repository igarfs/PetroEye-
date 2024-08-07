@extends('administrativo.index')

@section('conteudo')

    <div id="jumper"></div>


    <div class="filtros">
        <div class="filtro-container">
            <img src="assets/img/filtro.png" alt="Filter Icon" class="filtroicon">
            <h2 class="filtros-title">Filtros</h2>

        </div>

        <!-- Dropdown 1 -->
        <div class="dropdown">
            <div class="default_option" data-default-text="Categoria">Categoria</div>
            <ul>
                <li>- Limpar Filtro -</li>
                <li>Desenvolvimento</li>
                <li>Especial</li>
                <li>Estratigráfico</li>
                <li>Extensão</li>
                <li>Injeção</li>
                <li>Jazida Mais Profunda</li>
                <li>Jazida mais raza</li>
                <li>Pioneiro</li>
                <li>Pioneiro Adjacente</li>
            </ul>
        </div>
        <!-- Dropdown 2 -->
        <div class="dropdown">
            <div class="default_option">Situação</div>
            <ul>
                <li>- Limpar Filtro -</li>
                <li>Abandonado</li>
                <!--  FAZER SUBFILTRO
                <li>Abandonado Permanentemente</li>
                <li>Abandonado aguardando abandono definitivo/arrasamento</li>
                <li>Abandonado por logística exploratória</li>
                <li>Abandonado temporariamente com monitoramento</li>
                <li>Abandonado temporariamente sem monitoramento</li>
                <li>Abandonado/parado aguardando intervenção para avaliação, completação ou restauração
                </li>-->
                <li>Arrasado</li>
                <li>Cedido para a captação de água</li>
                <li>Devolvido</li>
                <li>Equipado</li>
                <!-- FAZER SUBFILTRO
                <li>Equipado aguardando início de operação</li>
                <li>Equipado aguardando início de produção</li>-->
                <li>Fechado</li>
                <li>Injetando</li>
                <li>Operação</li>
                <!-- FAZER SUBFILTRO
                <li>Operação para captação de água</li>
                <li>Operação para descarte</li>-->
                <li>Produzindo</li> <!-- FAZER SUBFILTRO
                <li>Produzindo e injetando</li>-->
                <li>Outros</li> <!-- FAZER SUBFILTRO
                <li>Em avaliação</li>
                <li>Em completação</li>
                <li>Em intervenção</li>
                <li>Em observação</li>
                <li>Em perfuração</li>
                </li>-->
            </ul>
        </div>

        <!-- Dropdown 3 -->
        <div class="dropdown">
            <div class="default_option">Titularidade</div>
            <ul>
                <li>- Limpar Filtro -</li>
                <li>Confidencial</li>
                <li>Público</li>
            </ul>
        </div>

        <!-- Dropdown 4 -->
        <div class="dropdown">
            <div class="default_option">Tipo de Coordenada</div>
            <ul>
                <li>- Limpar Filtro -</li>
                <li>Definitiva</li>
                <li>Provisória</li>
            </ul>
        </div>

        <!-- Dropdown 5 -->
        <div class="dropdown">
            <div class="default_option">Direção</div>
            <ul>
                <li>- Limpar Filtro -</li>
                <li>Direcional</li>
                <li>Horizontal</li>
                <li>Vertical</li>
            </ul>
        </div>

        <!-- Dropdown 6 -->
        <div class="dropdown">
            <div class="default_option">Geoquímica</div>
            <ul>
                <li>Existe</li>
            </ul>
        </div>

        <!-- LÓGICA DE PESQUISA POR DATA AQUI-->
        <form>
            <div class="datepicker">
                <p>Data de Início</p>
                <input type="date" id="datepicker" name="datepicker">
                <p>Data de Término</p>
                <input type="date" id="datepicker" name="datepicker">
            </div>
        </form>
        <button type="button" onclick="pesquisar()" class="btn-pesquisar">Pesquisar</button>
    </div>

    <!--LÓGICA DE RESULTADOS-->
    <div class="resultados">
        <h4>Exibindo resultados para "acre"</h4>

        <!-- Resultado 1 -->
        <div class="resultado">
            <div class="resultadomapa"></div>
            <div class="descricao">
                <h2>1-RM-1-AC</h2>
                <ul>
                    <li><b>Cadastro: </b>40100047000</li>
                    <li><b>Poço Operador: </b>1RM 0001 AC</li>
                    <li><b>Estado: </b>AC (Acre)</li>
                    <li><b>Bloco: </b>Brasil</li>
                </ul>
            </div>
            <div class="descricao">
                <ul>
                    <li><b>Categoria: </b>Pioneiro</li>
                    <li><b>Reclassificação: </b>Seco sem indícios</li>
                    <li><b>Situação: </b>Abandonado permanentemente</li>
                    <li><b>Início: </b>03/07/1982</li>
                </ul>
            </div>
            <div class="descricao">
                <ul>
                    <li><b>Término: </b>01/02/1983</li>
                    <li><b>Titularidade: </b>Público</li>
                    <li><b>Latitude (Base DD): </b>-8,042874722</li>
                    <li><b>Longitude (Base DD): </b>-73,21974944</li>
                </ul>
            </div>
        </div>

        <!-- Resultado 2 -->
        <div class="resultado">
            <div class="resultadomapa"></div>
            <div class="descricao">
                <h2>1-RZ-1-AC</h2>
                <ul>
                    <li><b>Cadastro: </b>40100032600</li>
                    <li><b>Poço Operador: </b>1RZ 0001 AC</li>
                    <li><b>Estado: </b>AC (Acre)</li>
                    <li><b>Bloco: </b>Brasil</li>
                </ul>
            </div>
            <div class="descricao">
                <ul>
                    <li><b>Categoria: </b>Pioneiro</li>
                    <li><b>Reclassificação: </b>Seco sem indícios</li>
                    <li><b>Situação: </b>Arrasado</li>
                    <li><b>Início: </b>12/10/1975</li>
                </ul>
            </div>
            <div class="descricao">
                <ul>
                    <li><b>Término: </b>28/11/1975</li>
                    <li><b>Titularidade: </b>Público</li>
                    <li><b>Latitude (Base DD): </b>-7,5274625</li>
                    <li><b>Longitude (Base DD): </b>-73,16845556</li>
                </ul>
            </div>
        </div>

        <!-- Resultado 3 -->
        <div class="resultado">
            <div class="resultadomapa"></div>
            <div class="descricao">
                <h2>1-SD-1-AC</h2>
                <ul>
                    <li><b>Cadastro: </b>40100049100</li>
                    <li><b>Poço Operador: </b>1SD 0001 AC</li>
                    <li><b>Estado: </b>AC (Acre)</li>
                    <li><b>Bloco: </b>Brasil</li>
                </ul>
            </div>
            <div class="descricao">
                <ul>
                    <li><b>Categoria: </b>Pioneiro</li>
                    <li><b>Reclassificação: </b>Seco sem indícios</li>
                    <li><b>Situação: </b>Arrasado</li>
                    <li><b>Início: </b>10/03/1983</li>
                </ul>
            </div>
            <div class="descricao">
                <ul>
                    <li><b>Término: </b>28/05/1983</li>
                    <li><b>Titularidade: </b>Público</li>
                    <li><b>Latitude (Base DD): </b>-8,179211944</li>
                    <li><b>Longitude (Base DD): </b>-73,37676972</li>
                </ul>
            </div>
        </div>

        <!-- Resultado 4 -->
        <div class="resultado">
            <div class="resultadomapa"></div>
            <div class="descricao">
                <h2>1-RM-1-AC</h2>
                <ul>
                    <li><b>Cadastro: </b>40100047000</li>
                    <li><b>Poço Operador: </b>1RM 0001 AC</li>
                    <li><b>Estado: </b>AC (Acre)</li>
                    <li><b>Bloco: </b>Brasil</li>
                </ul>
            </div>
            <div class="descricao">
                <ul>
                    <li><b>Categoria: </b>Pioneiro</li>
                    <li><b>Reclassificação: </b>Seco sem indícios</li>
                    <li><b>Situação: </b>Abandonado permanentemente</li>
                    <li><b>Início: </b>03/07/1982</li>
                </ul>
            </div>
            <div class="descricao">
                <ul>
                    <li><b>Término: </b>01/02/1983</li>
                    <li><b>Titularidade: </b>Público</li>
                    <li><b>Latitude (Base DD): </b>-8,042874722</li>
                    <li><b>Longitude (Base DD): </b>-73,21974944</li>
                </ul>
            </div>
        </div>

        <!-- Resultado 5 -->
        <div class="resultado">
            <div class="resultadomapa"></div>
            <div class="descricao">
                <h2>1-RZ-1-AC</h2>
                <ul>
                    <li><b>Cadastro: </b>40100032600</li>
                    <li><b>Poço Operador: </b>1RZ 0001 AC</li>
                    <li><b>Estado: </b>AC (Acre)</li>
                    <li><b>Bloco: </b>Brasil</li>
                </ul>
            </div>
            <div class="descricao">
                <ul>
                    <li><b>Categoria: </b>Pioneiro</li>
                    <li><b>Reclassificação: </b>Seco sem indícios</li>
                    <li><b>Situação: </b>Arrasado</li>
                    <li><b>Início: </b>12/10/1975</li>
                </ul>
            </div>
            <div class="descricao">
                <ul>
                    <li><b>Término: </b>28/11/1975</li>
                    <li><b>Titularidade: </b>Público</li>
                    <li><b>Latitude (Base DD): </b>-7,5274625</li>
                    <li><b>Longitude (Base DD): </b>-73,16845556</li>
                </ul>
            </div>
        </div>

        <!-- Resultado 6 -->
        <div class="resultado">
            <div class="resultadomapa"></div>
            <div class="descricao">
                <h2>1-SD-1-AC</h2>
                <ul>
                    <li><b>Cadastro: </b>40100049100</li>
                    <li><b>Poço Operador: </b>1SD 0001 AC</li>
                    <li><b>Estado: </b>AC (Acre)</li>
                    <li><b>Bloco: </b>Brasil</li>
                </ul>
            </div>
            <div class="descricao">
                <ul>
                    <li><b>Categoria: </b>Pioneiro</li>
                    <li><b>Reclassificação: </b>Seco sem indícios</li>
                    <li><b>Situação: </b>Arrasado</li>
                    <li><b>Início: </b>10/03/1983</li>
                </ul>
            </div>
            <div class="descricao">
                <ul>
                    <li><b>Término: </b>28/05/1983</li>
                    <li><b>Titularidade: </b>Público</li>
                    <li><b>Latitude (Base DD): </b>-8,179211944</li>
                    <li><b>Longitude (Base DD): </b>-73,37676972</li>
                </ul>
            </div>
        </div>

    </div>
    </div>


    <!-- scripts -->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script>
        // jQuery
        $(document).ready(function () {
            // Função para manipular os cliques no dropdown
            $(".dropdown .default_option").click(function () {
                $(this).siblings("ul").addClass("active");
            });

            $(".dropdown ul li").click(function () {
                var text = $(this).text();
                $(this).closest(".dropdown").find(".default_option").text(text);
                $(this).closest("ul").removeClass("active");
            });

            // Impedir que a primeira opção seja selecionada
            $("ul").each(function () {
                $(this).on('mousedown', function (e) {
                    if (e.target.tagName === 'LI' && $(this).find('.default_option').text() === e.target.innerText) {
                        e.preventDefault();
                    }
                });
            });
        });

        // JavaScript
        function pesquisar() {
            var searchTerm = document.querySelector('.search-bar').value;
            //lógica para realizar a pesquisa com o termo searchTerm
        }

        function showCategory(selectId) {
            var selectElement = document.getElementById(selectId);
            var selectedOption = selectElement.options[selectElement.selectedIndex];
            //continuar sequência lógica aqui;
        }

        // impedir que a primeira opção seja selecionada
        var selects = document.querySelectorAll('ul');
        selects.forEach(function (ul) {
            ul.addEventListener('mousedown', function (e) {
                if (e.target.tagName === 'li' && e.target.parentNode.selectedIndex === 0) {
                    e.preventDefault();
                }
            });
        });

        // JavaScript
document.addEventListener("DOMContentLoaded", function () {
    // Obtém todos os elementos dropdown
    var dropdowns = document.querySelectorAll(".dropdown");

    // Itera sobre cada dropdown
    dropdowns.forEach(function (dropdown) {
        var dropdownList = dropdown.querySelector("ul");
        var defaultOption = dropdown.querySelector(".default_option");
        var defaultText = defaultOption.textContent;
        var selectedCategory = defaultText; // Armazena a categoria selecionada
        var wasCategorySelected = false; // Flag para indicar se uma categoria foi selecionada

        // Adiciona evento de clique para o texto "Limpar Filtro"
        defaultOption.addEventListener("click", function () {
            // Abre o dropdown
            dropdownList.classList.toggle("active");
        });

        // Adiciona evento de clique para todas as opções do dropdown
        dropdownList.querySelectorAll("li").forEach(function (item) {
            item.addEventListener("click", function () {
                var selectedOption = item.textContent.trim();
                if (selectedOption === "- Limpar Filtro -") {
                    // Atualiza o texto da opção padrão para o dropdown atual
                    defaultOption.textContent = defaultText;
                    // Atualiza a categoria selecionada para a opção padrão
                    selectedCategory = defaultText;
                } else {
                    // Atualiza o texto da opção padrão para a opção selecionada
                    defaultOption.textContent = selectedOption;
                    // Atualiza a categoria selecionada para a opção selecionada
                    selectedCategory = selectedOption;
                }
                // Indica que uma categoria foi selecionada
                wasCategorySelected = true;
                // Fecha o dropdown após a seleção
                dropdownList.classList.remove("active");
            });
        });

        // Adiciona evento de clique para o dropdown
        dropdown.addEventListener("click", function () {
            // Se nenhuma categoria foi selecionada e o dropdown for clicado novamente, não mude o texto ativo
            if (!wasCategorySelected) {
                return;
            }
            // Se uma categoria foi selecionada, mantém o texto ativo
            defaultOption.textContent = selectedCategory;
        });

        // Adiciona evento de saída do mouse para fechar o dropdown
        dropdown.addEventListener("mouseleave", function () {
            // Fecha o dropdown
            dropdownList.classList.remove("active");
        });
    });
});



    </script>

@endsection
