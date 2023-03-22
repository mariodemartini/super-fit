<!-- Include php cabeçalho e barras -->
<?php
include_once('include/header.php');
include_once('include/navbar.php');
include_once('include/sidebar.php');
include_once('./model/TesteForca.php');
include_once('./dao/TesteForcaDAO.php');

$testeforca = new TesteForca();
$testeforcadao = new TesteForcaDAO();
?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <!-- Div do Titulo da página -->
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">TESTE DE FORÇA MÁXIMA</h3></div>
                    <!-- Div barra de pesquisa -->
                    <form class="card-header inline-block form-inline mb-3">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Pesquisar..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <div class="card-body">
                        <!-- Div do formulario principal -->
                        <form action="controller/TesteForcaController.php" method="POST">
                            <!-- Linha data e idade -->
                            <div class="row mb-3">
                                <div class="form-group col-md-2">
                                    <label for="inputData">DATA</label>
                                    <input type="date" class="form-control" id="inputData" name="dataTeste">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="inputData">NOME</label>
                                    <input type="text" class="form-control" id="inputData" name="nome">
                                </div>
                                <div class="form-group col-sm-1">
                                    <label for="inputData">IDADE</label>
                                    <input type="number" class="form-control" id="inputData" name="idade">
                                </div>
                            </div>
                            <br>
                            <div class="row mb-3">
                                <h3>Descrição:</h3>
                                <p>Realizar aquecimento no exercicio com carga leve.</p> 
                                <p>O aluno tem 3 tentativas para realizar 1 repetição máxima, com descanso de 3 a 5 minutos.</p>
                                <p>Acrescentar carga a cada tentativa completa.</p>
                            </div>
                            <!-- TESTE PEITORAL -->
                            <div class="row mb-3">
                                <!-- Seleção exercicio -->
                                <div class="form-group col-md-3">
                                    <h4>Peitoral</h4>
                                    <select class="form-control" id="exercicioPeito" name="exercicio">
                                        <option>Escolha</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Linha tentativas -->
                            <div class="row mb-3">
                                <div class="form-group col-md-3">
                                    <label for="inputPrimeira" class="col-sm-9 col-form-label">1ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputPrimeira" placeholder="kg" name="cargaInicial">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputSegunda" class="col-sm-9 col-form-label">2ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputSegunda" placeholder="kg" name="cargaFinal">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputTerceira" class="col-sm-9 col-form-label">3ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputTerceira" placeholder="kg" name="cargaFinal">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- TESTE COSTAS -->
                            <div class="row mb-3">
                                <!-- Seleção exercicio -->
                                <div class="form-group col-md-3">
                                    <h4>Costas</h4>
                                    <select class="form-control" id="exercicioCostas" name="exercicio">
                                        <option>Escolha</option>
                                        <option>Remada Maquina</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Linha tentativas -->
                            <div class="row mb-3">
                                <div class="form-group col-md-3">
                                    <label for="inputPrimeira" class="col-sm-9 col-form-label">1ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputPrimeira" placeholder="rep" name="cargaInicial">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputSegunda" class="col-sm-9 col-form-label">2ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputSegunda" placeholder="rep" name="cargaFinal">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputTerceira" class="col-sm-9 col-form-label">3ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputTerceira" placeholder="rep" name="cargaFinal">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- TESTE COXA -->
                            <div class="row mb-3">
                                <!-- Seleção exercicio -->
                                <div class="form-group col-md-3">
                                    <h4>Coxa</h4>
                                    <select class="form-control" id="exercicioCoxa" name="exercicio">
                                        <option>Escolha</option>
                                        <option>Agachamento Maquina</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Linha tentativas -->
                            <div class="row mb-3">
                                <div class="form-group col-md-3">
                                    <label for="inputPrimeira" class="col-sm-9 col-form-label">1ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputPrimeira" placeholder="kg" name="cargaInicial">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputSegunda" class="col-sm-9 col-form-label">2ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputSegunda" placeholder="kg" name="cargaFinal">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputTerceira" class="col-sm-9 col-form-label">3ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputTerceira" placeholder="kg" name="cargaFinal">
                                    </div>
                                </div>
                            </div>
                            <!-- TESTE BICEPS -->
                            <div class="row mb-3">
                                <!-- Seleção exercicio -->
                                <div class="form-group col-md-3">
                                    <h4>Bíceps</h4>
                                    <select class="form-control" id="exercicioBiceps" name="exercicio">
                                        <option>Escolha</option>
                                        <option>Rosca Direta</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Linha tentativas -->
                            <div class="row mb-3">
                                <div class="form-group col-md-3">
                                    <label for="inputPrimeira" class="col-sm-9 col-form-label">1ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputPrimeira" placeholder="kg" name="cargaInicial">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputSegunda" class="col-sm-9 col-form-label">2ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputSegunda" placeholder="kg" name="cargaFinal">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputTerceira" class="col-sm-9 col-form-label">3ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputTerceira" placeholder="kg" name="cargaFinal">
                                    </div>
                                </div>
                            </div>
                            <!-- TESTE TRICEPS -->
                            <div class="row mb-3">
                                <!-- Seleção exercicio -->
                                <div class="form-group col-md-3">
                                    <h4>Tríceps</h4>
                                    <select class="form-control" id="exercicioTriceps" name="exercicio">
                                        <option>Escolha</option>
                                        <option>Pulley W</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Linha tentativas -->
                            <div class="row mb-3">
                                <div class="form-group col-md-3">
                                    <label for="inputPrimeira" class="col-sm-9 col-form-label">1ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputPrimeira" placeholder="kg" name="cargaInicial">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputSegunda" class="col-sm-9 col-form-label">2ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputSegunda" placeholder="kg" name="cargaFinal">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputTerceira" class="col-sm-9 col-form-label">3ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputTerceira" placeholder="kg" name="cargaFinal">
                                    </div>
                                </div>
                            </div>
                            <!-- TESTE OMBRO -->
                            <div class="row mb-3">
                                <!-- Seleção exercicio -->
                                <div class="form-group col-md-3">
                                    <h4>Ombro</h4>
                                    <select class="form-control" id="exercicioOmbro" name="exercicio">
                                        <option>Escolha</option>
                                        <option>Desenvolvimento Maquina</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Linha tentativas -->
                            <div class="row mb-3">
                                <div class="form-group col-md-3">
                                    <label for="inputPrimeira" class="col-sm-9 col-form-label">1ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputPrimeira" placeholder="kg" name="cargaInicial">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputSegunda" class="col-sm-9 col-form-label">2ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputSegunda" placeholder="kg" name="cargaFinal">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputTerceira" class="col-sm-9 col-form-label">3ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputTerceira" placeholder="kg" name="cargaFinal">
                                    </div>
                                </div>
                            </div>
                            <!-- TESTE GLUTEO -->
                            <div class="row mb-3">
                                <!-- Seleção exercicio -->
                                <div class="form-group col-md-3">
                                    <h4>Gluteo</h4>
                                    <select class="form-control" id="exercicioGluteo" name="exercicio">
                                        <option>Escolha</option>
                                        <option>#</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Linha tentativas -->
                            <div class="row mb-3">
                                <div class="form-group col-md-3">
                                    <label for="inputPrimeira" class="col-sm-9 col-form-label">1ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputPrimeira" placeholder="kg" name="cargaInicial">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputSegunda" class="col-sm-9 col-form-label">2ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputSegunda" placeholder="kg" name="cargaFinal">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputTerceira" class="col-sm-9 col-form-label">3ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputTerceira" placeholder="kg" name="cargaFinal">
                                    </div>
                                </div>
                            </div>
                            <!-- Botões de salvar -->
                            <div class="mt-4 mb-0">
                                <button type="button" class="btn btn-success"><a class="btn btn-success btn-block" href="#">Salvar</a></button>
                                <button type="button" class="btn btn-warning"><a class="btn btn-warning btn-block" href="#">Editar</a></button>
                                <button type="button" class="btn btn-secondary btn-sm"><a class="btn btn-secondary btn-block" href="avaliacao.php">Voltar</a></button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <!-- <div class="small"><a href="login.html">Have an account? Go to login</a></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Include php rodapé -->
<?php
include_once('include/footer.php');
?>
