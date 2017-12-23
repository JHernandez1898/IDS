-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-12-2017 a las 02:28:33
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
-- Estructura de tabla para la tabla `driver`
--

CREATE TABLE `driver` (
  `DNAME` text NOT NULL,
  `DRIVER_ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traileractual`
--

CREATE TABLE `traileractual` (
  `REF` int(11) NOT NULL,
  `T_COMPANY` int(11) NOT NULL,
  `T_NUMBER` int(11) NOT NULL,
  `D_NAME` int(11) NOT NULL,
  `DRIVER_ID` int(11) NOT NULL,
  `TR_COMPANY` text NOT NULL,
  `TR_NUMBER` int(11) NOT NULL,
  `N_SEAL` int(11) NOT NULL,
  `LD/MT` text NOT NULL,
  `DELIVERY_D` text NOT NULL,
  `TIME IN` time NOT NULL,
  `TIME OUT` time NOT NULL,
  `CONSIGNNE` text NOT NULL,
  `FECNUM` int(11) NOT NULL,
  `WAITING` text NOT NULL,
  `ACTIVE` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trailerhistorico`
--

CREATE TABLE `trailerhistorico` (
  `REF` int(11) NOT NULL,
  `T_COMPANY` int(11) NOT NULL,
  `T_NUMBER` int(11) NOT NULL,
  `D_NAME` int(11) NOT NULL,
  `DRIVER_ID` int(11) NOT NULL,
  `TR_COMPANY` text NOT NULL,
  `TR_NUMBER` int(11) NOT NULL,
  `N_SEAL` int(11) NOT NULL,
  `LD/MT` text NOT NULL,
  `DELIVERY_D` text NOT NULL,
  `TIME IN` time NOT NULL,
  `TIME OUT` time NOT NULL,
  `CONSIGNNE` text NOT NULL,
  `FECNUM` int(11) NOT NULL,
  `WAITING` text NOT NULL,
  `ACTIVE` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trucks`
--

CREATE TABLE `trucks` (
  `TNAME` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `traileractual`
--
ALTER TABLE `traileractual`
  ADD PRIMARY KEY (`REF`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
