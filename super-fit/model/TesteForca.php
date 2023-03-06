<?php

    Class TesteForca{
        private $idTesteForca;
        private $dataTeste;
        private $cargaInicial;
        private $cargaFinal;
        private $exercicio;
        private $aluno;

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

        function getCargaFinal()
        {
            return $this->cargaFinal;           
        }
        function setCargaFinal($cargaFinal)
        {
            $this->cargaFinal = $cargaFinal;
        }

        function getExercicio()
        {
            return $this->exercicio;           
        }
        function setExercicio($exercicio)
        {
            $this->exercicio = $exercicio;
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