<?php
    
    Class TesteVO2{
        private $idTesteVO2;
        private $dataTeste;
        private $velocidadeInicial;
        private $velocidadeFinal;
        private $fcInicial;
        private $fcFinal;
        private $tempoTeste;
        private $esforcoTeste;
        private $resultadoVO2;
        private $aluno;
        
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

        function getVelocidadeFinal()
        {
            return $this->velocidadeFinal;           
        }

        function setVelocidadeFinal($velocidadeFinal)
        {
            $this->velocidadeFinal = $velocidadeFinal;
        }

        function getFcInicial()
        {
            return $this->fcInicial;           
        }
        function setFcInicial($fcInicial)
        {
            $this->fcInicial = $fcInicial;
        }

        function getFcFinal()
        {
            return $this->fcFinal;           
        }
        function setFcFinal($fcFinal)
        {
            $this->fcFinal = $fcFinal;
        }

        function getTempoTeste()
        {
            return $this->tempoTeste;           
        }
        function setTempoTeste($tempoTeste)
        {
            $this->tempoTeste = $tempoTeste;
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
