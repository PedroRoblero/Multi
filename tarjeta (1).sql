-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2017 a las 16:05:52
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tarjeta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `rut` int(8) NOT NULL,
  `dv` int(1) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `carrera` varchar(30) NOT NULL,
  `promocion` int(4) NOT NULL,
  `numero` int(12) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`rut`, `dv`, `nombre`, `apellido`, `carrera`, `promocion`, `numero`, `direccion`, `correo`, `foto`) VALUES
(18621734, 9, 'cristobal', 'brito', 'informatica', 2013, 2147483647, 'las noches', 'thubrititox@kurosaki', 'img/xenoverse_2_fanmade_4k_wallpaper_by_rayzorblade189-da9cj74.png'),
(18761603, 4, 'pedro', 'roblero', 'informatica', 2013, 2147483647, 'torpederas', 'khjasdsa@asjdhsjadsa', 'img/dragon-ball-super-anime-5k-wide.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`rut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
