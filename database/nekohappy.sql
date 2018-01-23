-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Jan-2018 às 14:11
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 5.6.32

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
(8, '5', '83'),
(9, '4', '83'),
(10, '3', '83'),
(11, '2', '83'),
(12, '1', '83'),
(14, '6', '83');

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
(1, 'Hello', 82, '2018-01-22 21:26:38', '1', 0),
(2, 'Teste', 82, '2018-01-22 21:26:40', '1', 0),
(3, 'haha', 82, '2018-01-22 21:26:41', '1', 0),
(4, 'teste', 82, '2018-01-22 21:27:41', '1', 0),
(5, '\\nHello World', 83, '2018-01-22 21:32:58', '1', 0),
(6, 'Seja bem vindo(a) ao NekoHappy <3', 75, '2018-01-22 21:34:59', '1', 1);

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
  `configurado` int(11) NOT NULL,
  `pin` varchar(5) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `neko_user`
--

INSERT INTO `neko_user` (`id`, `thecry`, `email`, `senha`, `nome`, `sobrenome`, `coins`, `inisession`, `datec`, `lastlogin`, `configurado`, `pin`, `ip`) VALUES
(75, '85d9235d10cf197950d843e56b47021ff02b0cee', 'kaway@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Alexandre', 'Silva', '810', '2018-01-22 14:12:00', '2018-01-22 14:12:00', '2018-01-23 10:00:08', 1, '5151', '187.55.17.122'),
(76, 'd6bba9d72280ececb3124084388ef4548d7ea489', 'igorg155103i@gmail.com', '31f88741c850331188d23e6e0067730e13c92809', 'Igor', 'Victor', '10', '2018-01-22 14:30:34', '2018-01-22 14:30:34', '2018-01-22 14:30:34', 1, '5151', '201.17.156.223'),
(77, 'f77457666c4a177308e79688a8650c0ecfd54290', 'vandilsomjogos@hotmail.com', '4557b921cca88f57476a7102c9860fdc11686683', 'Sshineyuu', 'idav', '', '2018-01-22 15:03:13', '2018-01-22 15:03:13', '2018-01-22 15:03:13', 1, '8888', '89.114.245.202'),
(78, '56fbefd9b8a32f366a9339f2bf11225458098127', 'johny.soares55@gmail.com', '6c2b86d3e7679f180802c14595cbcd273c460a25', 'Johny', 'Soares', '', '2018-01-22 15:10:13', '2018-01-22 15:10:13', '2018-01-22 15:10:13', 1, '1234', '179.107.81.192'),
(79, 'a7688df2a3bf8aceb5503a15d23076bd083d56b5', 'Luizfelipe34@hotmail.com.br', '13de8889aecf8f48d9c799a1f3fb520fa748372a', 'Luiz Felipe', 'da Silva', '20', '2018-01-22 15:45:42', '2018-01-22 15:45:42', '2018-01-22 15:46:05', 1, '40028', '179.185.221.192'),
(80, '4d27bc3cacb07bd9ecd6a4515e16bd471199a4ea', 'a@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'Felipe', 'Caragd', '10', '2018-01-22 15:50:17', '2018-01-22 15:50:17', '2018-01-22 15:50:17', 1, '123', '138.0.205.229'),
(81, '77c11ae216e7a7b68a658819c5b47c32cc873a07', 'glubglub@glub.com', '838078182617a41ca50fe7be65c3d3c93208c55c', 'Gabriel', 'Santos', '30', '2018-01-22 16:28:51', '2018-01-22 16:28:51', '2018-01-22 17:46:47', 1, '0987', '45.226.54.118'),
(82, 'dfd22d81d69d38cc3026a4ef11517a41341c7ed1', 'xande@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Alexandre', 'Silva', '50', '2018-01-22 21:06:55', '2018-01-22 21:06:55', '2018-01-22 21:26:34', 0, '5151', '201.14.156.47'),
(83, '70ce4aa7a1a99acf3dc3847340bfae59fa95de47', 'bruno@hotmail.com', '04556b581f269b79f4ed5801f8532331c7cffaf5', 'Bruno', 'Martins', '10', '2018-01-22 21:23:53', '2018-01-22 21:23:53', '2018-01-22 21:57:37', 1, '123', '177.13.253.35');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `neko_like`
--
ALTER TABLE `neko_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `neko_post`
--
ALTER TABLE `neko_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `neko_user`
--
ALTER TABLE `neko_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
