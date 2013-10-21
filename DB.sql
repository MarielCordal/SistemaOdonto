-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-10-2013 a las 22:59:46
-- Versión del servidor: 5.5.32-0ubuntu0.13.04.1
-- Versión de PHP: 5.4.9-4ubuntu2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistemaodont`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anotacionesMes`
--

CREATE TABLE IF NOT EXISTS `anotacionesMes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mes` varchar(25) NOT NULL,
  `nota` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `anotacionesMes`
--

INSERT INTO `anotacionesMes` (`id`, `mes`, `nota`) VALUES
(1, 'ENERO', 'Una anotación para el mes de enero un poco mas larga de lo que se debería para ver si anda la función de recortar.AAAAAAAAAAAAAABBBBBBBBBBBBBBBBBBBBBBBBBCCCCCCCCCCCCCCCCCCCCCCCCCCDDDDDDDDDDDDDDDDDDDDDDDDDD'),
(2, 'FEBRERO', ''),
(3, 'MARZO', ''),
(4, 'ABRIL', 'ESta es una prueba que debería ser un poco mas larga, no están los estilos ni nada SOLO PRUEBA'),
(5, 'MAYO', ''),
(6, 'JUNIO', ''),
(7, 'JULIO', ''),
(8, 'AGOSTO', ''),
(9, 'SEPTIEMBRE', ''),
(10, 'OCTUBRE', ''),
(11, 'NOVIEMBRE', ''),
(12, 'DICIEMBRE', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE IF NOT EXISTS `colores` (
  `estado` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`estado`) VALUES
(0),
(0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `numeroAfiliado` int(30) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dni` int(8) NOT NULL,
  `sexo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `obraSocial` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `fechaIngreso` date NOT NULL,
  `observaciones` text COLLATE utf8_unicode_ci NOT NULL,
  `cantrx` int(50) NOT NULL,
  `dom` text COLLATE utf8_unicode_ci NOT NULL,
  `localidad` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `celular` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tratamiento` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `alergia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cardiaco` int(2) NOT NULL,
  `presion` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `epilepsia` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `hepatitis` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `diabetico` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `asma` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `ulceras` varchar(2) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `hiv` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eliminado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='pacientes' AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`numeroAfiliado`, `nombre`, `apellido`, `dni`, `sexo`, `edad`, `obraSocial`, `fechaIngreso`, `observaciones`, `cantrx`, `dom`, `localidad`, `telefono`, `celular`, `email`, `tratamiento`, `alergia`, `cardiaco`, `presion`, `epilepsia`, `hepatitis`, `diabetico`, `asma`, `ulceras`, `hiv`, `id`, `eliminado`) VALUES
(12354, 'mariel', 'cordal', 35179795, 'f', 23, 'sm', '0000-00-00', '', 0, '', '', 0, 0, '', '', 'si', 0, 'baja', '0', '0', '0', '1', '0', '0', 1, 0),
(567, 'paula', 'cordal', 37203451, 'f', 20, 'io', '0000-00-00', '', 0, '', '', 0, 0, '', '', '', 0, '', '0', '0', '0', '0', '0', '0', 2, 0),
(5555, 'LIDIA', 'ANGELES', 35555, 'f', 40, 'SM', '0000-00-00', 'Una pequeña Observación', 0, '68 N12', 'LA PLATA', 4220693, 2147483647, 'unemail@hotmail.com', 'Esta en tratamiento', 'ácaros', 1, 'baja', '0', '0', '0', '1', '0', '0', 6, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestacion`
--

CREATE TABLE IF NOT EXISTS `prestacion` (
  `idprestacion` int(11) NOT NULL AUTO_INCREMENT,
  `numdiente` int(50) NOT NULL,
  `cara` varchar(4) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `codigo` int(6) NOT NULL,
  `fecha` date NOT NULL,
  `comentario` text NOT NULL,
  `paciente_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`idprestacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
