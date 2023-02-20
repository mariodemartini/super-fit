<?php

    class DadosIniciaisDAO
    {
        public function create(DadosIniciais $dados_iniciais){
            try {
                $sql = "INSERT INTO Dados_Iniciais (
                    peso, altura, freq_card, pressao_arterial, data_cadastro)
                    VALUES (
                    :peso, :altura, :freq_card, :pressao_arterial, :data_cadastro)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":peso", $dados_iniciais->getPeso());
                $p_sql->bindValue(":altura", $dados_iniciais->getAltura());
                $p_sql->bindValue(":freq_card", $dados_iniciais->getFreq_card());
                $p_sql->bindValue(":pressao_arterial", $dados_iniciais->getPressao_arterial());
                $p_sql->bindValue(":data_cadastro", $dados_iniciais->getData_Cadastro());

                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir dados iniciais <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM Dados_Iniciais ORDER BY idDados_Iniciais ASC";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->listaDadosIniciais($l);
                } 
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        private function listaDadosIniciais($row) {
            $dados_iniciais = new DadosIniciais();
            $dados_iniciais->setIdDadosIniciais($row['idDados_Iniciais']);
            $dados_iniciais->setPeso($row['peso']);
            $dados_iniciais->setAltura($row['altura']);
            $dados_iniciais->setFreq_card($row['freq_card']);
            $dados_iniciais->setPressao_arterial($row['pressao_arterial']);
            $dados_iniciais->setData_Cadastro($row['data_cadastro']);

            return $dados_iniciais;
        }

        public function delete(DadosIniciais $dados_iniciais){
            try {
                $sql = "DELETE FROM Dados_Iniciais WHERE  idDados_Iniciais = :idDobrasCutaneas";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idDados_Iniciais", $dados_iniciais->getIdDadosIniciais());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir dados iniciais <br> $e <br>";
            }
        }

        public function update(DadosIniciais $dados_iniciais)
        {
            try {
                $sql = "UPDATE Dados_Iniciais set
                    
                    idDados_Iniciais=:idDados_Iniciais,
                    peso=:peso,
                    altura=:altura,
                    freq_card=:freq_card,
                    pressao_arterial=:pressao_arterial,
                    data_cadastro=:data_cadastro
                                
                    WHERE idDados_Iniciais = :idDados_Iniciais";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":peso", $dados_iniciais->getPeso());
                $p_sql->bindValue(":altura", $dados_iniciais->getAltura());
                $p_sql->bindValue(":freq_card", $dados_iniciais->getFreq_card());
                $p_sql->bindValue(":pressao_arterial", $dados_iniciais->getPressao_arterial());
                $p_sql->bindValue(":data_cadastro", $dados_iniciais->getData_Cadastro());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        
    }

?>