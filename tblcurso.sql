-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Abr-2022 às 23:00
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdcrud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblcurso`
--

CREATE TABLE `tblcurso` (
  `idcurso` int(11) NOT NULL,
  `curso` varchar(100) NOT NULL,
  `preco` float(10,2) NOT NULL,
  `horainicio` varchar(5) NOT NULL,
  `horafim` varchar(5) NOT NULL,
  `duracao` varchar(45) NOT NULL,
  `dias` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tblcurso`
--

INSERT INTO `tblcurso` (`idcurso`, `curso`, `preco`, `horainicio`, `horafim`, `duracao`, `dias`) VALUES
(1, 'HTML e CSS Básico', 150.00, '15:00', '16:30', '2 meses', 'Sábado e Domingo'),
(2, 'PHP Avançado', 250.00, '20:00', '22:00', '1 mês ', 'Terça-feira'),
(3, 'Web Design ', 1200.00, '10:00', '12:00', '3 meses', 'Segunda, Quarta e Sexta'),
(4, 'CSS Avançado', 1000.00, '15:00', '17:00', '3 meses', 'Segunda, Quarta e Sexta');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tblcurso`
--
ALTER TABLE `tblcurso`
  ADD PRIMARY KEY (`idcurso`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblcurso`
--
ALTER TABLE `tblcurso`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
