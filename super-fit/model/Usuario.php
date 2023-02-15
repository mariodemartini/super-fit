<?php
    
    Class Usuario{
        private $idUsuario;
        private $nome;
        private $data_nascimento;
        private $sexo;
        private $cpf;
        private $rg;
        private $telefone;
        private $celular;
        private $cep;
        private $estado;
        private $cidade;
        private $endereco;
        private $email;
        private $senha;
        private $data_cadastro;

        function getIdUsuario()
        { 
            return $this->idUsuario; 
        }

        function setIdUsuario($idUsuario)
        { 
            $this->idUsuario = $idUsuario; 
        }

        function getNome()
        { 
            return $this->nome; 
        }

        function setNome($nome)
        { 
            $this->nome = $nome; 
        }

        function getData_Nascimento()
        { 
            return $this->data_nascimento; 
        }

        function setData_Nascimento($data_nascimento)
        { 
            $this->data_nascimento = $data_nascimento; 
        }

        function getSexo()
        { 
            return $this->sexo; 
        }

        function setSexo($sexo)
        { 
            $this->sexo = $sexo; 
        }

        function getCpf()
        { 
            return $this->cpf; 
        }

        function setCpf($cpf)
        { 
            $this->cpf = $cpf; 
        }

        function getRg()
        { 
            return $this->rg; 
        }

        function setRg($rg)
        { 
            $this->rg = $rg; 
        }

        function getTelefone()
        { 
            return $this->telefone; 
        }

        function setTelefone($telefone)
        { 
            $this->telefone = $telefone; 
        }

        function getCelular()
        { 
            return $this->celular; 
        }

        function setCelular($celular)
        { 
            $this->celular = $celular; 
        }

        function getCep()
        { 
            return $this->cep; 
        }

        function setCep($cep)
        { 
            $this->cep = $cep; 
        }

        function getEstado() 
        {
            return $this->estado;
        }

        function setEstado($estado)
        {
            $this->estado = $estado;
        }

        function getCidade()
        {
            return $this->cidade;
        }
        
        function setCidade($cidade)
        {
            $this->cidade = $cidade;
        }

        function getEndereco()
        {
            return $this->endereco;
        }

        function setEndereco($endereco)
        {
            $this->endereco = $endereco;
        }

        function getEmail()
        {
            return $this->email;
        }

        function setEmail($email)
        {
            $this->email = $email;
        }

        function getSenha()
        {
            return $this->senha;
        }

        function setSenha($senha)
        {
            $this->senha = $senha;
        }

        function getData_Cadastro()
        {
            return $this->data_cadastro;
        }

        function setData_Cadastro($data_cadastro)
        {
            $this->data_cadastro = $data_cadastro;
        }

    }

    

?>
