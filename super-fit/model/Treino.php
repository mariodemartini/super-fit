<?php

    Class Treino{
        private $idTreino;
        private $serie;
        private $exercicios;
        private $carga;
        private $feedback;
        private $usuario;

        function getIdTreino()
        { 
            return $this->idTreino; 
        }
        function setIdTreino($idTreino)
        { 
            $this->idTreino = $idTreino; 
        }

        function getSerie()
        { 
            return $this->serie; 
        }
        function setSerie($serie)
        { 
            $this->serie = $serie; 
        }
        
        function getExercicios()
        { 
            return $this->exercicios; 
        }
        function setExercicios($exercicios)
        { 
            $this->exercicios = $exercicios; 
        }

        function getCarga()
        { 
            return $this->carga; 
        }
        function setCarga($carga)
        { 
            $this->carga = $carga; 
        }

        function getFeedback()
        { 
            return $this->feedback; 
        }
        function setFeedback($feedback)
        { 
            $this->feedback = $feedback; 
        }

        function getUsuario()
        { 
            return $this->usuario; 
        }
        function setUsuario($usuario)
        { 
            $this->usuario = $usuario; 
        }
    }
?>