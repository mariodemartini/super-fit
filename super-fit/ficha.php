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
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">FICHA DE TREINO</h3></div>
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
                                <div class="form-group col-md-6">
                                    <label for="inputData">NOME</label>
                                    <input type="text" class="form-control" id="inputData">
                                </div>
                                <div class="form-group col-sm-1">
                                    <label for="inputData">IDADE</label>
                                    <input type="number" class="form-control" id="inputData">
                                </div>
                            </div>
                            <br>

                            <!-- Linha de divisão dos semanas -->
                            <div class="row justify-content-center mb-1">
                                <div class="col-1 col-sm-1"><button type="button" class="btn btn-secondary border-dark">S-01</button></div> 
                                <div class="col-1 col-sm-1"><button type="button" class="btn btn-secondary border-dark">S-02</button></div>
                                <div class="col-1 col-sm-1"><button type="button" class="btn btn-secondary border-dark">S-03</button></div>
                                <div class="col-1 col-sm-1"><button type="button" class="btn btn-secondary border-dark">S-04</button></div>
                                <div class="col-1 col-sm-1"><button type="button" class="btn btn-secondary border-dark">S-05</button></div>
                                <div class="col-1 col-sm-1"><button type="button" class="btn btn-secondary border-dark">S-06</button></div> 
                                <div class="col-1 col-sm-1"><button type="button" class="btn btn-secondary border-dark">S-07</button></div>
                                <div class="col-1 col-sm-1"><button type="button" class="btn btn-secondary border-dark">S-08</button></div>
                                <div class="col-1 col-sm-1"><button type="button" class="btn btn-secondary border-dark">S-09</button></div>
                                <div class="col-1 col-sm-1"><button type="button" class="btn btn-secondary border-dark">S-10</button></div>
                                <div class="col-1 col-sm-1"><button type="button" class="btn btn-secondary border-dark">S-11</button></div>
                                <div class="col-1 col-sm-1"><button type="button" class="btn btn-secondary border-dark">S-12</button></div>
                            </div>
                            <br>

                            <!-- Linha de divisão dos treinos -->
                            <div class="row justify-content-center mb-3">
                                <div class="col-2 col-sm-2"><button type="button" class="btn btn-secondary border-dark">TREINO A</button></div>
                                <div class="col-2 col-sm-2"><button type="button" class="btn btn-secondary border-dark">TREINO B</button></div>
                                <div class="col-2 col-sm-2"><button type="button" class="btn btn-secondary border-dark">TREINO C</button></div>
                                <div class="col-2 col-sm-2"><button type="button" class="btn btn-secondary border-dark">TREINO D</button></div>
                                <div class="col-2 col-sm-2"><button type="button" class="btn btn-secondary border-dark">TREINO E</button></div>
                            </div>
                            <br>

                            <!-- Formulário do treino Musculação-->
                            <div class="row mb-3">
                                <h4>Musculação</h4>
                                <form>
                                    <!-- Coluna grupo muscular -->
                                    <div class="form-group col-md-1 text-center">
                                        <label for="inputGM">GM</label>
                                        <input type="text" class="form-control" id="inputGM">
                                    </div>
                                    <!-- Coluna exercicios -->
                                    <div class="form-group col-md-3 text-center">
                                        <label for="inputExercicio">EXERCÍCIOS</label>
                                        <input type="text" class="form-control" id="inputExercicio">
                                    </div>
                                    <!-- Coluna de séries -->
                                    <div class="form-group col-md-3 text-center">
                                        <label for="inputSerie">SÉRIES</label>
                                        <input type="text" class="form-control" id="inputSerie">
                                    </div>
                                    <!-- Coluna de % carga -->
                                    <div class="form-group col-md-1 text-center">
                                        <label for="inputCG">%CG</label>
                                        <input type="text" class="form-control" id="input%CG">
                                    </div>
                                    <!-- Coluna de % carga -->
                                    <div class="form-group col-md-1 text-center">
                                        <label for="inputCG">CG</label>
                                        <input type="text" class="form-control" id="input%CG">
                                    </div>
                                    <!-- Coluna de feedback -->
                                    <div class="form-group col-md-1 text-center">
                                        <label for="inputFB">Feedback</label>
                                        <input type="text" class="form-control" id="inputFB">
                                    </div>
                                    <!-- Coluna de views -->
                                    <div class="form-group col-md-1 text-center">
                                        <label for="inputVW">Ver</label>
                                        <input type="text" class="form-control" id="inputVW">
                                    </div>
                                </form>
                            </div> 
                            <br>  

                             <!-- Formulário treino Aerobio -->
                            <div class="row mb-3">
                                <h4>Aeróbio</h4>
                                <div class="form-group col-md-1 text-center">
                                    <label for="inputGM">ERG</label>
                                    <input type="text" class="form-control" id="inputGM">
                                </div>
                                <div class="form-group col-md-3 text-center">
                                    <label for="inputGM">EXERCÍCIOS</label>
                                    <input type="text" class="form-control" id="inputExer">
                                </div>
                                <div class="form-group col-md-3 text-center">
                                    <label for="inputGM">SERIES</label>
                                    <input type="text" class="form-control" id="inputSerie">
                                </div>
                                <div class="form-group col-md-1 text-center">
                                    <label for="inputGM">%CG</label>
                                    <input type="text" class="form-control" id="inputCG">
                                </div>
                                <div class="form-group col-md-1 text-center">
                                    <label for="inputGM">CG</label>
                                    <input type="text" class="form-control" id="inputCG">
                                </div>
                                <div class="form-group col-md-1 text-center">
                                    <label for="inputGM">Feedback</label>
                                    <input type="text" class="form-control" id="inputFB">
                                </div>

                            </div>

                            <!-- Campo de observações -->
                            <div class="row mb-3">
                                <div class="form-group col-md-11">
                                    <label for="inputData">Observações:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
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
