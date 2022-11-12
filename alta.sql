-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2022 a las 21:30:43
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd-maestros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alta`
--

CREATE TABLE `alta` (
  `idmaestro` varchar(6) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `appaterno` varchar(20) NOT NULL,
  `apmaterno` varchar(20) NOT NULL,
  `materia` varchar(20) NOT NULL,
  `telefono` int(15) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alta`
--

INSERT INTO `alta` (`idmaestro`, `nombre`, `appaterno`, `apmaterno`, `materia`, `telefono`, `email`) VALUES
('', '', '', '', '', 0, ''),
('MTRA02', 'Mar Y Sol', 'Luna', 'Quijada', 'Matematicas', 2147483647, 'luna.mar.cb37@gmail.'),
('MTRA05', 'Angel Eduardo', 'Luna', 'Quijada', 'Ciencia Sociales', 2147483647, 'luna.angel.cb37@gmai');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alta`
--
ALTER TABLE `alta`
  ADD PRIMARY KEY (`idmaestro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
