<?php

    Class Resultado{
        private $idResultado;
        private $peso;
        private $imc;
        private $abdomen;
        private $rcq;
        private $percentGord;
        private $massaGorda;
        private $percentMagra;
        private $massaMagra;
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

        function getPercentGord()
        {
            return $this->percentGord;           
        }       
        function setPercentGord($percentGord)
        {
            $this->percentGord = $percentGord;
        }

        function getMassaGorda()
        {
            return $this->massaGorda;           
        }       
        function setMassaGorda($massaGorda)
        {
            $this->massaGorda = $massaGorda;
        }

        function getPercentMagra()
        {
            return $this->percentMagra;           
        }       
        function setPercentMagra($percentMagra)
        {
            $this->percentMagra = $percentMagra;
        }

        function getMassaMagra()
        {
            return $this->massaMagra;           
        }       
        function setMassaMagra($massaMagra)
        {
            $this->massaMagra = $massaMagra;
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
