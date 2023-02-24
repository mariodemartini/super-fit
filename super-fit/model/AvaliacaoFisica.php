<?php

    Class AvaliacaoFisica{
        private $idAvaliacaoFisica;
        private $usuario;
        private $anamnese;
        private $dadosIniciais;
        private $circunferencias;
        private $dobrasCutaneas;
        private $testeVo2;
        private $testeForca;
        private $resultado;
        private $professor;

        function getIdAvaliacaoFisica()
        {
            return $this->idAvaliacaoFisica;           
        }

        function setIdAvaliacaoFisica($idAvaliacaoFisica)
        {
            $this->idAvaliacaoFisica = $idAvaliacaoFisica;
        }

        function getUsuario()
        {
            return $this->usuario;           
        }

        function setUsuario($usuario)
        {
            $this->usuario = $usuario;
        }

        function getAnamnese()
        {
            return $this->anamnese;           
        }

        function setAnamnese($anamnese)
        {
            $this->anamnese = $anamnese;
        }

        function getDadosIniciais()
        {
            return $this->dadosIniciais;           
        }

        function setDadosIniciais($dadosIniciais)
        {
            $this->dadosIniciais = $dadosIniciais;
        }

        function getCircunferencias()
        {
            return $this->circunferencias;           
        }

        function setCircunferencias($circunferencias)
        {
            $this->circunferencias = $circunferencias;
        }

        function getDobrasCutaneas()
        {
            return $this->dobrasCutaneas;           
        }       
        function setDobrasCutaneas($dobrasCutaneas)
        {
            $this->dobrasCutaneas = $dobrasCutaneas;
        }

        function getTesteVo2()
        {
            return $this->testeVo2;           
        }       
        function setTesteVo2($testeVo2)
        {
            $this->testeVo2 = $testeVo2;
        }

        function getTesteForca()
        {
            return $this->testeForca;           
        }       
        function setTesteForca($testeForca)
        {
            $this->testeForca = $testeForca;
        }

        function getResultado()
        {
            return $this->resultado;           
        }       
        function setResultado($resultado)
        {
            $this->resultado = $resultado;
        }

        function getProfessor()
        {
            return $this->professor;           
        }       
        function setProfessor($professor)
        {
            $this->professor = $professor;
        }
    }

?>
