<?php

    class ProfessorDAO
    {
        public function create(Professor $professor){
            try {
                $sql = "INSERT INTO Professor (
                    nome, data_nascimento, sexo, cpf, cref, celular, cep, estado, cidade, endereco, email, senha)
                    VALUES (
                    :nome, :data_nascimento, :sexo, :cpf, :cref, :celular, :cep, :estado, :cidade, :endereco, :email, :senha)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":nome", $professor->getNome());
                $p_sql->bindValue(":data_nascimento", $professor->getData_Nascimento());
                $p_sql->bindValue(":sexo", $professor->getSexo());
                $p_sql->bindValue(":cpf", $professor->getCpf());
                $p_sql->bindValue(":cref", $professor->getCref());
                $p_sql->bindValue(":celular", $professor->getCelular());
                $p_sql->bindValue(":cep", $professor->getCep());
                $p_sql->bindValue(":estado", $professor->getEstado());
                $p_sql->bindValue(":cidade", $professor->getCidade());
                $p_sql->bindValue(":endereco", $professor->getEndereco());
                $p_sql->bindValue(":email", $professor->getEmail());
                $p_sql->bindValue(":senha", $professor->getSenha());

                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir professor <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM Professor ORDER BY Nome ASC";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->listaProfessores($l);
                } 
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        private function listaProfessores($row) {
            $professor = new Professor();
            $professor->setIdprofessor($row['idProfessor']);
            $professor->setNome($row['Nome']);
            $professor->setData_Nascimento($row['Data_Nascimento']);
            $professor->setSexo($row['Sexo']);
            $professor->setCpf($row['CPF']);
            $professor->setCref($row['CREF']);
            $professor->setCelular($row['Celular']);
            $professor->setCep($row['CEP']);
            $professor->setEstado($row['Estado']);
            $professor->setCidade($row['Cidade']);
            $professor->setEndereco($row['Endereco']);
            $professor->setEmail($row['Email']);

            return $professor;
        }

        public function delete(Professor $professor){
            try {
                $sql = "DELETE FROM Professor WHERE  idProfessor = :idProfessor";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idProfessor", $professor->getIdProfessor());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir professor <br> $e <br>";
            }
        }

        public function update(Professor $professor)
        {
            try {
                $sql = "UPDATE Professor set
                    
                    idProfessor=:idProfessor,
                    nome=:nome,
                    data_nascimento=:data_nascimento,
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
                    data_cadastro=:data_cadastro
                                
                    WHERE idProfessor = :idProfessor";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":nome", $professor->getNome());
                $p_sql->bindValue(":data_nascimento", $professor->getData_Nascimento());
                $p_sql->bindValue(":sexo", $professor->getSexo());
                $p_sql->bindValue(":cpf", $professor->getCpf());
                $p_sql->bindValue(":rg", $professor->getRg());
                $p_sql->bindValue(":telefone", $professor->getTelefone());
                $p_sql->bindValue(":celular", $professor->getCelular());
                $p_sql->bindValue(":cep", $professor->getCep());
                $p_sql->bindValue(":estado", $professor->getEstado());
                $p_sql->bindValue(":cidade", $professor->getCidade());
                $p_sql->bindValue(":endereco", $professor->getEndereco());
                $p_sql->bindValue(":email", $professor->getEmail());
                $p_sql->bindValue(":senha", $professor->getSenha());
                $p_sql->bindValue(":data_cadastro", $professor->getData_Cadastro());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        
    }

?>