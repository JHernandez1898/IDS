-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2017 a las 21:28:00
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ids`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `fecha` text NOT NULL,
  `nombre` text NOT NULL,
  `id` int(11) NOT NULL,
  `serie` int(11) NOT NULL,
  `entrada` text NOT NULL,
  `salida` text NOT NULL,
  `notas` text NOT NULL,
  `fecnum` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`fecha`, `nombre`, `id`, `serie`, `entrada`, `salida`, `notas`, `fecnum`) VALUES
('August 4, 2017', 'Julio Hernandez', 1, 160342407, '03:28:16 PM', '03:33:46 PM', ' ', 1501822800),
('August 4, 2017', 'Griselda  Martinez Hernandez', 4, 935729980, '04:02:51 PM', '04:02:59 PM', ' ', 1501822800);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
