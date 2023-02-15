<?php

   Class DobrasCutaneas{
      private $idDobras_Cutaneas;
      private $AxilarMedia;
      private $Abdominal;
      private $SupraIliaca;
      private $Sub_Escapular;
      private $Tricipital;
      private $Coxa;

      function getidDobrasCutaneas()
      {
         return $this->idDobras_Cutaneas;
      }

      function setIdDobrasCutaneas($idDobras_Cutaneas) {
        $this->idDobras_Cutaneas = $idDobras_Cutaneas;
      }

      function getAxilarMedia(){
         return $this->AxilarMedia;
      }
      function setAxilarMedia($AxilarMedia){
         $this->AxilarMedia = $AxilarMedia;
      }

      function getAbdominal(){
         return $this->Abdominal;
      }

      function setAbdominal($Abdominal)
      {
         $this->Abdominal = $Abdominal;
      }

      function getSupraIliaca(){
         return $this->SupraIliaca;
      }
      function setSupraIliaca($SupraIliaca){
         $this->SupraIliaca = $SupraIliaca;
         
      }

   }
?>   