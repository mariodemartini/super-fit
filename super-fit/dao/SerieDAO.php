<?php

    class SerieDAO
    {
        public function create(Serie $serie){
            try {
                $sql = "INSERT INTO series (
                    nivel, fase, serie, percentCarga)
                    VALUES (
                    :nivel, :fase, :serie, :percentCarga)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":nivel", $serie->getNivel());
                $p_sql->bindValue(":fase", $serie->getFase());
                $p_sql->bindValue(":serie", $serie->getSerie());
                $p_sql->bindValue(":percentCarga", $serie->getPercentCarga());

                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir serie <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM series ORDER BY nivel ASC";
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
            $serie->setIdSerie($row['idSeries']);
            $serie->setNivel($row['nivel']);
            $serie->setFase($row['fase']);
            $serie->setserie($row['serie']);
            $serie->setPercentCarga($row['percentCarga']);

            return $serie;
        }

        public function delete(Serie $serie){
            try {
                $sql = "DELETE FROM series WHERE  idSeries = :idSeries";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idSeries", $serie->getIdSerie());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir serie <br> $e <br>";
            }
        }

        public function update(Serie $serie)
        {
            try {
                $sql = "UPDATE series set
                    
                    idSeries=:idSeries,
                    nivel=:nivel,
                    fase=:fase,
                    serie=:serie,
                    percentCarga=:percentCarga
                                
                    WHERE idSeries = :idSerie";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":nivel", $serie->getNivel());
                $p_sql->bindValue(":fase", $serie->getFase());
                $p_sql->bindValue(":serie", $serie->getSerie());
                $p_sql->bindValue(":percentCarga", $serie->getPercentCarga());
                
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        
    }

?>