<!-- Include php cabeçalho e barras -->
<?php
include_once('include/header.html');
include_once('include/navbar.html');
include_once('include/sidebar.html');
include_once('./conexao/Conexao.php');
include_once('./model/Aluno.php');
include_once('./dao/AlunoDAO.php');

$aluno = new Aluno();
$alunodao = new AlunoDAO();
?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <!-- Div do Titulo da página -->
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">EDITAR ALUNO</h3></div>
                    <!-- Div do formulario principal -->
                    <div class="card-body">
                    <?php foreach ($alunodao->read() as $aluno) : ?>
                        <form action="controller/AlunoController.php" method="POST">
                            <!-- Campo data -->
                            <div class="row mb-3">
                                <div class="form-group col-md-3">
                                    <label for="inputData">DATA</label>
                                    <input type="date" class="form-control" id="inputData" name="dataCadastro" value="<?= $aluno->getDataCadastro() ?>" require>
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="hidden" class="form-control" id="inputData" name="idaluno" value="<?= $aluno->getIdAluno() ?>" require>
                                </div>
                            </div>
                            <!-- Campo Nome -->
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputNome" type="text" placeholder="nome" name="nome" value="<?= $aluno->getNome() ?>" require/>
                                        <label for="inputNome">Nome Completo</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo data nascimento -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputDataNascimento" type="date" placeholder="Data de Nascimento" name="dataNascimento" value="<?= $aluno->getDataNascimento() ?>" require/>
                                        <label for="inputDataNascimento">Data de Nascimento</label>
                                    </div>
                                </div>
                                <!-- Campo idade -->
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputIdade" type="text" placeholder="Sexo" name="idade" value="<?= $aluno->getIdade() ?>" require/>
                                        <label for="inputIdade">Idade</label>
                                    </div>
                                </div>
                                <!-- Campo sexo -->
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputSexo" type="text" placeholder="Sexo" name="sexo" value="<?= $aluno->getSexo() ?>" require/>
                                        <label for="inputSexo">Sexo</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo CPF -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputCpf" type="text" placeholder="CPF" name="cpf" value="<?= $aluno->getCpf() ?>" require/>
                                        <label for="inputCpf">CPF</label>
                                    </div>
                                </div>
                                <!-- Campo RG -->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="inpuRg" type="text" placeholder="RG" name="rg" value="<?= $aluno->getRg() ?>" require/>
                                        <label for="inputRg">RG</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo telefone -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputTelefone" type="text" placeholder="(xx)xxxx-xxxx" name="telefone" value="<?= $aluno->getTelefone() ?>" require/>
                                        <label for="inputTelefone">Telefone</label>
                                    </div>
                                </div>
                                <!-- Campo celular -->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputCelular" type="text" placeholder="(xx)xxxx-xxxx" name="celular" value="<?= $aluno->getCelular() ?>" require/>
                                        <label for="inputCelular">Celular</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo CEP -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputCep" type="text" placeholder="CEP" name="cep" value="<?= $aluno->getCep() ?>" require/>
                                        <label for="inputCep">CEP</label>
                                    </div>
                                </div>
                                <!-- Campo estado -->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputEstado" type="text" placeholder="Estado" name="estado" value="<?= $aluno->getEstado() ?>" require/>
                                        <label for="inputEstado">Estado</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo cidade -->
                                <div class="col-md-4">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputCidade" type="text" placeholder="Cidade" name="cidade" value="<?= $aluno->getCidade() ?>" require/>
                                        <label for="inputCidade">Cidade</label>
                                    </div>
                                </div>
                                <!-- Campo endereço -->
                                <div class="col-md-8">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputEndereco" type="text" placeholder="endereco" name="endereco" value="<?= $aluno->getEndereco() ?>" require/>
                                        <label for="inputEndereco">Rua, Nº, Bairro</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Campo email -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="email" placeholder="nome@exemplo.com" name="email" value="<?= $aluno->getEmail() ?>" require/>
                                <label for="inputEmail">Email</label>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo senha -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Senha" name="senha" value="<?= $aluno->getSenha() ?>" require/>
                                        <label for="inputPassword">Senha</label>
                                    </div>
                                </div>
                                <!-- Campo  confirmar senha -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirmar senha" name="senha"/>
                                        <label for="inputPasswordConfirm">Confirmar Senha</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Botões de salvar -->
                            <div class="mt-4 mb-0">
                                <button type="submit" name="editar" class="btn btn-success btn-lg">Salvar</button>
                                <button type="button" class="btn btn-secondary"><a class="btn btn-secondary btn-block" href="buscar.php">Voltar</a></button>
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
