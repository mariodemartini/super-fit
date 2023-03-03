<!-- Include php cabeçalho e barras -->
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
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <!-- Div do Titulo da página -->
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">CADASTRAR PROFESSOR</h3></div>
                    <!-- Div barra de pesquisa -->
                    <form class="card-header inline-block form-inline mb-3">
                        <div class="input-group">
                            <input name="busca" class="form-control" type="text" placeholder="Pesquisar..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <!-- Div do formulario principal --> 
                    <div class="card-body">
                        <form action="controller/ProfessorController.php" method="POST">
                            <!-- Campo Nome -->
                            <div class="row mb-3">
                                <div class="col-md-5">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputNome" type="text" placeholder="nome" name="nome"/>
                                        <label for="inputNome">Nome Completo</label>
                                    </div>
                                </div>
                                <!-- Campo sexo -->
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputSexo" type="text" placeholder="Sexo" name="sexo"/>
                                        <label for="inputSexo">Sexo</label>
                                    </div>
                                </div>
                                <!-- Campo data nascimento -->
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputDataNascimento" type="date" placeholder="Data de Nascimento" name="dataNascimento"/>
                                        <label for="inputDataNascimento">Data de Nascimento</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo CPF -->
                                <div class="col-md-4">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputCpf" type="text" placeholder="CPF" name="cpf"/>
                                        <label for="inputCpf">CPF</label>
                                    </div>
                                </div>
                                <!-- Campo CREF -->
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input class="form-control" id="inpuCREF" type="text" placeholder="CREF" name="cref"/>
                                        <label for="inputCREF">CREF</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo celular -->
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputCelular" type="text" placeholder="(xx)xxxx-xxxx" name="celular"/>
                                        <label for="inputCelular">Celular</label>
                                    </div>
                                </div>
                                <!-- Campo email -->
                                <div class="col-md-5">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="email" placeholder="nome@exemplo.com" name="email"/>
                                        <label for="inputEmail">Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo CEP -->
                                <div class="col-md-4">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputCep" type="text" placeholder="CEP" name="cep"/>
                                        <label for="inputCep">CEP</label>
                                    </div>
                                </div>
                                <!-- Campo estado -->
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputEstado" type="text" placeholder="Estado" name="estado"/>
                                        <label for="inputEstado">Estado</label>
                                    </div>
                                </div>
                                <!-- Campo cidade -->
                                <div class="col-md-4">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputCidade" type="text" placeholder="Cidade" name="cidade"/>
                                        <label for="inputCidade">Cidade</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo endereço -->
                                <div class="col-md-8">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputEndereco" type="text" placeholder="endereco" name="endereco"/>
                                        <label for="inputEndereco">Rua, Nº, Bairro</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo senha -->
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Senha" name="senha"/>
                                        <label for="inputPassword">Senha</label>
                                    </div>
                                </div>
                                <!-- Campo  confirmar senha -->
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirmar senha" name="senha"/>
                                        <label for="inputPasswordConfirm">Confirmar Senha</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Botões de salvar -->
                            <div class="mt-4 mb-0">
                                <button type="submit" name="salvar" class="btn btn-success btn-lg">Salvar</button>
                                <button type="button" class="btn btn-primary btn-sm"><a class="btn btn-primary btn-block" href="home.php">Voltar</a></button>
                            </div>
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
                                <!-- Dados tabela de alunos -->
                                <tbody>
                                <?php foreach ($professordao->exibeProf() as $professor) : ?>
                                    <tr>
                                        <td><?= $professor->getIdProfessor() ?></td>
                                        <td><?= $professor->getNome() ?></td>
                                        <td><?= $professor->getDataNascimento() ?></td>
                                        <td><?= $professor->getCpf() ?></td>
                                        <td><?= $professor->getCref() ?></td>
                                        <td><?= $professor->getCelular() ?></td>
                                        <td><?= $professor->getEmail() ?></td>
                                        <td class="text-center">
                                            <a href="editar-prof.php"><button type="button" class="btn btn-warning">editar</button></a>
                                            <a href="controller/ProfessorController.php?del=<?= $professor->getIdProfessor() ?>">
                                            <button class="btn  btn-danger btn-sm" type="button">Excluir</button> 
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                                </table>
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
