-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2023 a las 06:54:41
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `correos_masivos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_usuario`
--

CREATE TABLE `tm_usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_nom` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_apep` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_apem` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_correo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `rol_id` int(11) NOT NULL,
  `usu_pass` int(11) DEFAULT NULL,
  `fech_crea` datetime NOT NULL,
  `fech_modi` datetime DEFAULT NULL,
  `fech_elim` datetime DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_usuario`
--

INSERT INTO `tm_usuario` (`usu_id`, `usu_nom`, `usu_apep`, `usu_apem`, `usu_correo`, `rol_id`, `usu_pass`, `fech_crea`, `fech_modi`, `fech_elim`, `estado`) VALUES
(1, NULL, NULL, NULL, 'danielawanda.83@gmail.com', 1, NULL, '2023-04-19 16:48:11', NULL, NULL, 1),
(2, 'Daniel', 'Canaviri', 'Mena', 'daniel@gmail.com', 2, 123456, '2023-04-19 16:48:38', NULL, NULL, 1),
(3, NULL, NULL, NULL, 'marco_navia@gmail.com', 1, NULL, '2023-04-19 16:58:05', NULL, NULL, 1),
(4, NULL, NULL, NULL, 'paola@gmail.com', 1, NULL, '2023-04-19 20:52:38', NULL, NULL, 1),
(5, NULL, NULL, NULL, 'teresa.90mendoza@gmail.com', 1, NULL, '2023-04-20 10:14:25', NULL, NULL, 1),
(6, NULL, NULL, NULL, 'vanessa12@gmail.com', 1, NULL, '2023-04-20 11:11:45', NULL, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
