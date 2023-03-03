<?php
    include_once "../conexao/Conexao.php";
    include_once "../model/TesteForca.php";
    include_once "../dao/TesteForcaDAO.php";

    $testeforca = new TesteForca();
    $testeforcadao = new TesteForcaDAO();

    $d = filter_input_array(INPUT_POST);

    if(isset($_POST['salvar'])){

        $testeforca->setDataTeste($row['dataTeste']);
        $testeforca->setCargaInicial($row['cargaInicial']);
        $testeforca->setRepInicial($row['repInicial']);
        $testeforca->setMetaCarga($row['metaCarga']);
        $testeforca->setMetaRep($row['metaRep']);
        $testeforca->setPrimeiraTentativa($row['primeiraTentativa']);
        $testeforca->setSegundaTentativa($row['segundaTentativa']);
        $testeforca->setTerceiraTentativa($row['terceiraTentativa']);
        $testeforca->setResultadoRep($row['resultadoRep']);
        $testeforca->setResultadoKg($row['resultadoKg']);
        $testeforca->setExercicio($row['exercicio']);
        
        $testeforcadao->create($testeforca);

        header("Location: ../forca-rep.php");
    }

    else if (isset($_POST['editar'])) {

        $testeforca->setDataTeste($row['dataTeste']);
        $testeforca->setCargaInicial($row['cargaInicial']);
        $testeforca->setRepInicial($row['repInicial']);
        $testeforca->setMetaCarga($row['metaCarga']);
        $testeforca->setMetaRep($row['metaRep']);
        $testeforca->setPrimeiraTentativa($row['primeiraTentativa']);
        $testeforca->setSegundaTentativa($row['segundaTentativa']);
        $testeforca->setTerceiraTentativa($row['terceiraTentativa']);
        $testeforca->setResultadoRep($row['resultadoRep']);
        $testeforca->setResultadoKg($row['resultadoKg']);
        $testeforca->setExercicio($row['exercicio']);
    
        $testeforcadao->update($testeforca);
    
        header("Location: ../forca-rep.php");
    }

    else if (isset($_GET['del'])){

        $testeforca->setIdTesteForca($_GET['del']);

        $testeforcadao->delete($testeforca);

        header("Location: ../forca-rep.php");
    } else {
        header("Location: ../forca-rep.php");
    }
    
?>