-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-01-2018 a las 07:14:26
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
-- Estructura de tabla para la tabla `salidashistorico`
--

CREATE TABLE `salidashistorico` (
  `ref` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `bultos` text NOT NULL,
  `descripcion` text NOT NULL,
  `guia` text NOT NULL,
  `cliente` text NOT NULL,
  `referencia` text NOT NULL,
  `linea` text NOT NULL,
  `cargos` text NOT NULL,
  `monto` text NOT NULL,
  `motivo` text NOT NULL,
  `autorizado` text NOT NULL,
  `entregado` text NOT NULL,
  `recibido` text NOT NULL,
  `fecnum` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salidashistorico`
--

INSERT INTO `salidashistorico` (`ref`, `fecha`, `bultos`, `descripcion`, `guia`, `cliente`, `referencia`, `linea`, `cargos`, `monto`, `motivo`, `autorizado`, `entregado`, `recibido`, `fecnum`) VALUES
(1, '2018-01-22', '1', '1', '1', '1', '1', '1', 'Si', '1', '1', '1', '1', '1', 1516579200),
(3, '2018-01-10', '845', '8451', '845', '1784', '5', '845', 'Si', '845', '184', '51', '74', '74', 1515542400);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
