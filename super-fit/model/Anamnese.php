<?php
    
    class Anamnese
    {
        private $idAnamnese;
        private $atividade;
        private $tempo_pratica;
        private $objetivo;
        private $fumante;
        private $alcool;
        private $historico_fam;
        private $hipertensao;
        private $colesterol;
        private $diabetes;
        private $cardiaco;
        private $cirurgia;
        private $fratura;
        private $lesao;
        private $dor;
        private $movimentos;
        private $artrite;
        private $medicamentos;
        private $outros;
        private $alimentacao;
        private $data_cadastro;
        
        function getIdAnamnese()
        {
            return $this->idAnamnese;
        }
        function setIdAnamnese($idAnamnese)
        {
            $this->idAnamnese = $idAnamnese;
        }

        function getAtividade()
        {
            return $this->atividade;           
        }
        function setAtividade($atividade)
        {
            $this->atividade = $atividade;
        }

        function getTempo_pratica()
        {
            return $this->tempo_pratica;           
        }

        function setTempo_pratica($tempo_pratica)
        {
            $this->tempo_pratica = $tempo_pratica;
        }

        function getObjetivo()
        {
            return $this->objetivo;           
        }
        function setObjetivo($objetivo)
        {
            $this->objetivo = $objetivo;
        }

        function getFumante()
        {
            return $this->fumante;           
        }
        function setFumante($fumante)
        {
            $this->fumante = $fumante;
        }

        function getAlcool()
        {
            return $this->alcool;           
        }
        function setAlcool($alcool)
        {
            $this->alcool = $alcool;
        }

        function getHistorico_fam()
        {
            return $this->historico_fam;           
        }
        function setHitorico_fam($historico_fam)
        {
            $this->historico_fam = $historico_fam;
        }

        function getHipertensao()
        {
            return $this->hipertensao;           
        }
        function setHipertensao($hipertensao)
        {
            $this->hipertensao = $hipertensao;
        }

        function getColesterol()
        {
            return $this->colesterol;           
        }
        function setColesterol($colesterol)
        {
            $this->colesterol = $colesterol;
        }

        function getDiabetes()
        {
            return $this->diabetes;           
        }
        function setDiabetes($diabetes)
        {
            $this->diabetes = $diabetes;
        }

        function getCardicaco()
        {
            return $this->cardiaco;           
        }
        function setCardiaco($cardiaco)
        {
            $this->cardiaco = $cardiaco;
        }

        function getCirurgia()
        {
            return $this->cirurgia;           
        }
        function setCirurgia($cirurgia)
        {
            $this->cirurgia = $cirurgia;
        }

        function getFratura()
        {
            return $this->fratura;           
        }
        function setFratura($fratura)
        {
            $this->fratura = $fratura;
        }

        function getLesao()
        {
            return $this->lesao;           
        }
        function setLesao($lesao)
        {
            $this->lesao = $lesao;
        }

        function getDor()
        {
            return $this->dor;           
        }
        function setDor($dor)
        {
            $this->dor = $dor;
        }

        function getMovimentos()
        {
            return $this->movimentos;           
        }
        function setMovimentos($movimentos)
        {
            $this->movimentos = $movimentos;
        }

        function getArtrite()
        {
            return $this->artrite;           
        }
        function setArtrite($artrite)
        {
            $this->artrite = $artrite;
        }

        function getMedicamentos()
        {
            return $this->medicamentos;           
        }
        function setMedicamentos($medicamentos)
        {
            $this->medicamentos = $medicamentos;
        }

        function getOutros()
        {
            return $this->outros;           
        }
        function setOutros($outros)
        {
            $this->outros = $outros;
        }

        function getAlimentacao()
        {
            return $this->alimentacao;           
        }
        function setAlimentacao($alimentacao)
        {
            $this->alimentacao = $alimentacao;
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