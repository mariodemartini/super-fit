<?php
    include_once "../conexao/Conexao.php";
    include_once "../model/Anamnese.php";
    include_once "../dao/AnamneseDAO.php";

    $anamnese = new Anamnese();
    $anamnesedao = new AnamneseDAO();

    $d = filter_input_array(INPUT_POST);

    if(isset($_POST['salvar'])){

        $anamnese->setAtividade(($d['atividade']));
        $anamnese->setTempo_pratica(($d['tempo_pratica']));
        $anamnese->setObjetivo(($d['objetivo']));
        $anamnese->setFumante(($d['fumante']));
        $anamnese->setAlcool(($d['alcool']));
        $anamnese->setHistorico_fam(($d['historico_fam']));
        $anamnese->setHipertensao(($d['hipertensao']));
        $anamnese->setColesterol(($d['colesterol']));
        $anamnese->setDiabetes(($d['diabetes']));
        $anamnese->setCardiaco(($d['cardiaco']));
        $anamnese->setCirurgia(($d['cirurgia']));
        $anamnese->setFratura(($d['fratura']));
        $anamnese->setLesao(($d['lesao']));
        $anamnese->setDor(($d['dor']));
        $anamnese->setMovimentos(($d['movimentos']));
        $anamnese->setArtrite(($d['artrite']));
        $anamnese->setMedicamentos(($d['medicamentos']));
        $anamnese->setOutros(($d['outros']));
        $anamnese->setAlimentacao(($d['alimentacao']));
        $anamnese->setData_Cadastro(($d['data_cadastro']));
        
        $anamnesedao->create($anamnese);

        header("Location: ../anamnese.php");
    }

    else if (isset($_POST['editar'])) {

        $anamnese->setIdAnamnese(($d['idAnamnese']));
        $anamnese->setAtividade(($d['atividade']));
        $anamnese->setTempo_pratica(($d['tempo_pratica']));
        $anamnese->setObjetivo(($d['objetivo']));
        $anamnese->setFumante(($d['fumante']));
        $anamnese->setAlcool(($d['alcool']));
        $anamnese->setHistorico_fam(($d['historico_fam']));
        $anamnese->setHipertensao(($d['hipertensao']));
        $anamnese->setColesterol(($d['colesterol']));
        $anamnese->setDiabetes(($d['diabetes']));
        $anamnese->setCardiaco(($d['cardiaco']));
        $anamnese->setCirurgia(($d['cirurgia']));
        $anamnese->setFratura(($d['fratura']));
        $anamnese->setLesao(($d['lesao']));
        $anamnese->setDor(($d['dor']));
        $anamnese->setMovimentos(($d['movimentos']));
        $anamnese->setArtrite(($d['artrite']));
        $anamnese->setMedicamentos(($d['medicamentos']));
        $anamnese->setOutros(($d['outros']));
        $anamnese->setAlimentacao(($d['alimentacao']));
        $anamnese->setData_Cadastro(($d['data_cadastro']));
    
        $anamnesedao->update($anamnese);
    
        header("Location: ../avaliacao.php");
    }

    else if (isset($_GET['del'])){

        $anamnese->setIdAnamnese($_GET['del']);

        $anamnesedao->delete($anamnese);

        header("Location: ../avaliacao.php");
    } else {
        header("Location: ../home.php");
    }
    
?>