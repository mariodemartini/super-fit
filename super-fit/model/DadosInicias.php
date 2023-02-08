<?php

    Class DadosIniciais{
        private $idDadosIniciais;
        private $peso;
        private $altura;
        private $freq_card;
        private $pressao_arterial;
        private $data_cadastro;

        function getIdDadosIniciais()
        {
            return $this->idDadosIniciais;           
        }

        function setIdDadosIniciais($idDadosIniciais)
        {
            $this->idDadosIniciais = $idDadosIniciais;
        }

        function getPeso()
        {
            return $this->peso;           
        }

        function setPeso($peso)
        {
            $this->peso = $peso;
        }

        function getAltura()
        {
            return $this->altura;           
        }

        function setAltura($altura)
        {
            $this->altura = $altura;
        }

        function getFreq_Card()
        {
            return $this->freq_card;           
        }

        function setFreq_Card($freq_card)
        {
            $this->freq_card = $freq_card;
        }

        function getPressao_Arterial()
        {
            return $this->pressao_arterial;           
        }

        function setPressao_Arterial($pressao_arterial)
        {
            $this->pressao_arterial = $pressao_arterial;
        }
        
        function setData_Cadastro($data_cadastro)
        {
            $this->data_cadastro = $data_cadastro;
        }
    }

?>
