<?php
    include_once "../conexao/Conexao.php";
    include_once "../model/Serie.php";
    include_once "../dao/SerieDAO.php";

    $serie = new Serie();
    $seriedao = new SerieDAO();

    $d = filter_input_array(INPUT_POST);

    if(isset($_POST['salvar'])){

        $serie->setNivel(($d['nivel']));
        $serie->setFase(($d['fase']));
        $serie->setSerie(($d['serie']));
        $serie->setPercent_Carga(($d['percent_carga']));
        
        $seriedao->create($serie);

        header("Location: ../novoexercicio.php");
    }

    else if (isset($_POST['editar'])) {

        $serie->setIdSerie(($d['idSeries']));
        $serie->setNivel(($d['Nivel']));
        $serie->setFase(($d['Fase']));
        $serie->setSerie(($d['Serie']));
        $serie->setPercent_Carga(($d['Percent_Carga']));
    
        $seriedao->update($serie);
    
        header("Location: ../pesquisa-serie.php");
    }

    else if (isset($_GET['del'])){

        $serie->setIdSerie($_GET['del']);

        $seriedao->delete($serie);

        header("Location: ../pesquisa-serie.php");
    } else {
        header("Location: ../pesquisa-serie.php");
    }
    
?>