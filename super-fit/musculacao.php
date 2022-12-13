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
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">TREINO MUSCULAÇÃO</h3></div>
                    <!-- Botões sub-menu treinos -->
                    <div class="card-header text-center">
                        <a class="btn btn-info btn-block" href="musculacao.php"><button type="button" class="btn btn-info btn-lg">MUSCULAÇÃO</button></a>

                        <a class="btn btn-info btn-block" href="aerobio.php"><button type="button" class="btn btn-info btn-lg">AERÓBIO</button></a>
                    </div>
                    <!-- Div barra de pesquisa -->
                    <form class="card-header inline-block form-inline mb-3">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Pesquisar..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <!-- Div do formulario principal -->
                    <div class="card-body">
                        <form>
                            <!-- Linha data e idade -->
                            <div class="row mb-3">
                                <div class="form-group col-md-2">
                                    <label for="inputData">DATA</label>
                                    <input type="date" class="form-control" id="inputData">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="inputData">NOME</label>
                                    <input type="text" class="form-control" id="inputData">
                                </div>
                                <div class="form-group col-sm-1">
                                    <label for="inputData">IDADE</label>
                                    <input type="number" class="form-control" id="inputData">
                                </div>
                            </div>
                            <div class="row mb-3">
                            <br>
                            <!-- Campo treino pronto -->
                            <div class="row mb-3">
                                <div class="row justify-content-center mb-3">
                                    <div class="btn-group btn-group-lg col-md-12 text-center">
                                        <div class="row">
                                            <div class="col-2 col-sm-1"><button type="button" class="btn btn-primary border-dark">S-01</button></div>
                                            <div class="col-2 col-sm-1"><button type="button" class="btn btn-primary border-dark">S-02</button></div>
                                            <div class="col-2 col-sm-1"><button type="button" class="btn btn-primary border-dark">S-03</button></div>
                                            <div class="col-2 col-sm-1"><button type="button" class="btn btn-primary border-dark">S-04</button></div>
                                            <div class="col-2 col-sm-1"><button type="button" class="btn btn-primary border-dark">S-05</button></div>
                                            <div class="col-2 col-sm-1"><button type="button" class="btn btn-primary border-dark">S-06</button></div>
                                            <div class="col-2 col-sm-1"><button type="button" class="btn btn-primary border-dark">S-07</button></div>
                                            <div class="col-2 col-sm-1"><button type="button" class="btn btn-primary border-dark">S-08</button></div>
                                            <div class="col-2 col-sm-1"><button type="button" class="btn btn-primary border-dark">S-09</button></div>
                                            <div class="col-2 col-sm-1"><button type="button" class="btn btn-primary border-dark">S-10</button></div>
                                            <div class="col-2 col-sm-1"><button type="button" class="btn btn-primary border-dark">S-11</button></div>
                                            <div class="col-2 col-sm-1"><button type="button" class="btn btn-primary border-dark">S-12</button></div>
                                        </div>
                                    </div>
                                </div> 
                                <!-- Linha de divisão dos treinos -->
                                <div class="row justify-content-around mb-3">
                                    <div class="btn-group btn-group-lg col-md-12 text-center">
                                        <div class="row">
                                            <div class="col-2 col-sm-2"><button type="button" class="btn btn-secondary border-dark">TREINO A</button></div>
                                            <div class="col-2 col-sm-2"><button type="button" class="btn btn-secondary border-dark">TREINO B</button></div>
                                            <div class="col-2 col-sm-2"><button type="button" class="btn btn-secondary border-dark">TREINO C</button></div>
                                            <div class="col-2 col-sm-2"><button type="button" class="btn btn-secondary border-dark">TREINO D</button></div>
                                            <div class="col-2 col-sm-2"><button type="button" class="btn btn-secondary border-dark">TREINO E</button></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Formulário do treino -->
                                <div class="row mb-3">
                                    <form>
                                        <!-- Coluna grupo muscular -->
                                        <div class="form-group col-md-1 text-center">
                                            <label for="inputERG">ERG</label>
                                            <input type="text" class="form-control" id="inputERG">
                                            <input type="text" class="form-control" id="inputERG">
                                            <input type="text" class="form-control" id="inputERG">
                                            <input type="text" class="form-control" id="inputERG">
                                            <input type="text" class="form-control" id="inputERG">
                                            <input type="text" class="form-control" id="inputERG">
                                            <input type="text" class="form-control" id="inputERG">
                                            <input type="text" class="form-control" id="inputERG">
                                            <input type="text" class="form-control" id="inputERG">
                                            <input type="text" class="form-control" id="inputERG">
                                        </div>
                                        <!-- Coluna exercicios -->
                                        <div class="form-group col-md-3 text-center">
                                            <label for="inputExercicio">EXERCÍCIOS</label>
                                            <input type="text" class="form-control" id="inputExercicio">
                                            <input type="text" class="form-control" id="inputExercicio">
                                            <input type="text" class="form-control" id="inputExercicio">
                                            <input type="text" class="form-control" id="inputExercicio">
                                            <input type="text" class="form-control" id="inputExercicio">
                                            <input type="text" class="form-control" id="inputExercicio">
                                            <input type="text" class="form-control" id="inputExercicio">
                                            <input type="text" class="form-control" id="inputExercicio">
                                            <input type="text" class="form-control" id="inputExercicio">
                                            <input type="text" class="form-control" id="inputExercicio">
                                        </div>
                                        <!-- Coluna de séries -->
                                        <div class="form-group col-md-3 text-center">
                                            <label for="inputSerie">SÉRIES</label>
                                            <input type="text" class="form-control" id="inputSerie">
                                            <input type="text" class="form-control" id="inputSerie">
                                            <input type="text" class="form-control" id="inputSerie">
                                            <input type="text" class="form-control" id="inputSerie">
                                            <input type="text" class="form-control" id="inputSerie">
                                            <input type="text" class="form-control" id="inputSerie">
                                            <input type="text" class="form-control" id="inputSerie">
                                            <input type="text" class="form-control" id="inputSerie">
                                            <input type="text" class="form-control" id="inputSerie">
                                            <input type="text" class="form-control" id="inputSerie">
                                        </div>
                                        <!-- Coluna de % carga -->
                                        <div class="form-group col-md-1 text-center">
                                            <label for="inputCG">%CG</label>
                                            <input type="text" class="form-control" id="input%CG">
                                            <input type="text" class="form-control" id="input%CG">
                                            <input type="text" class="form-control" id="input%CG">
                                            <input type="text" class="form-control" id="input%CG">
                                            <input type="text" class="form-control" id="input%CG">
                                            <input type="text" class="form-control" id="input%CG">
                                            <input type="text" class="form-control" id="input%CG">
                                            <input type="text" class="form-control" id="input%CG">
                                            <input type="text" class="form-control" id="input%CG">
                                            <input type="text" class="form-control" id="input%CG">
                                        </div>
                                        <!-- Coluna de carga FC-->
                                        <div class="form-group col-md-1 text-center">
                                            <label for="inputFC">F.C</label>
                                            <input type="text" class="form-control" id="inputFC">
                                            <input type="text" class="form-control" id="inputFC">
                                            <input type="text" class="form-control" id="inputFC">
                                            <input type="text" class="form-control" id="inputFC">
                                            <input type="text" class="form-control" id="inputFC">
                                            <input type="text" class="form-control" id="inputFC">
                                            <input type="text" class="form-control" id="inputFC">
                                            <input type="text" class="form-control" id="inputFC">
                                            <input type="text" class="form-control" id="inputFC">
                                            <input type="text" class="form-control" id="inputFC">
                                        </div>
                                        <!-- Coluna de carga VO2 -->
                                        <div class="form-group col-md-1 text-center">
                                            <label for="inputVO2">VO2</label>
                                            <input type="text" class="form-control" id="inputVO2">
                                            <input type="text" class="form-control" id="inputVO2">
                                            <input type="text" class="form-control" id="inputVO2">
                                            <input type="text" class="form-control" id="inputVO2">
                                            <input type="text" class="form-control" id="inputVO2">
                                            <input type="text" class="form-control" id="inputVO2">
                                            <input type="text" class="form-control" id="inputVO2">
                                            <input type="text" class="form-control" id="inputVO2">
                                            <input type="text" class="form-control" id="inputVO2">
                                            <input type="text" class="form-control" id="inputVO2">
                                        </div>
                                        <!-- Coluna de feedback -->
                                        <div class="form-group col-md-1 text-center">
                                            <label for="inputFB">Feedback</label>
                                            <input type="text" class="form-control" id="inputFB">
                                            <input type="text" class="form-control" id="inputFB">
                                            <input type="text" class="form-control" id="inputFB">
                                            <input type="text" class="form-control" id="inputFB">
                                            <input type="text" class="form-control" id="inputFB">
                                            <input type="text" class="form-control" id="inputFB">
                                            <input type="text" class="form-control" id="inputFB">
                                            <input type="text" class="form-control" id="inputFB">
                                            <input type="text" class="form-control" id="inputFB">
                                            <input type="text" class="form-control" id="inputFB">
                                        </div>
                                        <!-- Coluna de views -->
                                        <div class="form-group col-md-1 text-center">
                                            <label for="inputVW">Ver</label>
                                            <input type="text" class="form-control" id="inputVW">
                                            <input type="text" class="form-control" id="inputVW">
                                            <input type="text" class="form-control" id="inputVW">
                                            <input type="text" class="form-control" id="inputVW">
                                            <input type="text" class="form-control" id="inputVW">
                                            <input type="text" class="form-control" id="inputVW">
                                            <input type="text" class="form-control" id="inputVW">
                                            <input type="text" class="form-control" id="inputVW">
                                            <input type="text" class="form-control" id="inputVW">
                                            <input type="text" class="form-control" id="inputVW">
                                        </div>
                                    </form>
                                </div>    
                                <!-- Campo de observações -->
                                <div class="row mb-3">
                                    <div class="form-group col-md-11">
                                        <label for="inputData">Observações:</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    </div>
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
