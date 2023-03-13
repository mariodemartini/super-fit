<!-- Include php cabeçalho e menus -->
<?php
include_once('include/header.html');
include_once('include/navbar.html');
include_once('include/sidebar.html');
include_once('./conexao/Conexao.php');
include_once('./model/Professor.php');
include_once('./dao/ProfessorDAO.php');

$professor = new Professor();
$professordao = new ProfessorDAO();
?>

<body>
    <main>
        <div class="container-fluid px-4 text-center">
            <!-- Titulo principal e barra de pesquisa -->
            <h1 class="card-header mt-4">PROFESSORES CADASTRADOS</h1>
            <br>
            <div class="card mb-4">
                <!-- Inicio tabela -->
                <table class="table table-bordered">
                    <!-- Cabeçalho tabela -->
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Data Nasc.</th>
                            <th>CPF</th>
                            <th>CREF</th>
                            <th>Celular</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <!-- Dados tabela de -->
                    <tbody>
                        <?php foreach ($professordao->read() as $professor): ?>
                            <tr>
                                <td>
                                    <?= $professor->getIdProfessor() ?>
                                </td>
                                <td>
                                    <?= $professor->getNome() ?>
                                </td>
                                <td>
                                    <?= $professor->getDataNascimento() ?>
                                </td>
                                <td>
                                    <?= $professor->getCpf() ?>
                                </td>
                                <td>
                                    <?= $professor->getCref() ?>
                                </td>
                                <td>
                                    <?= $professor->getCelular() ?>
                                </td>
                                <td>
                                    <?= $professor->getEmail() ?>
                                </td>
                                <td class="text-center">
                                    <!-- <a href="cadastro-editar.php"><button type="button" class="btn btn-warning">editar</button></a> -->
                                    <button class="btn  btn-warning btn-sm" data-toggle="modal"
                                        data-target="#editar><?= $professor->getIdProfessor() ?>">
                                        Editar
                                    </button>
                                    <a href="controller/ProfessorController.php?del=<?= $professor->getIdProfessor() ?>">
                                        <button class="btn btn-danger btn-sm" type="button">Excluir</button></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <!-- Modal -->
            <div>
                <?php foreach ($professordao->read() as $professor): ?>
                    <div class="modal fade" id="editar><?= $professor->getIdProfessor() ?>" tabindex="-1" role="dialog"
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
                                    <form action="controller/ProfessorController.php" method="POST">
                                        <div class="row mb-3">
                                            <div class="col-md-2">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputId" type="text" placeholder="id"
                                                        name="idProfessor" value="<?= $professor->getIdProfessor() ?>"
                                                        require />
                                                    <label for="inputId">Id</label>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputNome" type="text"
                                                        placeholder="nome" name="nome" value="<?= $professor->getNome() ?>"
                                                        require />
                                                    <label for="inputNome">Nome Completo</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputSexo" type="text"
                                                        placeholder="Sexo" name="sexo" value="<?= $professor->getSexo() ?>"
                                                        require />
                                                    <label for="inputSexo">Sexo</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputDataNascimento" type="date"
                                                        placeholder="Data de Nascimento" name="dataNascimento"
                                                        value="<?= $professor->getDataNascimento() ?>" require />
                                                    <label for="inputDataNascimento">Data de Nascimento</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputCpf" type="text" placeholder="CPF"
                                                        name="cpf" value="<?= $professor->getCpf() ?>" require />
                                                    <label for="inputCpf">CPF</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputCref" type="text"
                                                        placeholder="CREF" name="cref" value="<?= $professor->getCref() ?>"
                                                        require />
                                                    <label for="inputCref">CREF</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputCelular" type="text"
                                                        placeholder="(xx)xxxx-xxxx" name="celular"
                                                        value="<?= $professor->getCelular() ?>" require />
                                                    <label for="inputCelular">Celular</label>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="inputEmail" type="email"
                                                        placeholder="nome@exemplo.com" name="email"
                                                        value="<?= $professor->getEmail() ?>" require />
                                                    <label for="inputEmail">Email</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputCep" type="text" placeholder="CEP"
                                                        name="cep" value="<?= $professor->getCep() ?>" require />
                                                    <label for="inputCep">CEP</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputEstado" type="text"
                                                        placeholder="Estado" name="estado"
                                                        value="<?= $professor->getEstado() ?>" require />
                                                    <label for="inputEstado">Estado</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputCidade" type="text"
                                                        placeholder="Cidade" name="cidade"
                                                        value="<?= $professor->getCidade() ?>" require />
                                                    <label for="inputCidade">Cidade</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputEndereco" type="text"
                                                        placeholder="endereco" name="endereco"
                                                        value="<?= $professor->getEndereco() ?>" require />
                                                    <label for="inputEndereco">Rua, Nº, Bairro</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPassword" type="password"
                                                        placeholder="Senha" name="senha"
                                                        value="<?= $professor->getSenha() ?>" require />
                                                    <label for="inputPassword">Senha</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <input type="hidden" name="id"
                                                    value="<?= $professor->getIdProfessor() ?>" />
                                                <button class="btn btn-primary" type="submit"
                                                    name="editar">Cadastrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="col-sm-1 mt-4 mb-0">
                <button type="button" class="btn btn-secondary"><a class="btn btn-secondary btn-block"
                        href="cadastro-prof.php">Voltar</a></button>
            </div>
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
</body>
<!-- Inclue php rodapé -->
<?php
include_once('include/footer.html');
?>