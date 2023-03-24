<?php

    class MedidasDAO
    {
        public function create(Medidas $medidas){
            try {
                $sql = "INSERT INTO medidas (
                    dataCadastro, peso, altura, freqCard, pressaoArterial, torax, cintura, abdomen, quadril, bracoDireito, bracoEsquerdo, antebracoDireito, antebracoEsquerdo, coxaDireita, coxaEsquerda, panturrilhaDireita, panturrilhaEsquerda, peitoral, axilarMedia, abdominal, supraIliaca, subEscapular, tricipital, coxa, idAluno)
                    VALUES (
                    :dataCadastro, :peso, :altura, :freqCard, :pressaoArterial, :torax, :cintura, :abdomen, :quadril, :bracoDireito, :bracoEsquerdo, :antebracoDireito, :antebracoEsquerdo, :coxaDireita, :coxaEsquerda, :panturrilhaDireita, :panturrilhaEsquerda, :peitoral, :axilarMedia, :abdominal, :supraIliaca, :subEscapular, :tricipital, :coxa, :idAluno)";

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
                $p_sql->bindValue(":idAluno", $medidas->getAluno());
                       
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
            $medidas->setAluno($row['idAluno']);

            return $medidas;
        }

        public function delete(Medidas $medidas){
            try {
                $sql = "DELETE FROM medidas WHERE idMedidas = :idMedidas";
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

        private function lista($row) {
            $medidas = new Medidas();
            $medidas->setIdMedidas($row['idMedidas']);
            $medidas->setDataCadastro($row['dataCadastro']);
            $medidas->setPeso($row['peso']);
            $medidas->setAbdomen($row['abdomen']);

            return $medidas;
        }

        public function exibeData($id) {
            try {
                $sql = "SELECT medidas.dataCadastro FROM medidas, alunos WHERE medidas.idAluno = alunos.idAluno AND alunos.idAluno = '$id' ORDER BY medidas.idMedidas DESC LIMIT 1";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->lista($l);
                } 
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        public function exibeDados($id) {
            try {
                $sql = "SELECT medidas.idMedidas, medidas.dataCadastro, medidas.peso, medidas.abdomen FROM medidas, alunos WHERE medidas.idAluno = alunos.idAluno AND alunos.idAluno = '$id' ORDER BY medidas.idMedidas DESC LIMIT 1";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->lista($l);
                } 
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        public function rcq($id){
            $sql = "SELECT medidas.cintura, medidas.quadril FROM medidas, alunos WHERE medidas.idAluno = alunos.idAluno AND alunos.idAluno = '$id' ORDER BY medidas.idMedidas DESC LIMIT 1";
            $result = Conexao::getConexao()->query($sql);
            $result->execute();
            while ($linha1 = $result->fetch(PDO::FETCH_ASSOC)){
                $cintura = $linha1['cintura'];
                $quadril = $linha1['quadril'];
            }
            $rcq = $cintura / $quadril;

            $rcqFormatado = number_format($rcq, 2);

            print $rcqFormatado;     
        }

        public function imc($id){
            $sql = "SELECT medidas.peso, medidas.altura FROM medidas, alunos WHERE medidas.idAluno = alunos.idAluno AND alunos.idAluno = '$id' ORDER BY medidas.idMedidas DESC LIMIT 1";
            $result = Conexao::getConexao()->query($sql);
            $result->execute();
            while ($linha1 = $result->fetch(PDO::FETCH_ASSOC)){
                $peso = $linha1['peso'];
                $altura = $linha1['altura'];
            }
            $imc = $peso / ($altura**2);
            $imcFormatado = number_format($imc, 2);

            print $imcFormatado;   
        }

        public function percentGord($id, $sexo, $idade){
            $sql = "SELECT medidas.tricipital, medidas.axilarMedia, medidas.peitoral, medidas.abdominal, medidas.supraIliaca, medidas.subEscapular, medidas.coxa FROM medidas, alunos WHERE medidas.idAluno = alunos.idAluno AND alunos.idAluno = '$id' ORDER BY medidas.idMedidas DESC LIMIT 1";
            $result = Conexao::getConexao()->query($sql);
            $result->execute();
            while ($linha1 = $result->fetch(PDO::FETCH_ASSOC)){
                $tric = $linha1['tricipital'];
                $ax = $linha1['axilarMedia'];
                $peito = $linha1['peitoral'];
                $abd = $linha1['abdominal'];
                $supra = $linha1['supraIliaca'];
                $sub = $linha1['subEscapular'];
                $coxa = $linha1['coxa'];
            }
            $soma = $peito + $ax + $abd + $supra + $sub + $tric + $coxa;
            if($sexo == 'M' || $sexo == 'm'){
                $dc = 1.112 - 0.00043499*($soma) + 0.00000055*($soma**2) - 0.00028826*($idade);
                $percentGord = ((4.95 / $dc) - 4.5)*100;
            } else if ($sexo == 'F' || $sexo == 'f'){
                $dc = 1.0970 - 0.00046971*($soma) + 0.00000056*($soma**2) - 0.00012828*($idade);
                $percentGord = ((4.95 / $dc) - 4.5)*100;
            }
            $perc = number_format($percentGord, 2);
            print $perc;   
        } 
        
        public function massaGorda($peso, $perc){
            $massaGorda = ($peso * $perc) / 100;
            $pesoG = number_format($massaGorda, 2);
            print $pesoG;
        }

        public function massaMagra($peso, $pesoG){
            $massaMagra = ($peso - $pesoG); 
            $pesoM = number_format($massaMagra, 2);
            print $pesoM;
        }
        
        

    }

?>