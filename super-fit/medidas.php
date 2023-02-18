<!-- Include php cabeçalho e barras -->
<?php
include_once('include/header.html');
include_once('include/navbar.html');
include_once('include/sidebar.html');
include_once('./model/DadosIniciais.php');
include_once('./dao/DadosIniciaisDAO.php');
include_once('./model/Circunferencias.php');
include_once('./dao/CircunferenciasDAO.php');
include_once('./model/DobrasCutaneas.php');
include_once('./dao/DobrasCutaneasDAO.php');

$dadosiniciais = new DadosIniciais();
$dadosiniciaisdao = new DadosIniciaisDAO();
$circunferencias = new Circunferencias();
$circunferenciasdao = new CircunferenciasDAO();
$dobras_cutaneas = new DobrasCutaneas();
$dobras_cutaneasdao = new DobrasCutaneasDAO();
?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <!-- Div do Titulo da página -->
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">MEDIDAS ANTROPOMÉTRICAS</h3></div>
                     <!-- Div menu -->
                     <div class="card-header text-center">
                        <a class="btn btn-info btn-block" href="anamnese.php"><button type="button" class="btn btn-info btn-lg">ANAMNESE</button></a>
                        
                        <a class="btn btn-info btn-block" href="medidas.php"><button type="button" class="btn btn-info btn-lg">MEDIDAS</button></a>
                        
                        <a class="btn btn-info btn-block" href="forca-rep.php"><button type="button" class="btn btn-info btn-lg">FORÇA</button></a>
                        
                        <a class="btn btn-info btn-block" href="vo-esteira.php"><button type="button" class="btn btn-info btn-lg">VO2</button></a>
                        
                        <a class="btn btn-info btn-block" href="resultados.php"><button type="button" class="btn btn-info btn-lg">RESULTADOS</button></a>
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
                        <div class="container">
                            <!-- Linha data, nome e idade -->
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
                            <br>
                                <div class="row">
                                    <!-- Coluna de Peso e Altura -->
                                    <div class="col-sm">
                                        <h4>Dados Iniciais</h4>
                                        <form>
                                            <div class="form-group row">
                                                <label for="inputPeso" class="col-sm-3 col-form-label">Peso</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.01" class="form-control" id="inputPeso" placeholder="kg">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputAltura" class="col-sm-3 col-form-label">Altura</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.01" class="form-control" id="inputAltura" placeholder="metros">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputFC" class="col-sm-3 col-form-label">F.C.</label>
                                                <div class="col-sm-4">
                                                <input type="number" class="form-control" id="inputFC" placeholder="bpm">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPA" class="col-sm-3 col-form-label">Pressão Arterial</label>
                                                <div class="col-sm-4">
                                                <input type="text" class="form-control mt-3" id="inputPA" placeholder="mmHg">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Coluna Circunferencias -->
                                    <div class="col-sm">
                                        <h4>Circunferências</h4>
                                        <form>
                                            <div class="form-group row">
                                                <label for="inputTorax" class="col-sm-4 col-form-label">Torax N.</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputTorax" placeholder="cm">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputCintura" class="col-sm-4 col-form-label">Cintura</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputCintura" placeholder="cm">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputAbd" class="col-sm-4 col-form-label">Abdomen</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputAbdomen" placeholder="cm">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputQuadril" class="col-sm-4 col-form-label">Quadril</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputQuadril" placeholder="cm">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputBracoD" class="col-sm-4 col-form-label">Braço D.</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputBracoD" placeholder="cm">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputBracoE" class="col-sm-4 col-form-label">Braço E.</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputBracoE" placeholder="cm">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputAntebD" class="col-sm-4 col-form-label">Anteb. D.</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputAntebD" placeholder="cm">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputAntebE" class="col-sm-4 col-form-label">Anteb. E.</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputAntebE" placeholder="cm">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputCoxaD" class="col-sm-4 col-form-label">Coxa D.</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputCoxaD" placeholder="cm">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputCoxaE" class="col-sm-4 col-form-label">Coxa E.</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputCoxaE" placeholder="cm">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPantD" class="col-sm-4 col-form-label">Pantur. D.</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputPantD" placeholder="cm">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPantE" class="col-sm-4 col-form-label">Pantur. E.</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputPantE" placeholder="cm">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Coluna Dobras cutaneas -->
                                    <div class="col-sm">
                                        <h4>Dobras Cutâneas</h4>
                                        <form action="controller/DobrasCutaneasController.php" method="POST">
                                            <div class="form-group row">
                                                <label for="inputPeitoral" class="col-sm-4 col-form-label">Peitoral</label>
                                                <div class="col-sm-4">
                                                    <input type="number" step="0.1" class="form-control" id="inputPeitoral" placeholder="mm" name="peitoral">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputAxM" class="col-sm-4 col-form-label">Axilar Media</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputAxM" placeholder="mm" name="axilarMedia">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputAbd" class="col-sm-4 col-form-label">Abdominal</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputAbdomen" placeholder="mm" name="abdominal">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputSupra" class="col-sm-4 col-form-label">Supra Iliaca</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputSupra" placeholder="mm" name="supraIliaca">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputSub" class="col-sm-4 col-form-label">Sub Escap.</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputSub" placeholder="mm" name="subEscapular">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputTricipital" class="col-sm-4 col-form-label">Tricipital</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputTricipital" placeholder="mm" name="tricipital">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputCoxa" class="col-sm-4 col-form-label">Coxa</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputCoxa" placeholder="mm" name="coxa">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputSoma" class="col-sm-4 col-form-label">Somatorio</label>
                                                <div class="col-sm-4">
                                                <input type="number" step="0.1" class="form-control" id="inputSoma" placeholder="mm" name="">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Linha de Botões salvar -->
                            <div class="mt-4 mb-0">
                                <button type="button" class="btn btn-success"><a class="btn btn-success btn-block" href="#">Salvar</a></button>
                                <button type="button" class="btn btn-warning"><a class="btn btn-warning btn-block" href="#">Editar</a></button>
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
