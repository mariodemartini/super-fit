<?php

    class TesteVO2DAO
    {
        public function create(TesteVO2 $teste_vo2){
            try {
                $sql = "INSERT INTO Teste_VO2 (
                    data_teste, velocidade_inicial, fc_repouso, pressao_inicio, pressao_final, fc_teste, tempo_teste, velocidade_teste, esforco_teste, resultado_vo2)
                    VALUES (
                        :data_teste, :velocidade_inicial, :fc_repouso, :pressao_inicio, :pressao_final, :fc_teste, :tempo_teste, :velocidade_teste, :esforco_teste, :resultado_vo2)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":data_teste", $teste_vo2->getData_teste());
                $p_sql->bindValue(":velocidade_inicial", $teste_vo2->getVelocidade_inicial());
                $p_sql->bindValue(":fc_repouso", $dados_iniciais->getFc_repouso());
                $p_sql->bindValue(":pressao_inicio", $dados_iniciais->getPressao_inicio());
                $p_sql->bindValue(":pressao_final", $dados_iniciais->getPressao_final());
                $p_sql->bindValue(":fc_teste", $teste_vo2->getFc_teste());
                $p_sql->bindValue(":tempo_teste", $teste_vo2->getTempo_teste());
                $p_sql->bindValue(":velocidade_teste", $dados_iniciais->getVelocidade_teste());
                $p_sql->bindValue(":esforco_teste", $dados_iniciais->getEsforco_teste());
                $p_sql->bindValue(":resultado_vo2", $dados_iniciais->getResultado_vo2());

                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir dados teste <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM Teste_VO2 ORDER BY idTeste_VO2 ASC";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->listaTesteVo2($l);
                } 
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        private function listaTesteVo2($row) {
            $teste_vo2 = new TesteVO2();
            $teste_vo2->setData_teste($row['data_teste']);
            $teste_vo2->setVelocidade_inicial($row['velocidade_inicial']);
            $teste_vo2->setFc_repouso($row['fc_repouso']);
            $teste_vo2->setPressao_inicio($row['pressao_inicio']);
            $teste_vo2->setPressao_final($row['pressao_final']);
            $teste_vo2->setFc_teste($row['fc_teste']);
            $teste_vo2->setTempo_teste($row['tempo_teste']);
            $teste_vo2->setVelocidade_teste($row['velocidade_teste']);
            $teste_vo2->setEsforco_teste($row['esforco_teste']);
            $teste_vo2->setResultado_vo2($row['resultado_vo2']);

            return $teste_vo2;
        }

        public function delete(TesteVO2 $teste_vo2){
            try {
                $sql = "DELETE FROM Teste_VO2 WHERE idTeste_VO2 = :idTesteVO2";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idTesteVO2", $dados_iniciais->getIdTesteVO2());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir dados iniciais <br> $e <br>";
            }
        }

        public function update(TesteVO2 $teste_vo2)
        {
            try {
                $sql = "UPDATE Teste_VO2 set
                    
                    idTeste_VO2=:idTesteVO2,
                    data_teste=:data_teste,
                    velocidade_inicial=:velocidade_inicial, 
                    fc_repouso=:fc_repouso, 
                    pressao_inicio=:pressao_inicio, 
                    pressao_final=:pressao_final, 
                    fc_teste=:fc_teste, :
                    tempo_teste=tempo_teste, 
                    velocidade_teste=:velocidade_teste, 
                    esforco_teste=:esforco_teste, 
                    resultado_vo2=:resultado_vo2
                                
                    WHERE idTeste_VO2 = :idTesteVO2";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":data_teste", $teste_vo2->getData_teste());
                $p_sql->bindValue(":velocidade_inicial", $teste_vo2->getVelocidade_inicial());
                $p_sql->bindValue(":fc_repouso", $dados_iniciais->getFc_repouso());
                $p_sql->bindValue(":pressao_inicio", $dados_iniciais->getPressao_inicio());
                $p_sql->bindValue(":pressao_final", $dados_iniciais->getPressao_final());
                $p_sql->bindValue(":fc_teste", $teste_vo2->getFc_teste());
                $p_sql->bindValue(":tempo_teste", $teste_vo2->getTempo_teste());
                $p_sql->bindValue(":velocidade_teste", $dados_iniciais->getVelocidade_teste());
                $p_sql->bindValue(":esforco_teste", $dados_iniciais->getEsforco_teste());
                $p_sql->bindValue(":resultado_vo2", $dados_iniciais->getResultado_vo2());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        
    }

?>