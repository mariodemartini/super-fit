<?php
    include_once "../conexao/Conexao.php";
    include_once "../model/Resultado.php";
    include_once "../dao/ResultadoDAO.php";

    $resultado = new Resultado();
    $resultadodao = new ResultadoDAO();

    $d = filter_input_array(INPUT_POST);

    if(isset($_POST['salvar'])){

        $resultado->setPeso($d['peso']);
        $resultado->setImc($d['imc']);
        $resultado->setAbdomen($d['abdomen']);
        $resultado->setRcq($d['rcq']);
        $resultado->setPercentGord($d['percentGord']);
        $resultado->setMassaGorda($d['massaGorda']);
        $resultado->setPercentMagra($d['percentMagra']);
        $resultado->setMassaMagra($d['massaMagra']);
        $resultado->setFc($d['fc']);
        $resultado->setVo($d['vo']);
        
        $resultadodao->create($resultado);

        header("Location: ../resultados.php");
    }

    else if (isset($_POST['editar'])) {

        $resultado->setIdResultado($d['idResultado']);
        $resultado->setPeso($d['peso']);
        $resultado->setImc($d['imc']);
        $resultado->setAbdomen($d['abdomen']);
        $resultado->setRcq($d['rcq']);
        $resultado->setPercentGord($d['percentGord']);
        $resultado->setMassaGorda($d['massaGorda']);
        $resultado->setPercentMagra($d['percentMagra']);
        $resultado->setMassaMagra($d['massaMagra']);
        $resultado->setFc($d['fc']);
        $resultado->setVo($d['vo']);
    
        $resultadodao->update($resultado);
    
        header("Location: ../resultados.php");
    }

    else if (isset($_GET['del'])){

        $resultado->setIdResultado($_GET['del']);

        $resultadodao->delete($resultado);

        header("Location: ../resultados.php");
    } else {
        header("Location: ../resultados.php");
    }
    
?>