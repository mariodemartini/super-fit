<?php

    class TesteVO2DAO
    {
        public function create(TesteVO2 $testeVO2){
            try {
                $sql = "INSERT INTO testeVO2 (
                    dataTeste, velocidadeInicial, fcRepouso, pressaoInicio, pressaoFinal, fcTeste, tempoTeste, velocidadeTeste, esforcoTeste, resultadoVO2)
                    VALUES (
                        :dataTeste, :velocidadeInicial, :fcRepouso, :pressaoInicio, :pressaoFinal, :fcTeste, :tempoTeste, :velocidadeTeste, :esforcoTeste, :resultadoVO2)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":dataTeste", $testeVO2->getDataTeste());
                $p_sql->bindValue(":velocidadeInicial", $testeVO2->getVelocidadeInicial());
                $p_sql->bindValue(":fcRepouso", $testeVO2->getFcRepouso());
                $p_sql->bindValue(":pressaoInicio", $testeVO2->getPressaoInicio());
                $p_sql->bindValue(":pressaoFinal", $testeVO2->getPressaoFinal());
                $p_sql->bindValue(":fcTeste", $testeVO2->getFcTeste());
                $p_sql->bindValue(":tempoTeste", $testeVO2->getTempoTeste());
                $p_sql->bindValue(":velocidadeTeste", $testeVO2->getVelocidadeTeste());
                $p_sql->bindValue(":esforcoTeste", $testeVO2->getEsforcoTeste());
                $p_sql->bindValue(":resultadoVO2", $testeVO2->getResultadoVO2());

                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir dados teste <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM testeVO2 ORDER BY idTesteVO2 ASC";
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
            $testeVO2 = new TesteVO2();
            $testeVO2->setDataTeste($row['dataTeste']);
            $testeVO2->setVelocidadeInicial($row['velocidadeInicial']);
            $testeVO2->setFcRepouso($row['fcRepouso']);
            $testeVO2->setPressaoInicio($row['pressaoInicio']);
            $testeVO2->setPressaoFinal($row['pressaoFinal']);
            $testeVO2->setFcTeste($row['fcTeste']);
            $testeVO2->setTempoTeste($row['tempoTeste']);
            $testeVO2->setVelocidadeTeste($row['velocidadeTeste']);
            $testeVO2->setEsforcoTeste($row['esforcoTeste']);
            $testeVO2->setResultadoVO2($row['resultadoVO2']);

            return $testeVO2;
        }

        public function delete(TesteVO2 $testeVO2){
            try {
                $sql = "DELETE FROM testeVO2 WHERE idTesteVO2 = :idTesteVO2";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idTesteVO2", $testeVO2->getIdTesteVO2());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir dados iniciais <br> $e <br>";
            }
        }

        public function update(TesteVO2 $testeVO2)
        {
            try {
                $sql = "UPDATE testeVO2 set
                    
                    idTesteVO2=:idTesteVO2,
                    dataTeste=:dataTeste,
                    velocidade_inicial=:velocidade_inicial, 
                    fc_repouso=:fc_repouso, 
                    pressao_inicio=:pressao_inicio, 
                    pressao_final=:pressao_final, 
                    fc_teste=:fc_teste, 
                    tempo_teste=:tempo_teste, 
                    velocidade_teste=:velocidade_teste, 
                    esforco_teste=:esforco_teste, 
                    resultado_vo2=:resultado_vo2
                                
                    WHERE idTesteVO2 = :idTesteVO2";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":dataTeste", $testeVO2->getDataTeste());
                $p_sql->bindValue(":velocidadeInicial", $testeVO2->getVelocidadeInicial());
                $p_sql->bindValue(":fcRepouso", $testeVO2->getFcRepouso());
                $p_sql->bindValue(":pressaoInicio", $testeVO2->getPressaoInicio());
                $p_sql->bindValue(":pressaoFinal", $testeVO2->getPressaoFinal());
                $p_sql->bindValue(":fcTeste", $testeVO2->getFcTeste());
                $p_sql->bindValue(":tempoTeste", $testeVO2->getTempoTeste());
                $p_sql->bindValue(":velocidade_teste", $testeVO2->getVelocidadeTeste());
                $p_sql->bindValue(":esforcoTeste", $testeVO2->getEsforcoTeste());
                $p_sql->bindValue(":resultadoVO2", $testeVO2->getResultadoVO2());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        
    }

?>