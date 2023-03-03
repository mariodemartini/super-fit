<?php
    include_once "../conexao/Conexao.php";
    include_once "../model/TesteVO2.php";
    include_once "../dao/TesteVO2DAO.php";

    $testeVO2 = new TesteVO2();
    $testeVO2dao = new TesteVO2DAO();

    $d = filter_input_array(INPUT_POST);

    if(isset($_POST['salvar'])){

        $testeVO2->setDataTeste(($d['dataTeste']));
        $testeVO2->setVelocidadeInicial(($d['velocidadeInicial']));
        $testeVO2->setFcRepouso(($d['fcRepouso']));
        $testeVO2->setPressaoInicio(($d['pressaoInicio']));
        $testeVO2->setPressaoFinal(($d['pressaoFinal']));
        $testeVO2->setFcTeste(($d['fcTeste']));
        $testeVO2->setTempoTeste(($d['tempoTeste']));
        $testeVO2->setVelocidadeTeste(($d['velocidadeTeste']));
        $testeVO2->setEsforcoTeste(($d['esforcoTeste']));
        $testeVO2->setResultadoVO2(($d['resultadoVO2']));
                
        $testeVO2dao->create($testeVO2);

       // header("Location: ../vo-esteira.php");
    }

    else if (isset($_POST['editar'])) {

        $testeVO2->setIdTesteVO2(($d['idTesteVO2']));
        $testeVO2->setData_teste(($d['data_teste']));
        $testeVO2->setVelocidade_inicial(($d['velocidade_inicial']));
        $testeVO2->setFc_repouso(($d['fc_repouso']));
        $testeVO2->setPressao_inicio(($d['pressao_inicio']));
        $testeVO2->setPressao_final(($d['pressao_final']));
        $testeVO2->setFc_teste(($d['fc_teste']));
        $testeVO2->setTempo_teste(($d['tempos_teste']));
        $testeVO2->setVelocidade_teste(($d['velocidade_teste']));
        $testeVO2->setEsforco_teste(($d['esforco_teste']));
        $testeVO2->setResultado_vo2(($d['resultado_vo2']));
    
        $testeVO2dao->update($testeVO2);
    
        header("Location: ../vo-esteira.php");
    }

    else if (isset($_GET['del'])){

        $testeVO2->setIdTesteVO2($_GET['del']);

        $testeVO2dao->delete($testeVO2);

        header("Location: ../vo-esteira.php");
    } else {
        header("Location: ../vo-esteira.php");
    }
    
?>