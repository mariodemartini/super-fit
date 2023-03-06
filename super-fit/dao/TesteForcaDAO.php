<?php

    class TesteForcaDAO
    {
        public function create(TesteForca $testeforca){
            try {
                $sql = "INSERT INTO testeForca (
                    dataTeste, cargaInicial, cargaFinal, idAluno, idExercicio)
                    VALUES (
                    :dataTeste, :cargaInicial, :cargaFinal, :idAluno, :exercicio)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":dataTeste", $testeforca->getDataTeste());
                $p_sql->bindValue(":cargaInicial", $testeforca->getCargaInicial());
                $p_sql->bindValue(":cargaFinal", $testeforca->getCargaFinal());
                $p_sql->bindValue(":idAluno", $testeforca->getAluno());
                $p_sql->bindValue(":idExercicio", $testeforca->getExercicio());

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
            $testeforca->setCargaFinal($row['cargaFinal']);
            $testeforca->setAluno($row['idAluno']);
            $testeforca->setExercicio($row['idExercicio']);

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
                    cargaFinal=:cargaFinal, 
                    idExercicio=:idExercicio
                                
                    WHERE idTesteForca = :idTesteForca";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":dataTeste", $testeforca->getDataTeste());
                $p_sql->bindValue(":cargaInicial", $testeforca->getCargaInicial());
                $p_sql->bindValue(":cargaFinal", $testeforca->getCargaFinal());
                $p_sql->bindValue(":idExercicio", $testeforca->getExercicio());
            
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