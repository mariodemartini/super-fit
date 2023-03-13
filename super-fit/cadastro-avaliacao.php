<!-- Include php cabeçalho e menus -->
<?php
include_once('include/header.html');
include_once('include/navbar.html');
include_once('include/sidebar.html');
include_once('./conexao/Conexao.php');
include_once('./model/Aluno.php');
include_once('./dao/AlunoDAO.php');
include_once('./model/Anamnese.php');
include_once('./dao/AnamneseDAO.php');
include_once('./model/Medidas.php');
include_once('./dao/MedidasDAO.php');
include_once('./model/TesteForca.php');
include_once('./dao/TesteForcaDAO.php');
include_once('./model/TesteVO2.php');
include_once('./dao/TesteVO2DAO.php');

$aluno = new Aluno();
$alunodao = new AlunoDAO();

$anamnese = new Anamnese();
$anamnesedao = new AnamneseDAO();

$medidas = new Medidas();
$medidasdao = new MedidasDAO();

$testeforca = new TesteForca();
$testeforcadao = new TesteForcaDAO();

$testevo2 = new TesteVO2();
$testevo2dao = new TesteVO2DAO();

?>

<main>
    <div class="container-fluid px-4 text-center">
        <h1 class="card-header mt-4">AVALIÇÃO FÍSICA</h1>
        <!-- <div class="card mb-4">
            <div class="card-body">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Pesquisar..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div> -->
        <br>
        <div class="card mb-4">
            <!-- Inicio tabela -->
            <table class="table table-bordered">
                <!-- Cabeçalho tabela -->
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <!-- Dados tabela de alunos -->
                <tbody>
                    <?php foreach ($alunodao->read() as $aluno): ?>
                        <tr>
                            <td>
                                <?= $aluno->getIdAluno() ?>
                            </td>
                            <td>
                                <?= $aluno->getNome() ?>
                            </td>
                            <td>
                                <?= $aluno->getIdade() ?>
                            </td>
                            <td class="text-center">
                                <!-- <a href="cadastro-editar.php"><button type="button" class="btn btn-warning">editar</button></a> -->
                                <button class="btn  btn-warning btn-sm" data-toggle="modal"
                                    data-target="#anamnese><?= $aluno->getIdAluno() ?>"> Anamnese </button>
                                <button class="btn  btn-danger btn-sm" data-toggle="modal"
                                    data-target="#medidas><?= $aluno->getIdAluno() ?>"> Medidas </button>
                                <button class="btn  btn-secondary btn-sm" data-toggle="modal"
                                    data-target="#forca><?= $aluno->getIdAluno() ?>"> Teste Força </button>
                                <button class="btn  btn-primary btn-sm" data-toggle="modal"
                                    data-target="#vo><?= $aluno->getIdAluno() ?>"> Teste VO2 </button>
                                <button class="btn  btn-success btn-sm" data-toggle="modal"
                                    data-target="#resultado><?= $aluno->getIdAluno() ?>"> Resultado </button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div>
            <!-- Modal Anamnese -->
            <?php foreach ($alunodao->read() as $aluno): ?>
                <div class="modal fade" id="anamnese><?= $aluno->getIdAluno() ?>" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">

                                <form action="controller/AnamneseController.php" method="POST">
                                    <div>
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputNome" type="date"
                                                        placeholder="nome" name="dataCadastro" />
                                                    <label for="inputData">Data</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Campo Nome -->
                                        <div class="row mb-3">
                                            <div class="col-md-2">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputNome" type="number"
                                                        placeholder="nome" name="idAluno"
                                                        value="<?= $aluno->getIdAluno() ?>" require />
                                                    <label for="inputNome">ID</label>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputNome" type="text"
                                                        placeholder="nome" name="nome" value="<?= $aluno->getNome() ?>"
                                                        require />
                                                    <label for="inputNome">Nome Completo</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputIdade" type="text"
                                                        placeholder="Sexo" name="idade" value="<?= $aluno->getIdade() ?>"
                                                        require />
                                                    <label for="inputIdade">Idade</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <br>
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
                                                <input type="text" class="form-control" id="inputAtividade"
                                                    name="atividade">
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
                                                <input type="text" class="form-control" id="inputAtividade"
                                                    name="hipertensao">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <!-- Campo de atividade fisica -->
                                            <div class="col-md-10">
                                                <label for="inputData">COLESTEROL ALTO?</label>
                                                <input type="text" class="form-control" id="inputAtividade"
                                                    name="colesterol">
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
                                                <label for="inputData">HISTÓRICO FAMILIAR: (colesterol, diabetes,
                                                    etc)</label>
                                                <input type="text" class="form-control" id="inputAtividade"
                                                    name="historicoFam">
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
                                                <input type="text" class="form-control" id="inputAtividade"
                                                    name="movimentos">
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
                                                <input type="text" class="form-control" id="inputAtividade"
                                                    name="medicamentos">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-10">
                                                <label for="inputData">ALGUM OUTRO SINTOMA? (falta de ar, tonturas,
                                                    taquicardia, ansiedade, etc) </label>
                                                <input type="text" class="form-control" id="inputAtividade" name="outros">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-10">
                                                <label for="inputData">HABITOS ALIMENTARES:</label>
                                                <input type="text" class="form-control" id="inputAtividade"
                                                    name="alimentacao">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <br>
                                                <button class="btn btn-primary" type="submit" name="salvar">Salvar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <!-- Modal Medidas -->
        <div>
            <?php foreach ($alunodao->read() as $aluno): ?>
                <div class="modal fade" id="medidas><?= $aluno->getIdAluno() ?>" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="controller/MedidasController.php" method="POST">
                                    <div>
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputNome" type="date" placeholder="data"
                                                        name="dataCadastro" />
                                                    <label for="inputData">Data</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Campo Nome -->
                                        <div class="row mb-3">
                                            <div class="col-md-2">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputNome" type="number"
                                                        placeholder="idAluno" name="idAluno" value="<?= $aluno->getIdAluno() ?>"
                                                        require />
                                                    <label for="inputNome">ID</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputNome" type="text" placeholder="nome"
                                                        name="nome" value="<?= $aluno->getNome() ?>" require />
                                                    <label for="inputNome">Nome Completo</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputSexo" type="text" placeholder="sexo"
                                                        name="sexo" value="<?= $aluno->getSexo() ?>" require />
                                                    <label for="inputSexo">Sexo</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputIdade" type="text" placeholder="Sexo"
                                                        name="idade" value="<?= $aluno->getIdade() ?>" require />
                                                    <label for="inputIdade">Idade</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Coluna de Peso e Altura -->
                                            <div class="col-sm">
                                                <h4>Dados Iniciais</h4>
                                                <div class="form-group row">
                                                    <label for="inputPeso" class="col-sm-3 col-form-label">Peso</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.01" class="form-control" id="inputPeso"
                                                            placeholder="kg" name="peso">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputAltura" class="col-sm-3 col-form-label">Altura</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.01" class="form-control" id="inputAltura"
                                                            placeholder="metros" name="altura">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputFC" class="col-sm-3 col-form-label">F.C.</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" class="form-control" id="inputFC" placeholder="bpm"
                                                            name="freqCard">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPA" class="col-sm-3 col-form-label">Pres. Arterial</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control mt-3" id="inputPA"
                                                            placeholder="mmHg" name="pressaoArterial">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Coluna Circunferencias -->
                                            <div class="col-sm">
                                                <h4>Circunferências</h4>
                                                <div class="form-group row">
                                                    <label for="inputTorax" class="col-sm-4 col-form-label">Torax N.</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control" id="inputTorax"
                                                            placeholder="cm" name="torax">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputCintura" class="col-sm-4 col-form-label">Cintura</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control" id="inputCintura"
                                                            placeholder="cm" name="cintura">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputAbd" class="col-sm-4 col-form-label">Abdomen</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control" id="inputAbdomen"
                                                            placeholder="cm" name="abdomen">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputQuadril" class="col-sm-4 col-form-label">Quadril</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control" id="inputQuadril"
                                                            placeholder="cm" name="quadril">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputBracoD" class="col-sm-4 col-form-label">Braço D.</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control" id="inputBracoD"
                                                            placeholder="cm" name="bracoDireito">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputBracoE" class="col-sm-4 col-form-label">Braço E.</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control" id="inputBracoE"
                                                            placeholder="cm" name="bracoEsquerdo">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputAntebD" class="col-sm-4 col-form-label">Anteb. D.</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control" id="inputAntebD"
                                                            placeholder="cm" name="antebracoDireito">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputAntebE" class="col-sm-4 col-form-label">Anteb. E.</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control" id="inputAntebE"
                                                            placeholder="cm" name="antebracoEsquerdo">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputCoxaD" class="col-sm-4 col-form-label">Coxa D.</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control" id="inputCoxaD"
                                                            placeholder="cm" name="coxaDireita">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputCoxaE" class="col-sm-4 col-form-label">Coxa E.</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control" id="inputCoxaE"
                                                            placeholder="cm" name="coxaEsquerda">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPantD" class="col-sm-4 col-form-label">Pantur. D.</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control" id="inputPantD"
                                                            placeholder="cm" name="panturrilhaDireita">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPantE" class="col-sm-4 col-form-label">Pantur. E.</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control" id="inputPantE"
                                                            placeholder="cm" name="panturrilhaEsquerda">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h4>Dobras Cutâneas</h4>
                                            <div class="col-sm">
                                                <div class="form-group row">
                                                    <label for="inputPeitoral" class="col-sm-4 col-form-label">Peitoral</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control" id="inputPeitoral"
                                                            placeholder="mm" name="peitoral">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputAxM" class="col-sm-4 col-form-label">Axilar Media</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control" id="inputAxM"
                                                            placeholder="mm" name="axilarMedia">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputAbd" class="col-sm-4 col-form-label">Abdominal</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control" id="inputAbdomen"
                                                            placeholder="mm" name="abdominal">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputSupra" class="col-sm-4 col-form-label">Supra Iliaca</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control" id="inputSupra"
                                                            placeholder="mm" name="supraIliaca">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputSub" class="col-sm-4 col-form-label">Sub Escap.</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control" id="inputSub"
                                                            placeholder="mm" name="subEscapular">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputTricipital"
                                                        class="col-sm-4 col-form-label">Tricipital</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control"
                                                            id="inputTricipital" placeholder="mm" name="tricipital">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputCoxa" class="col-sm-4 col-form-label">Coxa</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.1" class="form-control" id="inputCoxa"
                                                            placeholder="mm" name="coxa">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <br>
                                                <button class="btn btn-primary" type="submit" name="salvar">Salvar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <!-- Modal VO2-->
        <div>
            <?php foreach ($alunodao->read() as $aluno): ?>
                <div class="modal fade" id="vo><?= $aluno->getIdAluno() ?>" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="controller/TesteVO2Controller.php" method="POST">
                                    <div>
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputNome" type="date" placeholder="nome"
                                                        name="dataTeste"/>
                                                    <label for="inputData">Data</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Campo Nome -->
                                        <div class="row mb-3">
                                            <div class="col-md-2">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputNome" type="number" placeholder="idAluno"
                                                        name="idAluno" value="<?= $aluno->getIdAluno() ?>" require />
                                                    <label for="inputNome">ID</label>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputNome" type="text" placeholder="nome"
                                                        name="nome" value="<?= $aluno->getNome() ?>" require />
                                                    <label for="inputNome">Nome Completo</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputIdade" type="text" placeholder="Sexo"
                                                        name="idade" value="<?= $aluno->getIdade() ?>" require />
                                                    <label for="inputIdade">Idade</label>
                                                </div>
                                            </div>
                                        </div>
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
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputVelInicio" placeholder="km/h" name="velocidadeInicial">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="inputFCRepouso" class="col-sm-8 col-form-label">FC Repouso</label>
                                                <div class="col-sm-6">
                                                    <input type="number" class="form-control" id="inputFCRepouso" placeholder="bpm" name="fcInicial">
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
                                                <div class="col-sm-8">
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
                                                <label for="inputVel" class="col-sm- col-form-label">Velocidade</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeFinal">
                                                    <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeFinal">
                                                    <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeFinal">
                                                    <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeFinal">
                                                    <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeFinal">
                                                    <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeFinal">
                                                    <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeFinal">
                                                    <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeFinal">
                                                    <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeFinal">
                                                    <input type="number" class="form-control" id="inputVel" placeholder="km/h" name="velocidadeFinal">
                                                </div>
                                            </div>
                                            <!-- Coluna frequencia cardiaca -->
                                            <div class="form-group col-md-3">
                                                <label for="inputFC" class="col-sm-8 col-form-label">F.C.</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcFinal">
                                                    <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcFinal">
                                                    <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcFinal">
                                                    <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcFinal">
                                                    <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcFinal">
                                                    <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcFinal">
                                                    <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcFinal">
                                                    <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcFinal">
                                                    <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcFinal">
                                                    <input type="number" class="form-control" id="inputFC" placeholder="bpm" name="fcFinal">
                                                </div>
                                            </div>
                                            <!-- Coluna esforço -->
                                            <div class="form-group col-md-3">
                                                <label for="inputVelInicio" class="col-sm-8 col-form-label">Esforço</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputVelInicio" placeholder="0-10" name="esforcoTeste">
                                                    <input type="number" class="form-control" id="inputVelInicio" placeholder="0-10" name="esforcoTeste">
                                                    <input type="number" class="form-control" id="inputVelInicio" placeholder="0-10" name="esforcoTeste">
                                                    <input type="number" class="form-control" id="inputVelInicio" placeholder="0-10" name="esforcoTeste">
                                                    <input type="number" class="form-control" id="inputVelInicio" placeholder="0-10" name="esforcoTeste">
                                                    <input type="number" class="form-control" id="inputVelInicio" placeholder="0-10" name="esforcoTeste">
                                                    <input type="number" class="form-control" id="inputVelInicio" placeholder="0-10" name="esforcoTeste">
                                                    <input type="number" class="form-control" id="inputVelInicio" placeholder="0-10" name="esforcoTeste">
                                                    <input type="number" class="form-control" id="inputVelInicio" placeholder="0-10" name="esforcoTeste">
                                                    <input type="number" class="form-control" id="inputVelInicio" placeholder="0-10" name="esforcoTeste">
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <br>
                                                <button class="btn btn-primary" type="submit" name="salvar">Salvar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <!-- Modal Força -->
        <div>
            <?php foreach ($alunodao->read() as $aluno): ?>
                <div class="modal fade" id="forca><?= $aluno->getIdAluno() ?>" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="controller/TesteForcaController.php" method="POST">
                                    <div>
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputNome" type="date" placeholder="nome"
                                                        name="dataCadastro" />
                                                    <label for="inputData">Data</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Campo Nome -->
                                        <div class="row mb-3">
                                            <div class="col-md-2">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputNome" type="number" placeholder="idAluno"
                                                        name="idAluno" value="<?= $aluno->getIdAluno() ?>" require />
                                                    <label for="inputNome">ID</label>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputNome" type="text" placeholder="nome"
                                                        name="nome" value="<?= $aluno->getNome() ?>" require />
                                                    <label for="inputNome">Nome Completo</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputIdade" type="text" placeholder="Sexo"
                                                        name="idade" value="<?= $aluno->getIdade() ?>" require />
                                                    <label for="inputIdade">Idade</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <h3>Descrição:</h3>
                                            <p>Realizar aquecimento no exercicio com carga leve.</p>
                                            <p>O aluno tem 3 tentativas para realizar 1 repetição máxima, com descanso de 3 a 5
                                                minutos.</p>
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
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputPrimeira" placeholder="kg" name="cargaInicial">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputSegunda" class="col-sm-9 col-form-label">2ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputSegunda" placeholder="kg"
                                                    name="cargaFinal">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputTerceira" class="col-sm-9 col-form-label">3ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputTerceira" placeholder="kg"
                                                    name="cargaFinal">
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
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Linha tentativas -->
                                        <div class="row mb-3">
                                            <div class="form-group col-md-3">
                                                <label for="inputPrimeira" class="col-sm-9 col-form-label">1ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputPrimeira" placeholder="kg"
                                                        name="cargaInicial">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputSegunda" class="col-sm-9 col-form-label">2ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputSegunda" placeholder="kg"
                                                        name="cargaFinal">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputTerceira" class="col-sm-9 col-form-label">3ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputTerceira" placeholder="kg"
                                                        name="cargaFinal">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- TESTE PERNA -->
                                        <div class="row mb-3">
                                            <!-- Seleção exercicio -->
                                            <div class="form-group col-md-3">
                                                <h4>Coxa</h4>
                                                <select class="form-control" id="exercicioPerna" name="exercicio">
                                                    <option>Escolha</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Linha tentativas -->
                                        <div class="row mb-3">
                                            <div class="form-group col-md-3">
                                                <label for="inputPrimeira" class="col-sm-9 col-form-label">1ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputPrimeira" placeholder="kg"
                                                        name="cargaInicial">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputSegunda" class="col-sm-9 col-form-label">2ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputSegunda" placeholder="kg"
                                                        name="cargaFinal">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputTerceira" class="col-sm-9 col-form-label">3ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputTerceira" placeholder="kg"
                                                        name="cargaFinal">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- TESTE BICEPS -->
                                        <div class="row mb-3">
                                            <!-- Seleção exercicio -->
                                            <div class="form-group col-md-3">
                                                <h4>Bíceps</h4>
                                                <select class="form-control" id="exercicioBiceps" name="exercicio">
                                                    <option>Escolha</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Linha tentativas -->
                                        <div class="row mb-3">
                                            <div class="form-group col-md-3">
                                                <label for="inputPrimeira" class="col-sm-9 col-form-label">1ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputPrimeira" placeholder="kg"
                                                        name="cargaInicial">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputSegunda" class="col-sm-9 col-form-label">2ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputSegunda" placeholder="kg"
                                                        name="cargaFinal">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputTerceira" class="col-sm-9 col-form-label">3ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputTerceira" placeholder="kg"
                                                        name="cargaFinal">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- TESTE TRICEPS -->
                                        <div class="row mb-3">
                                            <!-- Seleção exercicio -->
                                            <div class="form-group col-md-3">
                                                <h4>Tríceps</h4>
                                                <select class="form-control" id="exercicioTriceps" name="exercicio">
                                                    <option>Escolha</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Linha tentativas -->
                                        <div class="row mb-3">
                                            <div class="form-group col-md-3">
                                                <label for="inputPrimeira" class="col-sm-9 col-form-label">1ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputPrimeira" placeholder="kg"
                                                        name="cargaInicial">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputSegunda" class="col-sm-9 col-form-label">2ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputSegunda" placeholder="kg"
                                                        name="cargaFinal">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputTerceira" class="col-sm-9 col-form-label">3ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputTerceira" placeholder="kg"
                                                        name="cargaFinal">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- TESTE OMBRO -->
                                        <div class="row mb-3">
                                            <!-- Seleção exercicio -->
                                            <div class="form-group col-md-3">
                                                <h4>Ombro</h4>
                                                <select class="form-control" id="exercicioOmbro" name="exercicio">
                                                    <option>Escolha</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Linha tentativas -->
                                        <div class="row mb-3">
                                            <div class="form-group col-md-3">
                                                <label for="inputPrimeira" class="col-sm-9 col-form-label">1ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputPrimeira" placeholder="kg"
                                                        name="cargaInicial">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputSegunda" class="col-sm-9 col-form-label">2ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputSegunda" placeholder="kg"
                                                        name="cargaFinal">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputTerceira" class="col-sm-9 col-form-label">3ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputTerceira" placeholder="kg"
                                                        name="cargaFinal">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- TESTE GLUTEO -->
                                        <div class="row mb-3">
                                            <!-- Seleção exercicio -->
                                            <div class="form-group col-md-3">
                                                <h4>Glúteo</h4>
                                                <select class="form-control" id="exercicioGluteo=" exercicio">
                                                    <option>Escolha</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Linha tentativas -->
                                        <div class="row mb-3">
                                            <div class="form-group col-md-3">
                                                <label for="inputPrimeira" class="col-sm-9 col-form-label">1ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputPrimeira" placeholder="kg"
                                                        name="cargaInicial">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputSegunda" class="col-sm-9 col-form-label">2ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputSegunda" placeholder="kg"
                                                        name="cargaFinal">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputTerceira" class="col-sm-9 col-form-label">3ª Tentativa</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="inputTerceira" placeholder="kg"
                                                        name="cargaFinal">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <br>
                                                <button class="btn btn-primary" type="submit" name="salvar">Salvar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <div class="col-sm-1 mt-4 mb-0">
        <button type="button" class="btn btn-secondary"><a class="btn btn-secondary btn-block"
                href="avaliacao.php">Voltar</a></button>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

<!-- Inclue php rodapé -->
<?php
include_once('include/footer.html');
?>