<?php
    include_once "../conexao/Conexao.php";
    include_once "../model/TesteForca.php";
    include_once "../dao/TesteForcaDAO.php";

    $testeforca = new TesteForca();
    $testeforcadao = new TesteForcaDAO();

    $d = filter_input_array(INPUT_POST);

    if(isset($_POST['salvar'])){

        $testeforca->setData_teste($row['data_teste']);
        $testeforca->setCarga_inicial($row['velocidade_inicial']);
        $testeforca->setRep_inicial($row['fc_repouso']);
        $testeforca->setMeta_carga($row['pressao_inicio']);
        $testeforca->setMeta_rep($row['pressao_final']);
        $testeforca->setPrimeira_tentativa($row['fc_teste']);
        $testeforca->setSegunda_tentativa($row['tempo_teste']);
        $testeforca->setTerceira_tentativa($row['velocidade_teste']);
        $testeforca->setResultado_rep($row['esforco_teste']);
        $testeforca->setResultado_kg($row['resultado_vo2']);
        $testeforca->setExercicio($row['resultado_vo2']);
        
        $testeforcadao->create($testeforca);

        header("Location: ../forca-rep.php");
    }

    else if (isset($_POST['editar'])) {

        $testeforca->setIdTesteForca(($d['idTesteForca']));
        $testeforca->setData_teste($row['data_teste']);
        $testeforca->setCarga_inicial($row['velocidade_inicial']);
        $testeforca->setRep_inicial($row['fc_repouso']);
        $testeforca->setMeta_carga($row['pressao_inicio']);
        $testeforca->setMeta_rep($row['pressao_final']);
        $testeforca->setPrimeira_tentativa($row['fc_teste']);
        $testeforca->setSegunda_tentativa($row['tempo_teste']);
        $testeforca->setTerceira_tentativa($row['velocidade_teste']);
        $testeforca->setResultado_rep($row['esforco_teste']);
        $testeforca->setResultado_kg($row['resultado_vo2']);
        $testeforca->setExercicio($row['resultado_vo2']);
    
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