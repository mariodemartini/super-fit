<?php
    
    class Circunferencias
    {
        private $idCircunferencias;
        private $torax;
        private $cintura;
        private $abdomen;
        private $quadril;
        private $braco_direito;
        private $braco_esquerdo;
        private $antebraco_direito;
        private $antebraco_esquerdo;
        private $coxa_direita;
        private $coxa_esquerda;
        private $panturrilha_direita;
        private $panturrilha_esquerda;
        private $data_cadastro;
        
        function getIdCircunferencias()
        {
            return $this->idCircunferencias;
        }
        function setIdCircunferencias($idCircunferencias)
        {
            $this->idCircunferencias = $idCircunferencias;
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

        function getBraco_direito()
        {
            return $this->braco_direito;           
        }
        function setBraco_esquerdo($braco_esquerdo)
        {
            $this->braco_esquerdo = $braco_esquerdo;
        }

        function getPeso()
        {
            return $this->peso;           
        }
        function setPeso($peso)
        {
            $this->peso = $peso;
        }

    }
?>
