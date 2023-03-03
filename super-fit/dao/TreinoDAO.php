<?php

    class TreinoDAO
    {
        public function create(Treino $treino){
            try {
                $sql = "INSERT INTO treino (
                    idSeries, idExercicios, carga, feedback, idUsuario)
                    VALUES (
                    :idSeries, :idExercicios, :carga, :feedback, :idUsuario)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idSeries", $treino->getSerie());
                $p_sql->bindValue(":idExercicios", $treino->getExercicios());
                $p_sql->bindValue(":carga", $treino->getCarga());
                $p_sql->bindValue(":feedback", $treino->getFeedback());
                $p_sql->bindValue(":idUsuario", $treino->getUsuario());
                
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
            $treino->setExercicios($row['idExercicios']);
            $treino->setCarga($row['carga']);
            $treino->setFeedback($row['feedback']);
            $treino->setUsuario($row['idUsuario']);
        
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
                    idSeries=:idSeries,
                    idExercicios=:idExercicios,
                    carga=:carga,
                    feedback=:feedback,
                    idUsuario=:idUsuario
                                
                    WHERE idTreino = :idTreino";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idSeries", $treino->getSerie());
                $p_sql->bindValue(":idExercicios", $treino->getExercicios());
                $p_sql->bindValue(":carga", $treino->getCarga());
                $p_sql->bindValue(":feedback", $treino->getFeedback());
                $p_sql->bindValue(":idUsuario", $treino->getUsuario());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }
        
    }

?>