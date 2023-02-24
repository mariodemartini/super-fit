<?php

    class ResultadoDAO
    {
        public function create(Resultado $resultado){
            try {
                $sql = "INSERT INTO Resultado (
                    peso, imc, abdomen, rcq, percent_gord, massa_gorda, percent_magra, massa_magra, fc, vo)
                    VALUES (
                    :peso, :imc, :abdomen, :rcq, :percent_gord, :massa_gorda, :percent_magra, :massa_magra, :fc, :vo)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":peso", $resultado->getPeso());
                $p_sql->bindValue(":imc", $resultado->getImc());
                $p_sql->bindValue(":abdomen", $resultado->getAbdomen());
                $p_sql->bindValue(":rcq", $resultado->getRcq());
                $p_sql->bindValue(":percent_gord", $resultado->getPercent_gord());
                $p_sql->bindValue(":massa_gorda", $resultado->getMassa_gorda());
                $p_sql->bindValue(":percent_magra", $resultado->getPercent_magra());
                $p_sql->bindValue(":massa_magra", $resultado->getMassa_magra());
                $p_sql->bindValue(":fc", $resultado->getFc());
                $p_sql->bindValue(":vo", $resultado->getVo());

                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir resultado <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM Resultado ORDER BY idResultado ASC";
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
            $resultado->setPercent_gord($row['percent_gord']);
            $resultado->setMassa_gorda($row['massa_gorda']);
            $resultado->setPercent_magra($row['percent_magra']);
            $resultado->setMassa_magra($row['massa_magra']);
            $resultado->setFc($row['fc']);
            $resultado->setVo($row['vo']);

            return $resultado;
        }

        public function delete(Resultado $resultado){
            try {
                $sql = "DELETE FROM Resultado WHERE  idResultado = :idResultado";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idCircunferencias", $resultado->getIdResultado());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir resultado <br> $e <br>";
            }
        }

        public function update(Resultado $resultado)
        {
            try {
                $sql = "UPDATE Resultado set
                    
                      idResultado=:idResultado,
                      peso=:peso,
                      imc=:imc,
                      abdomen=:abdomen,
                      rcq=:rcq,
                      percent_gord=:percent_gord,
                      massa_gorda=:massa_gorda,
                      percent_magra=:percent_magra,
                      massa_magra=:massa_magra,
                      fc=:fc,
                      vo=:vo,
                                    
                      WHERE idResultado = :idResultado";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idResultado", $resultado->getIdResultado());
                $p_sql->bindValue(":peso", $resultado->getPeso());
                $p_sql->bindValue(":imc", $resultado->getImc());
                $p_sql->bindValue(":abdomen", $resultado->getAbdomen());
                $p_sql->bindValue(":rcq", $resultado->getRcq());
                $p_sql->bindValue(":percent_gorda", $resultado->getPercent_gord());
                $p_sql->bindValue(":massa_gorda", $resultado->getMassa_gorda());
                $p_sql->bindValue(":percent_magra", $resultado->getPercent_magra());
                $p_sql->bindValue(":massa_magra", $resultado->getMassa_magra());
                $p_sql->bindValue(":fc", $resultado->getFc());
                $p_sql->bindValue(":vo", $resultado->getVo());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        public function selecionaPeso(){
            $sql = "SELECT Dados_Iniciais.peso FROM Dados_Iniciais, Avaliacao_Fisica, Resultado  
                    WHERE Dados_Iniciais.idDados_Iniciais = Avaliacao_Fisica.idDados_Iniciais AND  Avaliacao_Fisica.idDados_Iniciais = Resultado.idResultado";
            $result = Conexao::getConexao()->query($sql);
            $peso = $result->fetchAll(PDO::FETCH_ASSOC);

            $resultado = new Resultado;
            $peso = selecionaPeso();

            $resultado->setPeso($peso);
        }

        public function calculaImc(Resultado $peso, DadosIniciais $altura){
            $sql = "SELECT Dados_Iniciais.altura FROM Dados_Iniciais, Avaliacao_Fisica, Resultado  
                    WHERE Dados_Iniciais.idDados_Iniciais = Avaliacao_Fisica.idDados_Iniciais AND  Avaliacao_Fisica.idDados_Iniciais = Resultado.idResultado";
            $result = Conexao::getConexao()->query($sql);
            $altura = $result->fetchAll(PDO::FETCH_ASSOC);

            $resultado = new Resultado;
            $imc = $peso / ($altura * $altura);
            $resultado->setImc($imc);
        }
  
    }

?>
