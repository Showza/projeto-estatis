-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Fev-2019 às 03:09
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd-estatis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `depoimento`
--

CREATE TABLE `depoimento` (
  `id` int(11) NOT NULL,
  `autor` varchar(150) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `descricao` longtext NOT NULL,
  `empresa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `depoimento`
--

INSERT INTO `depoimento` (`id`, `autor`, `email`, `descricao`, `empresa`) VALUES
(1, 'Rogerd', NULL, 'ótimo trabalho', 'CEO do Facebook'),
(2, 'Teste', NULL, 'teste teste ', 'Voluta'),
(3, 'aslçkdfj salkdflksd jlskd ', NULL, 'alskdjf lkasdf lkasf dlkasjd fjklsadf ', 'alkdfj ljkas dflksda fljkd lkdfsa '),
(4, 'José', NULL, 'testeaadfadfadf asdfa dasfsdfret4345343 t3t34t', 'Diretor - Google');

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) CHARACTER SET utf8 NOT NULL,
  `id_galeria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descrição` longtext,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(150) NOT NULL,
  `senha` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE `postagem` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `subtitulo` varchar(150) DEFAULT NULL,
  `conteudo` longtext NOT NULL,
  `data` datetime NOT NULL,
  `imagem` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `processo_seletivo`
--

CREATE TABLE `processo_seletivo` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` int(11) NOT NULL,
  `periodo` int(11) NOT NULL,
  `motivo` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descrição` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` longtext NOT NULL,
  `imagem` longtext,
  `modalidade` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `descricao`, `imagem`, `modalidade`) VALUES
(0, 'teste', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Web_1920___1.png', 'Projeto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `imagem` int(11) NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `subtitulo` varchar(150) DEFAULT NULL,
  `link` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `slider`
--

INSERT INTO `slider` (`id`, `imagem`, `titulo`, `subtitulo`, `link`) VALUES
(1, 1, 'ANÁLISES ACADÊMICAS', 'PEÇA UM ORÇAMENTO', '#contato'),
(2, 1, 'MODELAGEM ESTATÍSTICA', 'PEÇA UM ORÇAMENTO', '#contato'),
(3, 1, 'ESTATÍSTICA DESCRITIVA', 'PEÇA UM ORÇAMENTO', '#contato'),
(4, 1, 'PLANEJAMENTO AMOSTRAL', 'PEÇA UM ORÇAMENTO', '#contato'),
(5, 1, 'PESQUISA DE OPINÃO E MERCADO', 'PEÇA UM ORÇAMENTO', '#contato'),
(6, 1, 'CONTROLE DE QUALIDADE', 'PEÇA UM ORÇAMENTO', '#contato'),
(7, 1, 'BIOESTATÍSTICA', 'PEÇA UM ORÇAMENTO', '#contato'),
(8, 1, 'GEOESTATÍSTICA', 'PEÇA UM ORÇAMENTO', '#contato');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre_nos`
--

CREATE TABLE `sobre_nos` (
  `missao` longtext NOT NULL,
  `visao` longtext NOT NULL,
  `valores` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sobre_nos`
--

INSERT INTO `sobre_nos` (`missao`, `visao`, `valores`) VALUES
('A ESTATIS é uma empresa júnior da UFOP. Atuamos no mercado paraibano desde 2015 oferecendo soluções nas áreas de processo e produto.  Somos uma organização sem fins lucrativos que tem como objetivo desenvolver o mercado paraibano através da prestação de serviços de consultoria de alta qualidade a um baixo custo.', 'A eficiência produtiva é um conjunto de medidas tomadas para aumentar a produtividade da produção do cliente com controle de fluxo de insumos, diminuição de desvios com padronização e reengenharia das linhas produtivas.', 'São soluções voltadas para a adequação quanto à legislação vigente, trazendo conforto e boas relações da empresa do cliente com as exigências públicas além de ações que visam garantir segurança ambiental e preservação da natureza');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depoimento`
--
ALTER TABLE `depoimento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fk_galeria` (`id_galeria`);

--
-- Indexes for table `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processo_seletivo`
--
ALTER TABLE `processo_seletivo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `depoimento`
--
ALTER TABLE `depoimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postagem`
--
ALTER TABLE `postagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `processo_seletivo`
--
ALTER TABLE `processo_seletivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `id_fk_galeria` FOREIGN KEY (`id_galeria`) REFERENCES `galeria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
