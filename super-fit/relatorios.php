<!-- Include php cabeçalho e barras -->
<?php
// session_start();
// if(((!isset($_SESSION['email'])) == true) && ((!isset($_SESSION['senha'])) == true)){
//     unset($_SESSION["email"]);
//     unset($_SESSION["senha"]);
//     header('Location: index.php');
// }
include_once('include/header.php');
include_once('include/navbar.php');
include_once('include/sidebar.php');
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
                        <a class="btn btn-info btn-block" href="relatorio-avaliacao.php"><button type="button" class="btn btn-info btn-lg btn-block">COMPARATIVOS</button></a>
                        </div>
                        <div class="row mb-3">
                        <a class="btn btn-info btn-block" href="relatorio-grafico.php"><button type="button" class="btn btn-info btn-lg btn-block">EVOLUÇÂO</button></a>
                        </div> 
                    </div>
                    <div class="card-footer text-center py-3"></div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Include php rodapé -->
<?php
include_once('include/footer.php');
?>
