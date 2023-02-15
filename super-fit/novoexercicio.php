<!-- Include php rodapé e menus -->
<?php
include_once('include/header.html');
include_once('include/navbar.html');
include_once('include/sidebar.html');
?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <!-- Div titulo principal-->
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">FICHA DE EXERCÍCIOS</h3></div>
                    <!-- Div do formulario principal -->
                    <div class="card-body">
                        <form>

                            <!-- Formulário do treino Musculação-->
                            <div class="row mb-3">
                                <h4>Novo Execícios</h4>
                                <form>
                                    <!-- Coluna grupo muscular -->
                                    <div class="col-3 .col-md-3">
                                        <label for="inputGM">GM</label>
                                        <input type="text" class="form-control" id="inputGM">
                                    </div>
                                    <!-- Coluna exercicios -->
                                    <div class="col-3 .col-md-3">
                                        <label for="inputExercicio">EXERCÍCIOS</label>
                                        <input type="text" class="form-control" id="inputExercicio">
                                    </div>

                                </form>
                            </div> 
                            <br>  

                             <!-- Formulário treino Aerobio -->
                            <div class="row mb-3">
                                <h4>Nova Série</h4>

                                <div class="col-3 .col-md-3">
                                    <label for="inputGM">SERIES</label>
                                    <input type="text" class="form-control" id="inputSerie">
                                </div>
                                <div class="col-3 .col-md-3">
                                    <label for="inputGM">%CG</label>
                                    <input type="text" class="form-control" id="inputCG">
                                </div>

                            </div>
                            

                            <!-- Botões de salvar -->
                            <div class="mt-4 mb-0">
                                <button type="button" class="btn btn-success"><a class="btn btn-success btn-block" href="#">Salvar</a></button>
                                <button type="button" class="btn btn-warning"><a class="btn btn-warning btn-block" href="#">Editar</a></button>
                                <button type="button" class="btn btn-secondary"><a class="btn btn-secondary btn-block" href="treinos.php">Voltar</a></button>
                            </div>
                        </form>
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
