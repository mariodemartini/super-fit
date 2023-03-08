<!-- Include php cabeçalho e barras -->
<?php
include_once('include/header.html');
include_once('include/navbar.html');
include_once('include/sidebar.html');
include_once('./conexao/Conexao.php');
include_once('./model/Anamnese.php');
include_once('./dao/AnamneseDAO.php');

$anamnese = new Anamnese();
$anamnesedao = new AnamneseDAO();
?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <!-- Div do Titulo da página -->
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">ANAMNESE</h3></div>
                    <!-- Div barra de pesquisa -->
                    <form class="card-header inline-block form-inline mb-3">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Pesquisar..." aria-label="Search for..." aria-describedby="btnNavbarSearch"/>
                            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <!-- Div do conteudo principal -->
                    <div class="card-body">
                        <form action="controller/AnamneseController.php" method="POST">
                            <!-- Div data -->
                            <div class="row mb-3 align-items-center">
                                <div class="form-group col-md-3">
                                    <input type="date" class="form-control" id="inputData" placeholder="dataCadastro" name="dataCadastro">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" id="inputNome" placeholder="Nome" name="nome">
                                </div>
                            </div>
                            <!-- Inicio conteudo da anamneses -->
                            <div class="row mb-3">
                                <!-- Campo de atividade fisica -->
                                <div class="col-md-10">
                                     <label for="inputData">OBJETIVOS:</label>
                                    <input type="text" class="form-control" id="inputAtividade" name="objetivo">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo de atividade fisica -->
                                <div class="col-md-10">
                                     <label for="inputData">PRATICA ATIVADE FÍSICA? QUANTO TEMPO?</label>
                                    <input type="text" class="form-control" id="inputAtividade" name="atividade">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo de atividade fisica -->
                                <div class="col-md-10">
                                     <label for="inputData">FUMA? QUANTOS CIGARROS/DIA?</label>
                                    <input type="text" class="form-control" id="inputAtividade" name="fumante">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo de atividade fisica -->
                                <div class="col-md-10">
                                     <label for="inputData">CONSOME BEBIDA ALCOOLICA? QUAL FREQUENCIA?</label>
                                    <input type="text" class="form-control" id="inputAtividade" name="alcool">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo de atividade fisica -->
                                <div class="col-md-10">
                                     <label for="inputData">HIPERTENSÃO ARTERIAL?</label>
                                    <input type="text" class="form-control" id="inputAtividade" name="hipertensao">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo de atividade fisica -->
                                <div class="col-md-10">
                                     <label for="inputData">COLESTEROL ALTO?</label>
                                    <input type="text" class="form-control" id="inputAtividade" name="colesterol">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo de atividade fisica -->
                                <div class="col-md-10">
                                     <label for="inputData">DIABETES?</label>
                                    <input type="text" class="form-control" id="inputAtividade" name="diabetes">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo de atividade fisica -->
                                <div class="col-md-10">
                                     <label for="inputData">DOENÇA CARDÍACA?</label>
                                    <input type="text" class="form-control" id="inputAtividade" name="cardiaco">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-10">
                                     <label for="inputData">HISTÓRICO FAMILIAR: (colesterol, diabetes, etc)</label>
                                    <input type="text" class="form-control" id="inputAtividade" name="historicoFam">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo de atividade fisica -->
                                <div class="col-md-10">
                                     <label for="inputData">JÁ FEZ ALGUMA CIRURGIA? TEMPO?</label>
                                    <input type="text" class="form-control" id="inputAtividade" name="cirurgia">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-10">
                                     <label for="inputData">FRATURA OU LUXAÇÃO?</label>
                                    <input type="text" class="form-control" id="inputAtividade" name="fratura">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-10">
                                     <label for="inputData">LESÃO MUSCULAR OU LIGAMENTAR?</label>
                                    <input type="text" class="form-control" id="inputAtividade" name="lesao">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-10">
                                     <label for="inputData">SENTE ALGUMA DOR NO CORPO?</label>
                                    <input type="text" class="form-control" id="inputAtividade" name="dor">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-10">
                                     <label for="inputData">LIMITAÇÃO DE MOVIMENTOS?</label>
                                    <input type="text" class="form-control" id="inputAtividade" name="movimentos">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-10">
                                     <label for="inputData">ARTRITE OU TENDINITE? ONDE?</label>
                                    <input type="text" class="form-control" id="inputAtividade" name="artrite">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-10">
                                     <label for="inputData">USO DE MEDICAMENTOS? QUAIS?</label>
                                    <input type="text" class="form-control" id="inputAtividade" name="medicamentos">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-10">
                                     <label for="inputData">ALGUM OUTRO SINTOMA? (falta de ar, tonturas, taquicardia, ansiedade, etc) </label>
                                    <input type="text" class="form-control" id="inputAtividade" name="outros">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-10">
                                     <label for="inputData">HABITOS ALIMENTARES:</label>
                                    <input type="text" class="form-control" id="inputAtividade" name="alimentacao">
                                </div>
                            </div>
                            <br>
                            <!-- Div dos botões de salvar -->
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
<!-- Include php rodapé -->
<?php
include_once('include/footer.html');
?>
