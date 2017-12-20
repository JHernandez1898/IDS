-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2017 a las 20:52:30
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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `numero` text NOT NULL,
  `nombre` text NOT NULL,
  `password` text NOT NULL,
  `estatus` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`numero`, `nombre`, `password`, `estatus`) VALUES
('722', 'SECRETARIA DE MARINA', '71c61b9e2714e42579aa256ecf5cae28', '1'),
('763', 'CORPORACION AMEREX MEXICO, S.A. DE C.V.', '7215ee9c7d9dc229d2921a40e899ec5f', '1'),
('764', 'GARYR, S.A. DE C.V.', '7215ee9c7d9dc229d2921a40e899ec5f', '1'),
('765', 'LOAIZA BONILLA REPRESENTACIONES, S.A. DE C.V.', '7215ee9c7d9dc229d2921a40e899ec5f', '1'),
('943', 'CEPI ESPECIALISTAS EN PROYECTOS CONTRA INCENDIO S.A DE C.V.', '7215ee9c7d9dc229d2921a40e899ec5f', '1'),
('1027', 'CORPORACION GINECAR DE MEXICO S.A. DE C.V.', '', '0'),
('1065', 'DEKO SYSTEM GROUP S. DE R.L. DE C.V.', '', '0'),
('1070', 'DECOREXPRESS S.A. DE C.V.', '', '0'),
('1071', 'BLOWERS AND PRODUCTS DE MEXICO S.A. DE C.V.', '', '0'),
('1084', 'BRAVO MONTACARGAS S.A. DE C.V.', '', '0'),
('1086', 'GRUPO INDUSTRIAL PHILADELPHIA S.A. DE C.V.', '', '0'),
('1087', 'BRAVO MONTACARGAS SLP S.A. DE C.V.', '', '0'),
('1088', 'INFOPORTAL S.A. DE C.V.', '', '0'),
('1093', 'BRALO MEXICO S.A. DE C.V.', '', '0'),
('1095', 'INGENIERIA AMBIENTAL DE HIDALGO S.A. DE C.V.', '', '0'),
('1096', 'PAC AVIATION INTERNATIONAL, INC.', '', '0'),
('1097', 'TECHNOQUIP CO., INC.', '', '0'),
('1098', 'AMERIMEX INTERNATIONAL CO.', '', '0'),
('1099', 'INTERNATIONAL DISPATCH SERVICES INC', '', '0'),
('1100', 'CLIENTE PENDIENTE', '', '0'),
('1101', 'SOLUCIONES EN COMERCIO SOCO, SA DE CV', '', '0'),
('1102', 'AIRBUS DS GS S. DE R.L. DE C.V.', '', '0'),
('1103', 'ETHERE, S. DE R.L. DE C.V.', '', '0'),
('1104', 'IBOT, S.A. DE C.V.', '', '0'),
('1105', 'HANHAUSEN VARCACIA, S.A. DE C.V.', '', '0'),
('1106', 'PROTACTIC S.A. DE C.V.', '', '0'),
('1107', 'COMERCIAL INDUSTRIAL SAYSA SA DE CV', '7215ee9c7d9dc229d2921a40e899ec5f', '1'),
('1108', 'ENJOY SAFETY SA DE CV', '', '0'),
('1109', 'BBC CONSULTING, INC.', '', '0'),
('00', 'admin', 'daac9d641ca5455d4c8a18ef868ae2f1', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
