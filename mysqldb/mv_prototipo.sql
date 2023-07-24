-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2023 a las 12:51:40
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
  `date_comment` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comment`
--

INSERT INTO `comment` (`id`, `username`, `id_video`, `comment`, `date_comment`) VALUES
(8, 'alejandro', '844849609', 'el mejor video de bruno mars', '2023-07-18 00:00:00'),
(9, 'alejandro', '844862609', 'i like dua lipa', '2023-07-18 00:00:00'),
(10, 'alejandro', '844849609', 'buen video', '2023-07-18 00:00:00'),
(11, 'alejandro', '844849609', 'el mejor', '2023-07-18 00:00:00'),
(12, 'alejandro', '844849609', 'me encanta', '2023-07-18 00:00:00'),
(13, 'alejandro', '844862609', 'este es el mejor video', '2023-07-18 00:00:00'),
(14, 'alejandro', '844862609', 'asdasdd', '2023-07-18 00:00:00'),
(15, 'alejandro', '844862609', 'buen video dua', '2023-07-18 00:00:00'),
(16, 'alejandro', '844862609', 'hi', '2023-07-18 00:00:00'),
(17, 'alejandro', '844849609', 'hihih', '2023-07-18 00:00:00'),
(18, 'alejandro', '844849609', 'me re gusta', '2023-07-18 00:00:00'),
(19, 'alejandro', '844862609', 'sss', '2023-07-18 00:00:00'),
(20, 'alejandro', '844862609', 'lllll', '2023-07-18 00:00:00'),
(21, 'alejandro', '844849609', 'siii', '2023-07-18 00:00:00'),
(22, 'alejandro', '844849609', 'el mejor video', '2023-07-18 00:00:00'),
(23, 'alejandro', '844849609', 'buen video', '2023-07-18 00:00:00'),
(24, 'alejandro', '844849609', 'el mejor', '2023-07-18 00:00:00'),
(25, 'alejandro', '844849609', 'que video mas genial', '2023-07-18 00:00:00'),
(26, 'alejandro', '844862609', 'dua lipa', '2023-07-18 00:00:00'),
(27, 'alejandro', '844862609', 'dua lipa la mejor', '2023-07-18 00:00:00'),
(28, 'alejandro', '844862609', 'el mejor video de dua lipa', '2023-07-18 00:00:00'),
(29, 'alejandro', '844862609', 'no puedo creer lo bueno que es', '2023-07-18 00:00:00'),
(30, 'alejandro', '844862609', 'el mejor video de dua lipa', '2023-07-18 00:00:00'),
(31, 'alejandro', '844862609', 'que genial video', '2023-07-18 00:00:00'),
(32, 'alejandro', '844849609', 'que buen video de bruno mars', '2023-07-18 00:00:00'),
(33, 'alejandro', '844849609', 'es el mejor video que he visto', '2023-07-18 00:00:00'),
(34, 'alejandro', '844862609', 'el mejor video', '2023-07-18 00:00:00'),
(35, 'administrador', '844862609', 'que buen video, me encanta', '2023-07-18 00:00:00'),
(36, 'administrador', '844862609', 'que video mas genial', '2023-07-18 00:00:00'),
(37, 'administrador', '844849609', 'gneial', '2023-07-18 00:00:00'),
(38, 'administrador', '844849609', 'aa', '2023-07-18 00:00:00'),
(39, 'administrador', '844849609', 'asd', '2023-07-18 00:00:00'),
(40, 'administrador', '844849609', 'asd', '2023-07-18 00:00:00'),
(41, 'administrador', '844849609', 'asdasd', '2023-07-18 00:00:00'),
(42, 'administrador', '844849609', 'asd', '2023-07-18 00:00:00'),
(43, 'administrador', '844849609', 'asd', '2023-07-18 00:00:00'),
(44, 'administrador', '844862609', 'asd', '2023-07-18 00:00:00'),
(45, 'administrador', '844849609', 'acaaczxczxc', '2023-07-18 00:00:00'),
(46, 'administrador', '844849609', 'asdasd', '2023-07-18 00:00:00'),
(47, 'administrador', '844849609', 'asda', '2023-07-18 00:00:00'),
(48, 'administrador', '844849609', 'nose como puede haber un video tan bueno como este', '2023-07-18 00:00:00'),
(49, 'carpio', '844849609', 'que buen video', '2023-07-18 00:00:00'),
(50, 'administrador', '844849609', 'que buen ñiñ', '2023-07-18 00:00:00'),
(51, 'administrador', '844849609', 'hol`a?>\":{}{\';\';\'./.,.,/,\'l;]', '2023-07-18 00:00:00'),
(52, 'administrador', '844849609', 'comentarios de prueba `❤️❤️❤️❤️❤️❤️❤️❤️❤️', '2023-07-18 00:00:00'),
(53, 'carpio', '844862609', 'wakanda forever', '2023-07-18 00:00:00'),
(54, 'carpio', '844862609', 'asdasd', '2023-07-18 00:00:00'),
(55, 'carpio', '844862609', 'buen video', '2023-07-18 00:00:00'),
(56, 'carpio', '844862609', 'buen video', '2023-07-18 00:00:00'),
(57, 'carpio', '844862609', 'excelente', '2023-07-18 00:00:00'),
(58, 'carpio', '844862609', 'asdasd', '2023-07-18 00:00:00'),
(59, 'carpio', '844849609', 'asdasd', '2023-07-18 00:00:00'),
(60, 'carpio', '844849609', '😂😍💕', '2023-07-18 00:00:00'),
(61, 'carpio', '844862609', 'el mejor video', '2023-07-18 14:54:06'),
(62, 'carpio', '844849609', 'ME ENCANTA SU MUSICA', '2023-07-18 14:54:28'),
(63, 'carpio', '844849609', '😂😍', '2023-07-18 14:55:02'),
(64, 'carpio', '844849609', 'buen video', '2023-07-18 14:57:27'),
(65, 'carpio', '844849609', 'good video', '2023-07-18 08:58:03'),
(66, 'carpio', '844849609', 'el mejor video', '2023-07-18 08:58:24'),
(67, 'root', '844862609', 'me encanta dua lipa', '2023-07-18 08:58:59'),
(68, 'root', '844862609', 'la mejor cantante❤️', '2023-07-18 08:59:13'),
(69, 'root', '844862609', ':)', '2023-07-18 09:00:48'),
(70, 'root', '844849609', 'siiii', '2023-07-18 09:01:01'),
(71, 'carpio', '844862609', 'buen video', '2023-07-24 06:49:13'),
(72, 'administrador', '844862609', 'excelente video', '2023-07-24 06:50:00');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
