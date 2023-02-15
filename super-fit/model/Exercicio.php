<?php
    
    Class Exercicio{
        private $idExercicio;
        private $Grupo_Muscular;
        private $Descricao;



        function getIdExercicio()
    { 
        return $this->idExercicio; 
    }

    function setIdExercicio($idExercicio)
    { 
        $this->idExercicio = $idExercicio; 
    }

    function getGrupo_Muscular()
    { 
        return $this->Grupo_Muscular; 
    }

    function setGrupo_Muscular($Grupo_Muscular)
    { 
        $this->Grupo_Muscular = $Grupo_Muscular; 
    }

    function getDescricao()
    { 
        return $this->Descricao; 
    }

    function setDescricao($Descricao)
    { 
        $this->Descricao = $Descricao; 
    }

    }

    

?>
