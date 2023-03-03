<?php

    class AnamneseDAO
    {
        public function create(Anamnese $anamnese){
            try {
                $sql = "INSERT INTO anamnese (
                    atividade, tempoPratica, objetivo, fumante, alcool, historicoFam, hipertensao, colesterol, diabetes, cardiaco, cirurgia, fratura, lesao, dor, movimentos, artrite, medicamentos, outros, alimentacao, dataCadastro)
                    VALUES (
                    :atividade, :tempo_pratica, :objetivo, :fumante, :alcool, :historicoFam, :hipertensao, :colesterol, :diabetes, :cardiaco, :cirurgia, :fratura, :lesao, :dor, :movimentos, :artrite, :medicamentos, :outros, :alimentacao, :dataCadastro)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":atividade", $anamnese->getAtividade());
                $p_sql->bindValue(":tempoPratica", $anamnese->getTempoPratica());
                $p_sql->bindValue(":objetivo", $anamnese->getObjetivo());
                $p_sql->bindValue(":fumante", $anamnese->getFumante());
                $p_sql->bindValue(":alcool", $anamnese->getAlcool());
                $p_sql->bindValue(":historicoFam", $anamnese->getHistoricoFam());
                $p_sql->bindValue(":hipertensao", $anamnese->getHipertensao());
                $p_sql->bindValue(":colesterol", $anamnese->getColesterol());
                $p_sql->bindValue(":diabetes", $anamnese->getDiabetes());
                $p_sql->bindValue(":cardiaco", $anamnese->getCardiaco());
                $p_sql->bindValue(":cirurgia", $anamnese->getCirurgia());
                $p_sql->bindValue(":fratura", $anamnese->getFratura());
                $p_sql->bindValue(":lesao", $anamnese->getLesao());
                $p_sql->bindValue(":dor", $anamnese->getDor());
                $p_sql->bindValue(":movimentos", $anamnese->getMovimentos());
                $p_sql->bindValue(":artrite", $anamnese->getArtrite());
                $p_sql->bindValue(":medicamentos", $anamnese->getMedicamentos());
                $p_sql->bindValue(":outros", $anamnese->getOutros());
                $p_sql->bindValue(":alimentacao", $anamnese->getAlimentacao());
                $p_sql->bindValue(":dataCadastro", $anamnese->getDataCadastro());
               // $p_sql->bindValue(":nome", $anamnese->buscaUsuario());

                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir anamnese <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM anamnese ORDER BY idAnamnese ASC";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->listaAnamnese($l);
                } 
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        private function listaAnamnese($row) {
            $anamnese = new Anamnese();
            $anamnese->setIdAnamnese($row['idAnamnese']);
            $anamnese->setAtividade($row['atividade']);
            $anamnese->setTempoPratica($row['tempoPratica']);
            $anamnese->setObjetivo($row['objetivo']);
            $anamnese->setFumante($row['fumante']);
            $anamnese->setAlcool($row['alcool']);
            $anamnese->setHistoricoFam($row['historicoFam']);
            $anamnese->setHipertensao($row['hipertensao']);
            $anamnese->setColesterol($row['colesterol']);
            $anamnese->setDiabetes($row['diabetes']);
            $anamnese->setCardiaco($row['cardiaco']);
            $anamnese->setCirurgia($row['cirurgia']);
            $anamnese->setFratura($row['fratura']);
            $anamnese->setLesao($row['lesao']);
            $anamnese->setDor($row['dor']);
            $anamnese->setMovimentos($row['movimentos']);
            $anamnese->setArtrite($row['artrite']);
            $anamnese->setMedicamentos($row['medicamentos']);
            $anamnese->setOutros($row['outros']);
            $anamnese->setAlimentacao($row['alimentacao']);
            $anamnese->setDataCadastro($row['dataCadastro']);
           // $anamnese->setUsuario($row['nome']);

            return $anamnese;
        }

        public function delete(Anamnese $anamnese){
            try {
                $sql = "DELETE FROM anamnese WHERE idAnamnese = :idAnamnese";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idAnamnese", $anamnese->getIdAnamnese());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir anamnese <br> $e <br>";
            }
        }

        public function update(Anamnese $anamnese)
        {
            try {
                $sql = "UPDATE anamnese set
                    
                      idAnamnese=:idAnamnese,
                      atividade=:atividade,
                      tempoPratica=:tempopratica,
                      objetivo=:objetivo,
                      fumante=:fumante,
                      alcool=:alcool,
                      historicoFam=:historicoFam,
                      hipertensao=:hipertensao,
                      colesterol=:colesterol,
                      diabetes=:diabetes,
                      cardiaco=:cardiaco,
                      cirugia=:cirurgia,
                      fratura=:fratura,
                      lesao=:lesao,
                      dor=:dor,
                      movimentos=:movimentos,
                      artrite=:artrite,
                      medicamentos=:medicamentos,
                      outros=:outros,
                      alimentacao=:alimentacao,
                      dataCadastro=:dataCadastro,
                                    
                      WHERE idAnamnese = :idAnamnese";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idAnamnese", $anamnese->getIdAnamnese());
                $p_sql->bindValue(":atividade", $anamnese->getAtividade());
                $p_sql->bindValue(":tempoPratica", $anamnese->getTempoPratica());
                $p_sql->bindValue(":objetivo", $anamnese->getObjetivo());
                $p_sql->bindValue(":fumante", $anamnese->getFumante());
                $p_sql->bindValue(":alcool", $anamnese->getAlcool());
                $p_sql->bindValue(":historico_fam", $anamnese->getHistoricoFam());
                $p_sql->bindValue(":hipertensao", $anamnese->getHipertensao());
                $p_sql->bindValue(":colesterol", $anamnese->getColesterol());
                $p_sql->bindValue(":cirugia", $anamnese->getCirurgia());
                $p_sql->bindValue(":fratura", $anamnese->getFratura());
                $p_sql->bindValue(":lesao", $anamnese->getLesao());
                $p_sql->bindValue(":dor", $anamnese->getDor());
                $p_sql->bindValue(":movimentos", $anamnese->getMovimentos());
                $p_sql->bindValue(":artrite", $anamnese->getArtrite());
                $p_sql->bindValue(":medicamentos", $anamnese->getMedicamentos());
                $p_sql->bindValue(":outros", $anamnese->getOutros());
                $p_sql->bindValue(":alimentacao", $anamnese->getAlimentacao());
                $p_sql->bindValue(":dataCadastro", $anamnese->getDataCadastro());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        public function buscaUsuario() {
            try {
                $sql = "SELECT usuario.Nome FROM anamnese 
                JOIN usuario ON anamnese.idUsuario = usuario.idUsuario 
                WHERE usuario.Name LIKE $";;
                $result = Conexao::getConexao()->prepare($sql);
                $row = $result->fetch_assoc();
                return $row;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Usuario." . $e;
            }
        }
  
    }

?>
