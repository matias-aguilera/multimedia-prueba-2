-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2022 a las 22:43:48
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_prueba_2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_2`
--

CREATE TABLE `prueba_2` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `rut` varchar(9) NOT NULL,
  `fecha` date NOT NULL,
  `nacionalidad` varchar(25) NOT NULL,
  `genero` varchar(25) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prueba_2`
--

INSERT INTO `prueba_2` (`id`, `nombre`, `apellido`, `rut`, `fecha`, `nacionalidad`, `genero`, `ciudad`, `foto`) VALUES
(1, 'pedro', 'parquimetro', '111111111', '0000-00-00', 'chilena', 'hombre', 'santigo', 'img/foto.jpg'),
(2, 'boris', 'ivanov', '222222222', '1999-11-01', 'chilena', 'hombre', 'santigo', 'img/foto.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `prueba_2`
--
ALTER TABLE `prueba_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `prueba_2`
--
ALTER TABLE `prueba_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
