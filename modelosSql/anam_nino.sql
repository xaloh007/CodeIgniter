-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2015 a las 15:21:28
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dbfono`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anam_nino`
--

CREATE TABLE IF NOT EXISTS `anam_nino` (
  `ann_id` int(11) NOT NULL AUTO_INCREMENT,
  `ann_nombre` varchar(45) NOT NULL,
  `ann_edad` int(11) DEFAULT NULL,
  `ann_rut` int(11) NOT NULL,
  `ann_sexo` int(11) NOT NULL,
  `ann_familia` text NOT NULL,
  `ann_fNacimiento` datetime DEFAULT NULL,
  `ann_dir` varchar(45) DEFAULT NULL,
  `ann_comuna` varchar(50) NOT NULL,
  `ann_region` varchar(20) NOT NULL,
  `ann_escolaridad` varchar(45) DEFAULT NULL,
  `ann_pTratamiento` text,
  `ann_notas` text NOT NULL,
  `ann_colegio` varchar(50) NOT NULL,
  PRIMARY KEY (`ann_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `anam_nino`
--

INSERT INTO `anam_nino` (`ann_id`, `ann_nombre`, `ann_edad`, `ann_rut`, `ann_sexo`, `ann_familia`, `ann_fNacimiento`, `ann_dir`, `ann_comuna`, `ann_region`, `ann_escolaridad`, `ann_pTratamiento`, `ann_notas`, `ann_colegio`) VALUES
(1, 'dfgsdfg', 0, 0, 0, 'sdfgsdfgds', NULL, 'qdsfash', 'sdbajfs', 'sdjfbasdfbjdas', 'sdfgsdfg', 'sdjfhbasdbasjf', 'sadjfbasdfbasfbasdf', 'sdfgsdf'),
(2, 'dbcsdbhjb', 0, 0, 0, 'kjnnkjnjnjk', NULL, 'knkjnjknjnknkjn', 'imdfmlksdnfkjdsn', 'j kjkj  jk kj ', 'knkjnnjkn', 'kjsdnfjnsfnksdnfjskdnfkjdsnfkj', 'snfkjsdnfkjsndfkjnsjfnsdfdsnf', 'oiimmlmkm');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
