-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jun-2022 às 21:31
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

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
(20, 'leandro', 'leandro128@outlook.com', '$2y$10$QlEodtQ09s.Otv8vaqrOUuPw5ZrRz1mUrWq5iI6Wyu62XA6L3vNMe', 'editor');

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
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
