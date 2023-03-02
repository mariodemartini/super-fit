<?php

    class TesteForcaDAO
    {
        public function create(TesteForca $testeforca){
            try {
                $sql = "INSERT INTO Teste_Forca (
                    data_teste, carga_inicial, rep_inicial, meta_carga, meta_rep, primeira_tentativa, segunda_tentativa, terceira_tentativa, resultado_rep, resultado_kg, idExercicios)
                    VALUES (
                        :data_teste, :carga_inicial, :rep_inicial, :meta_carga, :meta_rep, :primeira_tentativa, :segunda_tentativa, :terceira_tentativa, :resultado_rep, :resultado_kg,
                        :exercicio)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":data_teste", $testeforca->getData_teste());
                $p_sql->bindValue(":carga_inicial", $testeforca->getCarga_inicial());
                $p_sql->bindValue(":rep_inicial", $testeforca->getRep_inicial());
                $p_sql->bindValue(":meta_carga", $testeforca->getMeta_carga());
                $p_sql->bindValue(":meta_rep", $testeforca->getMeta_rep());
                $p_sql->bindValue(":primeira_tentativa", $testeforca->getPrimeira_tentativa());
                $p_sql->bindValue(":segunda_tentativa", $testeforca->getSegunda_tentativa());
                $p_sql->bindValue(":terceira_tentativa", $testeforca->getTerceira_tentativa());
                $p_sql->bindValue(":resultado_rep", $testeforca->getResultado_rep());
                $p_sql->bindValue(":resultado_kg", $testeforca->getResultado_kg());
                $p_sql->bindValue(":idExercicios", $testeforca->getExercicio());

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
            $testeforca = new TesteForca();
            $testeforca->setData_teste($row['data_teste']);
            $testeforca->setCarga_inicial($row['velocidade_inicial']);
            $testeforca->setRep_inicial($row['fc_repouso']);
            $testeforca->setMeta_carga($row['pressao_inicio']);
            $testeforca->setMeta_rep($row['pressao_final']);
            $testeforca->setPrimeira_tentativa($row['fc_teste']);
            $testeforca->setSegunda_tentativa($row['tempo_teste']);
            $testeforca->setTerceira_tentativa($row['velocidade_teste']);
            $testeforca->setResultado_rep($row['esforco_teste']);
            $testeforca->setResultado_kg($row['resultado_vo2']);
            $testeforca->setExercicio($row['resultado_vo2']);

            return $testeforca;
        }

        public function delete(TesteForca $testeforca){
            try {
                $sql = "DELETE FROM Teste_VO2 WHERE idTeste_Forca = :idTesteForca";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idTesteForca", $testeforca->getIdTesteForca());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir dados iniciais <br> $e <br>";
            }
        }

        public function update(TesteForca $testeforca)
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
                    resultado_kg=:resultado_kg,
                    idExercicios=:exercicio
                                
                    WHERE idTeste_Forca = :idTesteForca";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":data_teste", $testeforca->getData_teste());
                $p_sql->bindValue(":carga_inicial", $testeforca->getCarga_inicial());
                $p_sql->bindValue(":rep_inicial", $testeforca->getRep_inicial());
                $p_sql->bindValue(":meta_carga", $testeforca->getMeta_carga());
                $p_sql->bindValue(":meta_rep", $testeforca->getMeta_rep());
                $p_sql->bindValue(":primeira_tentativa", $testeforca->getPrimeira_tentativa());
                $p_sql->bindValue(":segunda_tentativa", $testeforca->getSegunda_tentativa());
                $p_sql->bindValue(":terceira_tentativa", $testeforca->getTerceira_tentativa());
                $p_sql->bindValue(":resultado_rep", $testeforca->getResultado_rep());
                $p_sql->bindValue(":resultado_kg", $testeforca->getResultado_kg());
                $p_sql->bindValue(":exercicio", $testeforca->getExercicio());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        public function selecionaExercicioPeito(){
            try{
                $sql = "SELECT Exercicios.Descricao FROM Exercicios, Teste_Forca  
                    WHERE Exercicios.idExercicios = Teste_Forca.idExercicios AND Exercicios.Grupo_Muscular = 'PTL'";
                    $result = Conexao::getConexao()->query($sql);
                    $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                    $f_lista = array();
                    foreach ($lista as $l) {
                        $f_lista[] = $this->listaPeito($l);
                    } 
                        return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }                
        }

        private function listaPeito($row) {
            $testeforca = new TesteForca();
            $testeforca->setExercicio($row['exericio']);;

            return $testeforca;
        }

        
    }

?>