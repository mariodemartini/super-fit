<!-- Include php cabeçalho e menus -->
<?php
include_once('include/header.html');
include_once('include/navbar.html');
include_once('include/sidebar.html');
include_once('./conexao/Conexao.php');
include_once('./model/Usuario.php');
include_once('./dao/UsuarioDAO.php');

$usuario = new Usuario();
$usuariodao = new UsuarioDAO();
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
                    	<th>Id</th>
                        <th>Nome</th>
                        <th>Data Nasc.</th>
                        <th>CPF</th>
                        <th>Celular</th>
                        <th>Email</th>  
                        <th>Data Cadastro</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <!-- Dados tabela de alunos -->
                <tbody>
                <?php foreach ($usuariodao->exibeUsuario() as $usuario) : ?>
                    <tr>
                        <td><?= $usuario->getIdUsuario() ?></td>
                        <td><?= $usuario->getNome() ?></td>
                        <td><?= $usuario->getDataNascimento()?></td>
                        <td><?= $usuario->getCpf() ?></td>
                        <td><?= $usuario->getCelular() ?></td>
                        <td><?= $usuario->getEmail() ?></td>
                        <td><?= $usuario->getDataCadastro() ?></td>
                        <td class="text-center">
                            <a href="cadastro-editar.php"><button type="button" class="btn btn-warning">editar</button></a>
                            <a href="controller/UsuarioController.php?del=<?= $usuario->getIdUsuario() ?>"> 
                            <button class="btn btn-danger btn-sm" type="button">Excluir</button></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="col-sm-1 mt-4 mb-0">
            <button type="button" class="btn btn-secondary"><a class="btn btn-secondary btn-block" href="home.php">Voltar</a></button>
        </div>
    </div>
</main>
</body>
<!-- Inclue php rodapé -->
<?php
include_once('include/footer.html');
?>
                
