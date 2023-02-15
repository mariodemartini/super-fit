<?php
    
    class Circunferencias
    {
    private $idcircunferencias;
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
     
    function getidCircunferencias()
    {
        return $this->idcircunferencias;
    }
    function setidcircunferencias($idcircunferencias)
    {
        $this->idcircunferencias = $idcircunferencias;
    }
    function getTorax()
    {
        return $this->torax;           
    }
    function settorax($torax)
    {
        $this->torax = $torax;
    }
    function getCintura()
    {
        return $this->cintura;           
    }

    function setcintura($cintura)
    {
        $this->cintura = $cintura;
    }
    function getAbdomen()
    {
        return $this->abdomen;           
    }

    function setabdomen($abdomen)
    {
        $this->abdomen = $abdomen;
    }
    function getQuadril()
    {
        return $this->quadril;           
    }

    function setquadril($quadril)
    {
        $this->quadril = $quadril;
    }
    function getBraco_direito()
    {
        return $this->braco_direito;           
    }

    function setbraco_esquerdo($braco_esquerdo)
    {
        $this->braco_esquerdo = $braco_esquerdo;
    }
    function getPeso()
    {
        return $this->peso;           
    }

    function setPeso($peso)
    {
        $this->peso = $peso;
    }
    }
?>
