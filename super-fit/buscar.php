<!-- Include php cabeçalho e menus -->
<?php
include_once('include/header.html');
include_once('include/navbar.html');
include_once('include/sidebar.html');
?>
<main>
    <div class="container-fluid px-4 text-center">
        <!-- Titulo principal e barra de pesquisa -->
        <h1 class="card-header mt-4">ALUNOS CADASTRADOS</h1>
        <div class="card mb-4">
            <div class="card-body">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Pesquisar..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <!-- Inicio tabela -->
            <table class="table table-bordered">
                <!-- Cabeçalho tabela -->
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sexo</th>
                        <th>Idade</th>
                        <th>Endereço</th>
                        <th>Contato</th>
                        <th>Email</th>
                        <th>Situação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <!-- Dados tabela de alunos -->
                <tbody>
                    <tr>
                        <td>#programar nome</td>
                        <td>#programar sexo</td>
                        <td>#programar idade</td>
                        <td>#programar endereço</td>
                        <td>#programar contato</td>
                        <td>#programar email</td>
                        <td>#programar situação</td>
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
        <div class="col-sm-1 mt-4 mb-0">
            <button type="button" class="btn btn-secondary"><a class="btn btn-secondary btn-block" href="home.php">Voltar</a></button>
        </div>
    </div>
</main>
<!-- Inclue php rodapé -->
<?php
include_once('include/footer.html');
?>
                