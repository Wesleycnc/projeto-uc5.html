
CREATE TABLE `agendamentos` (
  `id` smallint(6) NOT NULL,
  `estados` varchar(40) NOT NULL,
  `quadras` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `usuario_id` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;