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
        $testeVO2->setVelocidadeFinal(($d['velocidadeInicial']));
        $testeVO2->setfcInicial(($d['fcInicial']));
        $testeVO2->setfcFinal(($d['fcFinal']));
        $testeVO2->setTempoTeste(($d['tempoTeste']));
        $testeVO2->setEsforcoTeste(($d['esforcoTeste']));
        $testeVO2->setResultadoVO2(($d['resultadoVO2']));
        $testeVO2->setAluno(($d['idAluno']));
                
        $testeVO2dao->create($testeVO2);

       // header("Location: ../vo-esteira.php");
    }

    else if (isset($_POST['editar'])) {

        $testeVO2->setDataTeste(($d['dataTeste']));
        $testeVO2->setVelocidadeInicial(($d['velocidadeInicial']));
        $testeVO2->setVelocidadeFinal(($d['velocidadeInicial']));
        $testeVO2->setfcInicial(($d['fcInicial']));
        $testeVO2->setfcFinal(($d['fcFinal']));
        $testeVO2->setTempoTeste(($d['tempoTeste']));
        $testeVO2->setEsforcoTeste(($d['esforcoTeste']));
        $testeVO2->setResultadoVO2(($d['resultadoVO2']));
    
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