-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-06-2023 a las 13:30:24
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db-agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactosguardados`
--

DROP TABLE IF EXISTS `contactosguardados`;
CREATE TABLE IF NOT EXISTS `contactosguardados` (
  `idContacto` int NOT NULL AUTO_INCREMENT,
  `nombreContacto` varchar(30) NOT NULL,
  `correoContacto` varchar(35) DEFAULT NULL,
  `numero` int NOT NULL,
  `id_usuario` int NOT NULL,
  PRIMARY KEY (`idContacto`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `contactosguardados`
--

INSERT INTO `contactosguardados` (`idContacto`, `nombreContacto`, `correoContacto`, `numero`, `id_usuario`) VALUES
(46, 'Jose ', 'palaciosyostin903@gmail.com', 20575312, 2),
(47, 'yostin palacios', '1407692@senati.pe', 20575312, 1),
(51, 'Celia Campos', 'celia@gmail.com', 918293947, 1),
(50, 'Maria Calle', 'callemaria903@gmail.com', 992132321, 1),
(52, 'yostin jhonny', 'palaciosyostin903@gmail.com', 918293947, 2),
(53, 'Jose Armandos', '1407692@senati.pe', 927022733, 1),
(54, 'carlos palacios', 'palaciosyostin903@gmail.com', 918293947, 1),
(57, 'Jose Armandos', '1407692@senati.pe', 918293947, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
