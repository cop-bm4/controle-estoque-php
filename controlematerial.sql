-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: mysql785.umbler.com
-- Generation Time: 11-Jan-2018 às 21:33
-- Versão do servidor: 5.6.38-log
-- PHP Version: 5.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controlematerial`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `materialoperacional`
--

CREATE TABLE IF NOT EXISTS `materialoperacional` (
  `id` int(6) NOT NULL,
  `ubm` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(70) NOT NULL,
  `rp` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nserie` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `situacao` varchar(30) NOT NULL,
  `ocorrencia` varchar(300) CHARACTER SET utf8 COLLATE utf8_swedish_ci DEFAULT 'Não houve ocorrencia.',
  `nome` varchar(40) DEFAULT NULL,
  `rg` varchar(13) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cargo` varchar(30) DEFAULT NULL,
  `vtr` varchar(40) NOT NULL,
  `embarcacao` varchar(40) NOT NULL,
  `login` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT 'login',
  `senha` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `defeito` varchar(100) CHARACTER SET utf8 COLLATE utf8_swedish_ci DEFAULT 'Sem defeito.'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `materialoperacional`
--

INSERT INTO `materialoperacional` (`id`, `ubm`, `material`, `rp`, `nserie`, `situacao`, `ocorrencia`, `nome`, `rg`, `reg_date`, `cargo`, `vtr`, `embarcacao`, `login`, `senha`, `defeito`) VALUES
(0, '30 GBM', '', '', '', '', NULL, 'joca', '', '2018-01-11 11:57:49', NULL, '', '', 'joao', 'joao', NULL),
(1, '3 GBM', '', '', '', '', NULL, 'joao', '', '2018-01-11 11:58:21', NULL, '', '', 'pedro', 'pedro', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(6) unsigned NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NULL DEFAULT NULL,
  `ubm` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`, `nome`, `reg_date`, `ubm`) VALUES
(1, 'joao', 'joao', 'joao', '2018-01-02 12:12:31', '30 gbm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materialoperacional`
--
ALTER TABLE `materialoperacional`
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
-- AUTO_INCREMENT for table `materialoperacional`
--
ALTER TABLE `materialoperacional`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
