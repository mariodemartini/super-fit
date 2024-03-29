<?php
    include_once "../conexao/Conexao.php";
    include_once "../model/Treino.php";
    include_once "../dao/TreinoDAO.php";

    $treino = new Treino();
    $treinodao = new TreinoDAO();

    $d = filter_input_array(INPUT_POST);

    if(isset($_POST['salvar'])){

        $treino->setSerie(($d['idSerie']));
        $treino->setExercicio(($d['idExercicio']));
        $treino->setCarga(($d['carga']));
        $treino->setFeedback(($d['feedback']));
        $treino->setAluno(($d['idAluno']));
        
        $treinodao->create($treino);

        header("Location: ../ADICIONAR PAGINA.php");
    }

    else if (isset($_POST['editar'])) {

        $treino->setIdtreino(($d['idtreinos']));
        $treino->setSerie(($d['idSerie']));
        $treino->setExercicio(($d['idExercicio']));
        $treino->setCarga(($d['carga']));
        $treino->setFeedback(($d['feedback']));
        $treino->setAluno(($d['idAluno']));
    
        $treinodao->update($treino);
    
        header("Location: ../ADICIONAR PAGINA.php");
    }

    else if (isset($_GET['del'])){

        $treino->setIdTreino($_GET['del']);

        $treinodao->delete($treino);

        header("Location: ../ADICIONAR PAGINA.php");
    } else {
        header("Location: ../ADICIONAR PAGINA.php");
    }
    
?>