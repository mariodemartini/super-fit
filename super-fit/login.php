<?php
    session_start();

    if(isset($_POST['entrar']) && !empty($_POST["email"]) && !empty($_POST["senha"])){
        
        include_once('config.php');

        $email = $_POST["email"];
    	$senha = $_POST["senha"];
        $usuario = $_POST["usuario"];

        if($_POST["usuario"] == 'professor'){
            $sql = "SELECT * FROM professor WHERE email = '$email' AND senha = '$senha'";

            $res = $conn->query($sql);

            if(mysqli_num_rows($res) < 1){

                unset($_SESSION["email"]);
                unset($_SESSION["senha"]);
                print "<script>alert('Email e/ou senha incorretos');</script>";
                print "<script>location.href='index.php';</script>"; 

            } 
            else{
                $row = $res->fetch_object(); 
                $_SESSION["email"] = $email;
                $_SESSION["senha"] = $senha;
                $_SESSION["usuario"] = $usuario;
                print "<script>location.href='home.php';</script>";
            } 

        } 
        else if($_POST["usuario"] == 'alunos'){
            $sql = "SELECT * FROM alunos WHERE email = '$email' AND senha = '$senha'";

            $res = $conn->query($sql);

            if(mysqli_num_rows($res) < 1){

                unset($_SESSION["email"]);
                unset($_SESSION["senha"]);
                print "<script>alert('Email e/ou senha incorretos');</script>";
                print "<script>location.href='index.php';</script>"; 

            } 
            else {
                // $row = $res->fetch_object(); 
                // $_SESSION["email"] = $email;
                // $_SESSION["senha"] = $senha;
                // print "<script>location.href='home.php';</script>";
                print "<script>alert('Email e/ou senha incorretos');</script>";
                print "<script>location.href='index.php';</script>";
            }
        } else{
            print "<script>alert('Selecione tipo de usuário');</script>"; 
            print "<script>location.href='index.php';</script>"; 
        }     
        
    } else {
        print "<script>alert('CAMPOS VAZIOS');</script>";
    	print "<script>location.href='index.php';</script>"; 
    }

?>