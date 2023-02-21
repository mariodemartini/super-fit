<?php
    include_once "../conexao/Conexao.php";
    include_once "../model/DadosIniciais.php";
    include_once "../dao/DadosIniciaisDAO.php";

    $dados_iniciais = new DadosIniciais();
    $dados_iniciaisdao = new DadosIniciaisDAO();

    $d = filter_input_array(INPUT_POST);

    if(isset($_POST['salvar'])){

        $dados_iniciais->setPeso(($d['nome']));
        $dados_iniciais->setAltura(($d['data_nascimento']));
        $dados_iniciais->setFreq_card(($d['sexo']));
        $dados_iniciais->setPressao_arterial(($d['cpf']));
        $dados_iniciais->setData_Cadastro(($d['cref']));
        
        $dados_iniciaisdao->create($dados_iniciais);

        header("Location: ../medidas.php");
    }

    else if (isset($_POST['editar'])) {

        $dados_iniciais->setIdDadosIniciais(($d['idDados_Iniciais']));
        $dados_iniciais->setPeso(($d['peso']));
        $dados_iniciais->setAltura(($d['altura']));
        $dados_iniciais->setFreq_card(($d['freq_car']));
        $dados_iniciais->setPressao_arterial(($d['pressao_arterial']));
        $dados_iniciais->setData_Cadastro(($d['data_cadastro']));
    
        $dados_iniciaisdao->update($dados_iniciais);
    
        header("Location: ../medidas.php");
    }

    else if (isset($_GET['del'])){

        $dados_iniciais->setIdDadosIniciais($_GET['del']);

        $dados_iniciaisdao->delete($dados_iniciais);

        header("Location: ../medidas.php");
    } else {
        header("Location: ../medidas.php");
    }
    
?>