<?php
    include_once "../conexao/Conexao.php";
    include_once "../model/Usuario.php";
    include_once "../dao/UsuarioDAO.php";

    $usuario = new Usuario();
    $usuariodao = new UsuarioDAO();

    $d = filter_input_array(INPUT_POST);

    if(isset($_POST['salvar'])){

        $usuario->setNome(($d['nome']));
        $usuario->setDataNascimento(($d['dataNascimento']));
        $usuario->setSexo(($d['sexo']));
        $usuario->setCpf(($d['cpf']));
        $usuario->setRg(($d['rg']));
        $usuario->setTelefone(($d['telefone']));
        $usuario->setCelular(($d['celular']));
        $usuario->setCep(($d['cep']));
        $usuario->setEstado(($d['estado']));
        $usuario->setCidade(($d['cidade']));
        $usuario->setEndereco(($d['endereco']));
        $usuario->setEmail(($d['email']));
        $usuario->setSenha(($d['senha']));
        $usuario->setDataCadastro(($d['dataCadastro']));
        $usuario->setIdade(($d['dataNascimento']));
        
        $usuariodao->create($usuario);

        header("Location: ../cadastro.php");
    }

    else if (isset($_POST['editar'])) {

        $usuario->setIdUsuario(($d['idUsuario']));
        $usuario->setNome(($d['nome']));
        $usuario->setDataNascimento(($d['dataNascimento']));
        $usuario->setSexo(($d['sexo']));
        $usuario->setCpf(($d['cpf']));
        $usuario->setRg(($d['rg']));
        $usuario->setTelefone(($d['telefone']));
        $usuario->setCelular(($d['celular']));
        $usuario->setCep(($d['cep']));
        $usuario->setEstado(($d['estado']));
        $usuario->setCidade(($d['cidade']));
        $usuario->setEndereco(($d['endereco']));
        $usuario->setEmail(($d['email']));
        $usuario->setSenha(($d['senha']));
        $usuario->setDataCadastro(($d['dataCadastro']));
    
        $usuariodao->update($usuario);
    
        header("Location: ../cadastro-editar.php");
    }

    else if (isset($_GET['del'])){

        $usuario->setIdUsuario($_GET['del']);

        $usuariodao->delete($usuario);

        header("Location: ../buscar.php");
    } else {
        //header("Location: ../buscar.php");
    }
    
?>