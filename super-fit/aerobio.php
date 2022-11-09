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
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">TREINO AERÓBIO</h3></div>
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
                                <div class="form-group col-sm-2">
                                    <button type="button" class="btn btn-danger"><a class="btn btn-danger btn-block" href="#">GERAR TREINO</a></button>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Coluna de experiencia de treino -->
                                <div class="form-group col-md-3">
                                    <fieldset class="form-group">
                                        <div class="col-sm-10">
                                            <legend class="col-form-label col-sm-5 pt-0">Nível de treino:</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="experiencia" id="gridRadios" value="sedentario">
                                                <label class="form-check-label" for="gridRadios2">Iniciante</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="experiencia" id="gridRadios" value="moderado">
                                                <label class="form-check-label" for="gridRadios2">Intermediário</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="experiencia" id="gridRadios" value="ativo">
                                                <label class="form-check-label" for="gridRadios2">Avançado</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Coluna de frequencia semanal -->
                                <div class="form-group col-md-3">
                                    <fieldset class="form-group">
                                        <div class="col-sm-10">
                                            <legend class="col-form-label col-sm-5 pt-0">Frequência:</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="frequencia" id="gridRadios" value="sedentario">
                                                <label class="form-check-label" for="gridRadios2">2x</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="frequencia" id="gridRadios" value="moderado">
                                                <label class="form-check-label" for="gridRadios2">3x</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="frequencia" id="gridRadios" value="ativo">
                                                <label class="form-check-label" for="gridRadios2">4x</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="frequencia" id="gridRadios" value="ativo">
                                                <label class="form-check-label" for="gridRadios2">5x</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Coluna de fase de treino -->
                                <div class="form-group col-md-3">
                                    <fieldset class="form-group">
                                        <div class="col-sm-10">
                                            <legend class="col-form-label col-sm-5 pt-0">Fase do treino:</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fase" id="gridRadios" value="sedentario">
                                                <label class="form-check-label" for="gridRadios2">Adaptação</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fase" id="gridRadios" value="moderado">
                                                <label class="form-check-label" for="gridRadios2">Velocidade</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fase" id="gridRadios" value="ativo">
                                                <label class="form-check-label" for="gridRadios2">Resistência</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fase" id="gridRadios" value="ativo">
                                                <label class="form-check-label" for="gridRadios2">HIIT</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fase" id="gridRadios" value="ativo">
                                                <label class="form-check-label" for="gridRadios2">Transição</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Coluna duração do treino -->
                                <div class="form-group col-md-3">
                                    <fieldset class="form-group">
                                        <div class="col-sm-10">
                                            <legend class="col-form-label col-sm-5 pt-0">Duração:</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="duracao" id="gridRadios" value="sedentario">
                                                <label class="form-check-label" for="gridRadios2">4 semanas</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="duracao" id="gridRadios" value="moderado">
                                                <label class="form-check-label" for="gridRadios2">8 semanas</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="duracao" id="gridRadios" value="ativo">
                                                <label class="form-check-label" for="gridRadios2">12 semanas</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <!-- Campo treino pronto -->
                            <div class="row mb-3">
                                <div class="row justify-content-center mb-3">
                                    <div class="btn-group btn-group-lg col-md-12 text-center">
                                        <button type="button" class="btn btn-primary border-dark">S-01</button>
                                        <button type="button" class="btn btn-primary border-dark">S-02</button>
                                        <button type="button" class="btn btn-primary border-dark">S-03</button>
                                        <button type="button" class="btn btn-primary border-dark">S-04</button>
                                        <button type="button" class="btn btn-primary border-dark">S-05</button>
                                        <button type="button" class="btn btn-primary border-dark">S-06</button>
                                        <button type="button" class="btn btn-primary border-dark">S-07</button>
                                        <button type="button" class="btn btn-primary border-dark">S-08</button>
                                        <button type="button" class="btn btn-primary border-dark">S-09</button>
                                        <button type="button" class="btn btn-primary border-dark">S-10</button>
                                        <button type="button" class="btn btn-primary border-dark">S-11</button>
                                        <button type="button" class="btn btn-primary border-dark">S-12</button>
                                    </div>
                                </div> 
                                <!-- Linha de divisão dos treinos -->
                                <div class="row justify-content-center mb-3">
                                    <div class="btn-group btn-group-lg col-md-12 text-center">
                                        <button type="button" class="btn btn-secondary border-dark">TREINO A</button>
                                        <button type="button" class="btn btn-secondary border-dark">TREINO B</button>
                                        <button type="button" class="btn btn-secondary border-dark">TREINO C</button>
                                        <button type="button" class="btn btn-secondary border-dark">TREINO D</button>
                                        <button type="button" class="btn btn-secondary border-dark">TREINO E</button>
                                    </div>
                                </div>
                                <!-- Formulário do treino -->
                                <div class="row mb-3">
                                    <form>
                                        <!-- Coluna grupo muscular -->
                                        <div class="form-group col-md-1 text-center">
                                            <label for="inputGM">G.M.</label>
                                            <input type="text" class="form-control" id="inputGM">
                                            <input type="text" class="form-control" id="inputGM">
                                            <input type="text" class="form-control" id="inputGM">
                                            <input type="text" class="form-control" id="inputGM">
                                            <input type="text" class="form-control" id="inputGM">
                                            <input type="text" class="form-control" id="inputGM">
                                            <input type="text" class="form-control" id="inputGM">
                                            <input type="text" class="form-control" id="inputGM">
                                            <input type="text" class="form-control" id="inputGM">
                                            <input type="text" class="form-control" id="inputGM">
                                        </div>
                                        <!-- Coluna exercicios -->
                                        <div class="form-group col-md-4 text-center">
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
                                        <!-- Coluna de carga -->
                                        <div class="form-group col-md-1 text-center">
                                            <label for="inputCG">C.G.</label>
                                            <input type="text" class="form-control" id="inputCG">
                                            <input type="text" class="form-control" id="inputCG">
                                            <input type="text" class="form-control" id="inputCG">
                                            <input type="text" class="form-control" id="inputCG">
                                            <input type="text" class="form-control" id="inputGG">
                                            <input type="text" class="form-control" id="inputCG">
                                            <input type="text" class="form-control" id="inputCG">
                                            <input type="text" class="form-control" id="inputCG">
                                            <input type="text" class="form-control" id="inputCG">
                                            <input type="text" class="form-control" id="inputCG">
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
