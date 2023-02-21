<?php
    
    class TesteVO2
    {
        private $idTesteVO2;
        private $data_teste;
        private $velocidade_inicial;
        private $fc_repouso;
        private $pressao_inicio;
        private $pressao_final;
        private $fc_teste;
        private $tempo_teste;
        private $velocidade_teste;
        private $esforco_teste;
        private $resultado_vo2;
        
        function getIdTesteVO2()
        {
            return $this->idTesteVO2;
        }
        function setIdTesteVO2($idTesteVO2)
        {
            $this->idTesteVO2 = $idTesteVO2;
        }

        function getData_teste()
        {
            return $this->data_teste;           
        }
        function setData_teste($data_teste)
        {
            $this->data_teste = $data_teste;
        }

        function getVelocidade_inicial()
        {
            return $this->velocidade_inicial;           
        }

        function setVelocidade_inicial($velocidade_inicial)
        {
            $this->velocidade_inicial = $velocidade_inicial;
        }

        function getFc_repouso()
        {
            return $this->fc_repouso;           
        }
        function setFc_repouso($fc_repouso)
        {
            $this->fc_repouso = $fc_repouso;
        }

        function getPressao_inicio()
        {
            return $this->pressao_inicio;           
        }
        function setPressao_inicio($pressao_inicio)
        {
            $this->pressao_inicio = $pressao_inicio;
        }

        function getPressao_final()
        {
            return $this->pressao_final;           
        }
        function setPressao_final($pressao_final)
        {
            $this->pressao_final = $pressao_final;
        }

        function getFc_teste()
        {
            return $this->fc_teste;           
        }
        function setFc_teste($fc_teste)
        {
            $this->fc_teste = $fc_teste;
        }

        function getTempo_teste()
        {
            return $this->tempo_teste;           
        }
        function setTempo_teste($tempo_teste)
        {
            $this->tempo_teste = $tempo_teste;
        }

        function getVelocidade_teste()
        {
            return $this->velocidade_teste;           
        }
        function setVelocidade_teste($velocidade_teste)
        {
            $this->velocidade_teste = $velocidade_teste;
        }

        function getEsforco_teste()
        {
            return $this->esforco_teste;           
        }
        function setEsforco_teste($esforco_teste)
        {
            $this->esforco_teste = $esforco_teste;
        }

        function getResultado_vo2()
        {
            return $this->resultado_vo2;           
        }
        function setResultado_vo2($resultado_vo2)
        {
            $this->resultado_vo2 = $resultado_vo2;
        }

    }
?>
