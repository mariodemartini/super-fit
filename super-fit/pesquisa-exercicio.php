<!-- Include php cabeçalho e menus -->
<?php
include_once('include/header.html');
include_once('include/navbar.html');
include_once('include/sidebar.html');
include_once('./conexao/Conexao.php');
include_once('./model/Exercicio.php');
include_once('./dao/ExercicioDAO.php');

$exercicio = new Exercicio();
$exerciciodao = new ExercicioDAO();
?>

<main>
    <div class="container-fluid px-4 text-center">
        <!-- Titulo principal e barra de pesquisa -->
        <h1 class="card-header mt-4">EXERCÍCIOS CADASTRADOS</h1>
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
                        <th>GM</th>
                        <th>Exercicio</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <!-- Dados tabela de alunos -->
                <tbody>
                <?php foreach ($exerciciodao->read() as $exercicio) : ?>
                    <tr>
                        <td><?= $exercicio->getIdExercicio() ?></td>
                        <td><?= $exercicio->getGrupo_Muscular() ?></td>
                        <td><?= $exercicio->getDescricao() ?></td>
                        <td class="text-center">
                            <a href="controller/ExercicioController.php?del=<?= $exercicio->getIdExercicio() ?>"> 
                            <button class="btn btn-danger btn-sm" type="button">Excluir</button></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="col-sm-1 mt-4 mb-0">
            <button type="button" class="btn btn-secondary"><a class="btn btn-secondary btn-block" href="novoexercicio.php">Voltar</a></button>
        </div>
    </div>
</main>
</body>
<!-- Inclue php rodapé -->
<?php
include_once('include/footer.html');
?>
                
