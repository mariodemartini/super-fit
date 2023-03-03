<?php

    class ResultadoDAO
    {
        public function create(Resultado $resultado){
            try {
                $sql = "INSERT INTO resultado (
                    peso, imc, abdomen, rcq, percentGord, massaGorda, percentMagra, massaMagra, fc, vo)
                    VALUES (
                    :peso, :imc, :abdomen, :rcq, :percentGord, :massaGorda, :percentMagra, :massaMagra, :fc, :vo)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":peso", $resultado->getPeso());
                $p_sql->bindValue(":imc", $resultado->getImc());
                $p_sql->bindValue(":abdomen", $resultado->getAbdomen());
                $p_sql->bindValue(":rcq", $resultado->getRcq());
                $p_sql->bindValue(":percentGord", $resultado->getPercentGord());
                $p_sql->bindValue(":massaGorda", $resultado->getMassaGorda());
                $p_sql->bindValue(":percentMagra", $resultado->getPercentMagra());
                $p_sql->bindValue(":massaMagra", $resultado->getMassaMagra());
                $p_sql->bindValue(":fc", $resultado->getFc());
                $p_sql->bindValue(":vo", $resultado->getVo());

                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir resultado <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM resultado ORDER BY idResultado ASC";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->listaResultado($l);
                } 
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        private function listaResultado($row) {
            $resultado = new Resultado();
            $resultado->setIdResultado($row['idResultado']);
            $resultado->setPeso($row['peso']);
            $resultado->setImc($row['imc']);
            $resultado->setAbdomen($row['abdomen']);
            $resultado->setRcq($row['rcq']);
            $resultado->setPercentGord($row['percentGord']);
            $resultado->setMassaGorda($row['massaGorda']);
            $resultado->setPercentMagra($row['percentMagra']);
            $resultado->setMassaMagra($row['massaMagra']);
            $resultado->setFc($row['fc']);
            $resultado->setVo($row['vo']);

            return $resultado;
        }

        public function delete(Resultado $resultado){
            try {
                $sql = "DELETE FROM resultado WHERE  idResultado = :idResultado";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idResultado", $resultado->getIdResultado());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir resultado <br> $e <br>";
            }
        }

        public function update(Resultado $resultado)
        {
            try {
                $sql = "UPDATE resultado set
                    
                      idResultado=:idResultado,
                      peso=:peso,
                      imc=:imc,
                      abdomen=:abdomen,
                      rcq=:rcq,
                      percentGord=:percentGord,
                      massaGorda=:massaGorda,
                      percentMagra=:percentMagra,
                      massaMagra=:massaMagra,
                      fc=:fc,
                      vo=:vo,
                                    
                      WHERE idResultado = :idResultado";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idResultado", $resultado->getIdResultado());
                $p_sql->bindValue(":peso", $resultado->getPeso());
                $p_sql->bindValue(":imc", $resultado->getImc());
                $p_sql->bindValue(":abdomen", $resultado->getAbdomen());
                $p_sql->bindValue(":rcq", $resultado->getRcq());
                $p_sql->bindValue(":percentGorda", $resultado->getPercentGord());
                $p_sql->bindValue(":massaGorda", $resultado->getMassaGorda());
                $p_sql->bindValue(":percentMagra", $resultado->getPercentMagra());
                $p_sql->bindValue(":massaMagra", $resultado->getMassaMagra());
                $p_sql->bindValue(":fc", $resultado->getFc());
                $p_sql->bindValue(":vo", $resultado->getVo());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        public function selecionaPeso(){
            $sql = "SELECT medidas.peso FROM medidas, resultado  
                    WHERE medidas.idMedidas = resultado.idMedidas";
            $result = Conexao::getConexao()->query($sql);
            $peso = $result->fetchAll(PDO::FETCH_ASSOC);

            $resultado = new Resultado;

            $resultado->setPeso($peso);
        }

        public function calculaImc($peso,  $altura){
            $resultado = new Resultado;
            $imc = $peso / ($altura * $altura);
            $resultado->setImc($imc);
        }
  
    }

?>
