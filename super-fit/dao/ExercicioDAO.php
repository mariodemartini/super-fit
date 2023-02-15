<?php

    class ExercicioDAO
    {
        public function create(Exercicio $exercicio){
            try {
                $sql = "INSERT INTO Exercicio (
                    grupo_muscular, descricao)
                    VALUES (
                    :grupo_muscular, :descricao)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":grupo_muscular", $exercicio->getGrupo_Muscular());
                $p_sql->bindValue(":descricao", $exercicio->getDescricao());

                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir exercicio <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM Exercicio ORDER BY Descricao ASC";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->listaexercicio($l);
                } 
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        private function listaexercicio($row) {
            $exercicio = new Exercicio();
            $exercicio->setIdExercicio($row['idExercicio']);
            $exercicio->setGrupo_Muscular($row['Grupo_Muscular']);
            $exercicio->setDescricao($row['Descricao']);

            return $exercicio;
        }

        public function delete(Exercicio $exercicio){
            try {
                $sql = "DELETE FROM exercicio WHERE  idexercicio = :idexercicio";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idexercicio", $exercicio->getIdExercicio());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir professor <br> $e <br>";
            }
        }

        public function update(Exercicio $exercicio)
        {
            try {
                $sql = "UPDATE exercicio set
                    
                    idexercicio=:idexercicio,
                    grupo_muscular=:grupo_muscular,
                    descricao=:descricao,
                                
                    WHERE idexercicio = :idexercicio";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":grupo_muscular", $exercicio->getGrupo_Muscular());
                $p_sql->bindValue(":descricao", $exercicio->getDescricao());
                
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        
    }

?>