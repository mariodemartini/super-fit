<?php
    
    Class Circunferencias{
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
        function setBraco_direito($braco_direito)
        {
            $this->braco_direito = $braco_direito;
        }

        function getBraco_esquerdo()
        {
            return $this->braco_esquerdo;           
        }
        function setBraco_esquerdo($braco_esquerdo)
        {
            $this->braco_esquerdo = $braco_esquerdo;
        }

        function getAntebraco_direito()
        {
            return $this->antebraco_direito;           
        }
        function setAntebraco_direito($antebraco_direito)
        {
            $this->antebraco_direito = $antebraco_direito;
        }

        function getAntebraco_esquerdo()
        {
            return $this->antebraco_esquerdo;           
        }
        function setAntebraco_esquerdo($antebraco_esquerdo)
        {
            $this->antebraco_esquerdo = $antebraco_esquerdo;
        }

        function getCoxa_direita()
        {
            return $this->coxa_direita;           
        }
        function setCoxa_direita($coxa_direita)
        {
            $this->coxa_direita = $coxa_direita;
        }

        function getCoxa_esquerda()
        {
            return $this->coxa_esquerda;           
        }
        function setCoxa_esquerda($coxa_esquerda)
        {
            $this->coxa_esquerda = $coxa_esquerda;
        }

        function getPanturrilha_direita()
        {
            return $this->panturrilha_direita;           
        }
        function setPanturrilha_direita($panturrilha_direita)
        {
            $this->panturrilha_direita = $panturrilha_direita;
        }

        function getPanturrilha_esquerda()
        {
            return $this->antebraco_esquerdo;           
        }
        function setPanturrilha_esquerda($panturrilha_esquerda)
        {
            $this->panturrilha_esquerda = $panturrilha_esquerda;
        }
        
        function getData_Cadastro()
        {
            return $this->data_cadastro;           
        }       
        function setData_cadastro($data_cadastro)
        {
            $this->data_cadastro = $data_cadastro;
        }

    }
?>
