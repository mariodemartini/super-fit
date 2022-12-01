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
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <!-- Div do Titulo da página -->
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">CADASTRAR PROFESSOR</h3></div>
                    <!-- Div barra de pesquisa -->
                    <form class="card-header inline-block form-inline mb-3">
                        <div class="input-group">
                            <input name="busca" class="form-control" type="text" placeholder="Pesquisar..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </form action="controller/ProfessorController.php" method="POST">
                    <!-- Div do formulario principal -->
                    <div class="card-body">
                        <form>
                            <!-- Campo Nome -->
                            <div class="row mb-3">
                                <div class="col-md-8">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputNome" type="text" placeholder="nome" name="nome"/>
                                        <label for="inputNome">Nome Completo</label>
                                    </div>
                                </div>
                                <!-- Campo data nascimento -->
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputDataNascimento" type="date" placeholder="Data de Nascimento" name="data_nascimento"/>
                                        <label for="inputDataNascimento">Data de Nascimento</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo sexo -->
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputSexo" type="text" placeholder="Sexo" name="sexo"/>
                                        <label for="inputSexo">Sexo</label>
                                    </div>
                                </div>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputCelular" type="text" placeholder="(xx)xxxx-xxxx" name="celular"/>
                                        <label for="inputCelular">Celular</label>
                                    </div>
                                </div>
                                <!-- Campo email -->
                                <div class="col-md-7">
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputEstado" type="text" placeholder="Estado" name="estado"/>
                                        <label for="inputEstado">Estado</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo cidade -->
                                <div class="col-md-4">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputCidade" type="text" placeholder="Cidade" name="cidade"/>
                                        <label for="inputCidade">Cidade</label>
                                    </div>
                                </div>
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
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Senha" name="senha"/>
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
                            <br>
                            <div class="card mb-4">
				<!-- Inicio tabela -->
				<table class="table table-bordered">
					<!-- Cabeçalho tabela -->
					<thead>
					    <tr>
					    	<th>Nome</th>
						<th>Data Nasc.</th>
						<th>Sexo</th>
						<th>CPF</th>
						<th>CREF</th>
						<th>Celular</th>
						<th>CEP</th>
						<th>Estado</th>
						<th>Cidade</th>
						<th>Endereço</th>
						<th>Email</th>
						<th>Senha</th>
						<th>Ações</th>
					    </tr>
					</thead>
					<!-- Dados tabela de alunos -->
					<tbody>
					<?php foreach ($professordao->read() as $professor) : ?>
					    <tr>
						<td><?= $professor->getIdProfessor() ?></td>
						<td><?= $professor->getNome() ?></td>
						<td><?= $professor->getData_Nascimento() ?></td>
						<td><?= $professor->getSexo() ?></td>
						<td><?= $professor->getCpf() ?></td>
						<td><?= $professor->getCref() ?></td>
						<td><?= $professor->getCelular() ?></td>
						<td><?= $professor->getCep() ?></td>
						<td><?= $professor->getEstado() ?></td>
						<td><?= $professor->getCidade() ?></td>
						<td><?= $professor->getEndereco() ?></td>
						<td><?= $professor->getEmail() ?></td>
						<td><?= $professor->getSenha() ?></td>
						<td class="text-center">
                            <button class="btn  btn-warning btn-sm" data-toggle="modal" data-target="#editar><?= $professor->getIdProfessor() ?>"> Editar </button>
                                <a href="controller/ProfessorController.php?del=<?= $professor->getIdProfessor() ?>">
                                <button class="btn  btn-danger btn-sm" type="button">Excluir</button> 
                                </a>
                            			</td>
					   </tr>
					   <!-- Modal -->
                        <div class="modal fade" id="editar><?= $professor->getIdProfessor() ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="controller\ProfessorController.php" method="POST" >
                                        
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Nome</label>
                                                    <input type="text" name="nome" value="<?= $professor->getNome() ?>" class="form-control" require />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Endereco</label>
                                                    <input type="text" name="endereco" value="<?= getData_Nascimento() ?>" class="form-control" require />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Contato</label>
                                                    <input type="text" name="celular" value="<?= getSexo() ?>" class="form-control" require />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Email</label>
                                                    <input type="text" name="email" value="<?= $professor->getCpf() ?>" class="form-control" require />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Email</label>
                                                    <input type="text" name="email" value="<?= $professor->getRg() ?>" class="form-control" require />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Email</label>
                                                    <input type="text" name="email" value="<?= $professor->getTelefone() ?>" class="form-control" require />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Email</label>
                                                    <input type="text" name="email" value="<?= $professor->getCelular() ?>" class="form-control" require />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Email</label>
                                                    <input type="text" name="email" value="<?= $professor->getCep() ?>" class="form-control" require />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Email</label>
                                                    <input type="text" name="email" value="<?= $professor->getEstado() ?>" class="form-control" require />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Email</label>
                                                    <input type="text" name="email" value="<?= $professor->getCidade() ?>" class="form-control" require />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Email</label>
                                                    <input type="text" name="email" value="<?= $professor->getEndereco() ?>" class="form-control" require />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Email</label>
                                                    <input type="text" name="email" value="<?= $professor->getEmail() ?>" class="form-control" require />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Email</label>
                                                    <input type="text" name="email" value="<?= $professor->getSenha() ?>" class="form-control" require />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Email</label>
                                                    <input type="text" name="email" value="<?= $professor->getData_Cadastro() ?>" class="form-control" require />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <br>
                                                    <input type="hidden" name="idProfessor" value="<?= $professor->getIdProfessor() ?>" />
                                                    <button class="btn btn-primary" type="submit" name="editar">Salvar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
					</tbody>
			    	</table>
			    </div>

                            <!-- Botões de salvar -->
                            <div class="mt-4 mb-0">
                                <button type="submit" name="salvar" class="btn btn-success btn-lg">Salvar</button>
                                <button type="button" class="btn btn-primary btn-sm"><a class="btn btn-primary btn-block" href="home.php">Voltar</a></button>
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
