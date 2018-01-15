-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 27-Nov-2017 às 09:55
-- Versão do servidor: 10.1.26-MariaDB-0+deb9u1
-- PHP Version: 7.0.19-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trabalhe-conosco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `CANDIDATO`
--

CREATE TABLE `CANDIDATO` (
  `ID_CANDIDATO` int(20) NOT NULL,
  `CPF` bigint(20) NOT NULL,
  `RG` bigint(20) NOT NULL COMMENT 'RG do candidato é unico e não pode ser repetido',
  `NOME` varchar(100) NOT NULL,
  `NOME_SOCIAL` varchar(100) DEFAULT NULL,
  `DATA_NASCIMENTO` date NOT NULL,
  `ESTADO_CIVIL` enum('CASADO(A)','SOLTEIRO(A)','DIVORCIADO(A)','VIUVO(A)','SEPARADO(A)') NOT NULL,
  `SEXO` enum('M','F') NOT NULL,
  `QTD_FILHOS` int(11) DEFAULT NULL,
  `STATUS` enum('ATIVO','INATIVO') NOT NULL DEFAULT 'ATIVO',
  `ESCOLARIDADE` enum('ENSINO FUNDAMENTAL INCOMPLETO','ENSINO FUNDAMENTAL COMPLETO','ENSINO MÉDIO INCOMPLETO','ENSINO MÉDIO COMPLETO','ENSINO SUPERIOR INCOMPLETO','ENSINO SUPERIOR COMPLETO') DEFAULT NULL,
  `LINGUAS` varchar(45) DEFAULT 'INGLES',
  `CNH` enum('A','B','C','D','E') DEFAULT NULL,
  `AREA_PRETENDIDA` varchar(50) NOT NULL DEFAULT 'PROGRAMADOR',
  `ENDERECO` varchar(100) NOT NULL,
  `NUMERO_CASA` bigint(20) NOT NULL,
  `COMPLEMENTO` varchar(100) DEFAULT NULL,
  `CEP` varchar(10) NOT NULL,
  `BAIRRO` varchar(100) NOT NULL,
  `CIDADE` varchar(100) NOT NULL,
  `ESTADO` enum('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO') NOT NULL,
  `PAIS` enum('BRA') NOT NULL DEFAULT 'BRA',
  `TEL_RESIDENCIAL` varchar(50) DEFAULT NULL,
  `TEL_CELULAR` varchar(50) NOT NULL,
  `TEL_RECADO` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `SENHA_CANDIDATO` varchar(100) NOT NULL COMMENT 'senha de login'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `CANDIDATO`
--

INSERT INTO `CANDIDATO` (`ID_CANDIDATO`, `CPF`, `RG`, `NOME`, `NOME_SOCIAL`, `DATA_NASCIMENTO`, `ESTADO_CIVIL`, `SEXO`, `QTD_FILHOS`, `STATUS`, `ESCOLARIDADE`, `LINGUAS`, `CNH`, `AREA_PRETENDIDA`, `ENDERECO`, `NUMERO_CASA`, `COMPLEMENTO`, `CEP`, `BAIRRO`, `CIDADE`, `ESTADO`, `PAIS`, `TEL_RESIDENCIAL`, `TEL_CELULAR`, `TEL_RECADO`, `EMAIL`, `SENHA_CANDIDATO`) VALUES
(1, 66666666, 66666666, 'godofredo', 'Lula', '1950-12-11', 'VIUVO(A)', 'M', 5, 'ATIVO', 'ENSINO FUNDAMENTAL INCOMPLETO', 'INGLES', 'A', 'POLITICO', 'rua mario wilson partes', 803, 'CASA', '83085340', 'joanopulis', 'sao jose dos pinhais', 'SP', 'BRA', '', '99999999', '', 'lula@lula.com', '123'),
(2, 9999999, 999999, 'Juca', 'Joao', '1950-12-11', 'VIUVO(A)', 'M', 1, 'INATIVO', 'ENSINO FUNDAMENTAL INCOMPLETO', 'INGLES', 'D', 'PROGRAMADOR', 'rua mario wilson partes', 803, 'casa', '83085340', 'joanopulis', 'sao jose dos pinhais', 'PE', 'BRA', '9999999999', '99999999', '9999999999', 'juca@juca.com', '123'),
(3, 88888888, 888888, 'joao pones', 'jurema', '1950-12-11', 'SOLTEIRO(A)', 'F', 0, 'ATIVO', 'ENSINO SUPERIOR INCOMPLETO', 'INGLES', 'A', 'PROGRAMADOR', 'rua josefina alves ferreira', 1104, 'CASA', '83085340', 'joanopulis', 'sao jose dos pinhais', 'AC', 'BRA', '9999999999', '99999999', '9999999999', 'jurema@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `CONTATO`
--

CREATE TABLE `CONTATO` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `descricao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `CONTATO`
--

INSERT INTO `CONTATO` (`id`, `nome`, `email`, `descricao`) VALUES
(3, 'MARIA EDUARDA DE SOUZA INACIO', 'joao@joao.com', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `EMPRESA`
--

CREATE TABLE `EMPRESA` (
  `ID_EMPRESA` int(11) NOT NULL,
  `CNPJ` bigint(20) NOT NULL,
  `RAZAO_SOCIAL` varchar(100) NOT NULL,
  `NOME_FANTASIA` varchar(100) NOT NULL,
  `STATUS_CADASTRO` enum('ATIVO','INATIVO') NOT NULL,
  `TELEFONE_COMERCIAL` varchar(20) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `SENHA_EMPRESA` varchar(50) NOT NULL,
  `SITE` varchar(100) NOT NULL,
  `CEP` varchar(10) NOT NULL,
  `ENDERECO` varchar(100) NOT NULL,
  `NUMERO_EMPRESA` varchar(100) NOT NULL,
  `COMPLEMENTO` varchar(100) NOT NULL,
  `BAIRRO` varchar(100) NOT NULL,
  `CIDADE` varchar(100) NOT NULL,
  `ESTADO` enum('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO') NOT NULL,
  `PAIS` enum('BRA') NOT NULL DEFAULT 'BRA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `EMPRESA`
--

INSERT INTO `EMPRESA` (`ID_EMPRESA`, `CNPJ`, `RAZAO_SOCIAL`, `NOME_FANTASIA`, `STATUS_CADASTRO`, `TELEFONE_COMERCIAL`, `EMAIL`, `SENHA_EMPRESA`, `SITE`, `CEP`, `ENDERECO`, `NUMERO_EMPRESA`, `COMPLEMENTO`, `BAIRRO`, `CIDADE`, `ESTADO`, `PAIS`) VALUES
(2, 1111111111000111, 'Trabalhe Conosco LTDA', 'Trabalhe-conosco', 'ATIVO', '(41) 3333-3333', 'contato@trabalheconosco.com', 'abc', 'trabalhe_conosco.com', '83085-498', 'Projeto Integrador', '5', 'Faculdade', 'Afonso Pena', 'São José dos Pinhais', 'PR', 'BRA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `FUTURO_PARCEIRO`
--

CREATE TABLE `FUTURO_PARCEIRO` (
  `ID_EFP` int(11) NOT NULL COMMENT 'ID DO FUTURO PARCEIRO',
  `NOME_EMPRESA` varchar(100) NOT NULL COMMENT 'O NOME É UNICO',
  `EMAIL_EMPRESA` varchar(100) NOT NULL COMMENT 'O EMAIL E UNICO',
  `NOME_CONTATO` varchar(100) NOT NULL,
  `MOTIVO_CONTATO` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='TABELA CRIADA PARA ORGANIZAR OS FUTUROS PARCEIROS';

-- --------------------------------------------------------

--
-- Estrutura da tabela `PERGUNTAS_EMPRESA`
--

CREATE TABLE `PERGUNTAS_EMPRESA` (
  `ID_PERGUNTA` int(11) NOT NULL,
  `PERGUNTA` varchar(500) NOT NULL,
  `ALTERNATIVA_A` varchar(500) NOT NULL,
  `ALTERNATIVA_B` varchar(100) NOT NULL,
  `ALTERNATIVA_C` varchar(100) NOT NULL,
  `ALTERNATIVA_D` varchar(100) NOT NULL,
  `ALTERNATIVA_E` varchar(100) NOT NULL,
  `RESPOSTA` enum('A','B','C','D','E') NOT NULL,
  `ID_EMPRESA` int(11) NOT NULL,
  `STATUS` enum('ATIVA','INATIVA') NOT NULL DEFAULT 'ATIVA',
  `ID_PROFISSAO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `PERGUNTAS_EMPRESA`
--

INSERT INTO `PERGUNTAS_EMPRESA` (`ID_PERGUNTA`, `PERGUNTA`, `ALTERNATIVA_A`, `ALTERNATIVA_B`, `ALTERNATIVA_C`, `ALTERNATIVA_D`, `ALTERNATIVA_E`, `RESPOSTA`, `ID_EMPRESA`, `STATUS`, `ID_PROFISSAO`) VALUES
(37, 'O que não fazer perto de um juiz', 'Comer', 'Andar nu', 'Beijar a esposa do Juiz', 'Acusar o Juiz', 'Todas as acima', 'E', 2, 'ATIVA', 1),
(38, 'Quando devemos fazer backup', 'Sempre', 'Sempre que lembrarmos', 'Sempre que pudermos', 'Sempre devemos pedir ao estagiário', 'Sempre quando as políticas da empresa solicitam', 'A', 2, 'ATIVA', 2),
(39, 'Como fazer um cadeira', 'Pegue uma arvore', 'Compre um Cadeira', 'Plante uma arvore', 'Faça curso de Marceneiro', 'Nenhuma das alternativas acima', 'E', 2, 'ATIVA', 3),
(40, 'O que um supervisor faz?', 'Nada', 'Mais nada', 'Mais ou menos nada', 'Leva culpa', 'Auxilia seus subordinados, porém geralmente ele leva a culpa', 'E', 2, 'ATIVA', 5),
(41, 'Como vender produtos com tarja Arco-iris?', 'Não vender', 'Isso não existe', 'Fazer pesquisa no google antes de tudo', 'Falar que não tem', 'Vender ao Trump', 'E', 2, 'ATIVA', 6),
(42, 'Quanto é dois menos zero', 'bezerro', 'amanhacer', '3ds', 'nada', 'dois', 'E', 2, 'ATIVA', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `PROFISSAO`
--

CREATE TABLE `PROFISSAO` (
  `ID_PROFISSAO` int(11) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `DESCRICAO` varchar(100) NOT NULL,
  `AREA` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `PROFISSAO`
--

INSERT INTO `PROFISSAO` (`ID_PROFISSAO`, `NOME`, `DESCRICAO`, `AREA`) VALUES
(1, 'ADVOGADO', 'SER UM ADVOGADO', 'JURIDICO'),
(2, 'GERENTE', 'SER GERENTE', 'TI'),
(3, 'MARCENEIRO', 'SER MARCENEIRO', 'MARCENARIA'),
(4, 'Biólogo', 'Faz Biologia', 'Biologia'),
(5, 'Supervisor de TI', 'Supervisiona pessoal de TI', 'TI'),
(6, 'Atendente', 'Atendente de farmácia', 'Farmaceutico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `RANKING`
--

CREATE TABLE `RANKING` (
  `idRANKING` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `VAGA_CRIADA`
--

CREATE TABLE `VAGA_CRIADA` (
  `ID_VAGAC` int(11) NOT NULL,
  `DESCRICAO` varchar(100) NOT NULL,
  `RESUMO` varchar(50) NOT NULL,
  `QTDA_OFERTADA` int(11) NOT NULL,
  `ID_PERGUNTA1` int(11) NOT NULL,
  `ID_PERGUNTA2` int(11) NOT NULL,
  `ID_PERGUNTA3` int(11) NOT NULL,
  `ID_PERGUNTA4` int(11) NOT NULL,
  `ID_PERGUNTA5` int(11) NOT NULL,
  `STATUS` enum('ATIVA','INATIVA') DEFAULT 'ATIVA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `VAGA_CRIADA`
--

INSERT INTO `VAGA_CRIADA` (`ID_VAGAC`, `DESCRICAO`, `RESUMO`, `QTDA_OFERTADA`, `ID_PERGUNTA1`, `ID_PERGUNTA2`, `ID_PERGUNTA3`, `ID_PERGUNTA4`, `ID_PERGUNTA5`, `STATUS`) VALUES
(1, 'Severino', 'batata', 1, 41, 41, 39, 38, 40, 'ATIVA'),
(2, 'vaga', 'vaga vaga', 1, 41, 39, 38, 40, 40, 'ATIVA'),
(3, 'ola mundo', 'ola mundo', 1, 37, 37, 37, 37, 37, 'ATIVA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CANDIDATO`
--
ALTER TABLE `CANDIDATO`
  ADD PRIMARY KEY (`ID_CANDIDATO`),
  ADD UNIQUE KEY `CPF` (`CPF`),
  ADD UNIQUE KEY `RG` (`RG`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `CONTATO`
--
ALTER TABLE `CONTATO`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `EMPRESA`
--
ALTER TABLE `EMPRESA`
  ADD PRIMARY KEY (`ID_EMPRESA`),
  ADD UNIQUE KEY `CNPJ` (`CNPJ`,`RAZAO_SOCIAL`);

--
-- Indexes for table `FUTURO_PARCEIRO`
--
ALTER TABLE `FUTURO_PARCEIRO`
  ADD PRIMARY KEY (`ID_EFP`),
  ADD UNIQUE KEY `NOME_EMPRESA` (`NOME_EMPRESA`),
  ADD UNIQUE KEY `EMAIL_EMPRESA` (`EMAIL_EMPRESA`);

--
-- Indexes for table `PERGUNTAS_EMPRESA`
--
ALTER TABLE `PERGUNTAS_EMPRESA`
  ADD PRIMARY KEY (`ID_PERGUNTA`),
  ADD UNIQUE KEY `ID_PROFISSAO` (`ID_PROFISSAO`),
  ADD KEY `ID_EMPRESA` (`ID_EMPRESA`);

--
-- Indexes for table `PROFISSAO`
--
ALTER TABLE `PROFISSAO`
  ADD PRIMARY KEY (`ID_PROFISSAO`,`NOME`,`DESCRICAO`,`AREA`);

--
-- Indexes for table `RANKING`
--
ALTER TABLE `RANKING`
  ADD PRIMARY KEY (`idRANKING`);

--
-- Indexes for table `VAGA_CRIADA`
--
ALTER TABLE `VAGA_CRIADA`
  ADD PRIMARY KEY (`ID_VAGAC`),
  ADD KEY `ID_PERGUNTA1` (`ID_PERGUNTA1`),
  ADD KEY `ID_PERGUNTA2` (`ID_PERGUNTA2`),
  ADD KEY `ID_PERGUNTA3` (`ID_PERGUNTA3`),
  ADD KEY `ID_PERGUNTA4` (`ID_PERGUNTA4`),
  ADD KEY `ID_PERGUNTA5` (`ID_PERGUNTA5`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CANDIDATO`
--
ALTER TABLE `CANDIDATO`
  MODIFY `ID_CANDIDATO` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `CONTATO`
--
ALTER TABLE `CONTATO`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `EMPRESA`
--
ALTER TABLE `EMPRESA`
  MODIFY `ID_EMPRESA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `FUTURO_PARCEIRO`
--
ALTER TABLE `FUTURO_PARCEIRO`
  MODIFY `ID_EFP` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID DO FUTURO PARCEIRO';
--
-- AUTO_INCREMENT for table `PERGUNTAS_EMPRESA`
--
ALTER TABLE `PERGUNTAS_EMPRESA`
  MODIFY `ID_PERGUNTA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `PROFISSAO`
--
ALTER TABLE `PROFISSAO`
  MODIFY `ID_PROFISSAO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `VAGA_CRIADA`
--
ALTER TABLE `VAGA_CRIADA`
  MODIFY `ID_VAGAC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `PERGUNTAS_EMPRESA`
--
ALTER TABLE `PERGUNTAS_EMPRESA`
  ADD CONSTRAINT `PERGUNTAS_EMPRESA_ibfk_1` FOREIGN KEY (`ID_EMPRESA`) REFERENCES `EMPRESA` (`ID_EMPRESA`),
  ADD CONSTRAINT `PERGUNTAS_EMPRESA_ibfk_2` FOREIGN KEY (`ID_PROFISSAO`) REFERENCES `PROFISSAO` (`ID_PROFISSAO`);

--
-- Limitadores para a tabela `VAGA_CRIADA`
--
ALTER TABLE `VAGA_CRIADA`
  ADD CONSTRAINT `VAGA_CRIADA_ibfk_1` FOREIGN KEY (`ID_PERGUNTA1`) REFERENCES `PERGUNTAS_EMPRESA` (`ID_PERGUNTA`),
  ADD CONSTRAINT `VAGA_CRIADA_ibfk_2` FOREIGN KEY (`ID_PERGUNTA2`) REFERENCES `PERGUNTAS_EMPRESA` (`ID_PERGUNTA`),
  ADD CONSTRAINT `VAGA_CRIADA_ibfk_3` FOREIGN KEY (`ID_PERGUNTA3`) REFERENCES `PERGUNTAS_EMPRESA` (`ID_PERGUNTA`),
  ADD CONSTRAINT `VAGA_CRIADA_ibfk_4` FOREIGN KEY (`ID_PERGUNTA4`) REFERENCES `PERGUNTAS_EMPRESA` (`ID_PERGUNTA`),
  ADD CONSTRAINT `VAGA_CRIADA_ibfk_5` FOREIGN KEY (`ID_PERGUNTA5`) REFERENCES `PERGUNTAS_EMPRESA` (`ID_PERGUNTA`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
