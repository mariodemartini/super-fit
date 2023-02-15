<?php

    class SerieDAO
    {
        public function create(Serie $serie){
            try {
                $sql = "INSERT INTO Series (
                    nivel, fase, serie, percent_carga)
                    VALUES (
                    :nivel, :fase, :serie, :percent_carga)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":nivel", $serie->getNivel());
                $p_sql->bindValue(":fase", $serie->getFase());
                $p_sql->bindValue(":serie", $serie->getSerie());
                $p_sql->bindValue(":percent_carga", $serie->getPercent_Carga());

                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir serie <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM Series ORDER BY Nivel ASC";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->listaSerie($l);
                } 
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        private function listaSerie($row) {
            $serie = new Serie();
            $serie->setIdSerie($row['idSerie']);
            $serie->setNivel($row['nivel']);
            $serie->setFase($row['fase']);
            $serie->setserie($row['serie']);
            $serie->setPercent_Carga($row['serie']);

            return $serie;
        }

        public function delete(Serie $serie){
            try {
                $sql = "DELETE FROM Series WHERE  idSerie = :idSerie";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idSerie", $serie->getIdSerie());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir serie <br> $e <br>";
            }
        }

        public function update(Serie $serie)
        {
            try {
                $sql = "UPDATE Serie set
                    
                    idExercicios=:idExercicios,
                    grupo_muscular=:grupo_muscular,
                    descricao=:descricao,
                                
                    WHERE idExercicios = :idExercicios";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":nivel", $serie->getNivel());
                $p_sql->bindValue(":fase", $serie->getFase());
                $p_sql->bindValue(":serie", $serie->getSerie());
                $p_sql->bindValue(":percent_carga", $serie->getPercent_Carga());
                
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        
    }

?>