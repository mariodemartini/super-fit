<?php

    class ExercicioDAO
    {
        public function create(Exercicio $exercicio){
            try {
                $sql = "INSERT INTO Exercicios (
                    grupo_muscular, descricao)
                    VALUES (
                    :grupo_muscular, :descricao)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":grupo_muscular", $exercicio->getGrupoMuscular());
                $p_sql->bindValue(":descricao", $exercicio->getDescricao());

                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir exercicio <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM Exercicios ORDER BY Grupo_Muscular ASC";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->listaExercicio($l);
                } 
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        private function listaExercicio($row) {
            $exercicio = new Exercicio();
            $exercicio->setIdExercicio($row['idExercicios']);
            $exercicio->setGrupoMuscular($row['Grupo_Muscular']);
            $exercicio->setDescricao($row['Descricao']);

            return $exercicio;
        }

        public function delete(Exercicio $exercicio){
            try {
                $sql = "DELETE FROM Exercicios WHERE  idExercicios = :idExercicios";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idExercicios", $exercicio->getIdExercicio());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir exercicio <br> $e <br>";
            }
        }

        public function update(Exercicio $exercicio)
        {
            try {
                $sql = "UPDATE Exercicios set
                    
                    idExercicio=:idExercicio,
                    grupo_muscular=:grupo_muscular,
                    descricao=:descricao,
                                
                    WHERE idExercicio = :idExercicio";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":grupo_muscular", $exercicio->getGrupoMuscular());
                $p_sql->bindValue(":descricao", $exercicio->getDescricao());
                
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

        
    }

?>