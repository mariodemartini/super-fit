<?php
include_once('include/header.php');
include_once('include/navbar.php');
include_once('include/sidebar.php');
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
        <h1 class="card-header mt-4"> COMPARATIVO AVALIÇÃO FÍSICA</h1>
        <br>
        <div class="card mb-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
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
                                    <button class="btn  btn-primary btn-sm" data-toggle="modal" data-target="#anamnese><?= $aluno->getIdAluno() ?>"> RESULTADOS </button>
                                    <button class="btn  btn-success btn-sm" data-toggle="modal"
                                    data-target="#medidas><?= $aluno->getIdAluno() ?>"> MEDIDAS </button>
                                    <button class="btn  btn-danger btn-sm" data-toggle="modal" data-target="#dobras><?= $aluno->getIdAluno() ?>">DOBRAS</button>
                                </td>
                            </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div>
            <!-- Modal Comparativo Resultado -->
            <?php foreach ($alunodao->read() as $aluno): ?>
                <div class="modal fade" id="anamnese><?= $aluno->getIdAluno() ?>" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Resultados</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST">
                                    <!-- Campo Nome -->
                                    <div class="row mb-3">
                                        <div class="col-md-2">
                                            <div class="form-floating mb-3 mb-md-3">
                                                <input class="form-control" id="inputNome" type="text" placeholder="nome" name="idAluno" value="<?= $aluno->getIdAluno() ?>" require readonly/>
                                                <label for="inputNome">ID</label>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-floating mb-3 mb-md-3">
                                                <input class="form-control" id="inputNome" type="text" placeholder="nome" name="nome" value="<?= $aluno->getNome() ?>" require readonly/>
                                                <label for="inputNome">Nome Completo</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-floating mb-3 mb-md-3">
                                                <input class="form-control" id="inputIdade" type="text" placeholder="Sexo" name="idade" value="<?= $aluno->getIdade() ?>" require readonly />
                                                <label for="inputIdade">Idade</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Div titulos das colunas -->
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-3 my-4 bg-dark text-white text-center">ATUAL</div>
                                        <div class="col-sm-3 my-4 bg-dark text-white text-center">ANTERIOR</div>
                                    </div>
                                    <!-- Linha de data -->
                                    <div class="row d-flex justify-content-center">
                                        <ul class="col-sm-2 list-group">
                                            <li class="list-group-item bg-secondary text-white">Data</li>
                                        </ul>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="dataCadastro" name="dataCadastro">
                                                <option>Escolha</option>
                                                <?php foreach ($medidasdao->exibeData($aluno->getIdAluno()) as $medidas): ?>
                                                    <option value="<?= $medidas->getDataCadastro() ?>"><?= $medidas->getDataCadastro() ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="dataCadastro" name="dataCadastro">
                                                <option>Escolha</option>
                                                <?php foreach ($medidasdao->exibeData($aluno->getIdAluno()) as $medidas): ?>
                                                    <option value="<?= $medidas->getDataCadastro() ?>"><?= $medidas->getDataCadastro() ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Linha compativo peso -->
                                    <div class="row d-flex justify-content-center">
                                        <ul class="col-sm-2 list-group">
                                            <li class="list-group-item bg-light text-dark">Peso(kg)</li>
                                        </ul>
                                        <div class="col-sm-3">
                                            <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                        </div>
                                        <div class="col-sm-3">
                                            <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                        </div>
                                    </div>
                                    <!-- Linha compativo imc -->
                                    <div class="row d-flex justify-content-center">
                                        <ul class="col-sm-2 list-group">
                                            <li class="list-group-item bg-light text-dark">IMC</li>
                                        </ul>
                                        <div class="col-sm-3">
                                            <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                        </div>
                                        <div class="col-sm-3">
                                            <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                        </div>
                                    </div>
                                    <!-- Linha RCQ -->
                                    <div class="row d-flex justify-content-center">
                                        <ul class="col-sm-2 list-group">
                                            <li class="list-group-item bg-light text-dark">RCQ</li>
                                        </ul>
                                        <div class="col-sm-3">
                                            <input class="form-control p-2" type="number" placeholder="">
                                        </div>
                                        <div class="col-sm-3">
                                            <input class="form-control p-2" type="number" placeholder="">
                                        </div>
                                    </div>
                                    <!-- Linha compativo % gordura -->
                                    <div class="row d-flex justify-content-center">
                                        <ul class="col-sm-2 list-group">
                                            <li class="list-group-item bg-light text-dark">%Gordura</li>
                                        </ul>
                                        <div class="col-sm-3">
                                            <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                        </div>
                                        <div class="col-sm-3">
                                            <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                        </div>
                                    </div>
                                    <!-- Linha compativo peso massa gorda -->
                                    <div class="row d-flex justify-content-center">
                                        <ul class="col-sm-2 list-group">
                                            <li class="list-group-item bg-light text-dark">M.Gorda(kg)</li>
                                        </ul>
                                        <div class="col-sm-3">
                                            <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                        </div>
                                        <div class="col-sm-3">
                                            <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                        </div>
                                    </div>
                                    <!-- Linha compativo peso massa magra -->
                                    <div class="row d-flex justify-content-center">
                                        <ul class="col-sm-2 list-group">
                                            <li class="list-group-item bg-light text-dark">M.Magra(kg)</li>
                                        </ul>
                                        <div class="col-sm-3">
                                            <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                        </div>
                                        <div class="col-sm-3">
                                            <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <ul class="col-sm-2 list-group">
                                            <li class="list-group-item bg-light text-dark">F.C</li>
                                        </ul>
                                        <div class="col-sm-3">
                                            <input class="form-control p-2" type="text" placeholder="">
                                        </div>
                                        <div class="col-sm-3">
                                            <input class="form-control p-2" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <ul class="col-sm-2 list-group">
                                            <li class="list-group-item bg-light text-dark">P.A</li>
                                        </ul>
                                        <div class="col-sm-3">
                                            <input class="form-control p-2" type="text" placeholder="">
                                        </div>
                                        <div class="col-sm-3">
                                            <input class="form-control p-2" type="text" placeholder="">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div>
            <!-- Modal Comparativo Medidas -->
            <div>
                <?php foreach ($alunodao->read() as $aluno): ?>
                    <div class="modal fade" id="medidas><?= $aluno->getIdAluno() ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Circunferências</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="POST">
                                        <!-- Campo Nome -->
                                        <div class="row mb-3">
                                            <div class="col-md-2">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputNome" type="text" placeholder="nome" name="idAluno" value="<?= $aluno->getIdAluno() ?>" require readonly/>
                                                    <label for="inputNome">ID</label>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputNome" type="text" placeholder="nome" name="nome" value="<?= $aluno->getNome() ?>" require readonly/>
                                                    <label for="inputNome">Nome Completo</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputIdade" type="text" placeholder="Sexo" name="idade" value="<?= $aluno->getIdade() ?>" require readonly />
                                                    <label for="inputIdade">Idade</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Div titulos das colunas -->
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-3 my-4 bg-dark text-white text-center">ATUAL</div>
                                            <div class="col-sm-3 my-4 bg-dark text-white text-center">ANTERIOR</div>
                                        </div>
                                        <!-- Linha de data -->
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-secondary text-white">Data</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <select class="form-control" id="dataCadastro" name="dataCadastro">
                                                    <option>Escolha</option>
                                                    <?php foreach ($medidasdao->exibeData($aluno->getIdAluno()) as $medidas): ?>
                                                    <option value="<?= $medidas->getDataCadastro() ?>"><?= $medidas->getDataCadastro() ?></option>
                                                <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <select class="form-control" id="dataCadastro" name="dataCadastro">
                                                    <option>Escolha</option>
                                                    <?php foreach ($medidasdao->exibeData($aluno->getIdAluno()) as $medidas): ?>
                                                    <option value="<?= $medidas->getDataCadastro() ?>"><?= $medidas->getDataCadastro() ?></option>
                                                <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">Torax</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">Abdomen</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">Cintura</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">Quadril</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">Braço D</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">Braço E</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">Anteb. D</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">Anteb. E</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">Coxa D</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">Coxa E</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">Pant. D</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">Pant. E</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
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
        <div>
            <!-- Modal Comparativo Dobras -->
            <div>
                <?php foreach ($alunodao->read() as $aluno): ?>
                    <div class="modal fade" id="dobras><?= $aluno->getIdAluno() ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Dobras Cutâneas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="POST">
                                        <!-- Campo Nome -->
                                        <div class="row mb-3">
                                            <div class="col-md-2">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputNome" type="text" placeholder="nome" name="idAluno" value="<?= $aluno->getIdAluno() ?>" require readonly/>
                                                    <label for="inputNome">ID</label>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputNome" type="text" placeholder="nome" name="nome" value="<?= $aluno->getNome() ?>" require readonly/>
                                                    <label for="inputNome">Nome Completo</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-floating mb-3 mb-md-3">
                                                    <input class="form-control" id="inputIdade" type="text" placeholder="Sexo" name="idade" value="<?= $aluno->getIdade() ?>" require readonly />
                                                    <label for="inputIdade">Idade</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Div titulos das colunas -->
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-3 my-4 bg-dark text-white text-center">ATUAL</div>
                                            <div class="col-sm-3 my-4 bg-dark text-white text-center">ANTERIOR</div>
                                        </div>
                                        <!-- Linha de data -->
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-secondary text-white">Data</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <select class="form-control" id="dataCadastro" name="dataCadastro">
                                                    <option>Escolha</option>
                                                    <?php foreach ($medidasdao->exibeData($aluno->getIdAluno()) as $medidas): ?>
                                                    <option value="<?= $medidas->getDataCadastro() ?>"><?= $medidas->getDataCadastro() ?></option>
                                                <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <select class="form-control" id="dataCadastro" name="dataCadastro">
                                                    <option>Escolha</option>
                                                    <?php foreach ($medidasdao->exibeData($aluno->getIdAluno()) as $medidas): ?>
                                                    <option value="<?= $medidas->getDataCadastro() ?>"><?= $medidas->getDataCadastro() ?></option>
                                                <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">Peitoral</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">Ax. Media</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">Abdominal</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">SupraIliaca</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">SubEscap.</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">Tricipital</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <ul class="col-sm-2 list-group">
                                                <li class="list-group-item bg-light text-dark">Coxa</li>
                                            </ul>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control p-2" type="number" step="0.01" placeholder="">
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
<!-- Include php rodapé -->
<?php
include_once('include/footer.php');
?>