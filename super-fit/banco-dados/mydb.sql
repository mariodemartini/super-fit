-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 14/11/2022 às 16:06
-- Versão do servidor: 8.0.31-0ubuntu0.22.04.1
-- Versão do PHP: 8.1.2-1ubuntu2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Anamnese`
--

CREATE TABLE `Anamnese` (
  `idAnamnese` int NOT NULL,
  `Atividade` varchar(45) DEFAULT NULL,
  `Tempo_Pratica` varchar(45) DEFAULT NULL,
  `Objetivo` varchar(45) DEFAULT NULL,
  `Fumante` varchar(45) DEFAULT NULL,
  `Alcool` varchar(45) DEFAULT NULL,
  `Historico_Fam` varchar(100) DEFAULT NULL,
  `Hipertensão` varchar(45) DEFAULT NULL,
  `Colesterol` varchar(45) DEFAULT NULL,
  `Diabetes` varchar(45) DEFAULT NULL,
  `Cardiaco` varchar(100) DEFAULT NULL,
  `Cirurgia` varchar(100) DEFAULT NULL,
  `Fratura` varchar(100) DEFAULT NULL,
  `Lesao` varchar(100) DEFAULT NULL,
  `Dor` varchar(100) DEFAULT NULL,
  `Movimentos` varchar(100) DEFAULT NULL,
  `Artrite` varchar(100) DEFAULT NULL,
  `Medicamento` varchar(100) DEFAULT NULL,
  `Outros` varchar(100) DEFAULT NULL,
  `Alimentacao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Avaliacao_Fisica`
--

CREATE TABLE `Avaliacao_Fisica` (
  `idAvaliacao_Fisica` int NOT NULL,
  `idUsuario` int NOT NULL,
  `idAnamnese` int NOT NULL,
  `idDados_Iniciais` int NOT NULL,
  `idCircunferencias` int NOT NULL,
  `idDobras_Cutaneas` int NOT NULL,
  `idTeste_VO2` int NOT NULL,
  `idTeste_Forca` int NOT NULL,
  `idResultado` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Circunferencias`
--

CREATE TABLE `Circunferencias` (
  `idCircunferencias` int NOT NULL,
  `Torax` float DEFAULT NULL,
  `Cintura` float DEFAULT NULL,
  `Abdomen` float DEFAULT NULL,
  `Quadril` float DEFAULT NULL,
  `Braco_Direito` float DEFAULT NULL,
  `Braco_Esquerdo` float DEFAULT NULL,
  `Antebraco_Direito` float DEFAULT NULL,
  `Antebraco_Esquerdo` float DEFAULT NULL,
  `Coxa_Direita` float DEFAULT NULL,
  `Coxa_Esquerda` float DEFAULT NULL,
  `Panturrilha_Direita` float DEFAULT NULL,
  `Panturrilha_Esquerda` float DEFAULT NULL,
  `Data_Cadastro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Dados_Iniciais`
--

CREATE TABLE `Dados_Iniciais` (
  `idDados_Iniciais` int NOT NULL,
  `Peso` float DEFAULT NULL,
  `Altura` float DEFAULT NULL,
  `Freq_Card` int DEFAULT NULL,
  `Pressao_Arterial` varchar(45) DEFAULT NULL,
  `Data_Cadastro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Dobras_Cutaneas`
--

CREATE TABLE `Dobras_Cutaneas` (
  `idDobras_Cutaneas` int NOT NULL,
  `Peitoral` float DEFAULT NULL,
  `AxilarMedia` float DEFAULT NULL,
  `Abdominal` float DEFAULT NULL,
  `SupraIliaca` float DEFAULT NULL,
  `Sub_Escapular` float DEFAULT NULL,
  `Tricipital` float DEFAULT NULL,
  `Coxa` float DEFAULT NULL,
  `Data_Cadastro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Exercicios`
--

CREATE TABLE `Exercicios` (
  `idExercicios` int NOT NULL,
  `Descricao` varchar(45) DEFAULT NULL,
  `Grupo_Muscular` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Exercicios_Treino`
--

CREATE TABLE `Exercicios_Treino` (
  `idTreino` int NOT NULL,
  `idExercicios` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Resultado`
--

CREATE TABLE `Resultado` (
  `idResultado` int NOT NULL,
  `IMC` float DEFAULT NULL,
  `Percent_Gord` float DEFAULT NULL,
  `Massa_Gorda` float DEFAULT NULL,
  `Percent_Magra` float DEFAULT NULL,
  `Massa_Magra` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Teste_Forca`
--

CREATE TABLE `Teste_Forca` (
  `idTeste_Forca` int NOT NULL,
  `Data_Teste` date DEFAULT NULL,
  `Exercicio` varchar(45) DEFAULT NULL,
  `Carga_Inicial` int DEFAULT NULL,
  `Rep_Inicial` int DEFAULT NULL,
  `Meta_Carga` int DEFAULT NULL,
  `Meta_Rep` int DEFAULT NULL,
  `Primeira_Tentativa` int DEFAULT NULL,
  `Segunda_Tentativa` int DEFAULT NULL,
  `Terceira_Tentativa` int DEFAULT NULL,
  `Resultado_Rep` int DEFAULT NULL,
  `Resultado_Kg` int DEFAULT NULL,
  `idExercicios` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Teste_VO2`
--

CREATE TABLE `Teste_VO2` (
  `idTeste_VO2` int NOT NULL,
  `Data_Teste` date DEFAULT NULL,
  `Velocidade_Inicial` int DEFAULT NULL,
  `FC_Repouso` int DEFAULT NULL,
  `Pressao_Inicio` varchar(45) DEFAULT NULL,
  `Pressao_Final` varchar(45) DEFAULT NULL,
  `FC_Teste` int DEFAULT NULL,
  `Tempo_Teste` int DEFAULT NULL,
  `Velocidade_Teste` int DEFAULT NULL,
  `Esforco_Teste` int DEFAULT NULL,
  `Resultado_VO2` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Treino`
--

CREATE TABLE `Treino` (
  `idTreino` int NOT NULL,
  `Data_Cadastro` date DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  `Nivel` varchar(45) DEFAULT NULL,
  `Fase` varchar(45) DEFAULT NULL,
  `Frequencia` int DEFAULT NULL,
  `Duracao` int DEFAULT NULL,
  `Series` varchar(100) DEFAULT NULL,
  `Percent_Carga` int DEFAULT NULL,
  `Carga` int DEFAULT NULL,
  `Feedback` int DEFAULT NULL,
  `idUsuario` int NOT NULL,
  `idAvaliacao_Fisica` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Usuario`
--

CREATE TABLE `Usuario` (
  `idUsuario` int NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `Data_Nascimento` date DEFAULT NULL,
  `Sexo` varchar(10) DEFAULT NULL,
  `CPF` int NOT NULL,
  `RG` int DEFAULT NULL,
  `CREF` varchar(45) DEFAULT NULL,
  `Telefone` varchar(45) DEFAULT NULL,
  `Celular` varchar(45) NOT NULL,
  `CEP` int DEFAULT NULL,
  `Estado` varchar(100) DEFAULT NULL,
  `Cidade` varchar(100) DEFAULT NULL,
  `Endereco` varchar(100) DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `Senha` int NOT NULL,
  `Data_Cadastro` date DEFAULT NULL,
  `Tipo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Anamnese`
--
ALTER TABLE `Anamnese`
  ADD PRIMARY KEY (`idAnamnese`);

--
-- Índices de tabela `Avaliacao_Fisica`
--
ALTER TABLE `Avaliacao_Fisica`
  ADD PRIMARY KEY (`idAvaliacao_Fisica`),
  ADD KEY `fk_Avaliacao_Fisica_Usuario1_idx` (`idUsuario`),
  ADD KEY `fk_Avaliacao_Fisica_Dados_Iniciais1_idx` (`idDados_Iniciais`),
  ADD KEY `fk_Avaliacao_Fisica_Circunferencias1_idx` (`idCircunferencias`),
  ADD KEY `fk_Avaliacao_Fisica_Dobras_Cutaneas1_idx` (`idDobras_Cutaneas`),
  ADD KEY `fk_Avaliacao_Fisica_Teste_VO21_idx` (`idTeste_VO2`),
  ADD KEY `fk_Avaliacao_Fisica_Teste_Forca1_idx` (`idTeste_Forca`),
  ADD KEY `fk_Avaliacao_Fisica_Resultado1_idx` (`idResultado`),
  ADD KEY `fk_Avaliacao_Fisica_Anamnese1_idx` (`idAnamnese`);

--
-- Índices de tabela `Circunferencias`
--
ALTER TABLE `Circunferencias`
  ADD PRIMARY KEY (`idCircunferencias`);

--
-- Índices de tabela `Dados_Iniciais`
--
ALTER TABLE `Dados_Iniciais`
  ADD PRIMARY KEY (`idDados_Iniciais`);

--
-- Índices de tabela `Dobras_Cutaneas`
--
ALTER TABLE `Dobras_Cutaneas`
  ADD PRIMARY KEY (`idDobras_Cutaneas`);

--
-- Índices de tabela `Exercicios`
--
ALTER TABLE `Exercicios`
  ADD PRIMARY KEY (`idExercicios`);

--
-- Índices de tabela `Exercicios_Treino`
--
ALTER TABLE `Exercicios_Treino`
  ADD PRIMARY KEY (`idTreino`,`idExercicios`),
  ADD KEY `fk_Treino_has_Exercicios_Exercicios1_idx` (`idExercicios`),
  ADD KEY `fk_Treino_has_Exercicios_Treino1_idx` (`idTreino`);

--
-- Índices de tabela `Resultado`
--
ALTER TABLE `Resultado`
  ADD PRIMARY KEY (`idResultado`);

--
-- Índices de tabela `Teste_Forca`
--
ALTER TABLE `Teste_Forca`
  ADD PRIMARY KEY (`idTeste_Forca`),
  ADD KEY `fk_Teste_Forca_Exercicios1_idx` (`idExercicios`);

--
-- Índices de tabela `Teste_VO2`
--
ALTER TABLE `Teste_VO2`
  ADD PRIMARY KEY (`idTeste_VO2`);

--
-- Índices de tabela `Treino`
--
ALTER TABLE `Treino`
  ADD PRIMARY KEY (`idTreino`),
  ADD KEY `fk_Treino_Usuario1_idx` (`idUsuario`),
  ADD KEY `fk_Treino_Avaliacao_Fisica1_idx` (`idAvaliacao_Fisica`);

--
-- Índices de tabela `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Avaliacao_Fisica`
--
ALTER TABLE `Avaliacao_Fisica`
  MODIFY `idAvaliacao_Fisica` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Circunferencias`
--
ALTER TABLE `Circunferencias`
  MODIFY `idCircunferencias` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Dados_Iniciais`
--
ALTER TABLE `Dados_Iniciais`
  MODIFY `idDados_Iniciais` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Dobras_Cutaneas`
--
ALTER TABLE `Dobras_Cutaneas`
  MODIFY `idDobras_Cutaneas` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Teste_Forca`
--
ALTER TABLE `Teste_Forca`
  MODIFY `idTeste_Forca` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Teste_VO2`
--
ALTER TABLE `Teste_VO2`
  MODIFY `idTeste_VO2` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `Avaliacao_Fisica`
--
ALTER TABLE `Avaliacao_Fisica`
  ADD CONSTRAINT `fk_Avaliacao_Fisica_Anamnese1` FOREIGN KEY (`idAnamnese`) REFERENCES `Anamnese` (`idAnamnese`),
  ADD CONSTRAINT `fk_Avaliacao_Fisica_Circunferencias1` FOREIGN KEY (`idCircunferencias`) REFERENCES `Circunferencias` (`idCircunferencias`),
  ADD CONSTRAINT `fk_Avaliacao_Fisica_Dados_Iniciais1` FOREIGN KEY (`idDados_Iniciais`) REFERENCES `Dados_Iniciais` (`idDados_Iniciais`),
  ADD CONSTRAINT `fk_Avaliacao_Fisica_Dobras_Cutaneas1` FOREIGN KEY (`idDobras_Cutaneas`) REFERENCES `Dobras_Cutaneas` (`idDobras_Cutaneas`),
  ADD CONSTRAINT `fk_Avaliacao_Fisica_Resultado1` FOREIGN KEY (`idResultado`) REFERENCES `Resultado` (`idResultado`),
  ADD CONSTRAINT `fk_Avaliacao_Fisica_Teste_Forca1` FOREIGN KEY (`idTeste_Forca`) REFERENCES `Teste_Forca` (`idTeste_Forca`),
  ADD CONSTRAINT `fk_Avaliacao_Fisica_Teste_VO21` FOREIGN KEY (`idTeste_VO2`) REFERENCES `Teste_VO2` (`idTeste_VO2`),
  ADD CONSTRAINT `fk_Avaliacao_Fisica_Usuario1` FOREIGN KEY (`idUsuario`) REFERENCES `Usuario` (`idUsuario`);

--
-- Restrições para tabelas `Exercicios_Treino`
--
ALTER TABLE `Exercicios_Treino`
  ADD CONSTRAINT `fk_Treino_has_Exercicios_Exercicios1` FOREIGN KEY (`idExercicios`) REFERENCES `Exercicios` (`idExercicios`),
  ADD CONSTRAINT `fk_Treino_has_Exercicios_Treino1` FOREIGN KEY (`idTreino`) REFERENCES `Treino` (`idTreino`);

--
-- Restrições para tabelas `Teste_Forca`
--
ALTER TABLE `Teste_Forca`
  ADD CONSTRAINT `fk_Teste_Forca_Exercicios1` FOREIGN KEY (`idExercicios`) REFERENCES `Exercicios` (`idExercicios`);

--
-- Restrições para tabelas `Treino`
--
ALTER TABLE `Treino`
  ADD CONSTRAINT `fk_Treino_Avaliacao_Fisica1` FOREIGN KEY (`idAvaliacao_Fisica`) REFERENCES `Avaliacao_Fisica` (`idAvaliacao_Fisica`),
  ADD CONSTRAINT `fk_Treino_Usuario1` FOREIGN KEY (`idUsuario`) REFERENCES `Usuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
