<?php
    
    Class Exercicio{
        private $idExercicio;
        private $grupoMuscular;
        private $descricao;

        function getIdExercicio()
        { 
            return $this->idExercicio; 
        }

        function setIdExercicio($idExercicio)
        { 
            $this->idExercicio = $idExercicio; 
        }

        function getGrupoMuscular()
        { 
            return $this->grupoMuscular; 
        }

        function setGrupoMuscular($grupoMuscular)
        { 
            $this->grupo_Muscular = $grupoMuscular; 
        }

        function getDescricao()
        { 
            return $this->descricao; 
        }

        function setDescricao($descricao)
        { 
            $this->descricao = $descricao; 
        }

    }

    

?>
