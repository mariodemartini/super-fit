<?php
    include_once "../conexao/Conexao.php";
    include_once "../model/Medidas.php";
    include_once "../dao/MedidasDAO.php";

    $medidas = new Medidas();
    $medidasdao = new MedidasDAO();

    $d = filter_input_array(INPUT_POST);

    if(isset($_POST['salvar'])){

        $medidas->setData_Cadastro(($d['data_cadastro']));
        $medidas->setPeso(($d['peso']));
        $medidas->setAltura(($d['altura']));
        $medidas->setFreq_card(($d['freq_card']));
        $medidas->setPressao_arterial(($d['pressao_arterial']));
        $medidas->setTorax(($d['torax']));
        $medidas->setCintura(($d['cintura']));
        $medidas->setAbdomen(($d['abdomen']));
        $medidas->setQuadril(($d['quadril']));
        $medidas->setBraco_direito(($d['braco_direito']));
        $medidas->setBraco_esquerdo(($d['braco_esquerdo']));
        $medidas->setAntebraco_direito(($d['antebraco_direito']));
        $medidas->setAntebraco_esquerdo(($d['antebraco_esquerdo']));
        $medidas->setCoxa_direita(($d['coxa_direita']));
        $medidas->setCoxa_esquerda(($d['coxa_esquerda']));
        $medidas->setPanturrilha_direita(($d['panturrilha_direita']));
        $medidas->setPanturrilha_esquerda(($d['panturrilha_esquerda']));
        $medidas->setPeitoral(($d['peitoral']));
        $medidas->setAxilarMedia(($d['axilarMedia']));
        $medidas->setAbdominal(($d['abdominal']));
        $medidas->setSupraIliaca(($d['supraIliaca']));
        $medidas->setSubEscapular(($d['subEscapular']));
        $medidas->setTricipital(($d['tricipital']));
        $medidas->setCoxa(($d['coxa']));
        
        $medidasdao->create($medidas);

        header("Location: ../medidas.php");
    }

    else if (isset($_POST['editar'])) {

        $medidas->setIdMedidas(($d['idMedidas']));
        $medidas->setData_Cadastro(($d['data_cadastro']));
        $medidas->setPeso(($d['peso']));
        $medidas->setAltura(($d['altura']));
        $medidas->setFreq_card(($d['freq_card']));
        $medidas->setPressao_arterial(($d['pressao_arterial']));
        $medidas->setTorax(($d['torax']));
        $medidas->setCintura(($d['cintura']));
        $medidas->setAbdomen(($d['abdomen']));
        $medidas->setQuadril(($d['quadril']));
        $medidas->setBraco_direito(($d['braco_direito']));
        $medidas->setBraco_esquerdo(($d['braco_esquerdo']));
        $medidas->setAntebraco_direito(($d['antebraco_direito']));
        $medidas->setAntebraco_esquerdo(($d['antebraco_esquerdo']));
        $medidas->setCoxa_direita(($d['coxa_direita']));
        $medidas->setCoxa_esquerda(($d['coxa_esquerda']));
        $medidas->setPanturrilha_direita(($d['panturrilha_direita']));
        $medidas->setPanturrilha_esquerda(($d['panturrilha_esquerda']));
        $medidas->setPeitoral(($d['Peitoral']));
        $medidas->setAxilarMedia(($d['AxilarMedia']));
        $medidas->setAbdominal(($d['abdominal']));
        $medidas->setSupraIliaca(($d['supraIliaca']));
        $medidas->setSubEscapular(($d['subEscapular']));
        $medidas->setTricipital(($d['tricipital']));
        $medidas->setCoxa(($d['coxa']));
    
        $medidasdao->update($medidas);
    
        header("Location: ../medidas-editar.php");
    }

    else if (isset($_GET['del'])){

        $medidas->setIdMedidas($_GET['del']);

        $medidasdao->delete($medidas);

        header("Location: ../avaliacao.php");
    } else {
        header("Location: ../avaliacao.php");
    }
   
?>