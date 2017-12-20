-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2017 a las 21:27:50
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
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellidos` text NOT NULL,
  `direccion` text NOT NULL,
  `iniciodetrabajo` text NOT NULL,
  `puesto` text NOT NULL,
  `serie` int(11) NOT NULL,
  `imagen` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellidos`, `direccion`, `iniciodetrabajo`, `puesto`, `serie`, `imagen`, `status`) VALUES
(1, 'Julio', 'Hernandez', 'Santa Patricia 310', '2017-08-03', 'Empleado', 160342407, 'Recursos/Fotos/19657304_639317409609998_7992275663972316431_n.jpg', 1),
(2, 'Antonio', 'Cruz Jr', 'OWDMK', '2017-08-03', 'Empleado', 533163452, 'Recursos/Fotos/81M9Ji91EPL._SL1500_.jpg', 1),
(4, 'Griselda ', 'Martinez Hernandez', 'Santa Patricia 310', '2017-08-03', 'Empleado', 935729980, 'Recursos/Fotos/hqdefault.jpg', 1),
(5, 'Tania', 'Hernandez', 'Santa Patricia 310', '2017-08-04', 'Empleado', 209341430, 'Recursos/Fotos/19665238_1350110955107659_8225163459138182340_n.jpg', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
