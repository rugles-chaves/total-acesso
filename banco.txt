-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Ago-2020 às 11:30
-- Versão do servidor: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos`
--

CREATE TABLE IF NOT EXISTS `acessos` (
  `id` int(11) NOT NULL,
  `cad` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `foto2` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acessos`
--

INSERT INTO `acessos` (`id`, `cad`, `nome`, `email`, `foto`, `foto2`, `data`) VALUES
(27, '2', 'rugles', 'rugles@gmail', 'f2cf1ac7789ffab2d8e912820875a7a6.jpg', 'bec891f6bcb69efa50bb5ebf7fd3168d.jpg', '24/08/2020 21:03:27'),
(28, '5', 'RUGLESSSSS', 'JXO-1212', 'd4c70d1eb76e8d904c663879091f874a.jpg', 'c28cbc47a0f22fbc4cd0ab6d883b76fe.jpg', '24/08/2020 21:09:56'),
(29, '2', 'rugles', 'rugles@gmail', 'f2cf1ac7789ffab2d8e912820875a7a6.jpg', 'bec891f6bcb69efa50bb5ebf7fd3168d.jpg', '24/08/2020 21:13:20'),
(30, '5', 'RUGLESSSSS', 'JXO-1212', 'd4c70d1eb76e8d904c663879091f874a.jpg', 'c28cbc47a0f22fbc4cd0ab6d883b76fe.jpg', '24/08/2020 21:13:23'),
(31, '2', 'rugles', 'rugles@gmail', 'f2cf1ac7789ffab2d8e912820875a7a6.jpg', 'bec891f6bcb69efa50bb5ebf7fd3168d.jpg', '24/08/2020 21:13:28'),
(32, '5', 'RUGLESSSSS', 'JXO-1212', 'd4c70d1eb76e8d904c663879091f874a.jpg', 'c28cbc47a0f22fbc4cd0ab6d883b76fe.jpg', '24/08/2020 21:13:31'),
(33, '2', 'rugles', 'rugles@gmail', 'f2cf1ac7789ffab2d8e912820875a7a6.jpg', 'bec891f6bcb69efa50bb5ebf7fd3168d.jpg', '24/08/2020 21:14:36'),
(34, '5', 'RUGLESSSSS', 'JXO-1212', 'd4c70d1eb76e8d904c663879091f874a.jpg', 'c28cbc47a0f22fbc4cd0ab6d883b76fe.jpg', '24/08/2020 21:14:50'),
(35, '2', 'rugles', 'rugles@gmail', 'f2cf1ac7789ffab2d8e912820875a7a6.jpg', 'bec891f6bcb69efa50bb5ebf7fd3168d.jpg', '24/08/2020 21:14:53'),
(36, '5', 'RUGLESSSSS', 'JXO-1212', 'd4c70d1eb76e8d904c663879091f874a.jpg', 'c28cbc47a0f22fbc4cd0ab6d883b76fe.jpg', '24/08/2020 21:14:56'),
(37, '5', 'RUGLESSSSS', 'JXO-1212', 'd4c70d1eb76e8d904c663879091f874a.jpg', 'c28cbc47a0f22fbc4cd0ab6d883b76fe.jpg', '24/08/2020 21:14:59'),
(38, '2', 'rugles', 'rugles@gmail', 'f2cf1ac7789ffab2d8e912820875a7a6.jpg', 'bec891f6bcb69efa50bb5ebf7fd3168d.jpg', '24/08/2020 21:15:05'),
(39, '5', 'RUGLESSSSS', 'JXO-1212', 'd4c70d1eb76e8d904c663879091f874a.jpg', 'c28cbc47a0f22fbc4cd0ab6d883b76fe.jpg', '24/08/2020 21:15:08'),
(40, '2', 'rugles', 'rugles@gmail', 'f2cf1ac7789ffab2d8e912820875a7a6.jpg', 'bec891f6bcb69efa50bb5ebf7fd3168d.jpg', '24/08/2020 21:15:24'),
(41, '5', 'RUGLESSSSS', 'JXO-1212', 'd4c70d1eb76e8d904c663879091f874a.jpg', 'c28cbc47a0f22fbc4cd0ab6d883b76fe.jpg', '24/08/2020 21:15:27'),
(42, '5', 'RUGLESSSSS', 'JXO-1212', 'd4c70d1eb76e8d904c663879091f874a.jpg', 'c28cbc47a0f22fbc4cd0ab6d883b76fe.jpg', '24/08/2020 21:15:34'),
(43, '2', 'rugles', 'rugles@gmail', 'f2cf1ac7789ffab2d8e912820875a7a6.jpg', 'bec891f6bcb69efa50bb5ebf7fd3168d.jpg', '24/08/2020 21:15:37'),
(44, '5', 'RUGLESSSSS', 'JXO-1212', 'd4c70d1eb76e8d904c663879091f874a.jpg', 'c28cbc47a0f22fbc4cd0ab6d883b76fe.jpg', '24/08/2020 21:15:40'),
(45, '5', 'RUGLESSSSS', 'JXO-1212', 'd4c70d1eb76e8d904c663879091f874a.jpg', 'c28cbc47a0f22fbc4cd0ab6d883b76fe.jpg', '24/08/2020 21:53:08'),
(46, '2', 'rugles', 'rugles@gmail', 'f2cf1ac7789ffab2d8e912820875a7a6.jpg', 'bec891f6bcb69efa50bb5ebf7fd3168d.jpg', '24/08/2020 21:53:15'),
(47, '5', 'RUGLESSSSS', 'JXO-1212', 'd4c70d1eb76e8d904c663879091f874a.jpg', 'c28cbc47a0f22fbc4cd0ab6d883b76fe.jpg', '24/08/2020 21:53:18'),
(48, '10', 'Rugles AssunÃ§Ã£o Chaves', 'Jxt 2323', 'be71ee6045117f3556137e0bf98cd455.jpg', '5f74cd016948272a5e75421bd9f4a281.jpg', '24/08/2020 22:00:34'),
(49, '5', 'RUGLESSSSS', 'JXO-1212', 'd4c70d1eb76e8d904c663879091f874a.jpg', 'c28cbc47a0f22fbc4cd0ab6d883b76fe.jpg', '24/08/2020 22:00:57'),
(50, '12', 'Rugles', 'Hhh1212', 'ac562dc927e2fb4bebabb8c5d03f5e81.jpg', 'b77c8c2d825906ff1b4728f42d906273.', '24/08/2020 22:04:11'),
(51, '10', 'Rugles AssunÃ§Ã£o Chaves', 'Jxt 2323', 'be71ee6045117f3556137e0bf98cd455.jpg', '5f74cd016948272a5e75421bd9f4a281.jpg', '24/08/2020 22:04:16'),
(52, '5', 'RUGLESSSSS', 'JXO-1212', 'd4c70d1eb76e8d904c663879091f874a.jpg', 'c28cbc47a0f22fbc4cd0ab6d883b76fe.jpg', '24/08/2020 22:05:00'),
(53, '10', 'rugles', 'rugles@gmaild', '1e07e7aba0bb747a069f7e3d499d2d6a.jpg', '766982327c0b23d6a74f91b0a0d78594.jpg', '24/08/2020 22:06:01'),
(54, '5', 'RUGLESSSSS', 'JXO-1212', 'd4c70d1eb76e8d904c663879091f874a.jpg', 'c28cbc47a0f22fbc4cd0ab6d883b76fe.jpg', '24/08/2020 22:06:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `cad` varchar(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `foto2` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `cad`, `nome`, `email`, `foto`, `foto2`, `data`) VALUES
(4, '5', 'RUGLESSSSS', 'JXO-1212', 'd4c70d1eb76e8d904c663879091f874a.jpg', 'c28cbc47a0f22fbc4cd0ab6d883b76fe.jpg', '24/08/2020 22:06:15'),
(7, '10', 'rugles', 'rugles@gmaild', '1e07e7aba0bb747a069f7e3d499d2d6a.jpg', '766982327c0b23d6a74f91b0a0d78594.jpg', '24/08/2020 22:06:01');

--
-- Acionadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `usuarios` AFTER UPDATE ON `usuarios`
 FOR EACH ROW INSERT INTO acessos
(nome,cad,email,foto,foto2,data)
VALUES 
(new.nome,new.cad,new.email,new.foto,new.foto2,new.data)
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acessos`
--
ALTER TABLE `acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
