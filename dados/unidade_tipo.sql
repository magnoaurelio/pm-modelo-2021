-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27/09/2020 às 13:52
-- Versão do servidor: 10.4.13-MariaDB
-- Versão do PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u140601217_porta`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `unidade_tipo`
--

CREATE TABLE `unidade_tipo` (
  `unitipocodigo` int(5) NOT NULL,
  `unitiponome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unitiposigla` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unitipologo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `unidade_tipo`
--

INSERT INTO `unidade_tipo` (`unitipocodigo`, `unitiponome`, `unitiposigla`, `unitipologo`) VALUES
(1, 'DIRETOR(A)', 'DIR', NULL),
(2, 'PEDAGOGO(A)', NULL, NULL),
(3, 'DIRETOR(A)', 'DIR', NULL),
(4, 'PEDAGOGO(A)', NULL, NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `unidade_tipo`
--
ALTER TABLE `unidade_tipo`
  ADD PRIMARY KEY (`unitipocodigo`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `unidade_tipo`
--
ALTER TABLE `unidade_tipo`
  MODIFY `unitipocodigo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
