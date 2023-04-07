<?php

    class ExercicioDAO
    {
        public function create(Exercicio $exercicio){
            try {
                $sql = "INSERT INTO exercicios (
                    grupoMuscular, descricao)
                    VALUES (
                    :grupoMuscular, :descricao)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":grupoMuscular", $exercicio->getGrupoMuscular());
                $p_sql->bindValue(":descricao", $exercicio->getDescricao());

                return $p_sql->execute();
                
            } catch (Exception $e) {
                print "Erro ao Inserir exercicio <br>" . $e . '<br>';
            }      
        }

        public function read() {
            try {
                $sql = "SELECT * FROM exercicios ORDER BY idExercicio";
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
            $exercicio->setIdExercicio($row['idExercicio']);
            $exercicio->setGrupoMuscular($row['grupoMuscular']);
            $exercicio->setDescricao($row['descricao']);

            return $exercicio;
        }

        public function delete(Exercicio $exercicio){
            try {
                $sql = "DELETE FROM exercicios WHERE  idExercicio = :idExercicio";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":idExercicio", $exercicio->getIdExercicio());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir exercicio <br> $e <br>";
            }
        }

        public function update(Exercicio $exercicio)
        {
            try {
                $sql = "UPDATE exercicios set
                    
                    idExercicio=:idExercicio,
                    grupoMuscular=:grupoMuscular,
                    descricao=:descricao,
                                
                    WHERE idExercicio = :idExercicio";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":grupoMuscular", $exercicio->getGrupoMuscular());
                $p_sql->bindValue(":descricao", $exercicio->getDescricao());
                
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }

    }

?>