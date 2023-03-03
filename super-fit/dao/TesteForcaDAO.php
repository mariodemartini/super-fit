<?php

    class TesteForcaDAO
    {
        public function create(TesteForca $testeforca){
            try {
                $sql = "INSERT INTO testeForca (
                    dataTeste, cargaInicial, repInicial, metaCarga, metaRep, primeiraTentativa, segundaTentativa, terceiraTentativa, resultadoRep, resultadoKg, idExercicios)
                    VALUES (
                        :dataTeste, :cargaInicial, :repInicial, :metaCarga, :metaRep, :primeiraTentativa, :segundaTentativa, :terceiraTentativa, :resultadoRep, :resultadoKg,
                        :exercicio)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":dataTeste", $testeforca->getDataTeste());
                $p_sql->bindValue(":cargaInicial", $testeforca->getCargaInicial());
                $p_sql->bindValue(":repInicial", $testeforca->getRepInicial());
                $p_sql->bindValue(":metaCarga", $testeforca->getMetaCarga());
                $p_sql->bindValue(":metaRep", $testeforca->getMetaRep());
                $p_sql->bindValue(":primeiraTentativa", $testeforca->getPrimeiraTentativa());
                $p_sql->bindValue(":segundaTentativa", $testeforca->getSegundaTentativa());
                $p_sql->bindValue(":terceiraTentativa", $testeforca->getTerceiraTentativa());
                $p_sql->bindValue(":resultadoRep", $testeforca->getResultadoRep());
                $p_sql->bindValue(":resultadoKg", $testeforca->getResultadoKg());
                $p_sql->bindValue(":idExercicios", $testeforca->getExercicio());

                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir dados teste <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM testeForca ORDER BY idTesteForca ASC";
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
            $testeforca->setDataTeste($row['dataTeste']);
            $testeforca->setCargaInicial($row['cargaInicial']);
            $testeforca->setRepInicial($row['repInicial']);
            $testeforca->setMetaCarga($row['metaCarga']);
            $testeforca->setMetaRep($row['metaRep']);
            $testeforca->setPrimeiraTentativa($row['primeiraTentativa']);
            $testeforca->setSegundaTentativa($row['segundaTentativa']);
            $testeforca->setTerceiraTentativa($row['tereiraTentativa']);
            $testeforca->setResultadoRep($row['resultadoRep']);
            $testeforca->setResultadoKg($row['resultadoKg']);
            $testeforca->setExercicio($row['exercicio']);

            return $testeforca;
        }

        public function delete(TesteForca $testeforca){
            try {
                $sql = "DELETE FROM testeForca WHERE idTesteForca = :idTesteForca";
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
                $sql = "UPDATE testeForca set
                    
                    idTesteForca=:idTesteForca,
                    dataTeste=:dataTeste,
                    cargaInicial=:cargaInicial, 
                    repInicial=:repInicial, 
                    metaCarga=:metaCarga, 
                    metaRep=:metaRep, 
                    primeiraTentativa=:primeiraTentativa,
                    segundaTentativa=:segundaTentativa, 
                    terceiraTentativa=:terceiraTentativa, 
                    resultadoRep=:resultadoRep, 
                    resultadoKg=:resultadoKg,
                    idExercicios=:exercicio
                                
                    WHERE idTesteForca = :idTesteForca";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":dataTeste", $testeforca->getDataTeste());
                $p_sql->bindValue(":cargaInicial", $testeforca->getCargaInicial());
                $p_sql->bindValue(":repInicial", $testeforca->getRepInicial());
                $p_sql->bindValue(":metaCarga", $testeforca->getMetaCarga());
                $p_sql->bindValue(":metaRep", $testeforca->getMetaRep());
                $p_sql->bindValue(":primeiraTentativa", $testeforca->getPrimeiraTentativa());
                $p_sql->bindValue(":segundaTentativa", $testeforca->getSegundaTentativa());
                $p_sql->bindValue(":terceiraTentativa", $testeforca->getTerceiraTentativa());
                $p_sql->bindValue(":resultadoRep", $testeforca->getResultadoRep());
                $p_sql->bindValue(":resultadoKg", $testeforca->getResultadoKg());
                $p_sql->bindValue(":exercicio", $testeforca->getExercicio());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        public function selecionaExercicioPeito(){
            try{
                $sql = "SELECT exercicios.Descricao FROM exercicios, testeForca  
                    WHERE exercicios.idExercicios = testeForca.idExercicios AND exercicios.grupoMuscular = 'PTL'";
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
            $testeforca->setExercicio($row['exercicio']);;

            return $testeforca;
        }

        
    }

?>