
CREATE TABLE `agendamentos` (
  `id` smallint(6) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `estados` varchar(40) NOT NULL,
  `quadras` varchar(255) NOT NULL,
  `data` enum('admin','editor') NOT NULL,
  `hora` enum('admin','editor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;