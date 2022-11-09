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
                <!-- Div do Titulo da página -->
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">RELATÓRIOS</h3></div>
                    <!-- Div do conteudo principal e botões -->
                    <div class="card-body">
                        <!-- Sub-menu -->
                        <div class="row mb-3">
                            <a class="btn btn-info btn-block" href="relatorio-avaliacao.php"><button type="button" class="btn btn-info btn-lg">COMPARATIVO</button></a>
                        </div>
                        <div class="row mb-3">
                            <a class="btn btn-info btn-block" href="relatorio-grafico"><button type="button" class="btn btn-info btn-lg">GRÁFICO DE EVOLUÇÃO</button></a>
                        </div>
                        <!-- Botão voltar -->
                        <div><br><button type="button" class="btn btn-secondary"><a class="btn btn-secondary btn-block" href="home.php">Voltar</a></button></br></div>  
                    </div>
                    <div class="card-footer text-center py-3"></div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Include php rodapé -->
<?php
include_once('include/footer.html');
?>
