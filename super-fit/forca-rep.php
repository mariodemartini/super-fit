<!-- Include php cabeçalho e barras -->
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
                    <!-- Div do Titulo da página -->
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">TESTE DE FORÇA POR REPETIÇÃO</h3></div>
                    <!-- Botões sub-menu testes -->
                    <div class="card-header text-center">
                        
                        <a class="btn btn-info btn-block" href="forca-rep.php"><button type="button" class="btn btn-info btn-lg">FORÇA REPETIÇÃO</button></a>
                        
                        <a class="btn btn-info btn-block" href="forca-max.php"><button type="button" class="btn btn-info btn-lg">FORÇA MAXIMA</button></a>
                        
                        <a class="btn btn-info btn-block" href="vo-esteira.php"><button type="button" class="btn btn-info btn-lg">VO² ESTEIRA</button></a>
                        
                        <a class="btn btn-info btn-block" href="vo-bike.php"><button type="button" class="btn btn-info btn-lg">VO² BICICLETA</button></a> 
                    </div>
                    <!-- Div barra de pesquisa -->
                    <form class="card-header inline-block form-inline mb-3">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Pesquisar..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <div class="card-body">
                        <!-- Div do formulario principal -->
                        <form>
                            <!-- Linha data e idade -->
                            <div class="row mb-3">
                                <div class="form-group col-md-2">
                                    <label for="inputData">DATA</label>
                                    <input type="date" class="form-control" id="inputData">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="inputData">NOME</label>
                                    <input type="text" class="form-control" id="inputData">
                                </div>
                                <div class="form-group col-sm-1">
                                    <label for="inputData">IDADE</label>
                                    <input type="number" class="form-control" id="inputData">
                                </div>
                            </div>
                            <br>
                            <!-- TESTE PEITORAL -->
                            <div class="row mb-3">
                                <!-- Seleção exercicio -->
                                <div class="form-group col-md-3">
                                    <h4>Peitoral</h4>
                                    <select class="form-control" id="exercicioPeito">
                                        <option>Escolha</option>
                                        <option>Supino Reto</option>
                                        <option>Fly Reto</option>
                                        <option>Crucifixo Reto</option>
                                        <option>Voador Peito</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Linha aquecimento e meta -->
                            <div class="row mb-3">
                                <div class="form-group col-md-3">
                                    <label for="inputAquecimento" class="col-sm-9 col-form-label">Aquecimento</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputKg" placeholder="kg">
                                        <input type="number" class="form-control" id="inputRep" placeholder="Rep">  
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputMetas" class="col-sm-9 col-form-label">Metas:</label>
                                    <div class="col-sm-5 text-center">
                                        <input type="number" class="form-control" id="inputKg" placeholder="kg">
                                        <input type="number" class="form-control" id="inputRep" placeholder="rep">  
                                    </div>
                                </div>
                            </div>
                            <!-- Linha tentativas e resultado -->
                            <div class="row mb-3">
                                <div class="form-group col-md-3">
                                    <label for="inputPrimeira" class="col-sm-9 col-form-label">1ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputPrimeira" placeholder="rep">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputSegunda" class="col-sm-9 col-form-label">2ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputSegunda" placeholder="rep">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputTerceira" class="col-sm-9 col-form-label">3ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputTerceira" placeholder="rep">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputResultado" class="col-sm-9 col-form-label">Resultado</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputRep" placeholder="rep">
                                        <input type="number" class="form-control" id="inputKg" placeholder="kg">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- TESTE COSTAS -->
                            <div class="row mb-3">
                                <!-- Seleção exercicio -->
                                <div class="form-group col-md-3">
                                    <h4>Costas</h4>
                                    <select class="form-control" id="exercicioPeito">
                                        <option>Escolha</option>
                                        <option>Remada Maquina</option>
                                        <option>Remada Baixa</option>
                                        <option>Puxador Frente Aberto</option>
                                        <option>Puxador Frente Fechado</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Linha aquecimento e meta -->
                            <div class="row mb-3">
                                <div class="form-group col-md-3">
                                    <label for="inputAquecimento" class="col-sm-9 col-form-label">Aquecimento</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputKg" placeholder="kg">
                                        <input type="number" class="form-control" id="inputRep" placeholder="rep">  
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputMetas" class="col-sm-9 col-form-label">Metas:</label>
                                    <div class="col-sm-5 text-center">
                                        <input type="number" class="form-control" id="inputKg" placeholder="kg">
                                        <input type="number" class="form-control" id="inputRep" placeholder="rep">  
                                    </div>
                                </div>
                            </div>
                            <!-- Linha tentativas e resultado -->
                            <div class="row mb-3">
                                <div class="form-group col-md-3">
                                    <label for="inputPrimeira" class="col-sm-9 col-form-label">1ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputPrimeira" placeholder="rep">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputSegunda" class="col-sm-9 col-form-label">2ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputSegunda" placeholder="rep">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputTerceira" class="col-sm-9 col-form-label">3ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputTerceira" placeholder="rep">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputResultado" class="col-sm-9 col-form-label">Resultado</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputResultado" placeholder="kg">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- TESTE COXA -->
                            <div class="row mb-3">
                                <!-- Seleção exercicio -->
                                <div class="form-group col-md-3">
                                    <h4>Coxa</h4>
                                    <select class="form-control" id="exercicioPeito">
                                        <option>Escolha</option>
                                        <option>Agachamento Maquina</option>
                                        <option>Agachamento Livre</option>
                                        <option>Leg Pres 45°</option>
                                        <option>Levantamento Terra</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Linha aquecimento, meta, resultado -->
                            <div class="row mb-3">
                                <div class="form-group col-md-3">
                                    <label for="inputAquecimento" class="col-sm-9 col-form-label">Aquecimento</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputKg" placeholder="kg">
                                        <input type="number" class="form-control" id="inputRep" placeholder="rep">  
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputMetas" class="col-sm-9 col-form-label">Metas:</label>
                                    <div class="col-sm-5 text-center">
                                        <input type="number" class="form-control" id="inputKg" placeholder="kg">
                                        <input type="number" class="form-control" id="inputRep" placeholder="rep">  
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputResultado" class="col-sm-9 col-form-label">Resultado</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputResultado" placeholder="kg">
                                    </div>
                                </div>
                            </div>
                            <!-- Linha tentativas -->
                            <div class="row mb-3">
                                <div class="form-group col-md-3">
                                    <label for="inputPrimeira" class="col-sm-9 col-form-label">1ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputPrimeira" placeholder="rep">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputSegunda" class="col-sm-9 col-form-label">2ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputSegunda" placeholder="rep">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputTerceira" class="col-sm-9 col-form-label">3ª Tentativa</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputTerceira" placeholder="rep">
                                    </div>
                                </div>
                            </div>
                            <!-- Botões de salvar -->
                            <div class="mt-4 mb-0">
                                <button type="button" class="btn btn-success"><a class="btn btn-success btn-block" href="#">Salvar</a></button>
                                <button type="button" class="btn btn-warning"><a class="btn btn-warning btn-block" href="#">Editar</a></button>
                                <button type="button" class="btn btn-secondary"><a class="btn btn-secondary btn-block" href="avaliacao.php">Voltar</a></button>
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
include_once('include/footer.html');
?>
