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
                            <input class="form-control" type="text" placeholder="Pesquisar..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <!-- Div do conteudo principal -->
                    <div class="card-body">
                        <form action="controller/AnamneseController.php" method="POST">
                            <!-- Div data -->
                            <div class="row mb-3 align-items-center">
                                <div class="form-group col-md-2">
                                    <input type="date" class="form-control" id="inputData" placeholder="Nome">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="inputNome">
                                </div>
                            </div>
                            <!-- Inicio conteudo da anamneses -->
                            <div class="row mb-3">
                                <!-- Campo de atividade fisica -->
                                <div class="col-md-4">
                                    <fieldset class="form-group">
                                        <div class="col-sm-12">
                                            <legend class="col-form-label col-sm-5 pt-0">Ativ. Física:</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="atividade" id="gridRadios" value="sedentario">
                                                <label class="form-check-label" for="gridRadios2">Sedentário</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="atividade" id="gridRadios" value="moderado">
                                                <label class="form-check-label" for="gridRadios2">Moderado</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="atividade" id="gridRadios" value="ativo">
                                                <label class="form-check-label" for="gridRadios2">Ativo</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Campo tempo de pratica -->
                                <div class="col-md-4">
                                    <fieldset class="form-group">
                                        <div class="col-sm-12">
                                            <legend class="col-form-label col-sm-5 pt-0">Tempo Prática:</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tempo_pratica" id="gridcheckboxs1" value="meses">
                                                <label class="form-check-label" for="gridRadios1">até 6 meses</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tempo_pratica" id="gridRadios1" value="ano">
                                                <label class="form-check-label" for="gridRadios1">Até 1 ano</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tempo_pratica" id="gridRadios1" value="maisAno">
                                                <label class="form-check-label" for="gridRadios1">Mais de 1 ano</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Campo objetivos -->
                                <div class="col-md-4">
                                    <fieldset class="form-check">
                                        <div class="col-sm-10">
                                            <legend class="col-form-label col-sm-5 pt-0">Objetivo:</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="objetivo" id="gridRadios1" value="saude">
                                                <label class="form-check-label" for="gridRadios1">Saúde</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="objetivo" id="gridRadios1" value="emagrecimento">
                                                <label class="form-check-label" for="gridRadios1">Emagrecimento</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="objetivo" id="gridRadios1" value="hipertrofia">
                                                <label class="form-check-label" for="gridRadios1">Hipertrofia</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="objetivo" id="gridRadios1" value="manutencao">
                                                <label class="form-check-label" for="gridRadios1">Manutenção</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <br>
                            <div class="row mb-3">
                                <!-- Campo fumar -->
                                <div class="col-md-4">
                                    <fieldset class="form-group">
                                        <div class="col-sm-10">
                                            <legend class="col-form-label col-sm-5 pt-0">Fumante?</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fumante" id="gridRadios2" value="fumante">
                                                <label class="form-check-label" for="gridRadios1">Sim</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fumante" id="gridRadios2" value="fumante">
                                                <label class="form-check-label" for="gridRadios2">Não</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fumante" id="gridRadios2" value="fumante">
                                                <label class="form-check-label" for="gridRadios2">Ex-fumante</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Campo bebida alcoolica -->
                                <div class="col-md-4">
                                    <fieldset class="form-group">
                                        <div class="col-sm-12">
                                            <legend class="col-form-label col-sm-5 pt-0">Álcool?</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="alcool" id="gridRadios1" value="alcool">
                                                <label class="form-check-label" for="gridRadios1">Raramente</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="alcool" id="gridRadios" value="alcool">
                                                <label class="form-check-label" for="gridRadios2">Ocasionalmente</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="alcool" id="gridRadios" value="alcool">
                                                <label class="form-check-label" for="gridRadios2">Frequentemente</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Campo histórico familiar -->
                                <div class="col-md-4">
                                    <fieldset class="form-group">
                                        <div class="col-sm-12">
                                            <legend class="col-form-label col-sm-5 pt-0">Histórico Familiar:</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="hipertensao" id="defaultCheck1" name="historico_fam">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Hipertensão
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="diabetes" id="defaultCheck2" name="historico_fam">
                                                <label class="form-check-label" for="defaultCheck2">
                                                    Diabetes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="colesterol" id="defaultCheck2" name="historico_fam">
                                                <label class="form-check-label" for="defaultCheck2">
                                                    Colesterol
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="cardicao" id="defaultCheck2" name="historico_fam">
                                                <label class="form-check-label" for="defaultCheck2">
                                                    Cardíaco
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <br>
                            <div class="row mb-3">
                                <!-- Campo hipertensão -->
                                <div class="col-md-4">
                                    <fieldset class="form-group">
                                        <div class="col-sm-12">
                                            <legend class="col-form-label col-sm-5 pt-0">Hipertensão?</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="hipertensao" id="gridRadios1" value="hipertensaoSim">
                                                <label class="form-check-label" for="gridRadios1">Sim</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="hipertensao" id="gridRadios2" value="hipertensaoNao">
                                                <label class="form-check-label" for="gridRadios2">Não</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Campo colesterol -->
                                <div class="col-md-4">
                                    <fieldset class="form-group">
                                        <div class="col-sm-12">
                                            <legend class="col-form-label col-sm-5 pt-0">Colesterol?</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="colesterol" id="gridRadios1" value="colesterolSim">
                                                <label class="form-check-label" for="gridRadios1">Sim</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="colesterol" id="gridRadios2" value="colesterolNao">
                                                <label class="form-check-label" for="gridRadios2">Não</label>
                                            </div>
                                        </div>
                                    </fieldset> 
                                </div>
                                <!-- Campo diabetes -->
                                <div class="col-md-4">
                                    <fieldset class="form-group">
                                        <div class="col-sm-12">
                                            <legend class="col-form-label col-sm-5 pt-0">Diabetes?</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="diabetes" id="gridRadios1" value="diabetesSim">
                                                <label class="form-check-label" for="gridRadios1">Sim</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="diabetes" id="gridRadios2" value="diabetesNao">
                                                <label class="form-check-label" for="gridRadios2">Não</label>
                                            </div>
                                        </div>
                                    </fieldset> 
                                </div>
                            </div>
                            <br>
                            <div class="row mb-3">
                                <!-- Campo problema cardíaco -->
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <div class="col-sm-10">
                                            <legend class="col-form-label col-sm-5 pt-0">Doença Cardíaca?</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cardiaco" id="gridRadios1" value="cardiacoSim">
                                                <label class="form-check-label" for="gridRadios1">Sim</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cardiaco" id="gridRadios2" value="cardiacoNao">
                                                <label class="form-check-label" for="gridRadios2">Não</label>
                                            </div>
                                            <div class="form-group row">
                                                <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Qual?</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputPassword" placeholder="" name="cardiaco">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Campo cirurgia -->
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <div class="col-sm-10">
                                            <legend class="col-form-label col-sm-5 pt-0">Cirurgia?</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cirurgia" id="gridRadios1" value="cirurgiaSim">
                                                <label class="form-check-label" for="gridRadios1">Sim</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cirurgia" id="gridRadios2" value="cirurgiaNao">
                                                <label class="form-check-label" for="gridRadios2">Não</label>
                                            </div>
                                            <div class="form-group row">
                                                <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Qual?</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputPassword" placeholder="" name="cirurgia">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <br>
                            <div class="row mb-3">
                                <!-- Campo fratura -->
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <div class="col-sm-10">
                                            <legend class="col-form-label col-sm-5 pt-0">Fratura ou Luxação?</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fratura" id="gridRadios1" value="fraturaSim">
                                                <label class="form-check-label" for="gridRadios1">Sim</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fratura" id="gridRadios2" value="fraturaNao">
                                                <label class="form-check-label" for="gridRadios2">Não</label>
                                            </div>
                                            <div class="form-group row">
                                                <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Onde?</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputPassword" placeholder="" name="fratura">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Campo lesão -->
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <div class="col-sm-10">
                                            <legend class="col-form-label col-sm-5 pt-0">Lesão?</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lesao" id="gridRadios1" value="lesaoSim">
                                                <label class="form-check-label" for="gridRadios1">Sim</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lesao" id="gridRadios2" value="lesaoNao">
                                                <label class="form-check-label" for="gridRadios2">Não</label>
                                            </div>
                                            <div class="form-group row">
                                                <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Onde?</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputPassword" placeholder="" name="lesao">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <br>
                            <div class="row mb-3">
                                <!-- Campo dores -->
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <div class="col-sm-10">
                                            <legend class="col-form-label col-sm-5 pt-0">Dor no corpo?</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="dor" id="gridRadios1" value="dorSim">
                                                <label class="form-check-label" for="gridRadios1">Sim</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="dor" id="gridRadios2" value="dorNao">
                                                <label class="form-check-label" for="gridRadios2">Não</label>
                                            </div>
                                            <div class="form-group row">
                                                <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Onde?</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputPassword" placeholder="" name="dor">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Campo movimentos -->
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <div class="col-sm-12">
                                            <legend class="col-form-label col-sm-5 pt-0">Movimentos limitados?</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="movimentos" id="gridRadios1" value="limitacaoSim">
                                                <label class="form-check-label" for="gridRadios1">Sim</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="movimentos" id="gridRadios2" value="limitacaoNao">
                                                <label class="form-check-label" for="gridRadios2">Não</label>
                                            </div>
                                            <div class="form-group row">
                                                <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Qual?</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputPassword" placeholder="" name="movimentos">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <br>
                            <div class="row mb-3">
                                <!-- Campo artrite -->
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <div class="col-sm-12">
                                            <legend class="col-form-label col-sm-5 pt-0">Artrite/Tendinite?</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="artrite" id="gridRadios1" value="artriteSim">
                                                <label class="form-check-label" for="gridRadios1">Sim</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="artite" id="gridRadios2" value="artriteNao">
                                                <label class="form-check-label" for="gridRadios2">Não</label>
                                            </div>
                                            <div class="form-group row">
                                                <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Onde?</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputPassword" placeholder="" name="artrite">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Campo medicamentos -->
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <div class="col-sm-10">
                                            <legend class="col-form-label col-sm-5 pt-0">Medicamentos?</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="medicamentos" id="gridRadios1" value="medicamentoSim">
                                                <label class="form-check-label" for="gridRadios1">Sim</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="medicamentos" id="gridRadios2" value="medicamentoNao">
                                                <label class="form-check-label" for="gridRadios2">Não</label>
                                            </div>
                                            <div class="form-group row">
                                                <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Qual?</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputPassword" placeholder="" name="medicamentos">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <br>
                            <div class="row mb-3">
                                <!-- Campo outros sintomas -->
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <div class="col-sm-10">
                                            <legend class="col-form-label col-sm-5 pt-0">Outros Sintomas:</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Hipotireoidismo" id="defaultCheck1" name="outros">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Hipotireoidismo
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Tontura" id="defaultCheck1" name="outros">
                                                <label class="form-check-label" for="defaultCheck1" name="outros">
                                                    Tontura
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Desmaios" id="defaultCheck2" name="outros">
                                                <label class="form-check-label" for="defaultCheck2">
                                                    Desmaios
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="dor-peito" id="defaultCheck2" name="outros">
                                                <label class="form-check-label" for="defaultCheck2">
                                                Dor no peito
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="falta-ar" id="defaultCheck2">
                                                <label class="form-check-label" for="defaultCheck2" name="outros">
                                                    Falta de ar
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Taquicardia" id="defaultCheck2" name="outros">
                                                <label class="form-check-label" for="defaultCheck2">
                                                    Taquicardia
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Ansiedade" id="defaultCheck2" name="outros">
                                                <label class="form-check-label" for="defaultCheck2">
                                                    Ansiedade
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Gastrite" id="defaultCheck2" name="outros">
                                                <label class="form-check-label" for="defaultCheck2">
                                                    Gastrite
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Insônia" id="defaultCheck2" name="outros">
                                                <label class="form-check-label" for="defaultCheck2">
                                                    Insônia
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Campo alimentação -->
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <div class="col-sm-12">
                                            <legend class="col-form-label col-sm-5 pt-0">Habitos Alimentares:</legend>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1"></label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="alimentacao"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <br>
                            <!-- Div dos botões de salvar -->
                            <div class="mt-4 mb-0">
                                <button type="submit" name="salvar" class="btn btn-success btn-lg">Salvar</button>
                                <button type="submit" name="editar" class="btn btn-success btn-lg">Editar</button>
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
