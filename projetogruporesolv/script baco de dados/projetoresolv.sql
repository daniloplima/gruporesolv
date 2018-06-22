-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jun-2018 às 04:44
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetoresolv`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_hotel`
--

CREATE TABLE `tb_hotel` (
  `cd_hotel` int(10) NOT NULL,
  `nm_nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `nm_desc` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `nm_rua` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `nm_cidade` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `nm_estado` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `cd_num` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `file_img` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_hotel`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `cd_usuario` int(10) NOT NULL,
  `nm_usuario` varchar(30) COLLATE utf8_bin NOT NULL,
  `nm_email` varchar(30) COLLATE utf8_bin NOT NULL,
  `cd_senha` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`cd_usuario`, `nm_usuario`, `nm_email`, `cd_senha`) VALUES
(5, 'danilo', 'danilo.pelozone@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_hotel`
--
ALTER TABLE `tb_hotel`
  ADD PRIMARY KEY (`cd_hotel`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`cd_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_hotel`
--
ALTER TABLE `tb_hotel`
  MODIFY `cd_hotel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `cd_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
