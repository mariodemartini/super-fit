<?php
    include_once "../conexao/Conexao.php";
    include_once "../model/TesteForca.php";
    include_once "../dao/TesteForcaDAO.php";

    $testeforca = new TesteForca();
    $testeforcadao = new TesteForcaDAO();

    $d = filter_input_array(INPUT_POST);

    if(isset($_POST['salvar'])){
        
        $testeforca->setDataTeste($d['dataTeste']);
        $testeforca->setCargaInicial($d['cargaInicial']);
        $testeforca->setCargaFinal($d['cargaFinal']);
        $testeforca->setAluno($d['idAluno']);
        $testeforca->setExercicio($d['idExercicio']);
        
        $testeforcadao->create($testeforca);

        header("Location: ../cadastro-avaliacao.php");
    }

    else if (isset($_POST['editar'])) {

        $testeforca->setDataTeste($d['dataTeste']);
        $testeforca->setCargaInicial($d['cargaInicial']);
        $testeforca->setCargaFinal($d['cargaFinal']);
        $testeforca->setExercicio($d['idExercicio']);
    
        $testeforcadao->update($testeforca);
    
        header("Location: ../forca.php");
    }

    else if (isset($_GET['del'])){

        $testeforca->setIdTesteForca($_GET['del']);

        $testeforcadao->delete($testeforca);

        header("Location: ../forca.php");
    } else {
        header("Location: ../forca.php");
    }
    
?>