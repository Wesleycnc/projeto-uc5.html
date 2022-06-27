-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jun-2022 às 16:31
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_uc5`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id` smallint(6) NOT NULL,
  `estados` varchar(40) NOT NULL,
  `quadras` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `hora` varchar(45) NOT NULL,
  `usuario_id` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `estados`, `quadras`, `data`, `hora`, `usuario_id`) VALUES
(0, 'sp', 'Quadra Itaquera', '2022-06-29', '1-hora', 23);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` smallint(6) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` enum('admin','editor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `tipo`) VALUES
(15, 'Wesley', 'wesley727@gmail.com', '$2y$10$oul.qhMzI5mr8ysLuJBX.uXwJKbSOxuSBXW/bEjCcG8uAloaRR1Nq', 'admin'),
(16, 'maria', 'maria169@gmail.com', '$2y$10$VvRH3Y0qwP7XArIjGvEKD./5KGyHVUH3OIwpxcDsFu1zjuiGDc5ry', 'editor'),
(17, 'leandro', 'leandro126@outlook.com', '$2y$10$/tHwFHbVY5z7nlmw4v8DVeiDdFU8aoD107t5VCMmFapff9dU6lRpC', 'editor'),
(18, 'Wesley', 'marcelo126@outlook.com', '$2y$10$tCM9c/WBdM301y3izhpfuOcwnHkJOCkcCl70A1hZEXKmVnDzjAYze', 'editor'),
(20, 'leandro', 'leandro128@outlook.com', '$2y$10$QlEodtQ09s.Otv8vaqrOUuPw5ZrRz1mUrWq5iI6Wyu62XA6L3vNMe', 'editor'),
(22, 'Gabriel', 'gabriel@gmail.com', '$2y$10$2e97XPrclRE2FgpJzFw0NOCm4mpLNbfhw6xlf9LnCuunC2hHGtAai', 'admin'),
(23, 'Gabriel', 'gabriel@123.com', '$2y$10$Hz35OXr0pu5hbR5NGS8H3Ou/MWtRMTEmSQAdsSEOSZSggcUnzYgEe', 'editor');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
