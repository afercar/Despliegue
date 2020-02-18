SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE `desplieguebbdd`

CREATE TABLE `usuarios` (
  `nombre` varchar(50) COLLATE utf16_spanish2_ci DEFAULT NULL,
  `pass` varchar(50) COLLATE utf16_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;


INSERT INTO `usuarios` (`nombre`, `pass`) VALUES
('lolo', 'pñol-Java'),
('maria', 'asdf-php'),
('Alejandro', '123123123123-Java');
COMMIT;
