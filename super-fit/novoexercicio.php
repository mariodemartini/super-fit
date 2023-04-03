<?php
include_once('include/header.php');
include_once('include/navbar.php');
include_once('include/sidebar.php');
include_once('./conexao/Conexao.php');
include_once('./model/Exercicio.php');
include_once('./dao/ExercicioDAO.php');
include_once('./model/Serie.php');
include_once('./dao/SerieDAO.php');

$exercicio = new Exercicio();
$exercicioDAO = new ExercicioDAO();
$serie = new Serie();
$seriedao = new SerieDAO();
?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">FICHA DE EXERCÍCIOS</h3></div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <form action="controller/ExercicioController.php" method="POST">
                                <h4>Novo Execício</h4>
                                <div class="row mb-3">
                                    <div class="col-sm-1">
                                        <label for="inputGM">GM</label>
                                        <input type="text" class="form-control" id="inputGM" name="grupoMuscular">
                                    </div>
                                    <div class="col-sm-5">
                                        <label for="inputExercicio">EXERCÍCIO</label>
                                        <input type="text" class="form-control" id="inputExercicio" name="descricao">
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <button type="submit" name="salvar" class="btn btn-success btn-lg">Salvar</button>
                                    <button type="button" class="btn btn-warning"><a class="btn btn-warning btn-block" href="pesquisa-exercicio.php">Pesquisar</a></button>
                                </div>

                            </form>
                        </div> 
                        <br>
                        <div class="row mb-3">
                            <form action="controller/SerieController.php" method="POST">
                                <h4>Nova Série</h4>
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label for="inputGM">SERIE</label>
                                        <input type="text" class="form-control" id="inputSerie" name="serie">
                                    </div>
                                    <div class="col-sm-1">
                                        <label for="inputCG">%CG</label>
                                        <input type="text" class="form-control" id="inputCG" name="percentCarga">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="inputNivel">NIVEL</label>
                                        <input type="text" class="form-control" id="inputNivel" name="nivel">
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="inputFase">FASE</label>
                                        <input type="text" class="form-control" id="inputFase" name="fase">
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                <button type="submit" name="salvar" class="btn btn-success btn-lg">Salvar</button>
                                    <button type="button" class="btn btn-warning"><a class="btn btn-warning btn-block" href="pesquisa-serie.php">Pesquisar</a></button>
                                </div>
                            </form>
                        </div>
                        <br>
                        <div class="mt-4 mb-0">
                            <button type="button" class="btn btn-secondary"><a class="btn btn-secondary btn-block" href="treinos.php">Voltar</a></button>
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