-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Fev-2019 às 20:06
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

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
  `autor` varchar(200) NOT NULL,
  `data` datetime NOT NULL,
  `imagem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`id`, `titulo`, `subtitulo`, `conteudo`, `autor`, `data`, `imagem`) VALUES
(1, 'Nunc magna mauris, aliquam id dapibus et, egestas finibus lorem', 'Duis finibus, felis semper suscipit convallis, orci ante eleifend lectus, ac pharetra ipsum risus in elit. Vestibulum enim turpis, suscipit eget lacus', 'Sed velit ex, sodales nec aliquet sed, imperdiet ac justo. Vestibulum gravida lacus eu turpis interdum cursus. Morbi ultricies libero sed nibh pulvinar elementum. Fusce vestibulum, orci quis laoreet lobortis, enim lorem sollicitudin augue, eu imperdiet eros neque id leo. In id enim ornare, bibendum tortor vitae, pellentesque nibh. Donec odio neque, sodales eu nibh eget, posuere pharetra erat. Sed luctus felis ac risus gravida, ac condimentum diam commodo. Maecenas sit amet lectus vitae magna gravida dictum. Cras iaculis in augue eget sagittis. Maecenas gravida felis sed est bibendum, nec ultricies nunc porttitor.\r\nCurabitur pretium justo dui, non porta ante ultrices at. Duis finibus, felis semper suscipit convallis, orci ante eleifend lectus, ac pharetra ipsum risus in elit. Vestibulum enim turpis, suscipit eget lacus vitae, posuere posuere ante. Nunc nec ligula facilisis, eleifend ipsum non, pulvinar nulla. Pellentesque pharetra at nulla eget elementum. Pellentesque vel tristique diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', 'bacon', '2019-02-06 00:00:00', 1),
(2, 'Ut consectetur lacus augue, tincidunt finibus nulla convallis eget', 'Your not gonna be picking a fight, Dad, dad dad daddy-o. You\'re coming to a rescue, right? Okay, let\'s go', 'That\'s right, he\'s gonna be mayor. Whoa, they really cleaned this place up, looks brand new. My insurance, it\'s your car, your insurance should pay for it. Hey, I wanna know who\'s gonna pay for this? I spilled beer all over it when that car smashed into me. Who\'s gonna pay my cleaning bill? Yes, yes, I\'m George, George McFly, and I\'m your density. I mean, I\'m your destiny. It\'s uh, the other end of town, a block past Maple.', 'gabriel', '2017-03-11 16:14:36', NULL),
(3, 'Curabitur eu mauris id neque ultricies feugiat a ut mi', 'Duis finibus, felis semper suscipit convallis, orci ante eleifend lectus, ac pharetra ipsum risus in elit. Vestibulum enim turpis, suscipit eget lacus', 'Nunc magna mauris, aliquam id dapibus et, egestas finibus lorem. Mauris at condimentum dolor. Curabitur eu mauris id neque ultricies feugiat a ut mi. Ut posuere faucibus nisl, sed sagittis tellus laoreet quis. Pellentesque molestie euismod tempus. Aliquam mattis, velit eget consequat maximus, mauris lectus scelerisque diam, eget volutpat ligula est fermentum odio. Vestibulum nisi libero, malesuada ut congue vel, efficitur sit amet mi. Cras pellentesque egestas volutpat. Aliquam venenatis ullamcorper felis nec cursus. Praesent lacinia laoreet ante, et hendrerit nisi. In hac habitasse platea dictumst.\r\n\r\nUt consectetur lacus augue, tincidunt finibus nulla convallis eget. Donec rutrum aliquam quam at ultricies. Maecenas at dignissim ex, nec semper urna. Nunc id lacus vel nisl mollis auctor. Etiam vulputate gravida porttitor. Quisque at lobortis quam, id pulvinar nunc. Cras finibus, nisl eget pulvinar egestas, neque nibh sollicitudin velit, eget efficitur neque urna non justo. Sed vehicula non velit sed viverra. Vestibulum lacinia neque et mattis dictum. Sed rhoncus dapibus nisl id fringilla. Duis quis sagittis augue. Morbi accumsan tellus ipsum, et vulputate lectus sagittis quis. Mauris eu sem justo.\r\n\r\nPhasellus quis vehicula tortor. Vestibulum sed purus et mauris tempor posuere. Vivamus vel commodo ipsum. Donec a tristique tellus. In lobortis, tortor et rhoncus rhoncus, metus libero mollis sem, id tincidunt ipsum tortor ut eros. Nullam faucibus, turpis ut egestas interdum, mi risus eleifend dui, a mollis magna enim vel odio. In lobortis, erat et luctus lobortis, nulla neque imperdiet tellus, nec varius nisi lacus id dolor. Suspendisse tempus dictum dolor ac vestibulum. Fusce tincidunt eu ipsum varius ultricies. Donec commodo bibendum consequat. Suspendisse potenti. Nam in ultricies risus.', 'alguem', '2019-02-03 00:00:00', 1),
(4, 'Vestibulum sed purus et mauris tempor posuere', 'Donec odio neque, sodales eu nibh eget, posuere pharetra erat. Sed luctus felis ac risus gravida, ac condimentum diam commodo.', 'That\'s right, he\'s gonna be mayor. Whoa, they really cleaned this place up, looks brand new. My insurance, it\'s your car, your insurance should pay for it. Hey, I wanna know who\'s gonna pay for this? I spilled beer all over it when that car smashed into me. Who\'s gonna pay my cleaning bill? Yes, yes, I\'m George, George McFly, and I\'m your density. I mean, I\'m your destiny. It\'s uh, the other end of town, a block past Maple.', 'teste', '2019-02-21 00:00:00', 1),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Your not gonna be picking a fight, Dad, dad dad daddy-o. You\'re coming to a rescue, right? Okay, let\'s go', 'Nunc magna mauris, aliquam id dapibus et, egestas finibus lorem. Mauris at condimentum dolor. Curabitur eu mauris id neque ultricies feugiat a ut mi. Ut posuere faucibus nisl, sed sagittis tellus laoreet quis. Pellentesque molestie euismod tempus. Aliquam mattis, velit eget consequat maximus, mauris lectus scelerisque diam, eget volutpat ligula est fermentum odio. Vestibulum nisi libero, malesuada ut congue vel, efficitur sit amet mi. Cras pellentesque egestas volutpat. Aliquam venenatis ullamcorper felis nec cursus. Praesent lacinia laoreet ante, et hendrerit nisi. In hac habitasse platea dictumst.</p>\r\n\r\nUt consectetur lacus augue, tincidunt finibus nulla convallis eget. Donec rutrum aliquam quam at ultricies. Maecenas at dignissim ex, nec semper urna. Nunc id lacus vel nisl mollis auctor. Etiam vulputate gravida porttitor. Quisque at lobortis quam, id pulvinar nunc. Cras finibus, nisl eget pulvinar egestas, neque nibh sollicitudin velit, eget efficitur neque urna non justo. Sed vehicula non velit sed viverra. Vestibulum lacinia neque et mattis dictum. Sed rhoncus dapibus nisl id fringilla. Duis quis sagittis augue. Morbi accumsan tellus ipsum, et vulputate lectus sagittis quis. Mauris eu sem justo.\r\n\r\nPhasellus quis vehicula tortor. Vestibulum sed purus et mauris tempor posuere. Vivamus vel commodo ipsum. Donec a tristique tellus. In lobortis, tortor et rhoncus rhoncus, metus libero mollis sem, id tincidunt ipsum tortor ut eros. Nullam faucibus, turpis ut egestas interdum, mi risus eleifend dui, a mollis magna enim vel odio. In lobortis, erat et luctus lobortis, nulla neque imperdiet tellus, nec varius nisi lacus id dolor. Suspendisse tempus dictum dolor ac vestibulum. Fusce tincidunt eu ipsum varius ultricies. Donec commodo bibendum consequat. Suspendisse potenti. Nam in ultricies risus.', 'testando', '2017-03-08 16:14:36', 0);

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
  `imagem` longtext NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `subtitulo` varchar(150) DEFAULT NULL,
  `link` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `slider`
--

INSERT INTO `slider` (`id`, `imagem`, `titulo`, `subtitulo`, `link`) VALUES
(1, '8f14e45fceea167a5a36dedd4bea2543.jpg', 'ANÁLISES ACADÊMICAS', 'PEÇA UM ORÇAMENTO', '#contato'),
(2, '1679091c5a880faf6fb5e6087eb1b2dc.jpg', 'MODELAGEM ESTATÍSTICA', 'PEÇA UM ORÇAMENTO', '#contato'),
(3, 'a87ff679a2f3e71d9181a67b7542122c.jpg', 'ESTATÍSTICA DESCRITIVA', 'PEÇA UM ORÇAMENTO', '#contato'),
(4, 'c4ca4238a0b923820dcc509a6f75849b.jpg', 'PLANEJAMENTO AMOSTRAL', 'PEÇA UM ORÇAMENTO', '#contato'),
(5, 'c9f0f895fb98ab9159f51fd0297e236d.jpg', 'PESQUISA DE OPINÃO E MERCADO', 'PEÇA UM ORÇAMENTO', '#contato'),
(6, 'c81e728d9d4c2f636f067f89cc14862c.jpg', 'CONTROLE DE QUALIDADE', 'PEÇA UM ORÇAMENTO', '#contato'),
(7, 'e4da3b7fbbce2345d7772b0674a318d5.jpg', 'BIOESTATÍSTICA', 'PEÇA UM ORÇAMENTO', '#contato'),
(8, 'eccbc87e4b5ce2fe28308fd9f2a7baf3.jpg', 'GEOESTATÍSTICA', 'PEÇA UM ORÇAMENTO', '#contato');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
