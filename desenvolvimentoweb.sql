-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Nov-2022 às 03:58
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `desenvolvimentoweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrados`
--

CREATE TABLE `cadastrados` (
  `id` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Telefone` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Login` varchar(100) NOT NULL,
  `Senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastrados`
--

INSERT INTO `cadastrados` (`id`, `Nome`, `Telefone`, `Email`, `Login`, `Senha`) VALUES
(1, 'pedro', '31973532012', 'teste@teste', 'pedro', '123321'),
(4, 'test', 'test', 'test@test1', 'Test', 'Test'),
(5, 'test', 'test', 'test@test1', 'Test', 'Test'),
(6, 'dsfsd', 'fsdfsd', 'sfsdfs@dfs', 'sdfs', 'sfsdfs'),
(7, 'sdfsdfs', 'sdfs', 'dfsdfsfdsd@qwe', 'fsdfsfsd', 'fsdfsd'),
(8, 'asdasd', 'asdad', 'asda@sdfsdf', 'sdfsdf', 'sdfs'),
(9, 'werwr', 'rwerw', 'wrwr@123', 'fsfs', 'qweq'),
(10, 'sdfsfvxcv', 'xvxvxv', 'xcv@fsfbcv', 'xvxvx', 'vxvxvx'),
(11, '123321', 'jklpjlk', 'kghkjh@jghj', 'kpkpkp', 'jkiojojhi'),
(12, '', '', '', '', ''),
(13, '', '', '', '', ''),
(14, '', '', '', '', ''),
(15, '', '', '', '', ''),
(16, 'dfsf', 'sdfsdf', 'sfsfsd@dsfsdf', 'sdfsf', 'sdfsf'),
(17, 'sdfs', 'sdfsf', 'sd!@dgfg', 'dfgdfg', 'dfgdf'),
(18, '', '', '', '', ''),
(19, '', '', '', '', ''),
(20, '', '', '', '', ''),
(21, '', '', 'pedro@pedro.com', '', ''),
(22, 'pedro', 'pedro', 'Pedro@pedro.com', 'pedropedro', '12345678');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastrados`
--
ALTER TABLE `cadastrados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastrados`
--
ALTER TABLE `cadastrados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
