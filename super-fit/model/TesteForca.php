<?php

    Class TesteForca{
        private $idTesteForca;
        private $data_teste;
        private $carga_inicial;
        private $rep_inicial;
        private $meta_carga;
        private $meta_rep;
        private $primeira_tentativa;
        private $segunda_tentativa;
        private $terceira_tentativa;
        private $resultado_rep;
        private $resultado_kg;
        private Exercicio $exercicio;

        function getIdTesteForca()
        {
            return $this->idTesteForca;
        }
        function setIdTesteForca($idTesteForca)
        {
            $this->idTesteForca = $idTesteForca;
        }

        function getData_teste()
        {
            return $this->data_teste;           
        }
        function setData_teste($data_teste)
        {
            $this->data_teste = $data_teste;
        }

        function getCarga_inicial()
        {
            return $this->carga_inicial;           
        }
        function setCarga_inicial($carga_inicial)
        {
            $this->carga_inicial = $carga_inicial;
        }

        function getRep_inicial()
        {
            return $this->rep_inicial;           
        }
        function setRep_inicial($rep_inicial)
        {
            $this->rep_inicial = $rep_inicial;
        }

        function getMeta_carga()
        {
            return $this->meta_carga;           
        }
        function setMeta_carga($meta_carga)
        {
            $this->meta_carga = $meta_carga;
        }

        function getMeta_rep()
        {
            return $this->meta_rep;           
        }
        function setMeta_rep($meta_rep)
        {
            $this->meta_rep = $meta_rep;
        }

        function getPrimeira_tentativa()
        {
            return $this->primeira_tentativa;           
        }
        function setPrimeira_tentativa($primeira_tentativa)
        {
            $this->primeira_tentativa = $primeira_tentativa;
        }

        function getSegunda_tentativa()
        {
            return $this->segunda_tentativa;           
        }
        function setSegunda_tentativa($segunda_tentativa)
        {
            $this->segunda_tentativa = $segunda_tentativa;
        }

        function getTerceira_tentativa()
        {
            return $this->terceira_tentativa;           
        }
        function setTerceira_tentativa($terceira_tentativa)
        {
            $this->terceira_tentativa = $terceira_tentativa;
        }

        function getResultado_rep()
        {
            return $this->resultado_rep;           
        }
        function setResultado_rep($resultado_rep)
        {
            $this->resultado_rep = $resultado_rep;
        }

        function getResultado_kg()
        {
            return $this->resultado_kg;           
        }
        function setResultado_kg($resultado_kg)
        {
            $this->resultado_kg = $resultado_kg;
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