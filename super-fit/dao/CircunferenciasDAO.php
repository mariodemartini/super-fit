<?php

    class CircunferenciasDAO
    {
        public function create(Circunferencias $circunferencias){
            try {
                $sql = "INSERT INTO Circunferencias (
                    torax, cintura, abdomen, quadril, braco_direito, braco_esquerdo, antebraco_direito, antebraco_esquerdo, coxa_direita, coxa_esquerda, panturrilha_direita, panturrilha_esquerda, data_cadastro)
                    VALUES (
                    :torax, :cintura, :abdomen, :quadril, :braco_direito, :braco_esquerdo, :antebraco_direito, :antebraco_esquerdo, :coxa_direita, :coxa_esquerda, :panturrilha_direita, :panturrilha_esquerda, :data_cadastro)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":torax", $circunferencias->getTorax());
                $p_sql->bindValue(":cintura", $circunferencias->getCintura());
                $p_sql->bindValue(":abdomen", $circunferencias->getAbdomen());
                $p_sql->bindValue(":quadril", $circunferencias->getQuadril());
                $p_sql->bindValue(":braco_direito", $circunferencias->getBraco_direito());
                $p_sql->bindValue(":braco_esquerdo", $circunferencias->getBraco_esquerdo());
                $p_sql->bindValue(":antebraco_direito", $circunferencias->getAntebraco_direito());
                $p_sql->bindValue(":antebraco_esquerdo", $circunferencias->getAntebraco_esquerdo());
                $p_sql->bindValue(":coxa_direita", $circunferencias->getCoxa_direita());
                $p_sql->bindValue(":coxa_esquerda", $circunferencias->getCoxa_esquerda());
                $p_sql->bindValue(":panturrilha_direita", $circunferencias->getPanturrilha_direita());
                $p_sql->bindValue(":panturrilha_esquerda", $circunferencias->getPanturrilha_esquerda());
                $p_sql->bindValue(":data_cadastro", $circunferencias->getData_Cadastro());

                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir circunferencias <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM Circunferencias ORDER BY idCircunferencias ASC";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->listaCircunferencias($l);
                } 
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        private function listaCircunferencias($row) {
            $circunferencias = new Circunferencias();
            $circunferencias->setIdCircunferencias($row['idCircunferencias']);
            $circunferencias->setTorax($row['torax']);
            $circunferencias->setCintura($row['cintura']);
            $circunferencias->setAbdomen($row['abdomen']);
            $circunferencias->setQuadril($row['quadril']);
            $circunferencias->setBraco_direito($row['braco_direito']);
            $circunferencias->setBraco_esquerdo($row['braco_esquerdo']);
            $circunferencias->setAntebraco_direito($row['antebraco_direito']);
            $circunferencias->setAntebraco_esquerdo($row['antebraco_esquerdo']);
            $circunferencias->setCoxa_direita($row['coxa_direita']);
            $circunferencias->setCoxa_esquerda($row['coxa_esquerda']);
            $circunferencias->setPanturrilha_direita($row['panturrilha_direita']);
            $circunferencias->setPanturrilha_esquerda($row['panturrilha_esquerda']);

            return $circunferencias;
        }

        public function delete(Circunferencias $circunferencias){
            try {
                $sql = "DELETE FROM Circunferencias WHERE  idCircunferencias = :idCircunferencias";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idCircunferencias", $circunferencias->getIdCircunferencias());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir circunferencias <br> $e <br>";
            }
        }

        public function update(Circunferencias $circunferencias)
        {
            try {
                $sql = "UPDATE Circunferencias set
                    
                      idCircunferencias=:idCircunferencias,
                      torax=:torax,
                      cintura=:cintura,
                      abdomen=:abdomen,
                      quadril=:quadril,
                      braco_direito=:braco_direito,
                      braco_esquerdo=:braco_esquerdo,
                      antebraco_direito=:antebraco_direito,
                      antebraco_esquerdo=:antebraco_esquerdo,
                      coxa_direita=:coxa_direita,
                      coxa_esquerda=:coxa_esquerda,
                      panturrilha_direita=:panturrilha_direita,
                      panturrilha_esquerda=:panturrilha_esquerda,
                      data_cadastro=:data_cadastro
                                    
                      WHERE idCircunferencias = :idCircunferencias";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idCircunferencias", $circunferencias->getIdCircunferencias());
                $p_sql->bindValue(":torax", $circunferencias->getTorax());
                $p_sql->bindValue(":cintura", $circunferencias->getCintura());
                $p_sql->bindValue(":abdomen", $circunferencias->getAbdomen());
                $p_sql->bindValue(":quadril", $circunferencias->getQuadril());
                $p_sql->bindValue(":braco_direito", $circunferencias->getBraco_direito());
                $p_sql->bindValue(":braco_esquerdo", $circunferencias->getBraco_esquerdo());
                $p_sql->bindValue(":antebraco_direito", $circunferencias->getAntebraco_direito());
                $p_sql->bindValue(":antebraco_esquerdo", $circunferencias->getAntebraco_esquerdo());
                $p_sql->bindValue(":coxa_direita", $circunferencias->getCoxa_direita());
                $p_sql->bindValue(":coxa_esquerda", $circunferencias->getCoxa_esquerda());
                $p_sql->bindValue(":panturrilha_direita", $circunferencias->getPanturrilha_direita());
                $p_sql->bindValue(":panturrilha_esquerda", $circunferencias->getPanturrilha_esquerda());
                $p_sql->bindValue(":data_cadastro", $circunferencias->getData_Cadastro());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

  
    }

?>
