-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-10-2016 a las 15:30:02
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

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `ruta_original`, `id_proyecto`, `principal`, `inicio`) VALUES
(1, 1, 22, 0, 0),
(2, 2, 22, 1, 1),
(3, 3, 22, 0, 1),
(4, 4, 22, 0, 1),
(5, 5, 22, 0, 1),
(6, 6, 22, 0, 0),
(7, 7, 22, 0, 1),
(8, 8, 22, 0, 0),
(9, 9, 22, 0, 0),
(10, 10, 22, 0, 0),
(11, 11, 22, 0, 0),
(12, 12, 22, 0, 0),
(13, 13, 22, 0, 0),
(14, 14, 22, 0, 0),
(15, 15, 22, 0, 0),
(16, 16, 22, 0, 0),
(17, 17, 22, 0, 0),
(18, 18, 22, 0, 0),
(19, 19, 22, 0, 0),
(20, 20, 22, 0, 0),
(21, 21, 22, 0, 0),
(22, 22, 22, 0, 0),
(23, 23, 22, 0, 0),
(24, 24, 23, 0, 0),
(25, 25, 23, 0, 1),
(26, 26, 23, 0, 1),
(27, 27, 23, 0, 0),
(28, 28, 23, 0, 0),
(29, 29, 23, 0, 0),
(30, 30, 23, 0, 1),
(31, 31, 23, 0, 0),
(32, 32, 23, 0, 1),
(33, 33, 23, 0, 1),
(34, 34, 23, 0, 0),
(35, 35, 23, 0, 0),
(36, 36, 23, 0, 0),
(37, 37, 23, 0, 0),
(38, 38, 23, 0, 0),
(39, 39, 23, 0, 0),
(40, 40, 23, 0, 0),
(41, 41, 23, 0, 0),
(42, 42, 23, 0, 0),
(43, 43, 23, 0, 0),
(44, 44, 23, 0, 0),
(45, 45, 23, 0, 0),
(46, 46, 23, 1, 0),
(47, 47, 24, 0, 0),
(48, 48, 24, 0, 0),
(49, 49, 24, 0, 0),
(50, 50, 24, 0, 0),
(51, 51, 24, 0, 0),
(56, 56, 24, 0, 0),
(57, 57, 24, 0, 1),
(58, 58, 24, 0, 0),
(59, 59, 24, 0, 0),
(60, 60, 24, 0, 0),
(61, 61, 24, 0, 0),
(62, 62, 24, 0, 1),
(63, 63, 24, 0, 0),
(64, 64, 24, 0, 0),
(65, 65, 24, 0, 0),
(66, 66, 24, 1, 0),
(67, 67, 24, 0, 0),
(68, 68, 24, 0, 1),
(78, 78, 26, 0, 0),
(79, 79, 26, 0, 0),
(80, 80, 26, 0, 0),
(81, 81, 26, 0, 1),
(82, 82, 26, 0, 0),
(83, 83, 26, 0, 1),
(84, 84, 26, 0, 0),
(85, 85, 26, 0, 0),
(86, 86, 26, 0, 0),
(87, 87, 26, 0, 0),
(88, 88, 26, 0, 0),
(89, 89, 26, 0, 0),
(90, 90, 26, 0, 0),
(91, 91, 26, 0, 0),
(92, 92, 26, 1, 1),
(93, 93, 26, 0, 0),
(94, 94, 26, 0, 0),
(95, 95, 26, 0, 0),
(96, 96, 26, 0, 0),
(97, 97, 26, 0, 0),
(98, 98, 27, 0, 0),
(99, 99, 27, 0, 0),
(100, 100, 27, 0, 0),
(101, 101, 27, 1, 0),
(102, 102, 27, 0, 0),
(103, 103, 27, 0, 0),
(104, 104, 27, 0, 0),
(105, 105, 27, 0, 0),
(106, 106, 28, 1, 0),
(107, 107, 28, 0, 0),
(108, 108, 28, 0, 0),
(109, 109, 28, 0, 0),
(110, 110, 28, 0, 0),
(111, 111, 28, 0, 0),
(112, 112, 28, 0, 0),
(113, 113, 28, 0, 0),
(114, 114, 28, 0, 0),
(115, 115, 29, 1, 0),
(116, 116, 29, 0, 0),
(117, 117, 29, 0, 0),
(118, 118, 29, 0, 0),
(119, 119, 29, 0, 0),
(120, 120, 29, 0, 0),
(121, 121, 29, 0, 0),
(122, 122, 30, 1, 0),
(123, 123, 30, 0, 0),
(124, 124, 30, 0, 0),
(125, 125, 30, 0, 0),
(126, 126, 30, 0, 0),
(127, 127, 32, 0, 0),
(128, 128, 32, 1, 0),
(129, 129, 32, 0, 0),
(140, 140, 34, 0, 0),
(141, 141, 34, 1, 0),
(142, 142, 34, 0, 0),
(143, 143, 34, 0, 0),
(144, 144, 34, 0, 0),
(145, 145, 35, 1, 0),
(146, 146, 35, 0, 0),
(147, 147, 35, 0, 0),
(148, 148, 35, 0, 0),
(149, 149, 35, 0, 0),
(150, 150, 37, 0, 0),
(151, 151, 37, 0, 0),
(152, 152, 37, 0, 0),
(153, 153, 37, 0, 0),
(154, 154, 37, 0, 0),
(155, 155, 37, 1, 0),
(156, 156, 37, 0, 0),
(157, 157, 37, 0, 0),
(158, 158, 37, 0, 0),
(159, 159, 38, 1, 1),
(160, 160, 38, 0, 0),
(161, 161, 38, 0, 1),
(162, 162, 39, 0, 0),
(163, 163, 39, 0, 0),
(164, 164, 39, 0, 0),
(165, 165, 39, 1, 1),
(166, 166, 39, 0, 1),
(167, 167, 40, 1, 0),
(168, 168, 40, 0, 0),
(169, 169, 40, 0, 0),
(170, 170, 40, 0, 0),
(171, 171, 40, 0, 0),
(181, 181, 43, 0, 0),
(182, 182, 43, 0, 0),
(183, 183, 43, 0, 0),
(184, 184, 43, 0, 0),
(185, 185, 43, 1, 0),
(242, 196, 25, 0, 0),
(243, 197, 25, 1, 0),
(244, 198, 25, 0, 0),
(245, 199, 25, 0, 0),
(246, 200, 25, 0, 0),
(247, 201, 25, 0, 0),
(248, 202, 25, 0, 0),
(249, 203, 25, 0, 0),
(250, 204, 25, 0, 0),
(251, 205, 33, 0, 0),
(252, 206, 33, 0, 0),
(253, 207, 33, 0, 0),
(254, 208, 33, 0, 0),
(255, 209, 33, 0, 0),
(256, 210, 33, 0, 0),
(257, 211, 33, 1, 0),
(258, 212, 33, 0, 0),
(259, 213, 33, 0, 0),
(260, 214, 33, 0, 0),
(261, 215, 42, 0, 0),
(262, 216, 42, 0, 0),
(263, 217, 42, 0, 0),
(264, 218, 42, 0, 0),
(265, 219, 42, 0, 0),
(266, 220, 42, 1, 0),
(267, 221, 42, 0, 0),
(268, 222, 42, 0, 0),
(269, 223, 42, 0, 0),
(270, 224, 44, 0, 0),
(271, 225, 44, 0, 0),
(272, 226, 44, 0, 0),
(273, 227, 44, 0, 0),
(274, 228, 44, 0, 0),
(275, 229, 44, 0, 0),
(276, 230, 44, 0, 0),
(277, 231, 44, 0, 0),
(278, 232, 44, 1, 0),
(279, 233, 44, 0, 0);

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

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyecto`, `nombre`, `anio`, `tipo`, `descripcion`, `prioridad`, `estado`, `constructor`, `superficie`) VALUES
(22, 'Casa Chamisero  ', 2014, 'Vivienda', 'Chamisero, Colina, Santiago, Chile.', 0, 'Terminada', 'Ricardo Solis Ltda.', 767),
(23, 'Instituto Nacional de Ortodoncia 2da etapa', 2011, 'Clinico', 'Av. Tobalaba, Ñuñoa, Santiago, Chile.', 5, 'Terminada', 'Ricardo Solis Ltda.', 1415),
(24, 'Casa El Maqui  ', 2014, 'Vivienda', 'El Maqui, Olmué, región V, Chile.', 1, 'Terminada', 'particular por administración.', 253),
(25, 'Casa Passalacqua Lahsen  ', 2014, 'Vivienda', 'Colina, Santiago, Chile.', 6, 'Terminada', 'Daniel Salvo M.', 253),
(26, 'Casa Rosales Quijada ', 2009, 'Vivienda', 'Chicureo, Colina, Santiago.', 4, 'Terminada', 'GITC Ltda.', 267),
(27, 'Renovación departamento Los Pinos ', 2013, 'Renovación', 'Av. Pedro de Valdivia, Providencia, Santiago, Chile.', 7, 'Terminada', 'Daniel Salvo M.', 101),
(28, 'Casas Chicureo', 2012, 'Vivienda', 'Colina, Santiago, Chile.', 8, 'Terminada', 'Constructora Braccesi Ltda.', 483),
(29, 'Renovación departamento Sabrina Perret', 2012, 'Renovación', 'Colina, Santiago, Chile.', 9, 'Terminada', 'Constructora Braccesi Ltda.', 483),
(30, 'Renovación Casa Las Hojas ', 2012, 'Renovación', 'San Carlos de Apoquindo, Las Condes, Santiago, Chile.', 10, 'Terminada', 'Constructora Carlos Vera', 159),
(32, 'Renovación Departamento Belmar Perret ', 2010, 'Vivienda', 'Av. Pedro de Valdivia, Providencia, Santiago, Chile.', 11, 'Terminada', 'Daniel Salvo M.', 138),
(33, 'Remodelación Hostería Inalcar ', 2009, 'Turistico', 'Pucatrihue, San Juan de la Costa, región X, Chile.', 12, 'Terminada', 'Nano Melillanca', 87),
(34, 'Instituto Nacional de Ortodoncia 1era etapa  ', 2008, 'Clinico', 'Av. Tobalaba, Ñuñoa, Santiago, Chile.', 13, 'Terminada', 'Constructora  Meta Ltda.', 508),
(35, 'Casa Talagante  ', 2007, 'Vivienda', 'Talagante, Santiago.', 14, 'Terminada', 'Constructora  Carlos Vera.', 235),
(37, 'Casa Quinchamalí  ', 2006, 'Vivienda', 'Quinchamalí, Las Condes, Santiago.', 15, 'Terminada', 'Constructora  Carlos Vera.', 230),
(38, 'Instituto Nacional de Ortodoncia 3era etapa ', 2016, 'Clinico', 'Av. Tobalaba, Ñuñoa, Santiago, Chile.', 3, 'En Ejecucion', 'Por Licitar', 1415),
(39, 'Edificio Eco-Boutique Plaza Dinamarca 1 ', 2015, 'Vivienda', 'Dinamarca esq. El Bosque, Providencia.', 2, 'En Ejecucion', 'GITC', 700),
(40, 'Casa Renán Perez ', 2015, 'Vivienda', 'Las Brisas de Chicureo', 16, 'En Ejecucion', 'Por Definir', 310),
(42, 'Haras Domingo de Toro', 2007, 'Turistico', 'Talagante, Santiago, Chile.', 17, 'Terminada', 'Constructora Carlos Vera', 450),
(43, 'Aldea SAKURA (Centro Recreacional)', 2015, 'Turistico', 'El Maqui, Olmué, región V, Chile.', 18, 'En Ejecucion', 'particular por administración.', 1064),
(44, 'Renovación Departamento Renán Pérez ', 2012, 'Renovación', 'San Carlos de Apoquindo, Las Condes, Santiago, Chile.', 19, 'Terminada', 'Constructora Carlos Vera', 159);

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

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`id`, `nombre`, `link`, `icono`, `color`, `estado`) VALUES
(1, 'Facebook', '', 'icon-facebook', '#3b5998', 0),
(2, 'Instagram', '', 'icon-instagram', '#e95950', 0),
(3, 'Youtube', '', 'icon-youtube', ' #bb0000', 0),
(4, 'Blog', '', 'icon-rss', '#ff6600', 0),
(5, 'Twitter', '', 'icon-twitter', '#55acee', 0),
(6, 'Google+', '', 'icon-google-plus', '#dd4b39', 0),
(7, 'Pinterest', '', 'icon-pinterest2', '#cb2027', 0),
(8, 'Vimeo', '', 'icon-vimeo', '#aad450', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
