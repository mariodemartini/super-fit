<?php
    
    Class TesteVO2{
        private $idTesteVO2;
        private $dataTeste;
        private $velocidadeInicial;
        private $fcRepouso;
        private $pressaoInicio;
        private $pressaoFinal;
        private $fcTeste;
        private $tempoTeste;
        private $velocidadeTeste;
        private $esforcoTeste;
        private $resultadoVO2;
        
        function getIdTesteVO2()
        {
            return $this->idTesteVO2;
        }
        function setIdTesteVO2($idTesteVO2)
        {
            $this->idTesteVO2 = $idTesteVO2;
        }

        function getDataTeste()
        {
            return $this->dataTeste;           
        }
        function setDataTeste($dataTeste)
        {
            $this->dataTeste = $dataTeste;
        }

        function getVelocidadeInicial()
        {
            return $this->velocidadeInicial;           
        }

        function setVelocidadeInicial($velocidadeInicial)
        {
            $this->velocidadeInicial = $velocidadeInicial;
        }

        function getFcRepouso()
        {
            return $this->fcRepouso;           
        }
        function setFcRepouso($fcRepouso)
        {
            $this->fcRepouso = $fcRepouso;
        }

        function getPressaoInicio()
        {
            return $this->pressaoInicio;           
        }
        function setPressaoInicio($pressaoInicio)
        {
            $this->pressaoInicio = $pressaoInicio;
        }

        function getPressaoFinal()
        {
            return $this->pressaoFinal;           
        }
        function setPressaoFinal($pressaoFinal)
        {
            $this->pressaoFinal = $pressaoFinal;
        }

        function getFcTeste()
        {
            return $this->fcTeste;           
        }
        function setFcTeste($fcTeste)
        {
            $this->fcTeste = $fcTeste;
        }

        function getTempoTeste()
        {
            return $this->tempoTeste;           
        }
        function setTempoTeste($tempoTeste)
        {
            $this->tempoTeste = $tempoTeste;
        }

        function getVelocidadeTeste()
        {
            return $this->velocidadeTeste;           
        }
        function setVelocidadeTeste($velocidadeTeste)
        {
            $this->velocidadeTeste = $velocidadeTeste;
        }

        function getEsforcoTeste()
        {
            return $this->esforcoTeste;           
        }
        function setEsforcoTeste($esforcoTeste)
        {
            $this->esforcoTeste = $esforcoTeste;
        }

        function getResultadoVO2()
        {
            return $this->resultadoVO2;           
        }
        function setResultadoVO2($resultadoVO2)
        {
            $this->resultadoVO2 = $resultadoVO2;
        }

    }
?>
