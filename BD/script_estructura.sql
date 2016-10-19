-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-10-2016 a las 15:29:00
-- Versión del servidor: 5.6.30-cll-lve
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gitccl_data`
--
CREATE DATABASE IF NOT EXISTS `gitccl_data` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gitccl_data`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--
-- Creación: 16-10-2016 a las 03:06:41
--

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruta_original` int(150) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `principal` int(11) NOT NULL,
  `inicio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=280 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--
-- Creación: 16-10-2016 a las 03:06:41
--

DROP TABLE IF EXISTS `proyectos`;
CREATE TABLE IF NOT EXISTS `proyectos` (
  `id_proyecto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `anio` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `prioridad` int(1) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `constructor` varchar(100) NOT NULL,
  `superficie` int(11) NOT NULL,
  PRIMARY KEY (`id_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--
-- Creación: 04-10-2016 a las 19:53:48
-- Última actualización: 11-10-2016 a las 18:57:29
--

DROP TABLE IF EXISTS `redes`;
CREATE TABLE IF NOT EXISTS `redes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `link` varchar(200) CHARACTER SET latin1 NOT NULL,
  `icono` varchar(50) CHARACTER SET latin1 NOT NULL,
  `color` varchar(10) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
