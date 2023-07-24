-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2023 a las 23:26:57
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mv_prototipo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `id_video` varchar(20) DEFAULT NULL,
  `comment` varchar(50) DEFAULT NULL,
  `date_comment` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'user',
  `email` varchar(20) DEFAULT NULL,
  `create_datetime` date DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `type`, `email`, `create_datetime`, `fecha_ingreso`) VALUES
(1, 'alejandro', 'samanosuke', 'user', 'david@gmai.com', '2023-06-06', '2023-06-06'),
(2, 'root', 'samanosuke', 'admin', 'david242455@gmail.co', '2023-07-07', '2023-07-07'),
(3, 'usuario2', 'samanosuke', 'user', 'david242455@gmail.co', '2023-07-08', '2023-07-08'),
(4, 'carpio', 'samanosuke', 'user', 'david242455@gmail.co', '2023-07-13', '2023-07-13'),
(5, 'administrador', 'samanosuke', 'admin', 'aa@prueba.cl', '2022-02-02', '2022-02-02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
