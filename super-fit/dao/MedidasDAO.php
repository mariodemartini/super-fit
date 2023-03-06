<?php

    class MedidasDAO
    {
        public function create(Medidas $medidas){
            try {
                $sql = "INSERT INTO medidas (
                    dataCadastro, peso, altura, freqCard, pressaoArterial, torax, cintura, abdomen, quadril, bracoDireito, bracoEsquerdo, antebracoDireito, antebracoEsquerdo, coxaDireita, coxaEsquerda, panturrilhaDireita, panturrilhaEsquerda, peitoral, axilarMedia, abdominal, supraIliaca, subEscapular, tricipital, coxa, imc, rcq, percentGord, massaGorda, massaMagra, idAluno)
                    VALUES (
                    :dataCadastro, :peso, :altura, :freqCard, :pressaoArterial, :torax, :cintura, :abdomen, :quadril, :bracoDireito, :bracoEsquerdo, :antebracoDireito, :antebracoEsquerdo, :coxaDireita, :coxaEsquerda, :panturrilhaDireita, :panturrilhaEsquerda, :peitoral, :axilarMedia, :abdominal, :supraIliaca, :subEscapular, :tricipital, :coxa, :imc, :rcq, :percentGord, :massaGorda, :massaMagra, :nome)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":peso", $medidas->getPeso());
                $p_sql->bindValue(":dataCadastro", $medidas->getDataCadastro());
                $p_sql->bindValue(":altura", $medidas->getAltura());
                $p_sql->bindValue(":freqCard", $medidas->getFreqCard());
                $p_sql->bindValue(":pressaoArterial", $medidas->getPressaoArterial());
                $p_sql->bindValue(":torax", $medidas->getTorax());
                $p_sql->bindValue(":cintura", $medidas->getCintura());
                $p_sql->bindValue(":abdomen", $medidas->getAbdomen());
                $p_sql->bindValue(":quadril", $medidas->getQuadril());
                $p_sql->bindValue(":bracoDireito", $medidas->getBracoDireito());
                $p_sql->bindValue(":bracoEsquerdo", $medidas->getBracoEsquerdo());
                $p_sql->bindValue(":antebracoDireito", $medidas->getAntebracoDireito());
                $p_sql->bindValue(":antebracoEsquerdo", $medidas->getAntebracoEsquerdo());
                $p_sql->bindValue(":coxaDireita", $medidas->getCoxaDireita());
                $p_sql->bindValue(":coxaEsquerda", $medidas->getCoxaEsquerda());
                $p_sql->bindValue(":panturrilhaDireita", $medidas->getPanturrilhaDireita());
                $p_sql->bindValue(":panturrilhaEsquerda", $medidas->getPanturrilhaEsquerda());
                $p_sql->bindValue(":peitoral", $medidas->getPeitoral());
                $p_sql->bindValue(":axilarMedia", $medidas->getAxilarMedia());
                $p_sql->bindValue(":abdominal", $medidas->getAbdominal());
                $p_sql->bindValue(":supraIliaca", $medidas->getSupraIliaca());
                $p_sql->bindValue(":subEscapular", $medidas->getSubEscapular());
                $p_sql->bindValue(":tricipital", $medidas->getTricipital());
                $p_sql->bindValue(":coxa", $medidas->getCoxa());
                $p_sql->bindValue(":imc", $medidas->getImc());
                $p_sql->bindValue(":rcq", $medidas->getRcq());
                $p_sql->bindValue(":percentGord", $medidas->getPercentGord());
                $p_sql->bindValue(":massaGorda", $medidas->getMassaGorda());
                $p_sql->bindValue(":massaMagra", $medidas->getMassaMagra());
                $p_sql->bindValue(":nome", $medidas->getAluno());
                       
                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir medidas <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM medidas ORDER BY idMedidas ASC";
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
            $medidas->setDataCadastro($row['dataCadastro']);
            $medidas->setPeso($row['peso']);
            $medidas->setAltura($row['altura']);
            $medidas->setFreqCard($row['freqCard']);
            $medidas->setPressaoArterial($row['pressaoArterial']);
            $medidas->setTorax($row['torax']);
            $medidas->setCintura($row['cintura']);
            $medidas->setAbdomen($row['abdomen']);
            $medidas->setQuadril($row['quadril']);
            $medidas->setBracoDireito($row['bracoDireito']);
            $medidas->setBracoEsquerdo($row['bracoEsquerdo']);
            $medidas->setAntebracoDireito($row['antebracoDireito']);
            $medidas->setAntebracoEsquerdo($row['antebracoEsquerdo']);
            $medidas->setCoxaDireita($row['coxaDireita']);
            $medidas->setCoxaEsquerda($row['coxaEsquerda']);
            $medidas->setPanturrilhaDireita($row['panturrilhaDireita']);
            $medidas->setPanturrilhaEsquerda($row['panturrilhaEsquerda']);
            $medidas->setPeitoral($row['peitoral']);
            $medidas->setAxilarMedia($row['axilarMedia']);
            $medidas->setAbdominal($row['abdominal']);
            $medidas->setSupraIliaca($row['supraIliaca']);
            $medidas->setSubEscapular($row['subEscapular']);
            $medidas->setTricipital($row['tricipital']);
            $medidas->setCoxa($row['coxa']);
            $medidas->setImc(($row['peso']), ($row['altura']));
            $medidas->setRcq(($row['cintura']), ($row['quadril']));
            $medidas->setPercentGord($row['percentGord']);
            $medidas->setMassaGorda($row['massaGorda']);
            $medidas->setMassaMagra($row['massaMagra']);
            $medidas->setAluno($row['nome']);

            return $medidas;
        }

        public function delete(Medidas $medidas){
            try {
                $sql = "DELETE FROM medidas WHERE  idMedidas = :idMedidas";
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
                $sql = "UPDATE medidas set
                    
                    idMedidas=:idMedidas,
                    dataCadastro=:dataCadastro,
                    peso=:peso,
                    altura=:altura,
                    freqCard=:freqCard,
                    pressaoArterial=:pressaoArterial,
                    torax=:torax,
                    cintura=:cintura,
                    abdomen=:abdomen,
                    quadril=:quadril,
                    bracoDireito=:bracoDireito,
                    bracoEsquerdo=:bracoEsquerdo,
                    antebracoDireito=:antebracoDireito,
                    antebracoEsquerdo=:antebracoEsquerdo,
                    coxaDireita=:coxaDireita,
                    coxaEsquerda=:coxaEsquerda,
                    panturrilhaDireita=:panturrilhaEireita,
                    panturrilhaEsquerda=:panturrilhaEsquerda,
                    peitoral=:peitoral,
                    axilarMedia=:axilarMedia,
                    abdominal=:abdominal,
                    supraIliaca=:supraIliaca,
                    subEscapular=:subEscapular,
                    tricipital=:tricipital,
                    coxa=:coxa
                                
                    WHERE idMedidas = :idMedidas";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":dataCadastro", $medidas->getDataCadastro());
                $p_sql->bindValue(":peso", $medidas->getPeso());
                $p_sql->bindValue(":altura", $medidas->getAltura());
                $p_sql->bindValue(":freqCard", $medidas->getFreqCard());
                $p_sql->bindValue(":pressaoArterial", $medidas->getPressaoArterial());
                $p_sql->bindValue(":torax", $medidas->getTorax());
                $p_sql->bindValue(":cintura", $medidas->getCintura());
                $p_sql->bindValue(":abdomen", $medidas->getAbdomen());
                $p_sql->bindValue(":quadril", $medidas->getQuadril());
                $p_sql->bindValue(":bracoDireito", $medidas->getBracoDireito());
                $p_sql->bindValue(":bracoEsquerdo", $medidas->getBracoEsquerdo());
                $p_sql->bindValue(":antebracoDireito", $medidas->getAntebracoDireito());
                $p_sql->bindValue(":antebracoEsquerdo", $medidas->getAntebracoEsquerdo());
                $p_sql->bindValue(":coxaDireita", $medidas->getCoxaDireita());
                $p_sql->bindValue(":coxaEsquerda", $medidas->getCoxaEsquerda());
                $p_sql->bindValue(":panturrilhaDireita", $medidas->getPanturrilhaDireita());
                $p_sql->bindValue(":panturrilhaEsquerda", $medidas->getPanturrilhaEsquerda());
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