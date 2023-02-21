<?php
    include_once "../conexao/Conexao.php";
    include_once "../model/TesteVO2.php";
    include_once "../dao/TesteVO2DAO.php";

    $teste_vo2 = new TesteVO2();
    $teste_vo2dao = new TesteVO2DAO();

    $d = filter_input_array(INPUT_POST);

    if(isset($_POST['salvar'])){

        $teste_vo2->setData_teste(($d['data_teste']));
        $teste_vo2->setVelocidade_inicial(($d['velocidade_inicial']));
        $teste_vo2->setFc_repouso(($d['fc_repouso']));
        $teste_vo2->setPressao_inicio(($d['pressao_inicio']));
        $teste_vo2->setPressao_final(($d['pressao_final']));
        $teste_vo2->setFc_teste(($d['fc_teste']));
        $teste_vo2->setTempo_teste(($d['tempos_teste']));
        $teste_vo2->setVelocidade_teste(($d['velocidade_teste']));
        $teste_vo2->setEsforco_teste(($d['esforco_teste']));
        $teste_vo2->setResultado_vo2(($d['resultado_vo2']));
                
        $teste_vo2dao->create($teste_vo2);

        header("Location: ../vo-esteira.php");
    }

    else if (isset($_POST['editar'])) {

        $teste_vo2->setIdTesteVO2(($d['idTesteVO2']));
        $teste_vo2->setData_teste(($d['data_teste']));
        $teste_vo2->setVelocidade_inicial(($d['velocidade_inicial']));
        $teste_vo2->setFc_repouso(($d['fc_repouso']));
        $teste_vo2->setPressao_inicio(($d['pressao_inicio']));
        $teste_vo2->setPressao_final(($d['pressao_final']));
        $teste_vo2->setFc_teste(($d['fc_teste']));
        $teste_vo2->setTempo_teste(($d['tempos_teste']));
        $teste_vo2->setVelocidade_teste(($d['velocidade_teste']));
        $teste_vo2->setEsforco_teste(($d['esforco_teste']));
        $teste_vo2->setResultado_vo2(($d['resultado_vo2']));
    
        $teste_vo2dao->update($teste_vo2);
    
        header("Location: ../vo-esteira.php");
    }

    else if (isset($_GET['del'])){

        $teste_vo2->setIdTesteVO2($_GET['del']);

        $teste_vo2dao->delete($teste_vo2);

        header("Location: ../vo-esteira.php");
    } else {
        header("Location: ../vo-esteira.php");
    }
    
?>