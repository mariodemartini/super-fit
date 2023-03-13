<?php

    Class Medidas{
        private $idMedidas;
        private $dataCadastro;
        private $peso;
        private $altura;
        private $freqCard;
        private $pressaoArterial;
        private $torax;
        private $cintura;
        private $abdomen;
        private $quadril;
        private $bracoDireito;
        private $bracoEsquerdo;
        private $antebracoDireito;
        private $antebracoEsquerdo;
        private $coxaDireita;
        private $coxaEsquerda;
        private $panturrilhaDireita;
        private $panturrilhaEsquerda;
        private $peitoral;
        private $axilarMedia;
        private $abdominal;
        private $supraIliaca;
        private $subEscapular;
        private $tricipital;
        private $coxa;
        private $imc;
        private $rcq;
        private $percentGord;
        private $massaGorda;
        private $massaMagra;
        private $aluno;
        
        function getIdMedidas()
        {
            return $this->idMedidas;           
        }

        function setIdMedidas($idMedidas)
        {
            $this->idMedidas = $idMedidas;
        }

        function getDataCadastro()
        {
            return $this->dataCadastro;           
        }       
        function setDataCadastro($dataCadastro)
        {
            $this->dataCadastro = $dataCadastro;
        }

        function getPeso()
        {
            return $this->peso;           
        }

        function setPeso($peso)
        {
            $this->peso = $peso;
        }

        function getAltura()
        {
            return $this->altura;           
        }

        function setAltura($altura)
        {
            $this->altura = $altura;
        }

        function getFreqCard()
        {
            return $this->freqCard;           
        }

        function setFreqCard($freqCard)
        {
            $this->freqCard = $freqCard;
        }

        function getPressaoArterial()
        {
            return $this->pressaoArterial;           
        }

        function setPressaoArterial($pressaoArterial)
        {
            $this->pressaoArterial = $pressaoArterial;
        }

        function getTorax()
        {
            return $this->torax;           
        }
        function setTorax($torax)
        {
            $this->torax = $torax;
        }

        function getCintura()
        {
            return $this->cintura;           
        }

        function setCintura($cintura)
        {
            $this->cintura = $cintura;
        }

        function getAbdomen()
        {
            return $this->abdomen;           
        }
        function setAbdomen($abdomen)
        {
            $this->abdomen = $abdomen;
        }

        function getQuadril()
        {
            return $this->quadril;           
        }
        function setQuadril($quadril)
        {
            $this->quadril = $quadril;
        }

        function getBracoDireito()
        {
            return $this->bracoDireito;           
        }
        function setBracoDireito($bracoDireito)
        {
            $this->bracoDireito = $bracoDireito;
        }

        function getBracoEsquerdo()
        {
            return $this->bracoEsquerdo;           
        }
        function setBracoEsquerdo($bracoEsquerdo)
        {
            $this->bracoEsquerdo = $bracoEsquerdo;
        }

        function getAntebracoDireito()
        {
            return $this->antebracoDireito;           
        }
        function setAntebracoDireito($antebracoDireito)
        {
            $this->antebracoDireito = $antebracoDireito;
        }

        function getAntebracoEsquerdo()
        {
            return $this->antebracoEsquerdo;           
        }
        function setAntebracoEsquerdo($antebracoEsquerdo)
        {
            $this->antebracoEsquerdo = $antebracoEsquerdo;
        }

        function getCoxaDireita()
        {
            return $this->coxaDireita;           
        }
        function setCoxaDireita($coxaDireita)
        {
            $this->coxaDireita = $coxaDireita;
        }

        function getCoxaEsquerda()
        {
            return $this->coxaEsquerda;           
        }
        function setCoxaEsquerda($coxaEsquerda)
        {
            $this->coxaEsquerda = $coxaEsquerda;
        }

        function getPanturrilhaDireita()
        {
            return $this->panturrilhaDireita;           
        }
        function setPanturrilhaDireita($panturrilhaDireita)
        {
            $this->panturrilhaDireita = $panturrilhaDireita;
        }

        function getPanturrilhaEsquerda()
        {
            return $this->panturrilhaEsquerda;           
        }
        function setPanturrilhaEsquerda($panturrilhaEsquerda)
        {
            $this->panturrilhaEsquerda = $panturrilhaEsquerda;
        }

        function getPeitoral()
        {
            return $this->peitoral;
        }
        function setPeitoral($peitoral)
        {
            $this->peitoral = $peitoral;
        }

        function getAxilarMedia()
        {
            return $this->axilarMedia;
        }
        function setAxilarMedia($axilarMedia)
        {
            $this->axilarMedia = $axilarMedia;
        }

        function getAbdominal()
        {
            return $this->abdominal;
        }
        function setAbdominal($abdominal)
        {
            $this->abdominal = $abdominal;
        }

        function getSupraIliaca()
        {
            return $this->supraIliaca;
        }
        function setSupraIliaca($supraIliaca)
        {
            $this->supraIliaca = $supraIliaca;  
        }

        function getSubEscapular()
        {
            return $this->subEscapular;
        }
        function setSubEscapular($subEscapular)
        {
            $this->subEscapular = $subEscapular;  
        }

        function getTricipital()
        {
            return $this->tricipital;
        }
        function setTricipital($tricipital)
        {
            $this->tricipital = $tricipital;  
        }

        function getCoxa()
        {
            return $this->coxa;
        }
        function setCoxa($coxa)
        {
            $this->coxa = $coxa;  
        }

        function getImc()
        {
            return $this->imc;
        }
        function setImc($peso, $altura)
        {
            $imc = $peso / ($altura**2);

            $this->imc = number_format($imc, 2);  
        }

        function getRcq()
        {
            return $this->rcq;
        }
        function setRcq($cintura, $quadril)
        {
            $rcq = $cintura / $quadril;
            
            $this->rcq = number_format($rcq, 2);  
        }

        function getPercentGord()
        {
            return $this->percentGord;
        }
        function setPercentGord($sexo, $idade)
        {
            $peito = $this->getPeitoral();
            $ax = $this->getAxilarMedia();
            $abd = $this->getAbdominal();
            $supra = $this->getSupraIliaca();
            $sub = $this->getSubEscapular();
            $tri = $this->getTricipital();
            $coxa = $this->getCoxa();

            $soma = $peito + $ax + $abd + $supra + $sub + $tri + $coxa;

            if($sexo == 'M' || $sexo == 'm'){
                $dc = 1.112 - 0.00043499*($soma) + 0.00000055*($soma**2) - 0.00028826*($idade);
                $percentGord = ((4.95 / $dc) - 4.5)*100;

            } else if ($sexo == 'F' || $sexo == 'f'){
                $dc = 1.0970 - 0.00046971*($soma) + 0.00000056*($soma**2) - 0.00012828*($idade);
                $percentGord = ((4.95 / $dc) - 4.5)*100;
            }

            $this->percentGord = number_format($percentGord, 2);
        }

        function getMassaGorda()
        {
            return $this->massaGorda;
        }
        function setMassaGorda($peso)
        {
            $percentual = $this->getPercentGord();

            $massaGorda = ($peso * $percentual) / 100;

            $this->massaGorda = number_format($massaGorda, 2);  
        }

        function getMassaMagra()
        {
            return $this->massaMagra;
        }
        function setMassaMagra($peso, $pesoGordo)
        {
            $pesoGordo = $this->getMassaGorda();

            $massaMagra = $peso - ($pesoGordo);

            $this->massaMagra = number_format($massaMagra, 2);
        }

        function getAluno()
        {
            return $this->aluno;
        }
        function setAluno($aluno)
        {
            $this->aluno = $aluno;  
        }



        
    }

?>
