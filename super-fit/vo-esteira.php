<!-- Include php cabeçalho e menus -->
<?php
include_once('include/header.html');
include_once('include/navbar.html');
include_once('include/sidebar.html');
include_once('./conexao/Conexao.php');
include_once('./model/TesteVO2.php');
include_once('./dao/TesteVO2DAO.php');

$teste_vo2 = new TesteVO2();
$teste_vo2dao = new TesteVO2DAO();
?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <!-- Titulo principal e barra pesquisar -->
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">VO² ESTEIRA</h3></div>
                    <!-- Div barra de pesquisa -->
                    <form class="card-header inline-block form-inline mb-3">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Pesquisar..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <!-- Fomulário principal -->
                    <div class="card-body">
                        <form action="controller/TesteVO2Controller.php" method="POST">
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
                            <!-- Linha de Informação inicial -->
                            <div class="row mb-3">
                                <h3>TESTE PROGRESSIVO DE ESTEIRA</h3>
                                <p>Início com velocidade de aquecimento e a cada 2 minutos aumenta a velocidade em 1 km/h</p>
                                <p>Escala de esforça de 0 (muito fácil) a 10 (muito difícil)</p>
                            </div>
                            <!-- Linha dados de repouso -->
                            <div class="row mb-3">
                                <h4>Dados Iniciais</h4>
                                <div class="form-group col-md-3">
                                    <label for="inputVelInicio" class="col-sm-8 col-form-label">Vel. Inicio</label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" id="inputVelInicio" placeholder="km/h" name="velocidadeInicio">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputFCRepouso" class="col-sm-8 col-form-label">FC Repouso</label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" id="inputFCRepouso" placeholder="bpm" name="fcRepouso">
                                    </div>
                                </div>
				                <div class="form-group col-md-3">
                                    <label for="inputPA" class="col-sm-6 col-form-label">PA Inicial</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputPA" placeholder="mmHg" name="pressaoInicio">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputPA" class="col-sm-5 col-form-label">PA Final</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputPA" placeholder="mmHg" name="pressaoFinal">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Dados do teste -->
                            <div class="row mb-3">
                                <h4>Teste</h4>
                                <!-- Coluna tempo -->
                                <div class="form-group col-md-3">
                                    <label for="inputTempo" class="col-sm-5 col-form-label">Tempo</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputTempo" placeholder="min" name="tempoTeste">
                                        <input type="number" class="form-control" id="inputTempo" placeholder="min" name="tempoTeste">
                                        <input type="number" class="form-control" id="inputTempo" placeholder="min" name="tempoTeste">
                                        <input type="number" class="form-control" id="inputTempo" placeholder="min" name="tempoTeste">
                                        <input type="number" class="form-control" id="inputTempo" placeholder="min" name="tempoTeste">
                                        <input type="number" class="form-control" id="inputTempo" placeholder="min" name="tempoTeste">
                                        <input type="number" class="form-control" id="inputTempo" placeholder="min" name="tempoTeste">
                                        <input type="number" class="form-control" id="inputTempo" placeholder="min" name="tempoTeste">
                                        <input type="number" class="form-control" id="inputTempo" placeholder="min" name="tempoTeste">
                                        <input type="number" class="form-control" id="inputTempo" placeholder="min" name="tempoTeste">
                                    </div>
                                </div>
                                <!-- Coluna velocidade -->
                                <div class="form-group col-md-3">
                                    <label for="inputVel" class="col-sm-7 col-form-label">Velocidade</label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeTeste">
                                        <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeTeste">
                                        <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeTeste">
                                        <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeTeste">
                                        <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeTeste">
                                        <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeTeste">
                                        <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeTeste">
                                        <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeTeste">
                                        <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeTeste">
                                        <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeTeste">
                                    </div>
                                </div>
                                <!-- Coluna frequencia cardiaca -->
                                <div class="form-group col-md-3">
                                    <label for="inputFC" class="col-sm-8 col-form-label">F.C.</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcTeste">
                                        <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcTeste">
                                        <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcTeste">
                                        <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcTeste">
                                        <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcTeste">
                                        <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcTeste">
                                        <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcTeste">
                                        <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcTeste">
                                        <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcTeste">
                                        <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcTeste">
                                    </div>
                                </div>
                                <!-- Coluna esforço -->
                                <div class="form-group col-md-3">
                                    <label for="inputVelInicio" class="col-sm-8 col-form-label">Esforço</label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" id="inputVelInicio" placeholder="0 a 10" name="esforcoTeste">
                                        <input type="number" class="form-control" id="inputVelInicio" placeholder="0 a 10" name="esforcoTeste">
                                        <input type="number" class="form-control" id="inputVelInicio" placeholder="0 a 10" name="esforcoTeste">
                                        <input type="number" class="form-control" id="inputVelInicio" placeholder="0 a 10" name="esforcoTeste">
                                        <input type="number" class="form-control" id="inputVelInicio" placeholder="0 a 10" name="esforcoTeste">
                                        <input type="number" class="form-control" id="inputVelInicio" placeholder="0 a 10" name="esforcoTeste">
                                        <input type="number" class="form-control" id="inputVelInicio" placeholder="0 a 10" name="esforcoTeste">
                                        <input type="number" class="form-control" id="inputVelInicio" placeholder="0 a 10" name="esforcoTeste">
                                        <input type="number" class="form-control" id="inputVelInicio" placeholder="0 a 10" name="esforcoTeste">
                                        <input type="number" class="form-control" id="inputVelInicio" placeholder="0 a 10" name="esforcoTeste">
                                    </div>
                                </div> 
                            </div>
                            <!-- Resultado -->
                            <div class="row mb-3">
                                <h5>Resultado:</h5>
                                <div class="form-group col-md-2">
                                    <label for="inputData">VO² Max:</label>
                                    <input type="number" class="form-control" id="inputVOmax" placeholder="mL/kg·min" name="resultadoVO2">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputData">FC Max:</label>
                                    <input type="number" class="form-control" id="inputFCmax" placeholder="bpm" name="fcTeste">
                                </div>
                            </div>
                            <!-- Botões de salvar -->
                            <div class="mt-4 mb-0">
                                <button type="submit" name="salvar" class="btn btn-success btn-lg">Salvar</button>
                                <button type="submit" name="editar" class="btn btn-warning btn-lg">Editar</button>
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
<?php
include_once('include/footer.html');
?>
