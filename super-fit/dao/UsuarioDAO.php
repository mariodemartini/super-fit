<?php

    class UsuarioDAO
    {
        public function create(Usuario $usuario){
            try {
                $sql = "INSERT INTO Usuario (
                    nome, data_nascimento, sexo, cpf, rg, telefone, celular, CEP, estado, cidade, endereco, email, senha, data_cadastro)
                    VALUES (
                    :nome, :data_nascimento, :sexo, :cpf, :rg, :telefone, :celular, :cep, :estado, :cidade, :endereco, :email, :senha, :data_cadastro)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":nome", $usuario->getNome());
                $p_sql->bindValue(":data_nascimento", $usuario->getData_Nascimento());
                $p_sql->bindValue(":sexo", $usuario->getSexo());
                $p_sql->bindValue(":cpf", $usuario->getCpf());
                $p_sql->bindValue(":rg", $usuario->getRg());
                $p_sql->bindValue(":telefone", $usuario->getTelefone());
                $p_sql->bindValue(":celular", $usuario->getCelular());
                $p_sql->bindValue(":cep", $usuario->getCep());
                $p_sql->bindValue(":estado", $usuario->getEstado());
                $p_sql->bindValue(":cidade", $usuario->getCidade());
                $p_sql->bindValue(":endereco", $usuario->getEndereco());
                $p_sql->bindValue(":email", $usuario->getEmail());
                $p_sql->bindValue(":senha", $usuario->getSenha());
                $p_sql->bindValue(":data_cadastro", $usuario->getData_Cadastro());

                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir usuario <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM Usuario ORDER BY idUsuario ASC";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->listaUsuarios($l);
                } 
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        private function listaUsuarios($row) {
            $usuario = new Usuario();
            $usuario->setIdUsuario($row['idUsuario']);
            $usuario->setNome($row['Nome']);
            $usuario->setData_Nascimento($row['Data_Nascimento']);
            $usuario->setSexo($row['Sexo']);
            $usuario->setCpf($row['CPF']);
            $usuario->setRg($row['RG']);
            $usuario->setTelefone($row['Telefone']);
            $usuario->setCelular($row['Celular']);
            $usuario->setCep($row['CEP']);
            $usuario->setEstado($row['Estado']);
            $usuario->setCidade($row['Cidade']);
            $usuario->setEndereco($row['Endereco']);
            $usuario->setEmail($row['Email']);
            $usuario->setSenha($row['Senha']);
            $usuario->setData_Cadastro($row['Data_Cadastro']);

            return $usuario;
        }

        public function delete(Usuario $usuario){
            try {
                $sql = "DELETE FROM Usuario WHERE  idUsuario = :idUsuario";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idUsuario", $usuario->getIdUsuario());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir usuario <br> $e <br>";
            }
        }

        public function update(Usuario $usuario)
        {
            try {
                $sql = "UPDATE Usuario set
                    
                      idUsuario=:idUsuario,
                      Nome=:nome,
                      Data_Nascimento=:data_nascimento,
                      Sexo=:sexo,
                      CPF=:cpf,
                      RG=:rg,
                      Telefone=:telefone,
                      Celular=:celular,
                      CEP=:cep,
                      Estado=:estado,
                      Cidade=:cidade,
                      Endereco=:endereco,
                      Email=:email,
                      Senha=:senha,
                      Data_Cadastro=:data_cadastro
                                    
                      WHERE idUsuario = :idUsuario";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idUsuario", $usuario->getIdUsuario());
                $p_sql->bindValue(":nome", $usuario->getNome());
                $p_sql->bindValue(":data_nascimento", $usuario->getData_Nascimento());
                $p_sql->bindValue(":sexo", $usuario->getSexo());
                $p_sql->bindValue(":cpf", $usuario->getCpf());
                $p_sql->bindValue(":rg", $usuario->getRg());
                $p_sql->bindValue(":telefone", $usuario->getTelefone());
                $p_sql->bindValue(":celular", $usuario->getCelular());
                $p_sql->bindValue(":cep", $usuario->getCep());
                $p_sql->bindValue(":estado", $usuario->getEstado());
                $p_sql->bindValue(":cidade", $usuario->getCidade());
                $p_sql->bindValue(":endereco", $usuario->getEndereco());
                $p_sql->bindValue(":email", $usuario->getEmail());
                $p_sql->bindValue(":senha", $usuario->getSenha());
                $p_sql->bindValue(":data_cadastro", $usuario->getData_Cadastro());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        public function exibeUsuario() {
            try {
                $sql = "SELECT idUsuario, Nome, Data_Nascimento, CPF, Celular, Email, Data_Cadastro FROM Usuario ORDER BY idUsuario ASC";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->listaDados($l);
                } 
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        private function listaDados($row) {
            $usuario = new Usuario();
            $usuario->setIdUsuario($row['idUsuario']);
            $usuario->setNome($row['Nome']);
            $usuario->setData_Nascimento($row['Data_Nascimento']);
            $usuario->setCpf($row['CPF']);
            $usuario->setCelular($row['Celular']);
            $usuario->setEmail($row['Email']);
            $usuario->setData_Cadastro($row['Data_Cadastro']);

            return $usuario;
        }


    }

?>
