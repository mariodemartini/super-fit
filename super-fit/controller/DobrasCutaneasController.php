<?php
    include_once "../conexao/Conexao.php";
    include_once "../model/DobrasCutaneas.php";
    include_once "../dao/DobrasCutaneasDAO.php";

    $dobras_cutaneas = new DobrasCutaneas();
    $dobras_cutaneasdao = new DobrasCutaneasDAO();

    $d = filter_input_array(INPUT_POST);

    if(isset($_POST['salvar'])){

        $dobras_cutaneas->setPeitoral(($d['peitoral']));
        $dobras_cutaneas->setAxilarMedia(($d['axilarMedia']));
        $dobras_cutaneas->setAbdominal(($d['abdominal']));
        $dobras_cutaneas->setSupraIliaca(($d['supraIliaca']));
        $dobras_cutaneas->setSubEscapular(($d['subEscapular']));
        $dobras_cutaneas->setTricipital(($d['tricipital']));
        $dobras_cutaneas->setCoxa(($d['coxa']));
        $dobras_cutaneas->setCoxa(($d['soma']));
        $dobras_cutaneas->setData_Cadastro(($d['data_cadastro']));
        
        $dobras_cutaneasdao->create($dobras_cutaneas);

        header("Location: ../medidas.php");
    }

    else if (isset($_POST['editar'])) {

        $dobras_cutaneas->setIdDobrasCutaneas(($d['idDobrasCutaneas']));
        $dobras_cutaneas->setPeitoral(($d['peitoral']));
        $dobras_cutaneas->setAxilarMedia(($d['axilarMedia']));
        $dobras_cutaneas->setAbdominal(($d['abdominal']));
        $dobras_cutaneas->setSupraIliaca(($d['supraIliaca']));
        $dobras_cutaneas->setSubEscapular(($d['subEscapular']));
        $dobras_cutaneas->setTricipital(($d['tricipital']));
        $dobras_cutaneas->setCoxa(($d['coxa']));
        $dobras_cutaneas->setData_Cadastro(($d['data_cadastro']));
    
        $dobras_cutaneasdao->update($dobras_cutaneas);
    
        header("Location: ../medidas.php");
    }

    else if (isset($_GET['del'])){

        $dobras_cutaneas->setIdDobrasCutaneas($_GET['del']);

        $dobras_cutaneasdao->delete($dobras_cutaneas);

        header("Location: ../medidas.php");
    } else {
        header("Location: ../medidas.php");
    }
    
?>