<?php
    
    Class Serie{
        private $idSerie;
        private $nivel;
        private $fase;
        private $serie;
        private $percentCarga;

        function getIdSerie()
        { 
            return $this->idSerie; 
        }

        function setIdSerie($idSerie)
        { 
            $this->idSerie = $idSerie; 
        }

        function getNivel()
        { 
            return $this->nivel; 
        }

        function setNivel($nivel)
        { 
            $this->nivel = $nivel; 
        }

        function getFase()
        { 
            return $this->fase; 
        }

        function setFase($fase)
        { 
            $this->fase = $fase; 
        }

        function getSerie()
        { 
            return $this->serie; 
        }

        function setSerie($serie)
        { 
            $this->serie = $serie; 
        }

        function getPercentCarga()
        { 
            return $this->percentCarga; 
        }

        function setPercentCarga($percentCarga)
        { 
            $this->percentCarga = $percentCarga; 
        }

    }

?>
