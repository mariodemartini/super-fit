<?php

    class UsuarioDAO
    {
        public function create(Usuario $usuario){
            try {
                $sql = "INSERT INTO Usuario (
                    nome, dataNascimento, sexo, cpf, rg, telefone, celular, cep, estado, cidade, endereco, email, senha, dataCadastro)
                    VALUES (
                    :nome, :dataNascimento, :sexo, :cpf, :rg, :telefone, :celular, :cep, :estado, :cidade, :endereco, :email, :senha, :dataCadastro)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":nome", $usuario->getNome());
                $p_sql->bindValue(":dataNascimento", $usuario->getDataNascimento());
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
                $p_sql->bindValue(":dataCadastro", $usuario->getDataCadastro());

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
            $usuario->setNome($row['nome']);
            $usuario->setDataNascimento($row['dataNascimento']);
            $usuario->setSexo($row['sexo']);
            $usuario->setCpf($row['cpf']);
            $usuario->setRg($row['rg']);
            $usuario->setTelefone($row['telefone']);
            $usuario->setCelular($row['celular']);
            $usuario->setCep($row['cep']);
            $usuario->setEstado($row['estado']);
            $usuario->setCidade($row['cidade']);
            $usuario->setEndereco($row['endereco']);
            $usuario->setEmail($row['email']);
            $usuario->setSenha($row['senha']);
            $usuario->setDataCadastro($row['dataCadastro']);

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
                $sql = "UPDATE usuario set
                    
                      idUsuario=:idUsuario,
                      nome=:nome,
                      dataNascimento=:datanascimento,
                      sexo=:sexo,
                      cpf=:cpf,
                      rg=:rg,
                      telefone=:telefone,
                      celular=:celular,
                      cep=:cep,
                      estado=:estado,
                      cidade=:cidade,
                      endereco=:endereco,
                      email=:email,
                      senha=:senha,
                      dataCadastro=:datacadastro
                                    
                      WHERE idUsuario = :idUsuario";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idUsuario", $usuario->getIdUsuario());
                $p_sql->bindValue(":nome", $usuario->getNome());
                $p_sql->bindValue(":dataNascimento", $usuario->getDataNascimento());
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
                $p_sql->bindValue(":dataCadastro", $usuario->getDataCadastro());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        public function exibeUsuario() {
            try {
                $sql = "SELECT idUsuario, nome, dataNascimento, cpf, celular, email, dataCadastro FROM usuario ORDER BY idUsuario ASC";
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
            $usuario->setNome($row['nome']);
            $usuario->setDataNascimento($row['dataNascimento']);
            $usuario->setCpf($row['cpf']);
            $usuario->setCelular($row['celular']);
            $usuario->setEmail($row['email']);
            $usuario->setDataCadastro($row['dataCadastro']);

            return $usuario;
        }


    }

?>
