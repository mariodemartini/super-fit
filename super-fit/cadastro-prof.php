<?php
// session_start();
// if(((!isset($_SESSION['email'])) == true) && ((!isset($_SESSION['senha'])) == true)){
//     unset($_SESSION["email"]);
//     unset($_SESSION["senha"]);
//     header('Location: index.php');
// }
include_once('include/header.php');
include_once('include/navbar.php');
include_once('include/sidebar.php');
include_once('./conexao/Conexao.php');
include_once('./model/Professor.php');
include_once('./dao/ProfessorDAO.php');

$professor = new Professor();
$professordao = new ProfessorDAO();
?>
<body>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">CADASTRAR PROFESSOR</h3></div>
                    <div class="card-body">
                        <form action="controller/ProfessorController.php" method="POST">
                            <div class="row mb-3">
                                <div class="col-md-5">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputNome" type="text" placeholder="nome" name="nome"/>
                                        <label for="inputNome">Nome Completo</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <label for="inputSexo"></label>
                                        <select class="form-control h-50" id="inputSexo" name="sexo" type="text" >
                                            <option value="">Sexo</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Feminino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputDataNascimento" type="date" placeholder="Data de Nascimento" name="dataNascimento"/>
                                        <label for="inputDataNascimento">Data de Nascimento</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputCpf" type="text" placeholder="CPF" name="cpf"/>
                                        <label for="inputCpf">CPF</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input class="form-control" id="inpuCREF" type="text" placeholder="CREF" name="cref"/>
                                        <label for="inputCREF">CREF</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputCelular" type="text" placeholder="(xx)xxxx-xxxx" name="celular"/>
                                        <label for="inputCelular">Celular</label>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="email" placeholder="nome@exemplo.com" name="email"/>
                                        <label for="inputEmail">Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputCep" type="text" placeholder="CEP" name="cep"/>
                                        <label for="inputCep">CEP</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <label for="inputEstado"></label>
                                        <select class="form-control h-50" id="inputEstado" name="estado" type="text" >
                                            <option value="">Estado</option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option>
                                            <option value="ES">Espírito Santo</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputCidade" type="text" placeholder="Cidade" name="cidade"/>
                                        <label for="inputCidade">Cidade</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-8">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputEndereco" type="text" placeholder="endereco" name="endereco"/>
                                        <label for="inputEndereco">Rua, Nº, Bairro</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Senha" name="senha"/>
                                        <label for="inputPassword">Senha</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <button type="submit" name="salvar" class="btn btn-success btn-lg">Salvar</button>
                                <button type="button" class="btn btn-secondary btn-sm"><a class="btn btn-secondary btn-block" href="home.php">Voltar</a></button>
                                <button type="button" class="btn btn-primary btn-sm"><a class="btn btn-primary btn-block" href="buscar-prof.php">Buscar</a></button>
                            </div>
                            <br>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3"></div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
<!-- Include php rodapé -->
<?php
include_once('include/footer.html');
?>
