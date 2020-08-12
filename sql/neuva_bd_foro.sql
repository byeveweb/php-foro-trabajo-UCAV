-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2018 a las 18:58:52
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nueva_bd_foro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posteados`
--

CREATE TABLE `posteados` (
  `post_id` int(11) NOT NULL,
  `post_mensaje` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `post_date` date NOT NULL,
  `post_tema` int(7) NOT NULL,
  `post_user` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `posteados`
--

INSERT INTO `posteados` (`post_id`, `post_mensaje`, `post_date`, `post_tema`, `post_user`) VALUES
(1, 'Y esta respuesta también es nueva', '2029-11-18', 0, 'eva@prueba1.com'),
(2, 'Otro post', '2029-11-18', 0, 'eva@prueba1.com'),
(3, 'Este es una respuesta', '2030-11-18', 1, 'eva@prueba1.com'),
(4, 'Este es una respuesta', '2030-11-18', 1, 'eva@prueba1.com'),
(5, 'Este es una respuesta', '2030-11-18', 1, 'eva@prueba1.com'),
(6, 'fasdf', '2030-11-18', 1, 'eva@prueba1.com'),
(7, 'fasdf', '2030-11-18', 1, 'eva@prueba1.com'),
(8, 'fasdf', '2030-11-18', 1, 'eva@prueba1.com'),
(9, 'fasdf', '2030-11-18', 1, 'eva@prueba1.com'),
(10, 'fasdf', '2030-11-18', 1, 'eva@prueba1.com'),
(11, 'Este es otro comentario', '2030-11-18', 1, 'eva@prueba1.com'),
(12, 'Este es otro comentario', '2030-11-18', 1, 'eva@prueba1.com'),
(13, 'Otro comentario\r\n', '2030-11-18', 1, 'eva@prueba1.com'),
(14, 'sdfsf', '2030-11-18', 1, 'eva@prueba1.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `tema_id` int(11) NOT NULL,
  `tema_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tema_autor` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `tema_titulo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `tema_npost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`tema_id`, `tema_date`, `tema_autor`, `tema_titulo`, `tema_npost`) VALUES
(1, '2029-11-18 00:00:00', 'eva@prueba1.com', 'Este tema es nuevo', 12),
(2, '2029-11-18 00:00:00', 'eva@prueba1.com', 'y este es otro tema', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `users_id` int(11) NOT NULL,
  `user_type` tinyint(1) NOT NULL,
  `user_email` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `user_password` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`users_id`, `user_type`, `user_email`, `user_password`) VALUES
(1, 1, 'eva@prueba1.com', '$2y$10$j59oJe3kF6OclL3M.yjsTOuUg6uvBwcA1X5WI4bss.N3uVi9QVbKC'),
(2, 0, 'eva@prueba2.com', '$2y$10$4AGIAznr7f76pgE3rFLesu37m5l/qHusoVJ38TLF3TXZZflo6QnwW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `posteados`
--
ALTER TABLE `posteados`
  ADD PRIMARY KEY (`post_id`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`tema_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `posteados`
--
ALTER TABLE `posteados`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `tema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
