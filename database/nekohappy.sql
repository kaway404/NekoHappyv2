-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Abr-2018 às 18:12
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
(1, '89', '1', 'haha', '2018-04-08 19:41:14'),
(2, '89', '2', ':c', '2018-04-08 19:41:51'),
(3, '89', '3', 'lmao', '2018-04-08 19:42:13'),
(4, '89', '4', 'opa', '2018-04-08 19:54:02'),
(5, '91', '4', 'Vdd', '2018-04-08 19:54:02'),
(6, '91', '4', 'Concordo sem discordar ', '2018-04-08 19:54:09'),
(7, '75', '6', 'Teu cu', '2018-04-09 13:47:59');

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
(6, 75, 'NekoHappy', '2018-04-09 19:16:34'),
(7, 75, 'Facebook', '2018-04-11 13:05:24'),
(8, 75, 'Nani', '2018-04-11 13:05:33'),
(9, 93, 'FOCAS', '2018-04-11 13:11:34');

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
(1, '1', '89'),
(3, '3', '89'),
(4, '4', '91'),
(5, '4', '89'),
(6, '3', '91'),
(7, '2', '91'),
(8, '1', '91'),
(9, '4', '75'),
(10, '6', '92'),
(11, '6', '75'),
(12, '5', '92'),
(13, '4', '92'),
(14, '3', '92'),
(15, '2', '92'),
(16, '1', '92');

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
(1, 89, 85, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0),
(2, 89, 85, 1, 'Comentou na sua postagem', '0000-00-00 00:00:00', 0),
(3, 89, 89, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0),
(4, 89, 89, 1, 'Comentou na sua postagem', '0000-00-00 00:00:00', 0),
(5, 89, 89, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0),
(6, 89, 89, 1, 'Comentou na sua postagem', '0000-00-00 00:00:00', 0),
(7, 91, 91, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 1),
(8, 89, 91, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 1),
(9, 89, 91, 1, 'Comentou na sua postagem', '0000-00-00 00:00:00', 1),
(10, 91, 91, 1, 'Comentou na sua postagem', '0000-00-00 00:00:00', 1),
(11, 91, 91, 1, 'Comentou na sua postagem', '0000-00-00 00:00:00', 1),
(12, 91, 89, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0),
(13, 91, 89, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0),
(14, 91, 85, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0),
(15, 75, 91, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0),
(16, 92, 92, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 1),
(17, 75, 92, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 1),
(18, 92, 75, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 1),
(19, 92, 91, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0),
(20, 75, 92, 1, 'Comentou na sua postagem', '0000-00-00 00:00:00', 1),
(21, 92, 89, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0),
(22, 92, 89, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0),
(23, 92, 85, 1, 'Curtiu sua postagem', '0000-00-00 00:00:00', 0);

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
(1, 'teste', 85, '2018-04-08 19:37:52', '1', 0),
(2, 'Hello its me', 89, '2018-04-08 19:41:45', '1', 0),
(3, 'Testando emoticon :)\\n:3', 89, '2018-04-08 19:42:04', '1', 0),
(4, 'Kaway é gay, e chama alexandro', 91, '2018-04-08 19:53:52', '1', 0),
(5, 'Aky é viado que eu sei', 75, '2018-04-09 13:44:42', '1', 0),
(6, 'ser diferente e extraordinario\\n', 92, '2018-04-09 13:47:50', '1', 0);

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
(75, '85d9235d10cf197950d843e56b47021ff02b0cee', 'kaway@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Alexandre', 'Silva', '1410', '2018-01-22 14:12:00', '2018-01-22 14:12:00', 1, '2018-04-11 13:07:34', '2', '5151', '179.252.241.135', 1),
(76, '2c986800324b71884c92fe4d6564336dc606225b', 'teste@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'João', 'Silva', '30', '2018-04-04 20:30:07', '2018-04-04 20:30:07', 1, '2018-04-04 20:35:30', '2', '5151', '::1', 0),
(77, '70909c345cd056c3d4dcd0f5a056fb33e88aaa23', 'anelise@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Anelise', 'Silva', '70', '2018-04-05 19:06:28', '2018-04-05 19:06:28', 0, '2018-04-05 21:00:16', '2', '123', '::1', 0),
(79, '7f4df6b496e28576f6b3429907e5a0a5be860d70', 'suporterealitegames@hotmail.com', 'b81fb41a9250707ce4222007839b8a7297a209b8', 'Paulo ', 'Maia', '10', '2018-04-07 20:32:38', '2018-04-07 20:32:38', 0, '2018-04-07 20:32:38', '2', '1234', '201.37.198.196', 0),
(82, '65bcf5a56abf865237c7ef2ae14c539ee349ac76', 'igorg849@gmail.com', '3685b33d96b40dfa75f9092aeb533995991c2782', 'Paradox', 'Bit', '20', '2018-04-07 21:18:34', '2018-04-07 21:18:34', 0, '2018-04-07 21:30:54', '2', '1234', '186.206.254.78', 0),
(83, '38094a98161746463e5405c7a6edc30a1d2d5cb0', 'videoyoutube@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Video', 'Youtube', '30', '2018-04-08 18:35:09', '2018-04-08 18:35:09', 0, '2018-04-08 18:35:09', '2', '5151', '::1', 0),
(84, '38094a98161746463e5405c7a6edc30a1d2d5cb0', 'videoyoutube@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Video', 'Youtube', '0', '2018-04-08 18:35:09', '2018-04-08 18:35:09', 0, '2018-04-08 18:35:09', '0', '5151', '::1', 0),
(85, '12c7c0939aa4daf1cab1cd8ea472ddfba92f5f98', 'testevideo@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Teste', 'Video', '60', '2018-04-08 19:29:15', '2018-04-08 19:29:15', 0, '2018-04-08 19:31:48', '2', '5151', '::1', 0),
(86, '12c7c0939aa4daf1cab1cd8ea472ddfba92f5f98', 'testevideo@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Teste', 'Video', '0', '2018-04-08 19:29:15', '2018-04-08 19:29:15', 0, '2018-04-08 19:29:15', '0', '5151', '::1', 0),
(87, 'e46baadee090f0483a75694b540629997c17b265', 'haha@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Kaway', '404', '0', '2018-04-08 19:39:56', '2018-04-08 19:39:56', 0, '2018-04-08 19:39:56', '0', '5151', '::1', 0),
(88, 'e46baadee090f0483a75694b540629997c17b265', 'haha@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Kaway', '404', '0', '2018-04-08 19:39:56', '2018-04-08 19:39:56', 0, '2018-04-08 19:39:56', '0', '5151', '::1', 0),
(89, 'd846e1f6dca10e9e0a85940e1ff8ea32c752ae62', 'hello@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Hello', 'Darkness', '60', '2018-04-08 19:40:59', '2018-04-08 19:40:59', 0, '2018-04-08 19:44:31', '2', '5151', '::1', 0),
(90, 'd846e1f6dca10e9e0a85940e1ff8ea32c752ae62', 'hello@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Hello', 'Darkness', '0', '2018-04-08 19:40:59', '2018-04-08 19:40:59', 0, '2018-04-08 19:40:59', '0', '5151', '::1', 0),
(91, 'be3662f014e0ac2d8a228ddb230fa9d348e36017', 'sdjiofiosjf@live.com', '282c0a20f0520a152c89d8c0489426c0668ca495', 'carlos', 'lima', '30', '2018-04-08 19:53:25', '2018-04-08 19:53:25', 0, '2018-04-08 19:53:25', '2', '1108', '177.193.203.218', 0),
(92, '60f6cf7020eddf3b4e04a8a6dea8666e24c3abc3', 'joaopedrocardos@outlook.com', 'fc7e3ef8f0af31ce242bd1d55d67a7dab3da6977', 'Cuca ', 'Beludo', '10', '2018-04-09 13:46:08', '2018-04-09 13:46:08', 0, '2018-04-09 13:47:10', '2', '12345', '152.250.83.199', 0),
(93, '0b9f87e8ac162f98b5476f71a1c4601c88720f6b', 'pintogordo333@gmail.com', '2f027082a8174b4f9e0db3bb4f158a379e782a59', 'ADOLFO', 'Rdofolfo', '0', '2018-04-11 13:10:52', '2018-04-11 13:10:52', 0, '2018-04-11 13:10:52', '2', '444', '191.193.96.242', 0),
(94, '0b9f87e8ac162f98b5476f71a1c4601c88720f6b', 'pintogordo333@gmail.com', '2f027082a8174b4f9e0db3bb4f158a379e782a59', 'ADOLFO', 'Rdofolfo', '0', '2018-04-11 13:10:52', '2018-04-11 13:10:52', 0, '2018-04-11 13:10:52', '0', '444', '191.193.96.242', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `neko_comunidades`
--
ALTER TABLE `neko_comunidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `neko_like`
--
ALTER TABLE `neko_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `neko_news`
--
ALTER TABLE `neko_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `neko_post`
--
ALTER TABLE `neko_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `neko_user`
--
ALTER TABLE `neko_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
