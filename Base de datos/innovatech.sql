-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2023 a las 20:37:21
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `innovatech`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `correo` text NOT NULL,
  `contrasena` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`) VALUES
(2, 'Juan Manuel', 'gh@hotmail.com', '$2y$10$CB8LrfkThaGkdcAWfewDuOonRNEj9C4b6GFcIOjJJz2CuNvs3vah.'),
(4, 'Breiner Mendoza', 'gh@hotmail.com', '$2y$10$eBY4/.q1bpAicaaLj.i8v.c3IItlpb8OEdMztHmAPXiVpyF0kL4iG'),
(5, 'Farley Gonzalez', 'fgonzalezl@sena.edu.co', '$2y$10$Fq/E.swh9K2g6DwcapL3Duzlv7AT2DmFUXYk.83zuqvdLfu5bjWqS'),
(6, 'Juan Manuel', 'gh@hotmail.com', '$2y$10$LRMZzaYz1s4uFunjLIgRMucPISNsp85..KyAgMqUr1Tw59m2My4iu'),
(7, 'Juan Manuel', 'gh@hotmail.com', '$2y$10$St.x8siMTF4FUh2smVT4SOGOA98zs/9yPE8NDJ1KGFoD1UV4dyuMe'),
(8, 'Juan Manuel', 'gh@hotmail.com', '$2y$10$ODrQteG2JNn26QQrBIef/u.l03Ig4sYssFTWW0wPFP/S0ZyET5BPO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
