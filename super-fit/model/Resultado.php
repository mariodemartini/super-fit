<?php

    Class Resultado{
        private $idResultado;
        private $peso;
        private $imc;
        private $abdomen;
        private $rcq;
        private $percent_gord;
        private $massa_gorda;
        private $percent_magra;
        private $massa_magra;
        private $fc;
        private $vo;

        function getIdResultado()
        {
            return $this->idResultado;           
        }

        function setIdResultado($idResultado)
        {
            $this->idResultado = $idResultado;
        }

        function getPeso()
        {
            return $this->peso;           
        }

        function setPeso($peso)
        {
            $this->peso = $peso;
        }

        function getIMC()
        {
            return $this->imc;           
        }

        function setIMC($imc)
        {
            $this->imc = $imc;
        }

        function getAbdomen()
        {
            return $this->abdomen;           
        }

        function setAbdomen($abdomen)
        {
            $this->abdomen = $abdomen;
        }

        function getRcq()
        {
            return $this->rcq;           
        }       
        function setRcq($rcq)
        {
            $this->rcq = $rcq;
        }

        function getPercent_gord()
        {
            return $this->percent_gord;           
        }       
        function setPercent_gord($percent_gord)
        {
            $this->percent_gord = $percent_gord;
        }

        function getMassa_gorda()
        {
            return $this->massa_gorda;           
        }       
        function setMassa_gorda($massa_gorda)
        {
            $this->massa_gorda = $massa_gorda;
        }

        function getPercent_magra()
        {
            return $this->percent_magra;           
        }       
        function setPercent_magra($percent_magra)
        {
            $this->percent_magra = $percent_magra;
        }

        function getMassa_magra()
        {
            return $this->massa_magra;           
        }       
        function setMassa_magra($massa_magra)
        {
            $this->massa_magra = $massa_magra;
        }

        function getFc()
        {
            return $this->fc;           
        }       
        function setFc($fc)
        {
            $this->fc = $fc;
        }

        function getVo()
        {
            return $this->vo;           
        }       
        function setVo($vo)
        {
            $this->vo = $vo;
        }
        
    }

?>
