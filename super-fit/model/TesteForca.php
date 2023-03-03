<?php

    Class TesteForca{
        private $idTesteForca;
        private $dataTeste;
        private $cargaInicial;
        private $repInicial;
        private $metaCarga;
        private $metaRep;
        private $primeiraTentativa;
        private $segundaTentativa;
        private $terceiraTentativa;
        private $resultadoRep;
        private $resultadoKg;
        private $exercicio;

        function getIdTesteForca()
        {
            return $this->idTesteForca;
        }
        function setIdTesteForca($idTesteForca)
        {
            $this->idTesteForca = $idTesteForca;
        }

        function getDataTeste()
        {
            return $this->dataTeste;           
        }
        function setDataTeste($dataTeste)
        {
            $this->dataTeste = $dataTeste;
        }

        function getCargaInicial()
        {
            return $this->cargaInicial;           
        }
        function setCargaInicial($cargaInicial)
        {
            $this->cargaInicial = $cargaInicial;
        }

        function getRepInicial()
        {
            return $this->repInicial;           
        }
        function setRepInicial($repInicial)
        {
            $this->repInicial = $repInicial;
        }

        function getMetaCarga()
        {
            return $this->metaCarga;           
        }
        function setMetaCarga($metaCarga)
        {
            $this->metaCarga = $metaCarga;
        }

        function getMetaRep()
        {
            return $this->metaRep;           
        }
        function setMetaRep($metaRep)
        {
            $this->metaRep = $metaRep;
        }

        function getPrimeiraTentativa()
        {
            return $this->primeiraTentativa;           
        }
        function setPrimeiraTentativa($primeiraTentativa)
        {
            $this->primeiraTentativa = $primeiraTentativa;
        }

        function getSegundaTentativa()
        {
            return $this->segundaTentativa;           
        }
        function setSegundaTentativa($segundaTentativa)
        {
            $this->segundaTentativa = $segundaTentativa;
        }

        function getTerceiraTentativa()
        {
            return $this->terceiraTentativa;           
        }
        function setTerceiraTentativa($terceiraTentativa)
        {
            $this->terceiraTentativa = $terceiraTentativa;
        }

        function getResultadoRep()
        {
            return $this->resultadoRep;           
        }
        function setResultadoRep($resultadoRep)
        {
            $this->resultadoRep = $resultadoRep;
        }

        function getResultadoKg()
        {
            return $this->resultadoKg;           
        }
        function setResultadoKg($resultadoKg)
        {
            $this->resultadoKg = $resultadoKg;
        }

        function getExercicio()
        {
            return $this->exercicio;           
        }
        function setExercicio($exercicio)
        {
            $this->exercicio = $exercicio;
        }

    }
?>