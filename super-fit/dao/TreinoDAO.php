<?php

    class TreinoDAO
    {
        public function create(Treino $treino){
            try {
                $sql = "INSERT INTO treino (
                    idSerie, idExercicio, carga, feedback, idAluno)
                    VALUES (
                    :idSerie, :idExercicio, :carga, :feedback, :idAluno)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idSerie", $treino->getSerie());
                $p_sql->bindValue(":idExercicio", $treino->getExercicio());
                $p_sql->bindValue(":carga", $treino->getCarga());
                $p_sql->bindValue(":feedback", $treino->getFeedback());
                $p_sql->bindValue(":idAluno", $treino->getAluno());
                
                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir treino <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM treino ORDER BY idTreino ASC";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->listaTreino($l);
                } 
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        private function listaTreino($row) {
            $treino = new Treino();
            $treino->setIdTreino($row['idTreino']);
            $treino->setSerie($row['idSerie']);
            $treino->setExercicio($row['idExercicio']);
            $treino->setCarga($row['carga']);
            $treino->setFeedback($row['feedback']);
            $treino->setAluno($row['idAluno']);
        
            return $treino;
        }

        public function delete(Treino $treino){
            try {
                $sql = "DELETE FROM treino WHERE idTreino = :idTreino";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idTreino", $medidas->getIdTreino());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir treino <br> $e <br>";
            }
        }

        public function update(Treino $treino)
        {
            try {
                $sql = "UPDATE treino set
                    
                    idTreino=:idTreino,
                    idSerie=:idSerie,
                    idExercicio=:idExercicio,
                    carga=:carga,
                    feedback=:feedback,
                    idAluno=:idAluno
                                
                    WHERE idTreino = :idTreino";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idSerie", $treino->getSerie());
                $p_sql->bindValue(":idExercicio", $treino->getExercicio());
                $p_sql->bindValue(":carga", $treino->getCarga());
                $p_sql->bindValue(":feedback", $treino->getFeedback());
                $p_sql->bindValue(":idAluno", $treino->getAluno());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }
        
    }

?>