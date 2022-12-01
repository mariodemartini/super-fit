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
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">EDITAR PROFESSOR</h3></div>
                    <!-- Div do formulario principal -->
                    <div class="card-body">
                    <?php foreach ($professordao->read() as $professor) : ?>
                        <form action="controller/ProfessorController.php" method="POST">
                            <!-- Campo Nome -->
                            <div class="row mb-3">
                                <div class="col-md-5">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputNome" type="text" placeholder="nome" name="nome" value="<?= $professor->getNome() ?>" require/>
                                        <label for="inputNome">Nome Completo</label>
                                    </div>
                                </div>
                                <!-- Campo sexo -->
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputSexo" type="text" placeholder="Sexo" name="sexo" value="<?= $professor->getSexo() ?>" require/>
                                        <label for="inputSexo">Sexo</label>
                                    </div>
                                </div>
                                <!-- Campo data nascimento -->
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputDataNascimento" type="date" placeholder="Data de Nascimento" name="data_nascimento" value="<?= $professor->getData_Nascimento() ?>" require/>
                                        <label for="inputDataNascimento">Data de Nascimento</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo CPF -->
                                <div class="col-md-4">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputCpf" type="text" placeholder="CPF" name="cpf" value="<?= $professor->getCpf() ?>" require/>
                                        <label for="inputCpf">CPF</label>
                                    </div>
                                </div>
                                <!-- Campo CREF -->
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input class="form-control" id="inpuCREF" type="text" placeholder="CREF" name="cref" value="<?= $professor->getCref() ?>" require/>
                                        <label for="inputCREF">CREF</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputId" type="hidden" placeholder="nome" name="idProfessor" value="<?= $professor->getIdProfessor() ?>" require/>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo celular -->
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputCelular" type="text" placeholder="(xx)xxxx-xxxx" name="celular" value="<?= $professor->getCelular() ?>" require/>
                                        <label for="inputCelular">Celular</label>
                                    </div>
                                </div>
                                <!-- Campo email -->
                                <div class="col-md-5">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="email" placeholder="nome@exemplo.com" name="email" value="<?= $professor->getEmail() ?>" require/>
                                        <label for="inputEmail">Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo CEP -->
                                <div class="col-md-4">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputCep" type="text" placeholder="CEP" name="cep" value="<?= $professor->getCep() ?>" require/>
                                        <label for="inputCep">CEP</label>
                                    </div>
                                </div>
                                <!-- Campo estado -->
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputEstado" type="text" placeholder="Estado" name="estado" value="<?= $professor->getEstado() ?>" require/>
                                        <label for="inputEstado">Estado</label>
                                    </div>
                                </div>
                                <!-- Campo cidade -->
                                <div class="col-md-4">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputCidade" type="text" placeholder="Cidade" name="cidade" value="<?= $professor->getCidade() ?>" require/>
                                        <label for="inputCidade">Cidade</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo endereço -->
                                <div class="col-md-8">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputEndereco" type="text" placeholder="endereco" name="endereco" value="<?= $professor->getEndereco() ?>" require/>
                                        <label for="inputEndereco">Rua, Nº, Bairro</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo senha -->
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Senha" name="senha" value="<?= $professor->getSenha() ?>" require/>
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
                            <br>
                            <!-- Botões de salvar -->
                            <div class="mt-4 mb-0">
                                <button type="submit" name="editar" class="btn btn-success btn-lg">Salvar</button>
                                <button type="button" class="btn btn-secondary"><a class="btn btn-secondary btn-block" href="cadastro-prof.php">Voltar</a></button>
                            </div>
                        </form>
                        <?php endforeach ?>
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
