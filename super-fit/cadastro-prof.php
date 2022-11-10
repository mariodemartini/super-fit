<!-- Include php cabeçalho e barras -->
<?php
include_once('include/header.html');
include_once('include/navbar.html');
include_once('include/sidebar.html');
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
                            <input class="form-control" type="text" placeholder="Pesquisar..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <!-- Div do formulario principal -->
                    <div class="card-body">
                        <form>
                            <!-- Campo data -->
                            <div class="row mb-3">
                                <div class="form-group col-md-3">
                                    <label for="inputData">DATA</label>
                                    <input type="date" class="form-control" id="inputData">
                                </div>
                                <div class="form-group col-md-3">

                                </div>
                            </div>
                            <!-- Campo Nome -->
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputNome" type="text" placeholder="nome" />
                                        <label for="inputNome">Nome Completo</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo data nascimento -->
                                <div class="col-md-4">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputDataNascimento" type="date" placeholder="Data de Nascimento" />
                                        <label for="inputDataNascimento">Data de Nascimento</label>
                                    </div>
                                </div>
                                <!-- Campo sexo -->
                                <div class="col-md-4">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputSexo" type="text" placeholder="Sexo" />
                                        <label for="inputSexo">Sexo</label>
                                    </div>
                                </div>
                                <!-- Campo Função -->
                                <div class="col-md-4">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFuncao" type="text" placeholder="Função" />
                                        <label for="inputSexo">Função</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo CPF -->
                                <div class="col-md-4">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputCpf" type="text" placeholder="CPF" />
                                        <label for="inputCpf">CPF</label>
                                    </div>
                                </div>
                                <!-- Campo RG -->
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input class="form-control" id="inpuRg" type="text" placeholder="RG" />
                                        <label for="inputRg">RG</label>
                                    </div>
                                </div>
                                <!-- Campo CREF -->
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input class="form-control" id="inpuCREF" type="text" placeholder="CREF" />
                                        <label for="inputCREF">CREF</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo telefone -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputTelefone" type="text" placeholder="(xx)xxxx-xxxx" />
                                        <label for="inputTelefone">Telefone</label>
                                    </div>
                                </div>
                                <!-- Campo celular -->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputCelular" type="text" placeholder="(xx)xxxx-xxxx" />
                                        <label for="inputCelular">Celular</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo CEP -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputCep" type="text" placeholder="CEP" />
                                        <label for="inputCep">CEP</label>
                                    </div>
                                </div>
                                <!-- Campo estado -->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputEstado" type="text" placeholder="Estado" />
                                        <label for="inputEstado">Estado</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo cidade -->
                                <div class="col-md-4">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputCidade" type="text" placeholder="Cidade" />
                                        <label for="inputCidade">Cidade</label>
                                    </div>
                                </div>
                                <!-- Campo endereço -->
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputEndereco" type="text" placeholder="endereco"/>
                                        <label for="inputEndereco">Rua</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputEndereco" type="text" placeholder="endereco"/>
                                        <label for="inputEndereco">Nº</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputEndereco" type="text" placeholder="endereco"/>
                                        <label for="inputEndereco">Bairro</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Campo email -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="email" placeholder="nome@exemplo.com" />
                                <label for="inputEmail">Email</label>
                            </div>
                            <div class="row mb-3">
                                <!-- Campo senha -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Senha" />
                                        <label for="inputPassword">Senha</label>
                                    </div>
                                </div>
                                <!-- Campo  confirmar senha -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirmar senha" />
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
						<th>Situação</th>
						<th>Endereço</th>
						<th>Celular</th>
						<th>Email</th>
						<th>Ações</th>
					    </tr>
					</thead>
					<!-- Dados tabela de alunos -->
					<tbody>
					    <tr>
						<td>#programar nome</td>
						<td>#programar situação</td>
						<td>#programar endereço</td>
						<td>#programar celular</td>
						<td>#programar email</td>
						<td class="text-center">
						    <button class="btn  btn-warning btn-sm" data-toggle="modal" data-target="#editar">
						        Editar
						    </button>
						    <a href="">
						    <button class="btn  btn-danger btn-sm" type="button">Excluir</button>
						    </a>
						</td>
					   </tr>
					</tbody>
			    	</table>
			    </div>

                            <!-- Botões de salvar -->
                            <div class="mt-4 mb-0">
                                <button type="button" class="btn btn-success"><a class="btn btn-success btn-block" href="#">Salvar</a></button>
                                <button type="button" class="btn btn-secondary"><a class="btn btn-secondary btn-block" href="home.php">Voltar</a></button>
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
