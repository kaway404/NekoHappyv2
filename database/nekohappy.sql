-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Abr-2018 às 17:20
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `neko_comunidades`
--

CREATE TABLE `neko_comunidades` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `nome` text NOT NULL,
  `datec` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `neko_comunidades`
--

INSERT INTO `neko_comunidades` (`id`, `iduser`, `nome`, `datec`) VALUES
(1, 75, 'NekoHappy', '2018-04-11 21:52:44');

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
(7, '1', '99');

-- --------------------------------------------------------

--
-- Estrutura da tabela `neko_membros`
--

CREATE TABLE `neko_membros` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idgroup` int(11) NOT NULL,
  `datec` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `view` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `neko_news`
--

INSERT INTO `neko_news` (`id`, `iduser`, `idquem`, `tipo`, `texto`, `date`, `view`, `status`) VALUES
(1, 99, 75, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 1, 1),
(2, 99, 75, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0, 1),
(3, 99, 75, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0, 1),
(4, 99, 75, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0, 1),
(5, 99, 75, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0, 1),
(6, 99, 75, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0, 1),
(7, 99, 75, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0, 1);

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
  `photo` text NOT NULL,
  `destaque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `neko_post`
--

INSERT INTO `neko_post` (`id`, `texto`, `iduser`, `tim`, `tipo`, `photo`, `destaque`) VALUES
(1, 'Alterou sua foto de perfil', 75, '2018-04-11 21:51:53', '3', 'tumblr_olcrmb6u6I1rpwm80o1_250.jpg', 0);

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
  `photo` text NOT NULL,
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

INSERT INTO `neko_user` (`id`, `thecry`, `email`, `senha`, `nome`, `sobrenome`, `photo`, `coins`, `inisession`, `datec`, `priv`, `lastlogin`, `configurado`, `pin`, `ip`, `admin`) VALUES
(75, '85d9235d10cf197950d843e56b47021ff02b0cee', 'kaway@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Alexandre', 'Silva', 'tumblr_olcrmb6u6I1rpwm80o1_250.jpg', '1600', '2018-01-22 14:12:00', '2018-01-22 14:12:00', 1, '2018-04-11 21:53:30', '2', '5151', '200.180.58.171', 0),
(99, '70909c345cd056c3d4dcd0f5a056fb33e88aaa23', 'anelise@hotmail.com', 'a873d476f684dd7a02e0ff310c060f547e3b1459', 'Anelise', 'Silva', '5314ef83a515891ec0c38a1ba9013acc.jpg', '0', '2018-04-11 20:19:37', '2018-04-11 20:19:37', 0, '2018-04-12 11:57:50', '2', '1234', '::1', 0),
(101, '4878185a84171c3fd37677f1c1028f49da20621a', 'adson.tanajura@gmail.com', 'e1a4442d17f7bc360400b7d7f839f2dfc9900dbe', 'Adson', 'nunes', 'images1.jpg', '440', '2018-04-11 21:01:49', '2018-04-11 21:01:49', 0, '2018-04-11 21:38:13', '2', '3232', '187.87.192.34', 0),
(103, 'a7dbe334fc696e3f2d91cf4821a0a4d66cc2968a', 'danielzinhooficial@gmail.com', 'f8ad67e974bfe0bfd1f0217ee4744d5096dcac79', 'Daniel', 'Fontenelle', 'sisi.png', '10', '2018-04-11 21:07:44', '2018-04-11 21:07:44', 0, '2018-04-11 21:07:44', '2', '24091', '187.17.157.0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `neko_comment`
--
ALTER TABLE `neko_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neko_comunidades`
--
ALTER TABLE `neko_comunidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neko_like`
--
ALTER TABLE `neko_like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neko_membros`
--
ALTER TABLE `neko_membros`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `neko_comunidades`
--
ALTER TABLE `neko_comunidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `neko_like`
--
ALTER TABLE `neko_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `neko_membros`
--
ALTER TABLE `neko_membros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `neko_news`
--
ALTER TABLE `neko_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `neko_post`
--
ALTER TABLE `neko_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `neko_user`
--
ALTER TABLE `neko_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
