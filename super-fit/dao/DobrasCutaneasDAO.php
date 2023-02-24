<?php

    class DobrasCutaneasDAO
    {
        public function create(DobrasCutaneas $dobras_cutaneas){
            try {
                $sql = "INSERT INTO Dobras_Cutaneas (
                    peitoral, axilarMedia, abdominal, supraIliaca, subEscapular, tricipital, coxa, somatorio, data_cadastro)
                    VALUES (
                    :peitoral, :axilarMedia, :abdominal, :supraIliaca, :subEscapular, :tricipital, :coxa, :somatorio, :data_cadastro)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":peitoral", $dobras_cutaneas->getPeitoral());
                $p_sql->bindValue(":axilarMedia", $dobras_cutaneas->getAxilarMedia());
                $p_sql->bindValue(":abdominal", $dobras_cutaneas->getAbdominal());
                $p_sql->bindValue(":supraIliaca", $dobras_cutaneas->getSupraIliaca());
                $p_sql->bindValue(":subEscapular", $dobras_cutaneas->getSubEscapular());
                $p_sql->bindValue(":tricipital", $dobras_cutaneas->getTricipital());
                $p_sql->bindValue(":coxa", $dobras_cutaneas->getCoxa());
                $p_sql->bindValue(":somatorio", $dobras_cutaneas->getSomatorio());
                $p_sql->bindValue(":data_cadastro", $dobras_cutaneas->getData_Cadastro());

                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir dobra cutanea <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM Dobras_Cutaneas ORDER BY idDobras_Cutaneas ASC";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->listaDobrasCutaneas($l);
                } 
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        private function listaDobrasCutaneas($row) {
            $dobras_cutaneas = new DobrasCutaneas();
            $dobras_cutaneas->setIdDobrasCutaneas($row['idDobrasCutaneas']);
            $dobras_cutaneas->setPeitoral($row['peitoral']);
            $dobras_cutaneas->setAxilarMedia($row['axilarMedia']);
            $dobras_cutaneas->setAbdominal($row['abdominal']);
            $dobras_cutaneas->setSupraIliaca($row['supraIliaca']);
            $dobras_cutaneas->setSubEscapular($row['subEscapular']);
            $dobras_cutaneas->setTricipital($row['tricipital']);
            $dobras_cutaneas->setCoxa($row['coxa']);
            $dobras_cutaneas->setSomatorio($row['soma']);
            $dobras_cutaneas->setData_Cadastro($row['data_cadastro']);

            return $dobras_cutaneas;
        }

        public function delete(DobrasCutaneas $dobras_cutaneas){
            try {
                $sql = "DELETE FROM Dobras_Cutaneas WHERE  idDobras_Cutaneas = :idDobrasCutaneas";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idDobrasCutaneas", $dobras_cutaneas->getIdDobrasCutaneas());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir dobras cutaneas <br> $e <br>";
            }
        }

        public function update(DobrasCutaneas $dobras_cutaneas)
        {
            try {
                $sql = "UPDATE Dobras_Cutaneas set
                    
                    idDobras_Cutaneas=:idDobrasCutaneas,
                    peitoral=:peitoral,
                    axilarMedia=:axilarMedia,
                    abdominal=:abdominal,
                    supraIliaca=:supraIliaca,
                    subEscapular=:subEscapular,
                    tricipital=:tricipital,
                    coxa=:coxa,
                    data_cadastro=:data_cadastro
                                
                    WHERE idDobras_Cutaneas = :idDobrasCutaneas";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":peitoral", $dobras_cutaneas->getPeitoral());
                $p_sql->bindValue(":axilarMedia", $dobras_cutaneas->getAxilarMedia());
                $p_sql->bindValue(":abdominal", $dobras_cutaneas->getAbdominal());
                $p_sql->bindValue(":supraIliaca", $dobras_cutaneas->getSupraIliaca());
                $p_sql->bindValue(":subEscapular", $dobras_cutaneas->getSubEscapular());
                $p_sql->bindValue(":tricipital", $dobras_cutaneas->getTricipital());
                $p_sql->bindValue(":coxa", $dobras_cutaneas->getCoxa());
                $p_sql->bindValue(":data_cadastro", $dobras_cutaneas->getData_Cadastro());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        public function somaDobras($peito, $axilar, $abd, $supra, $sub, $tric, $coxa){
            
            $dobras_cutaneas = new DobrasCutaneas;

            $soma = $dobras_cutaneas->getPeitoral() + $dobras_cutaneas->getAxilarMedia() + $dobras_cutaneas->getAbdominal() + $dobras_cutaneas->getSupraIliaca() + $dobras_cutaneas->getSubEscapular() + $dobras_cutaneas->getTricipital() + $dobras_cutaneas->getCoxa();

            $dobras_cutaneas->setSomatorio($soma);
        }



        
    }

?>