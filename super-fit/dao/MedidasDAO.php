<?php

    class MedidasDAO
    {
        public function create(Medidas $medidas){
            try {
                $sql = "INSERT INTO medidas (
                    Data_Cadastro, Peso, Altura, freq_card, pressao_arterial, torax, cintura, abdomen, quadril, braco_direito, braco_esquerdo, antebraco_direito, antebraco_esquerdo, coxa_direita, coxa_esquerda, panturrilha_direita, panturrilha_esquerda, peitoral, axilarMedia, abdominal, supraIliaca, Sub_Escapular, tricipital, coxa)
                    VALUES (
                    :data_cadastro, :peso, :altura, :freq_card, :pressao_arterial, :torax, :cintura, :abdomen, :quadril, :braco_direito, :braco_esquerdo, :antebraco_direito, :antebraco_esquerdo, :coxa_direita, :coxa_esquerda, :panturrilha_direita, :panturrilha_esquerda, :peitoral, :axilarMedia, :abdominal, :supraIliaca, :subEscapular, :tricipital, :coxa)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":peso", $medidas->getPeso());
                $p_sql->bindValue(":data_cadastro", $medidas->getData_Cadastro());
                $p_sql->bindValue(":altura", $medidas->getAltura());
                $p_sql->bindValue(":freq_card", $medidas->getFreq_card());
                $p_sql->bindValue(":pressao_arterial", $medidas->getPressao_arterial());
                $p_sql->bindValue(":torax", $medidas->getTorax());
                $p_sql->bindValue(":cintura", $medidas->getCintura());
                $p_sql->bindValue(":abdomen", $medidas->getAbdomen());
                $p_sql->bindValue(":quadril", $medidas->getQuadril());
                $p_sql->bindValue(":braco_direito", $medidas->getBraco_direito());
                $p_sql->bindValue(":braco_esquerdo", $medidas->getBraco_esquerdo());
                $p_sql->bindValue(":antebraco_direito", $medidas->getAntebraco_direito());
                $p_sql->bindValue(":antebraco_esquerdo", $medidas->getAntebraco_esquerdo());
                $p_sql->bindValue(":coxa_direita", $medidas->getCoxa_direita());
                $p_sql->bindValue(":coxa_esquerda", $medidas->getCoxa_esquerda());
                $p_sql->bindValue(":panturrilha_direita", $medidas->getPanturrilha_direita());
                $p_sql->bindValue(":panturrilha_esquerda", $medidas->getPanturrilha_esquerda());
                $p_sql->bindValue(":peitoral", $medidas->getPeitoral());
                $p_sql->bindValue(":axilarMedia", $medidas->getAxilarMedia());
                $p_sql->bindValue(":abdominal", $medidas->getAbdominal());
                $p_sql->bindValue(":supraIliaca", $medidas->getSupraIliaca());
                $p_sql->bindValue(":subEscapular", $medidas->getSubEscapular());
                $p_sql->bindValue(":tricipital", $medidas->getTricipital());
                $p_sql->bindValue(":coxa", $medidas->getCoxa());
                       
                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir medidas <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM Medidas ORDER BY idMedidas ASC";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->listaMedidas($l);
                } 
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        private function listaMedidas($row) {
            $medidas = new Medidas();
            $medidas->setIdMedidas($row['idMedidas']);
            $medidas->setData_Cadastro($row['data_cadastro']);
            $medidas->setPeso($row['peso']);
            $medidas->setAltura($row['altura']);
            $medidas->setFreq_card($row['freq_card']);
            $medidas->setPressao_arterial($row['pressao_arterial']);
            $medidas->setTorax($row['torax']);
            $medidas->setCintura($row['cintura']);
            $medidas->setAbdomen($row['abdomen']);
            $medidas->setQuadril($row['quadril']);
            $medidas->setBraco_direito($row['braco_direito']);
            $medidas->setBraco_esquerdo($row['braco_esquerdo']);
            $medidas->setAntebraco_direito($row['antebraco_direito']);
            $medidas->setAntebraco_esquerdo($row['antebraco_esquerdo']);
            $medidas->setCoxa_direita($row['coxa_direita']);
            $medidas->setCoxa_esquerda($row['coxa_esquerda']);
            $medidas->setPanturrilha_direita($row['panturrilha_direita']);
            $medidas->setPanturrilha_esquerda($row['panturrilha_esquerda']);
            $medidas->setPeitoral($row['peitoral']);
            $medidas->setAxilarMedia($row['axilarMedia']);
            $medidas->setAbdominal($row['abdominal']);
            $medidas->setSupraIliaca($row['supraIliaca']);
            $medidas->setSubEscapular($row['subEscapular']);
            $medidas->setTricipital($row['tricipital']);
            $medidas->setCoxa($row['coxa']);

            return $medidas;
        }

        public function delete(Medidas $medidas){
            try {
                $sql = "DELETE FROM Medidas WHERE  idMedidas = :idMedidas";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idMedidas", $medidas->getIdMedidas());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir medidas <br> $e <br>";
            }
        }

        public function update(Medidas $medidas)
        {
            try {
                $sql = "UPDATE Medidas set
                    
                    idMedidas=:idMedidas,
                    data_cadastro=:data_cadastro,
                    peso=:peso,
                    altura=:altura,
                    freq_card=:freq_card,
                    pressao_arterial=:pressao_arterial,
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
                    peitoral=:peitoral,
                    axilarMedia=:axilarMedia,
                    abdominal=:abdominal,
                    supraIliaca=:supraIliaca,
                    subEscapular=:subEscapular,
                    tricipital=:tricipital,
                    coxa=:coxa
                                
                    WHERE idMedidas = :idMedidas";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":data_cadastro", $medidas->getData_Cadastro());
                $p_sql->bindValue(":peso", $medidas->getPeso());
                $p_sql->bindValue(":altura", $medidas->getAltura());
                $p_sql->bindValue(":freq_card", $medidas->getFreq_card());
                $p_sql->bindValue(":pressao_arterial", $medidas->getPressao_arterial());
                $p_sql->bindValue(":torax", $medidas->getTorax());
                $p_sql->bindValue(":cintura", $medidas->getCintura());
                $p_sql->bindValue(":abdomen", $medidas->getAbdomen());
                $p_sql->bindValue(":quadril", $medidas->getQuadril());
                $p_sql->bindValue(":braco_direito", $medidas->getBraco_direito());
                $p_sql->bindValue(":braco_esquerdo", $medidas->getBraco_esquerdo());
                $p_sql->bindValue(":antebraco_direito", $medidas->getAntebraco_direito());
                $p_sql->bindValue(":antebraco_esquerdo", $medidas->getAntebraco_esquerdo());
                $p_sql->bindValue(":coxa_direita", $medidas->getCoxa_direita());
                $p_sql->bindValue(":coxa_esquerda", $medidas->getCoxa_esquerda());
                $p_sql->bindValue(":panturrilha_direita", $medidas->getPanturrilha_direita());
                $p_sql->bindValue(":panturrilha_esquerda", $medidas->getPanturrilha_esquerda());
                $p_sql->bindValue(":peitoral", $medidas->getPeitoral());
                $p_sql->bindValue(":axilarMedia", $medidas->getAxilarMedia());
                $p_sql->bindValue(":abdominal", $medidas->getAbdominal());
                $p_sql->bindValue(":supraIliaca", $medidas->getSupraIliaca());
                $p_sql->bindValue(":subEscapular", $medidas->getSubEscapular());
                $p_sql->bindValue(":tricipital", $medidas->getTricipital());
                $p_sql->bindValue(":coxa", $medidas->getCoxa());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }
        
    }

?>