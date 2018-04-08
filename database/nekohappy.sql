-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Abr-2018 às 23:32
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
(1, '75', '1', 'Teste', '2018-04-07 21:32:56'),
(2, '75', '1', 'lol :)', '2018-04-07 21:34:16'),
(3, '75', '3', 'Muito bom esses animes', '2018-04-07 21:38:00');

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
(1, '1', '75'),
(2, '2', '82'),
(3, '3', '82'),
(4, '3', '75');

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
  `date` datetime NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `neko_news`
--

INSERT INTO `neko_news` (`id`, `iduser`, `idquem`, `tipo`, `texto`, `date`, `view`) VALUES
(1, 75, 82, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0),
(2, 75, 82, 1, 'Comentou na sua postagem', '0000-00-00 00:00:00', 0),
(3, 75, 82, 1, 'Comentou na sua postagem', '0000-00-00 00:00:00', 0),
(4, 82, 75, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 1),
(5, 82, 82, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0),
(6, 75, 82, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0),
(7, 75, 82, 1, 'Comentou na sua postagem', '0000-00-00 00:00:00', 0),
(8, 75, 75, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 1);

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
(1, 'Publicação teste há ha', 82, '2018-04-07 21:32:39', '1', 0),
(2, 'Haha', 75, '2018-04-07 21:33:13', '1', 0),
(3, 'Naruto no tsizai no kuojin', 82, '2018-04-07 21:34:37', '1', 0);

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
  `priv` int(11) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `configurado` varchar(11) NOT NULL,
  `pin` varchar(5) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `neko_user`
--

INSERT INTO `neko_user` (`id`, `thecry`, `email`, `senha`, `nome`, `sobrenome`, `coins`, `inisession`, `datec`, `priv`, `lastlogin`, `configurado`, `pin`, `ip`, `admin`) VALUES
(75, '85d9235d10cf197950d843e56b47021ff02b0cee', 'kaway@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Alexandre', 'Silva', '1390', '2018-01-22 14:12:00', '2018-01-22 14:12:00', 1, '2018-04-08 18:22:06', '2', '5151', '179.252.242.102', 1),
(76, '2c986800324b71884c92fe4d6564336dc606225b', 'teste@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'João', 'Silva', '30', '2018-04-04 20:30:07', '2018-04-04 20:30:07', 1, '2018-04-04 20:35:30', '2', '5151', '::1', 0),
(77, '70909c345cd056c3d4dcd0f5a056fb33e88aaa23', 'anelise@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Anelise', 'Silva', '70', '2018-04-05 19:06:28', '2018-04-05 19:06:28', 0, '2018-04-05 21:00:16', '2', '123', '::1', 0),
(79, '7f4df6b496e28576f6b3429907e5a0a5be860d70', 'suporterealitegames@hotmail.com', 'b81fb41a9250707ce4222007839b8a7297a209b8', 'Paulo ', 'Maia', '10', '2018-04-07 20:32:38', '2018-04-07 20:32:38', 0, '2018-04-07 20:32:38', '2', '1234', '201.37.198.196', 0),
(82, '65bcf5a56abf865237c7ef2ae14c539ee349ac76', 'igorg849@gmail.com', '3685b33d96b40dfa75f9092aeb533995991c2782', 'Paradox', 'Bit', '20', '2018-04-07 21:18:34', '2018-04-07 21:18:34', 0, '2018-04-07 21:30:54', '2', '1234', '186.206.254.78', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `neko_like`
--
ALTER TABLE `neko_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `neko_news`
--
ALTER TABLE `neko_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `neko_post`
--
ALTER TABLE `neko_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `neko_user`
--
ALTER TABLE `neko_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
