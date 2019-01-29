-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 26/01/2019 às 15:52
-- Versão do servidor: 5.6.24
-- Versão do PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `bd-estatis`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `depoimento`
--

CREATE TABLE IF NOT EXISTS `depoimento` (
  `id` int(11) NOT NULL,
  `autor` varchar(150) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `descricao` longtext NOT NULL,
  `empresa` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `depoimento`
--

INSERT INTO `depoimento` (`id`, `autor`, `email`, `descricao`, `empresa`) VALUES
(1, 'Rogerd', NULL, 'ótimo trabalho', 'CEO do Facebook'),
(2, 'Teste', NULL, 'teste teste ', 'Voluta'),
(3, 'aslçkdfj salkdflksd jlskd ', NULL, 'alskdjf lkasdf lkasf dlkasjd fjklsadf ', 'alkdfj ljkas dflksda fljkd lkdfsa '),
(4, 'José', NULL, 'testeaadfadfadf asdfa dasfsdfret4345343 t3t34t', 'Diretor - Google');

-- --------------------------------------------------------

--
-- Estrutura para tabela `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) CHARACTER SET utf8 NOT NULL,
  `id_galeria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descrição` longtext,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `user` varchar(150) NOT NULL,
  `senha` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `postagem`
--

CREATE TABLE IF NOT EXISTS `postagem` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `subtitulo` varchar(150) DEFAULT NULL,
  `conteudo` longtext NOT NULL,
  `data` datetime NOT NULL,
  `imagem` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `processo_seletivo`
--

CREATE TABLE IF NOT EXISTS `processo_seletivo` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` int(11) NOT NULL,
  `periodo` int(11) NOT NULL,
  `motivo` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `projeto`
--

CREATE TABLE IF NOT EXISTS `projeto` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descrição` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `servico`
--

CREATE TABLE IF NOT EXISTS `servico` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` longtext NOT NULL,
  `imagem` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL,
  `imagem` int(11) NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `subtitulo` varchar(150) DEFAULT NULL,
  `link` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `slider`
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
-- Estrutura para tabela `sobre_nos`
--

CREATE TABLE IF NOT EXISTS `sobre_nos` (
  `id` int(11) NOT NULL,
  `descricao` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `depoimento`
--
ALTER TABLE `depoimento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fk_galeria` (`id_galeria`);

--
-- Índices de tabela `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `processo_seletivo`
--
ALTER TABLE `processo_seletivo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sobre_nos`
--
ALTER TABLE `sobre_nos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `depoimento`
--
ALTER TABLE `depoimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `postagem`
--
ALTER TABLE `postagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `processo_seletivo`
--
ALTER TABLE `processo_seletivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `sobre_nos`
--
ALTER TABLE `sobre_nos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `id_fk_galeria` FOREIGN KEY (`id_galeria`) REFERENCES `galeria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
