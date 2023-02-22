<?php

    class TesteForcaDAO
    {
        public function create(TesteForca $teste_forca){
            try {
                $sql = "INSERT INTO Teste_Forca (
                    data_teste, carga_inicial, rep_inicial, meta_carga, meta_rep, primeira_tentativa, segunda_tentativa, terceira_tentativa, resultado_rep, resultado_kg, idExercicios)
                    VALUES (
                        :data_teste, :carga_inicial, :rep_inicial, :meta_carga, :meta_rep, :primeira_tentativa, :segunda_tentativa, :terceira_tentativa, :resultado_rep, :resultado_kg,
                        :idExercicios)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":data_teste", $teste_forca->getData_teste());
                $p_sql->bindValue(":carga_inicial", $teste_forca->getCarga_inicial());
                $p_sql->bindValue(":rep_inicial", $teste_forca->getRep_inicial());
                $p_sql->bindValue(":meta_carga", $teste_forca->getMeta_carga());
                $p_sql->bindValue(":meta_rep", $teste_forca->getMeta_rep());
                $p_sql->bindValue(":primeira_tentativa", $teste_forca->getPrimeira_tentativa());
                $p_sql->bindValue(":segunda_tentativa", $teste_forca->getSegunda_tentativa());
                $p_sql->bindValue(":terceira_tentativa", $teste_forca->getTerceira_tentativa());
                $p_sql->bindValue(":resultado_rep", $teste_forca->getResultado_rep());
                $p_sql->bindValue(":resultado_kg", $teste_forca->getResultado_kg());
                $p_sql->bindValue(":idExercicios", $teste_forca->selecionaExercicio());

                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir dados teste <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM Teste_Forca ORDER BY idTeste_Forca ASC";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->listaTesteForca($l);
                } 
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        private function listaTesteForca($row) {
            $teste_forca = new TesteForca();
            $teste_forca->setData_teste($row['data_teste']);
            $teste_forca->setCarga_inicial($row['velocidade_inicial']);
            $teste_forca->setRep_inicial($row['fc_repouso']);
            $teste_forca->setMeta_carga($row['pressao_inicio']);
            $teste_forca->setMeta_rep($row['pressao_final']);
            $teste_forca->setPrimeira_tentativa($row['fc_teste']);
            $teste_forca->setSegunda_tentativa($row['tempo_teste']);
            $teste_forca->setTerceira_tentativa($row['velocidade_teste']);
            $teste_forca->setResultado_rep($row['esforco_teste']);
            $teste_forca->setResultado_kg($row['resultado_vo2']);

            return $teste_vo2;
        }

        public function delete(TesteForca $teste_forca){
            try {
                $sql = "DELETE FROM Teste_VO2 WHERE idTeste_Forca = :idTesteForca";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idTesteForca", $teste_forca->getIdTesteForca());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir dados iniciais <br> $e <br>";
            }
        }

        public function update(TesteForca $teste_forca)
        {
            try {
                $sql = "UPDATE Teste_Forca set
                    
                    idTeste_Forca=:idTesteForca,
                    data_teste=:data_teste,
                    carga_inicial=:carga_inicial, 
                    rep_inicial=:rep_inicial, 
                    meta_carga=:meta_carga, 
                    meta_rep=:meta_rep, 
                    primeira_tentativa=:primeira_tentativa,
                    segunda_tentativa=:segunda_tentativa, 
                    terceira_tentativa=:terceira_tentativa, 
                    resultado_rep=:resultado_rep, 
                    resultado_kg=:resultado_kg
                                
                    WHERE idTeste_Forca = :idTesteForca";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":data_teste", $teste_forca->getData_teste());
                $p_sql->bindValue(":carga_inicial", $teste_forca->getCarga_inicial());
                $p_sql->bindValue(":rep_inicial", $teste_forca->getRep_inicial());
                $p_sql->bindValue(":meta_carga", $teste_forca->getMeta_carga());
                $p_sql->bindValue(":meta_rep", $teste_forca->getMeta_rep());
                $p_sql->bindValue(":primeira_tentativa", $teste_forca->getPrimeira_tentativa());
                $p_sql->bindValue(":segunda_tentativa", $teste_forca->getSegunda_tentativa());
                $p_sql->bindValue(":terceira_tentativa", $teste_forca->getTerceira_tentativa());
                $p_sql->bindValue(":resultado_rep", $teste_forca->getEsforco_teste());
                $p_sql->bindValue(":resultado_kg", $teste_forca->getResultado_vo2());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        public function selecionaExercicio(){
            $sql = "SELECT exercicio.Descricao FROM Exercicios, Teste_Forca  
                    WHERE exercicio.idExercicios = teste_forca.idExercicios";
            $result = Conexao::getConexao()->query($sql);
            $exercicio = $result->fetchAll(PDO::FETCH_ASSOC);

            return $exercicio;
        }

    }

?>