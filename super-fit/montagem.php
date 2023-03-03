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
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">MONTAGEM DE TREINO</h3></div>
                    <!-- Botões sub-menu treinos -->
                    <div class="card-header text-center">
                        <a class="btn btn-info btn-block" href="montagem.php"><button type="button" class="btn btn-info btn-lg">MONTAGEM</button></a>

                        <a class="btn btn-info btn-block" href="ficha.php"><button type="button" class="btn btn-info btn-lg">FICHA</button></a>
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
                                <h4>TREINO MUSCULAÇÃO</h4>
                                <!-- Coluna de experiencia de treino -->
                                <div class="form-group col-md-4">
                                    <fieldset class="form-group">
                                        <div class="col-sm-12">
                                            <legend class="col-form-label col-sm-5 pt-0">Nível de treino:</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="xpMusc" id="exampleRadios1" value="1" checked>
                                                <label class="form-check-label" for="exampleRadios1">Iniciante</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="xpMusc" id="exampleRadios1" value="2" checked>
                                                <label class="form-check-label" for="exampleRadios1">Intermediário I</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="xpMusc" id="exampleRadios1" value="3" checked>
                                                <label class="form-check-label" for="exampleRadios1">Intermediário II</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="xpMusc" id="exampleRadios1" value="4" checked>
                                                <label class="form-check-label" for="exampleRadios1">Avançado</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Coluna de fase de treino -->
                                <div class="form-group col-md-4">
                                    <fieldset class="form-group">
                                        <div class="col-sm-12">
                                            <legend class="col-form-label col-sm-5 pt-0">Fase do treino:</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="faseMusc" id="exampleRadios1" value="adaptacao">
                                                <label class="form-check-label" for="exampleRadios1">Adaptação</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="faseMusc" id="gridRadios" value="forca">
                                                <label class="form-check-label" for="gridRadios2">Força</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="faseMusc" id="gridRadios" value="hipertrofia">
                                                <label class="form-check-label" for="gridRadios2">Hipertrofia</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="faseMusc" id="gridRadios" value="rml">
                                                <label class="form-check-label" for="gridRadios2">RML</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="faseMusc" id="gridRadios" value="transFroca">
                                                <label class="form-check-label" for="gridRadios2">Transição p/ Força</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="faseMusc" id="gridRadios" value="transRML">
                                                <label class="form-check-label" for="gridRadios2">Transição p/ RML</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Coluna de frequencia semanal -->
                                <div class="form-group col-md-4">
                                    <fieldset class="form-group">
                                        <div class="col-sm-12">
                                            <legend class="col-form-label col-sm-5 pt-0">Frequência:</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="freqMusc" id="gridRadios" value="a">
                                                <label class="form-check-label" for="gridRadios2">Segunda</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="freqMusc" id="gridRadios" value="b">
                                                <label class="form-check-label" for="gridRadios2">Terça</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="freqMusc" id="gridRadios" value="c">
                                                <label class="form-check-label" for="gridRadios2">Quarta</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="freqMusc" id="gridRadios" value="d">
                                                <label class="form-check-label" for="gridRadios2">Quinta</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="freqMusc" id="gridRadios" value="e">
                                                <label class="form-check-label" for="gridRadios2">Sexta</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Coluna duração do treino -->
                                <!-- <div class="form-group col-md-3">
                                    <fieldset class="form-group">
                                        <div class="col-sm-10">
                                            <legend class="col-form-label col-sm-5 pt-0">Duração:</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="durAer" id="gridRadios" value="4">
                                                <label class="form-check-label" for="gridRadios2">4 semanas</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="durAer" id="gridRadios" value="8">
                                                <label class="form-check-label" for="gridRadios2">8 semanas</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="durAer" id="gridRadios" value="12">
                                                <label class="form-check-label" for="gridRadios2">12 semanas</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div> -->
                            </div>
                            <br>
                            <div class="row mb-3">
                                <h4>TREINO AERÓBIO</h4>
                                <!-- Coluna de experiencia de treino -->
                                <div class="form-group col-md-4">
                                    <fieldset class="form-group">
                                        <div class="col-sm-12">
                                            <legend class="col-form-label col-sm-5 pt-0">Nível de treino:</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="xpAer" id="exampleRadios1" value="1" checked>
                                                <label class="form-check-label" for="exampleRadios1">Iniciante</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="xpAer" id="exampleRadios1" value="2" checked>
                                                <label class="form-check-label" for="exampleRadios1">Intermediário I</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="xpAer" id="exampleRadios1" value="3" checked>
                                                <label class="form-check-label" for="exampleRadios1">Intermediário II</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="xpAer" id="exampleRadios1" value="4" checked>
                                                <label class="form-check-label" for="exampleRadios1">Avançado</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Coluna de fase de treino -->
                                <div class="form-group col-md-4">
                                    <fieldset class="form-group">
                                        <div class="col-sm-12">
                                            <legend class="col-form-label col-sm-5 pt-0">Fase do treino:</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="faseAer" id="gridRadios" value="adaptacao">
                                                <label class="form-check-label" for="gridRadios2">Adaptação</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="faseAer" id="gridRadios" value="resistencia">
                                                <label class="form-check-label" for="gridRadios2">Resistência</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="faseAer" id="gridRadios" value="hiit">
                                                <label class="form-check-label" for="gridRadios2">HIIT</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="faseAer" id="gridRadios" value="recuperativo">
                                                <label class="form-check-label" for="gridRadios2">Recuperativo</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Coluna de frequencia semanal -->
                                <div class="form-group col-md-4">
                                    <fieldset class="form-group">
                                        <div class="col-sm-12">
                                            <legend class="col-form-label col-sm-5 pt-0">Frequência:</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="freqAer" id="gridRadios" value="a">
                                                <label class="form-check-label" for="gridRadios2">Segunda</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="freqAer" id="gridRadios" value="b">
                                                <label class="form-check-label" for="gridRadios2">Terça</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="freqAer" id="gridRadios" value="c">
                                                <label class="form-check-label" for="gridRadios2">Quarta</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="freqAer" id="gridRadios" value="d">
                                                <label class="form-check-label" for="gridRadios2">Quinta</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="freqAer" id="gridRadios" value="e">
                                                <label class="form-check-label" for="gridRadios2">Sexta</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Coluna duração do treino -->
                                <!-- <div class="form-group col-md-3">
                                    <fieldset class="form-group">
                                        <div class="col-sm-10">
                                            <legend class="col-form-label col-sm-5 pt-0">Duração:</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="durAer" id="gridRadios" value="4">
                                                <label class="form-check-label" for="gridRadios2">4 semanas</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="durAer" id="gridRadios" value="8">
                                                <label class="form-check-label" for="gridRadios2">8 semanas</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="durAer" id="gridRadios" value="12">
                                                <label class="form-check-label" for="gridRadios2">12 semanas</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div> -->
                            </div>
                            <br>
                            
                            <!-- Botões de salvar -->
                            <div class="mt-4 mb-0">
                                <button type="button" class="btn btn-success"><a class="btn btn-success btn-block" href="#">Salvar</a></button>
                                <button type="button" class="btn btn-warning"><a class="btn btn-warning btn-block" href="#">Editar</a></button>
                                <button type="button" class="btn btn-secondary"><a class="btn btn-secondary btn-block" href="treinos.php">Voltar</a></button>
                                <button type="button" class="btn btn-danger"><a class="btn btn-danger btn-block" href="ficha.php">GERAR TREINO</a></button>
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
