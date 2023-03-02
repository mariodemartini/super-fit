<?php

    class AnamneseDAO
    {
        public function create(Anamnese $anamnese){
            try {
                $sql = "INSERT INTO Anamnese (
                    Atividade, Tempo_Pratica, Objetivo, Fumante, Alcool, Historico_Fam, Hipertensao, Colesterol, Diabetes, Cardiaco, Cirurgia, Fratura, Lesao, Dor, Movimentos, Artrite, Medicamentos, Outros, Alimentacao, Data_Cadastro)
                    VALUES (
                    :atividade, :tempo_pratica, :objetivo, :fumante, :alcool, :historico_fam, :hipertensao, :colesterol, :diabetes, :cardiaco, :cirurgia, :fratura, :lesao, :dor, :movimentos, :artrite, :medicamentos, :outros, :alimentacao, :data_cadastro)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":atividade", $anamnese->getAtividade());
                $p_sql->bindValue(":tempo_pratica", $anamnese->getTempo_pratica());
                $p_sql->bindValue(":objetivo", $anamnese->getObjetivo());
                $p_sql->bindValue(":fumante", $anamnese->getFumante());
                $p_sql->bindValue(":alcool", $anamnese->getAlcool());
                $p_sql->bindValue(":historico_fam", $anamnese->getHistorico_fam());
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
                $p_sql->bindValue(":data_cadastro", $anamnese->getData_Cadastro());
               // $p_sql->bindValue(":nome", $anamnese->buscaUsuario());

                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir anamnese <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM Anamnese ORDER BY idAnamnese ASC";
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
            $anamnese->setTempo_pratica($row['tempo_pratica']);
            $anamnese->setObjetivo($row['objetivo']);
            $anamnese->setFumante($row['fumante']);
            $anamnese->setAlcool($row['alcool']);
            $anamnese->setHistorico_fam($row['historico_fam']);
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
            $anamnese->setData_Cadastro($row['data_cadastro']);
           // $anamnese->setUsuario($row['nome']);

            return $anamnese;
        }

        public function delete(Anamnese $anamnese){
            try {
                $sql = "DELETE FROM Anamnese WHERE idAnamnese = :idAnamnese";
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
                $sql = "UPDATE Anamnese set
                    
                      idAnamnese=:idAnamnese,
                      Atividade=:atividade,
                      Tempo_Pratica=:tempo_pratica,
                      Objetivo=:objetivo,
                      Fumante=:fumante,
                      Alcool=:alcool,
                      Historico_fam=:historico_fam,
                      Hipertensao=:hipertensao,
                      Colesterol=:colesterol,
                      Diabetes=:diabetes,
                      Cardiaco=:cardiaco,
                      Cirugia=:cirurgia,
                      Fratura=:fratura,
                      Lesao=:lesao,
                      Dor=:dor,
                      Movimentos=:movimentos,
                      Artrite=:artrite,
                      Medicamentos=:medicamentos,
                      Outros=:outros,
                      Alimentacao=:alimentacao,
                      Data_Cadastro=:data_cadastro,
                                    
                      WHERE idAnamnese = :idAnamnese";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idAnamnese", $anamnese->getIdAnamnese());
                $p_sql->bindValue(":atividade", $anamnese->getAtividade());
                $p_sql->bindValue(":tempo_pratica", $anamnese->getTempo_pratica());
                $p_sql->bindValue(":objetivo", $anamnese->getObjetivo());
                $p_sql->bindValue(":fumante", $anamnese->getFumante());
                $p_sql->bindValue(":alcool", $anamnese->getAlcool());
                $p_sql->bindValue(":historico_fam", $anamnese->getHistorico_fam());
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
                $p_sql->bindValue(":data_cadastro", $anamnese->getData_Cadastro());
            
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        public function buscaUsuario() {
            try {
                $sql = "SELECT Usuario.Nome FROM Anamnese 
                JOIN Usuario ON Anamnese.idUsuario = Usuario.idUsuario 
                WHERE Usuario.Name LIKE $nome";;
                $result = Conexao::getConexao()->prepare($sql);
                $row = $result->fetch_assoc();
                return $row;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Usuario." . $e;
            }
        }
  
    }

?>
