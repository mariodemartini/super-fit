<?php

    Class Treino{
        private $idTreino;
        private $serie;
        private $exercicio;
        private $carga;
        private $feedback;
        private $aluno;

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
        
        function getExercicio()
        { 
            return $this->exercicio; 
        }
        function setExercicio($exercicio)
        { 
            $this->exercicio = $exercicio; 
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

        function getAluno()
        { 
            return $this->aluno; 
        }
        function setAluno($aluno)
        { 
            $this->aluno = $aluno; 
        }
    }
?>