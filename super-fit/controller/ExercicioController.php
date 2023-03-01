<?php
    include_once "../conexao/Conexao.php";
    include_once "../model/Exercicio.php";
    include_once "../dao/ExercicioDAO.php";

    $exercicio = new Exercicio();
    $exerciciodao = new ExercicioDAO();

    $d = filter_input_array(INPUT_POST);

    if(isset($_POST['salvar'])){

        $exercicio->setGrupoMuscular(($d['grupo_muscular']));
        $exercicio->setDescricao(($d['descricao']));
        
        $exerciciodao->create($exercicio);

        header("Location: ../novoexercicio.php");
    }

    else if (isset($_POST['editar'])) {

        $exercicio->setIdExercicio(($d['idExercicios']));
        $exercicio->setGrupoMuscular(($d['Grupo_Muscular']));
        $exercicio->setDescricao(($d['Descricao']));
    
        $exerciciodao->update($exercicio);
    
        header("Location: ../pesquisa-exercicio.php");
    }

    else if (isset($_GET['del'])){

        $exercicio->setIdExercicio($_GET['del']);

        $exerciciodao->delete($exercicio);

        header("Location: ../pesquisa-exercicio.php");
    } else {
        header("Location: ../pesquisa-exercicio.php");
    }
    
?>