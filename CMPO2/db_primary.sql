-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2022 a las 22:55:53
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_primary`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taulavirtual`
--

CREATE TABLE `taulavirtual` (
  `aula_id` int(100) NOT NULL,
  `aula_title` varchar(100) NOT NULL,
  `aula_subtitle` varchar(100) NOT NULL,
  `aula_type` varchar(100) NOT NULL,
  `aula_grade` int(10) NOT NULL,
  `aula_docente` varchar(50) NOT NULL,
  `aula_creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `taulavirtual`
--

INSERT INTO `taulavirtual` (`aula_id`, `aula_title`, `aula_subtitle`, `aula_type`, `aula_grade`, `aula_docente`, `aula_creation_date`) VALUES
(1, 'hola', 'ssssss', 'Secundaria', 5, '19', '0000-00-00'),
(2, 'Matematica', 'Matematica', 'Secundaria', 5, '19', '0000-00-00'),
(3, 'Castellano', '\"U\"', 'Secundaria', 0, '19', '0000-00-00'),
(4, 'fdgdfdg', 'gdfgd', 'Secundaria', 0, '19', '0000-00-00'),
(5, 'Castellano', 'Castellano', 'Secundaria', 0, '19', '0000-00-00'),
(6, 'Ciencia Naturales', 'AB', 'Secundaria', 4, '19', '0000-00-00'),
(7, 'gdhdhdhfghfg', 'gfhfghgf', 'Secundaria', 3, '19', '0000-00-00'),
(8, 'Matematica ', 'AB', 'Secundaria', 4, '19', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taulavirtual_contenido`
--

CREATE TABLE `taulavirtual_contenido` (
  `content_id` int(100) NOT NULL,
  `aula_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `content_p_id` int(100) NOT NULL,
  `content_a_id` int(100) NOT NULL,
  `Content_date` date NOT NULL,
  `Content_hour` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taulavirtual_contenido_a`
--

CREATE TABLE `taulavirtual_contenido_a` (
  `content_a_id` int(100) NOT NULL,
  `content_a_title` varchar(100) NOT NULL,
  `content_a_subtitle` varchar(100) NOT NULL,
  `Content_a_content` varchar(100) NOT NULL,
  `Content_a_comment` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `taulavirtual_contenido_a`
--

INSERT INTO `taulavirtual_contenido_a` (`content_a_id`, `content_a_title`, `content_a_subtitle`, `Content_a_content`, `Content_a_comment`, `user_id`) VALUES
(1, '0', 'rtyrtytrytr', '0', 'tryrty', 0),
(2, '0', 'rtyrtytrytr', '0', 'tryrty', 0),
(3, '43545435', '4354354', 'archivos/', '3543543543', 0),
(4, '435435345', '34543543543', 'archivos/61e338947224f_0.jpg', '5435345543', 0),
(5, 'Ecuaciones diferenciales ', 'Ecuacioens diferenciales de tercer grado', 'archivos/61e338c8f2c2b_0.png', 'no se que escribir aqui no soy profesor', 0),
(6, '5234534545', '435435435345', 'archivos/61e33e90d8132_0.png', '43543534', 19),
(7, 'Matos', 'Rafael', 'archivos/61e33eda60a18_0.jpg', 'Matos Rafael', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taulavirtual_contenido_p`
--

CREATE TABLE `taulavirtual_contenido_p` (
  `content_p_id` int(100) NOT NULL,
  `content_p_title` varchar(100) NOT NULL,
  `content_p_subtitle` varchar(100) NOT NULL,
  `content_p_content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taulavirtual_estudiantes`
--

CREATE TABLE `taulavirtual_estudiantes` (
  `Aula_student_id` int(100) NOT NULL,
  `aula_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `user_date_register` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tavatar`
--

CREATE TABLE `tavatar` (
  `avatar_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `avatar_img` varchar(100) NOT NULL,
  `avatar_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tavatar`
--

INSERT INTO `tavatar` (`avatar_id`, `user_id`, `avatar_img`, `avatar_date`) VALUES
(36, 19, 'archivos/19/61eb4ba93a363_0.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcomentarios_contenido`
--

CREATE TABLE `tcomentarios_contenido` (
  `comment_id` int(100) NOT NULL,
  `content_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `comment_comment` varchar(100) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_hour` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tnotificacion`
--

CREATE TABLE `tnotificacion` (
  `notification_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `notification_all_user` tinyint(1) NOT NULL,
  `notification_title` varchar(100) NOT NULL,
  `notification_subtitle` varchar(100) NOT NULL,
  `notification_date` date NOT NULL,
  `notification_time` time(6) NOT NULL,
  `aula_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tusuario`
--

CREATE TABLE `tusuario` (
  `user_id` int(100) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_passwork` varchar(100) NOT NULL,
  `user_nickname` varchar(50) NOT NULL,
  `user_grade` int(20) NOT NULL,
  `user_name_p` varchar(50) NOT NULL,
  `user_name_s` varchar(50) NOT NULL,
  `user_lastname_p` varchar(50) NOT NULL,
  `user_lastname_s` varchar(50) NOT NULL,
  `user_cedula` varchar(20) NOT NULL,
  `user_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tusuario`
--

INSERT INTO `tusuario` (`user_id`, `user_type`, `user_email`, `user_passwork`, `user_nickname`, `user_grade`, `user_name_p`, `user_name_s`, `user_lastname_p`, `user_lastname_s`, `user_cedula`, `user_phone`) VALUES
(1, 'estudiante', '55345443@gmail.com', '55345443', '55345443 55345443', 5, '55345443', '55345443', '55345443', '55345443', '55345443', '55345443'),
(2, 'estudiante', '53465456tt54@gmail.com', '53465456tt54', '53465456tt54 53465456tt54', 4, '53465456tt54', '53465456tt54', '53465456tt54', '53465456tt54', '53465456tt54', '53465456tt54'),
(3, 'estudiante', '53465456tt54@gmail.com', '53465456tt54', '53465456tt54 53465456tt54', 4, '53465456tt54', '53465456tt54', '53465456tt54', '53465456tt54', '53465456tt54', '53465456tt54'),
(4, 'estudiante', '43543543t4retre@gmail.com', '43543543t4retre', '43543543t4retre 43543543t4retre', 5, '43543543t4retre', '43543543t4retre', '43543543t4retre', '43543543t4retre', '43543543t4retre', '43543543t4retre'),
(6, 'estudiante', '5454545435@gmail.com', '5454545435', '5454545435 5454545435', 5, '5454545435', '5454545435', '5454545435', '5454545435', '5454545435', '5454545435'),
(7, 'estudiante', '42353243565@gmail.com', '42353243565', '42353243565 42353243565', 6, '42353243565', '42353243565', '42353243565', '42353243565', '42353243565', '42353243565'),
(8, 'estudiante', '42353243565@gmail.com', '42353243565', '42353243565 42353243565', 6, '42353243565', '42353243565', '42353243565', '42353243565', '42353243565', '42353243565'),
(9, 'estudiante', '42353243565@gmail.com', '42353243565', '42353243565 42353243565', 5, '42353243565', '42353243565', '42353243565', '42353243565', '42353243565', '42353243565'),
(10, 'estudiante', '443335434343@gmail.com', '443335434343', '443335434343 443335434343', 5, '443335434343', '443335434343', '443335434343', '443335434343', '443335434343', '443335434343'),
(11, 'estudiante', '443335434343@gmail.com', '443335434343', '443335434343 443335434343', 5, '443335434343', '443335434343', '443335434343', '443335434343', '443335434343', '443335434343'),
(12, 'estudiante', '443335434343@gmail.com', '443335434343', '443335434343 443335434343', 5, '443335434343', '443335434343', '443335434343', '', '443335434343', '443335434343'),
(13, 'estudiante', '443335434343@gmail.com', '443335434343', '443335434343 443335434343', 5, '443335434343', '443335434343', '443335434343', '', '443335434343', '443335434343'),
(14, 'estudiante', '443335434343@gmail.com', '443335434343', '443335434343 443335434343', 4, '443335434343', '443335434343', '443335434343', '443335434343', '443335434343', '443335434343'),
(15, 'estudiante', 'fsfsdfdsfdsfds@gmail.com', 'fsfsdfdsfdsfds', 'fsfsdfdsfdsfds fsfsdfdsfdsfds', 5, 'fsfsdfdsfdsfds', 'fsfsdfdsfdsfds', 'fsfsdfdsfdsfds', 'fsfsdfdsfdsfds', 'fsfsdfdsfdsfds', 'fsfsdfdsfdsfds'),
(16, 'estudiante', 'dfsdfsdfsdf@gmail.com', 'dfsdfsdfsdf', 'dfsdfsdfsdf dfsdfsdfsdf', 4, 'dfsdfsdfsdf', 'dfsdfsdfsdf', 'dfsdfsdfsdf', 'dfsdfsdfsdf', 'dfsdfsdfsdf', 'dfsdfsdfsdf'),
(17, 'estudiante', '433535354@gmail.com', '433535354', 'Jessica Matos', 5, 'Jessica', 'Sarai', 'Matos', 'Rojas', '433535354', '433535354'),
(18, 'estudiante', 'jj@gmail.com', '45435345353', 'Jessica Matos', 8, 'Jessica', 'Sarai', 'Matos', 'Rojas', '29793333', '45435345353'),
(19, 'admin', 'matos.rafael1@gmail.com', '0416-3812761', 'Rafael Matos', 0, 'Rafael', 'Francisco', 'Matos', 'Hernandez', '6653576', '0416-3812761'),
(20, 'docente', 'jj@gmail.com', '753qweRT', 'Jessica Matos', 8, 'Jessica', 'Sarai', 'Matos', 'Rojas', '33063192', '0281-2674465'),
(21, 'estudiante', 'jsmr@gmail.com', '123456789', 'Jessica Matos', 8, 'Jessica', 'Sarai', 'Matos', 'Rojas', 'v-33003221', '0281-2674465');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `taulavirtual`
--
ALTER TABLE `taulavirtual`
  ADD PRIMARY KEY (`aula_id`);

--
-- Indices de la tabla `taulavirtual_contenido`
--
ALTER TABLE `taulavirtual_contenido`
  ADD PRIMARY KEY (`content_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `aula_id` (`aula_id`),
  ADD KEY `content_a_id` (`content_a_id`),
  ADD KEY `content_p_id` (`content_p_id`);

--
-- Indices de la tabla `taulavirtual_contenido_a`
--
ALTER TABLE `taulavirtual_contenido_a`
  ADD PRIMARY KEY (`content_a_id`);

--
-- Indices de la tabla `taulavirtual_contenido_p`
--
ALTER TABLE `taulavirtual_contenido_p`
  ADD PRIMARY KEY (`content_p_id`);

--
-- Indices de la tabla `taulavirtual_estudiantes`
--
ALTER TABLE `taulavirtual_estudiantes`
  ADD PRIMARY KEY (`Aula_student_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `aula_id` (`aula_id`);

--
-- Indices de la tabla `tavatar`
--
ALTER TABLE `tavatar`
  ADD PRIMARY KEY (`avatar_id`);

--
-- Indices de la tabla `tcomentarios_contenido`
--
ALTER TABLE `tcomentarios_contenido`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `content_id` (`content_id`);

--
-- Indices de la tabla `tnotificacion`
--
ALTER TABLE `tnotificacion`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `aula_id` (`aula_id`);

--
-- Indices de la tabla `tusuario`
--
ALTER TABLE `tusuario`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `taulavirtual`
--
ALTER TABLE `taulavirtual`
  MODIFY `aula_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `taulavirtual_contenido`
--
ALTER TABLE `taulavirtual_contenido`
  MODIFY `content_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `taulavirtual_contenido_a`
--
ALTER TABLE `taulavirtual_contenido_a`
  MODIFY `content_a_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `taulavirtual_contenido_p`
--
ALTER TABLE `taulavirtual_contenido_p`
  MODIFY `content_p_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `taulavirtual_estudiantes`
--
ALTER TABLE `taulavirtual_estudiantes`
  MODIFY `Aula_student_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tavatar`
--
ALTER TABLE `tavatar`
  MODIFY `avatar_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `tcomentarios_contenido`
--
ALTER TABLE `tcomentarios_contenido`
  MODIFY `comment_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tnotificacion`
--
ALTER TABLE `tnotificacion`
  MODIFY `notification_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tusuario`
--
ALTER TABLE `tusuario`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `taulavirtual_contenido`
--
ALTER TABLE `taulavirtual_contenido`
  ADD CONSTRAINT `taulavirtual_contenido_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tusuario` (`user_id`),
  ADD CONSTRAINT `taulavirtual_contenido_ibfk_2` FOREIGN KEY (`aula_id`) REFERENCES `taulavirtual` (`aula_id`),
  ADD CONSTRAINT `taulavirtual_contenido_ibfk_3` FOREIGN KEY (`content_a_id`) REFERENCES `taulavirtual_contenido_a` (`content_a_id`),
  ADD CONSTRAINT `taulavirtual_contenido_ibfk_4` FOREIGN KEY (`content_p_id`) REFERENCES `taulavirtual_contenido_p` (`content_p_id`);

--
-- Filtros para la tabla `taulavirtual_estudiantes`
--
ALTER TABLE `taulavirtual_estudiantes`
  ADD CONSTRAINT `taulavirtual_estudiantes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tusuario` (`user_id`),
  ADD CONSTRAINT `taulavirtual_estudiantes_ibfk_2` FOREIGN KEY (`aula_id`) REFERENCES `taulavirtual` (`aula_id`);

--
-- Filtros para la tabla `tcomentarios_contenido`
--
ALTER TABLE `tcomentarios_contenido`
  ADD CONSTRAINT `tcomentarios_contenido_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tusuario` (`user_id`),
  ADD CONSTRAINT `tcomentarios_contenido_ibfk_2` FOREIGN KEY (`content_id`) REFERENCES `taulavirtual_contenido` (`content_id`);

--
-- Filtros para la tabla `tnotificacion`
--
ALTER TABLE `tnotificacion`
  ADD CONSTRAINT `tnotificacion_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tusuario` (`user_id`),
  ADD CONSTRAINT `tnotificacion_ibfk_2` FOREIGN KEY (`aula_id`) REFERENCES `taulavirtual` (`aula_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
