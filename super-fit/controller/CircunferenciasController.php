<?php
    include_once "../conexao/Conexao.php";
    include_once "../model/Circunferencias.php";
    include_once "../dao/CircunferenciasDAO.php";

    $circunferencias = new Circunferencias();
    $circunferenciasdao = new CircunferenciasDAO();

    $d = filter_input_array(INPUT_POST);

    if(isset($_POST['salvar'])){

        $circunferencias->setTorax(($d['torax']));
        $circunferencias->setCintura(($d['cintura']));
        $circunferencias->setAbdomen(($d['abdomen']));
        $circunferencias->setQuadril(($d['quadril']));
        $circunferencias->setBraco_direito(($d['braco_direito']));
        $circunferencias->setBraco_esquerdo(($d['braco_esquerdo']));
        $circunferencias->setAntebraco_direito(($d['antebraco_direito']));
        $circunferencias->setAntebraco_esquerdo(($d['antebraco_esquerdo']));
        $circunferencias->setCoxa_direita(($d['coxa_direita']));
        $circunferencias->setCoxa_esquerda(($d['coxa_esquerda']));
        $circunferencias->setPanturrilha_direita(($d['panturrilha_direita']));
        $circunferencias->setPanturrilha_esquerda(($d['panturrilha_esquerda']));
        
        $circunferenciasdao->create($circunferencias);

        header("Location: ../medidas.php");
    }

    else if (isset($_POST['editar'])) {

        $circunferencias->setIdCircunferencias(($d['idCircunferencias']));
        $circunferencias->setTorax(($d['torax']));
        $circunferencias->setCintura(($d['cintura']));
        $circunferencias->setAbdomen(($d['abdomen']));
        $circunferencias->setQuadril(($d['quadril']));
        $circunferencias->setBraco_direito(($d['braco_direito']));
        $circunferencias->setBraco_esquerdo(($d['braco_esquerdo']));
        $circunferencias->setAntebraco_direito(($d['antebraco_direito']));
        $circunferencias->setAntebraco_esquerdo(($d['antebraco_esquerdo']));
        $circunferencias->setCoxa_direita(($d['coxa_direita']));
        $circunferencias->setCoxa_esquerda(($d['coxa_esquerda']));
        $circunferencias->setPanturrilha_direita(($d['panturrilha_direita']));
        $circunferencias->setPanturrilha_esquerda(($d['panturrilha_esquerda']));
    
        $circunferenciasdao->update($circunferencias);
    
        header("Location: ../medidas.php");
    }

    else if (isset($_GET['del'])){

        $professor->setIdCircunferencias($_GET['del']);

        $professordao->delete($circunferencias);

        header("Location: ../medidas.php");
    } else {
        header("Location: ../medidas.php");
    }
    
?>