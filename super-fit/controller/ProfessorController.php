<?php
    include_once "../conexao/Conexao.php";
    include_once "../model/Professor.php";
    include_once "../dao/ProfessorDAO.php";

    $professor = new Professor();
    $professordao = new ProfessorDAO();

    $d = filter_input_array(INPUT_POST);

    if(isset($_POST['salvar'])){

        $usuario->setNome(($d['nome']));
        $usuario->setData_Nascimento(($d['data_nascimento']));
        $usuario->setSexo(($d['sexo']));
        $usuario->setCpf(($d['cpf']));
        $usuario->setCref(($d['cref']));
        $usuario->setCelular(($d['celular']));
        $usuario->setCep(($d['cep']));
        $usuario->setEstado(($d['estado']));
        $usuario->setCidade(($d['cidade']));
        $usuario->setEndereco(($d['endereco']));
        $usuario->setEmail(($d['email']));
        $usuario->setSenha(($d['senha']));
        
        $usuariodao->create($usuario);

        header("Location: ../cadastro-prof.php");
    }

    if (isset($_POST['editar'])) {

        $usuario->setNome(($d['nome']));
        $usuario->setData_Nascimento(($d['data_nascimento']));
        $usuario->setSexo(($d['sexo']));
        $usuario->setCpf(($d['cpf']));
        $usuario->setCref(($d['cref']));
        $usuario->setCelular(($d['celular']));
        $usuario->setCep(($d['cep']));
        $usuario->setEstado(($d['estado']));
        $usuario->setCidade(($d['cidade']));
        $usuario->setEndereco(($d['endereco']));
        $usuario->setEmail(($d['email']));
        $usuario->setSenha(($d['senha']));
    
        $usuariodao->update($usuario);
    
        header("Location: ../cadastro-prof.php");
    }

    if (isset($_GET['del'])){

        $usuario->setIdUsuario($_GET['del']);

        $usuariodao->delete($usuario);

        header("Location: ../cadastro-prof.php");
    } else {
        header("Location: ../cadastro-prof.php");
    }
    
?>