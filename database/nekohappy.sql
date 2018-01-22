-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jan-2018 às 17:20
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
(1, 'Hello guys', 75, '2018-01-22 14:19:48', '1', 0),
(2, 'Tudo otimo?', 75, '2018-01-22 14:19:53', '1', 0);

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
(75, '85d9235d10cf197950d843e56b47021ff02b0cee', 'kaway@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Alexandre', 'Silva', '50', '2018-01-22 14:12:00', '2018-01-22 14:12:00', '2018-01-22 14:12:11', 1, '5151', '187.55.8.149');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `neko_post`
--
ALTER TABLE `neko_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `neko_user`
--
ALTER TABLE `neko_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
