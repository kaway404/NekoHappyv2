-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Abr-2018 às 01:43
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nekohappy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `neko_comment`
--

CREATE TABLE `neko_comment` (
  `id` int(11) NOT NULL,
  `iduser` varchar(255) NOT NULL,
  `idpost` varchar(255) NOT NULL,
  `texto` varchar(512) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `neko_comment`
--

INSERT INTO `neko_comment` (`id`, `iduser`, `idpost`, `texto`, `date`) VALUES
(1, '75', '2', 'E ai, tudo certo?', '2018-04-05 20:43:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `neko_like`
--

CREATE TABLE `neko_like` (
  `id` int(11) NOT NULL,
  `idpost` varchar(255) NOT NULL,
  `iduser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `neko_like`
--

INSERT INTO `neko_like` (`id`, `idpost`, `iduser`) VALUES
(1, '1', '77'),
(3, '2', '75');

-- --------------------------------------------------------

--
-- Estrutura da tabela `neko_news`
--

CREATE TABLE `neko_news` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idquem` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `texto` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `neko_news`
--

INSERT INTO `neko_news` (`id`, `iduser`, `idquem`, `tipo`, `texto`, `date`) VALUES
(12, 77, 75, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00'),
(13, 75, 77, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00'),
(14, 75, 77, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00'),
(15, 75, 77, 1, 'Comentou na sua postagem', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `neko_post`
--

CREATE TABLE `neko_post` (
  `id` int(11) NOT NULL,
  `texto` text NOT NULL,
  `iduser` int(11) NOT NULL,
  `tim` datetime NOT NULL,
  `tipo` varchar(3) NOT NULL,
  `destaque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `neko_post`
--

INSERT INTO `neko_post` (`id`, `texto`, `iduser`, `tim`, `tipo`, `destaque`) VALUES
(1, 'Olá pessoal', 75, '2018-04-05 12:23:59', '1', 0),
(2, 'Olá pessoal', 77, '2018-04-05 20:42:54', '1', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `neko_user`
--

CREATE TABLE `neko_user` (
  `id` int(11) NOT NULL,
  `thecry` varchar(512) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `coins` varchar(255) NOT NULL,
  `inisession` datetime NOT NULL,
  `datec` datetime NOT NULL,
  `lastlogin` datetime NOT NULL,
  `configurado` varchar(11) NOT NULL,
  `pin` varchar(5) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `neko_user`
--

INSERT INTO `neko_user` (`id`, `thecry`, `email`, `senha`, `nome`, `sobrenome`, `coins`, `inisession`, `datec`, `lastlogin`, `configurado`, `pin`, `ip`) VALUES
(75, '85d9235d10cf197950d843e56b47021ff02b0cee', 'kaway@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Alexandre', 'Silva', '1210', '2018-01-22 14:12:00', '2018-01-22 14:12:00', '2018-04-05 19:19:59', '2', '5151', '::1'),
(76, '2c986800324b71884c92fe4d6564336dc606225b', 'teste@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'João', 'Silva', '30', '2018-04-04 20:30:07', '2018-04-04 20:30:07', '2018-04-04 20:35:30', '2', '5151', '::1'),
(77, '70909c345cd056c3d4dcd0f5a056fb33e88aaa23', 'anelise@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Anelise', 'Silva', '20', '2018-04-05 19:06:28', '2018-04-05 19:06:28', '2018-04-05 20:40:05', '2', '123', '::1'),
(78, '70909c345cd056c3d4dcd0f5a056fb33e88aaa23', 'anelise@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Anelise', 'Silva', '0', '2018-04-05 19:06:28', '2018-04-05 19:06:28', '2018-04-05 19:06:28', '0', '123', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `neko_comment`
--
ALTER TABLE `neko_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neko_like`
--
ALTER TABLE `neko_like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neko_news`
--
ALTER TABLE `neko_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neko_post`
--
ALTER TABLE `neko_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neko_user`
--
ALTER TABLE `neko_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `neko_comment`
--
ALTER TABLE `neko_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `neko_like`
--
ALTER TABLE `neko_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `neko_news`
--
ALTER TABLE `neko_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `neko_post`
--
ALTER TABLE `neko_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `neko_user`
--
ALTER TABLE `neko_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
