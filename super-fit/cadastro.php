<!-- Include php cabeçalho e barras -->
<?php
include_once('include/header.html');
include_once('include/navbar.html');
include_once('include/sidebar.html');
?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <!-- Div do Titulo da página e barra de pesquisa -->
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">CADASTRO</h3></div>
                    <!-- Div do conteudo principal e botões -->
                    <div class="card-body">
                        <!-- Sub-menu -->
                        <div class="row mb-3">
                            <a class="btn btn-success btn-block" href="cadastro-aluno.php"><button type="button" class="btn btn-success btn-lg btn-block">NOVO ALUNO</button></a>
                        </div>

                        <div class="row mb-3">
                            <a class="btn btn-info btn-block" href="buscar-aluno.php"><button type="button" class="btn btn-info btn-lg btn-block">PESQUISAR ALUNO</button></a>
                        </div> 
                    </div>
                    <div class="mt-4 mb-0">
                        <button type="button" class="btn btn-secondary btn-sm"><a class="btn btn-secondary btn-block" href="home.php">Voltar</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Include php rodapé -->
<?php
include_once('include/footer.html');
?>
