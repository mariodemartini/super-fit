<?php
include_once('include/header.html');
include_once('include/navbar.html');
include_once('include/sidebar.html');
?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <!-- titulo principal -->
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">TESTES FÍSICOS</h3></div>
                    <!-- Botões sub-menu testes -->
                    <div class="card-body">
                        
                        <a class="btn btn-info btn-block" href="forca-rep.php"><button type="button" class="btn btn-info btn-lg">FORÇA REPETIÇÃO</button></a>
                        
                        <a class="btn btn-info btn-block" href="forca-max.php"><button type="button" class="btn btn-info btn-lg">FORÇA MAXIMA</button></a>
                        
                        <a class="btn btn-info btn-block" href="vo-esteira.php"><button type="button" class="btn btn-info btn-lg">VO² ESTEIRA</button></a>
                        
                        <a class="btn btn-info btn-block" href="vo-bike.php"><button type="button" class="btn btn-info btn-lg">VO² BICICLETA</button></a>
                        
                        <!-- Botão voltar -->
                        <div><br><button type="button" class="btn btn-secondary"><a class="btn btn-secondary btn-block" href="avaliacao.php">Voltar</a></button></br></div>  
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
