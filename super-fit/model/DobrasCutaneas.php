<?php

   Class DobrasCutaneas
   {
      private $idDobrasCutaneas;
      private $peitoral;
      private $axilarMedia;
      private $abdominal;
      private $supraIliaca;
      private $subEscapular;
      private $tricipital;
      private $coxa;
      private $somatorio;
      private $data_cadastro;

      function getidDobrasCutaneas()
      {
         return $this->idDobrasCutaneas;
      }
      function setIdDobrasCutaneas($idDobrasCutaneas)
      {
        $this->idDobrasCutaneas = $idDobrasCutaneas;
      }

      function getPeitoral()
      {
         return $this->peitoral;
      }
      function setPeitoral($peitoral)
      {
         $this->peitoral = $peitoral;
      }

      function getAxilarMedia()
      {
         return $this->axilarMedia;
      }
      function setAxilarMedia($axilarMedia)
      {
         $this->axilarMedia = $axilarMedia;
      }

      function getAbdominal()
      {
         return $this->abdominal;
      }
      function setAbdominal($abdominal)
      {
         $this->abdominal = $abdominal;
      }

      function getSupraIliaca()
      {
         return $this->supraIliaca;
      }
      function setSupraIliaca($supraIliaca)
      {
         $this->supraIliaca = $supraIliaca;  
      }

      function getSubEscapular()
      {
         return $this->subEscapular;
      }
      function setSubEscapular($subEscapular)
      {
         $this->subEscapular = $subEscapular;  
      }

      function getTricipital()
      {
         return $this->tricipital;
      }
      function setTricipital($tricipital)
      {
         $this->tricipital = $tricipital;  
      }

      function getCoxa()
      {
         return $this->coxa;
      }
      function setCoxa($coxa)
      {
         $this->coxa = $coxa;  
      }

      function getSomatorio()
      {
         return $this->somatorio;
      }
      function setSomatorio($peitoral, $abdominal, $axilarMedia, $supraIliaca, $subEscapular, $tricipital, $coxa)
      {
         $somatorio = (getPeitoral() + getAbdominal() + getAxilarMedia() + getSupraIliaca() + getSubEscapular() + getTricipital() + getCoxa());

         $this->somatorio = $somatorio;
      }

      function getData_Cadastro()
      {
         return $this->data_cadastro;
      }
      function setData_Cadastro($data_cadastro)
      {
         $this->data_cadastro = $data_cadastro;  
      }

   }
?>   