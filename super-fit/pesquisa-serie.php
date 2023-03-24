<!-- Include php cabeçalho e menus -->
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
include_once('./model/Serie.php');
include_once('./dao/SerieDAO.php');

$serie = new Serie();
$seriedao = new SerieDAO();
?>

<main>
    <div class="container-fluid px-4 text-center">
        <!-- Titulo principal e barra de pesquisa -->
        <h1 class="card-header mt-4">SÉRIES CADASTRADAS</h1>
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
                        <th>Nivel</th>
                        <th>Fase</th>
                        <th>Serie</th>
                        <th>%Carga</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <!-- Dados tabela de alunos -->
                <tbody>
                <?php foreach ($seriedao->read() as $serie) : ?>
                    <tr>
                        <td><?= $serie->getIdSerie() ?></td>
                        <td><?= $serie->getNivel() ?></td>
                        <td><?= $serie->getFase() ?></td>
                        <td><?= $serie->getSerie() ?></td>
                        <td><?= $serie->getPercentCarga() ?></td>
                        <td class="text-center">
                            <a href="controller/SerieController.php?del=<?= $serie->getIdSerie() ?>"> 
                            <button class="btn  btn-danger btn-sm" type="button">Excluir</button></a>
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
include_once('include/footer.php');
?>
                
