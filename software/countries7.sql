-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2017 a las 20:59:25
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test_modal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries7` (
  `id` int(5) NOT NULL,
  `countryCode` varchar(156) NOT NULL DEFAULT '',
  `cliente` varchar(156) NOT NULL DEFAULT '',
  `telefono` varchar(156) NOT NULL DEFAULT '',
  `direccion` varchar(156) DEFAULT NULL,
  `empleado` varchar(156) DEFAULT NULL,
  `date` varchar(156) DEFAULT NULL,
  `estado` varchar(156) DEFAULT NULL,
  `opciones` varchar(156) DEFAULT NULL,
  `trabajo` varchar(156) DEFAULT NULL,
  `observacion` varchar(156) DEFAULT NULL,
  `operacion` varchar(156) DEFAULT NULL,
  `fecha` varchar(156) DEFAULT NULL,
  `inicio` varchar(156) DEFAULT NULL,
  `final` varchar(156) DEFAULT NULL,
  `tiempo` varchar(156) DEFAULT NULL,
  `material` varchar(156) DEFAULT NULL,
  `cantidad` varchar(156) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries7` (`id`, `countryCode`, `cliente`, `telefono`, `direccion`, `empleado`, `date`, `estado`, `opciones`, `trabajo`, `observacion`, `operacion`, `fecha`, `inicio`, `final`, `tiempo`, `material`, `cantidad`) VALUES
(252, '1090499956', 'omar arango', '3156426874', 'calle 24 #5-145', 'andres_cali42@hotmail.com');


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `countries`
--
ALTER TABLE `countries7`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries7`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
