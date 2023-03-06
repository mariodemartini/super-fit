<?php

    class TesteVO2DAO
    {
        public function create(TesteVO2 $testeVO2){
            try {
                $sql = "INSERT INTO testeVO2 (
                    dataTeste, velocidadeInicial, velocidadeFinal, fcInicial, fcFinal, tempoTeste, esforcoTeste, resultadoVO2, idAluno)
                    VALUES (
                    :dataTeste, :velocidadeInicial, :velocidadeFinal, :fcInicial, :fcFinal,:tempoTeste, :esforcoTeste, :resultadoVO2, :idAluno)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":dataTeste", $testeVO2->getDataTeste());
                $p_sql->bindValue(":velocidadeInicial", $testeVO2->getVelocidadeInicial());
                $p_sql->bindValue(":velocidadeFinal", $testeVO2->getVelocidadeFinal());
                $p_sql->bindValue(":fcInicial", $testeVO2->getFcInicial());
                $p_sql->bindValue(":fcFinal", $testeVO2->getFcFinal());
                $p_sql->bindValue(":tempoTeste", $testeVO2->getTempoTeste());
                $p_sql->bindValue(":esforcoTeste", $testeVO2->getEsforcoTeste());
                $p_sql->bindValue(":resultadoVO2", $testeVO2->getResultadoVO2());
                $p_sql->bindValue(":idAluno", $testeVO2->getAluno());

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
            $testeVO2->setVelocidadeFinal($row['velocidadeFinal']);
            $testeVO2->setFcIniciaç($row['fcInicial']);
            $testeVO2->setFcFinal($row['fcFinal']);
            $testeVO2->setTempoTeste($row['tempoTeste']);
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
                    velocidadeInicial=:velocidadeInicial, 
                    velocidadeFinal=:velocidadeFinal, 
                    fcInicial=:fcInicial, 
                    fcFinal=:fcfinal,  
                    tempoTeste=:tempoTeste, 
                    esforcoTeste=:esforcoTeste, 
                    resultadoVO2=:resultadoVO2
                                
                    WHERE idTesteVO2 = :idTesteVO2";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":dataTeste", $testeVO2->getDataTeste());
                $p_sql->bindValue(":velocidadeInicial", $testeVO2->getVelocidadeInicial());
                $p_sql->bindValue(":velocidadeFinal", $testeVO2->getVelocidadeFinal());
                $p_sql->bindValue(":fcInicial", $testeVO2->getFcInicial());
                $p_sql->bindValue(":fcFinal", $testeVO2->getFcFinal());
                $p_sql->bindValue(":tempoTeste", $testeVO2->getTempoTeste());
                $p_sql->bindValue(":esforcoTeste", $testeVO2->getEsforcoTeste());
                $p_sql->bindValue(":resultadoVO2", $testeVO2->getResultadoVO2());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        
    }

?>