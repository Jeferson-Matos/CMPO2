-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2021 a las 11:59:37
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
  `Content_a_comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`content_id`);

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
  ADD PRIMARY KEY (`Aula_student_id`);

--
-- Indices de la tabla `tcomentarios_contenido`
--
ALTER TABLE `tcomentarios_contenido`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indices de la tabla `tnotificacion`
--
ALTER TABLE `tnotificacion`
  ADD PRIMARY KEY (`notification_id`);

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
  MODIFY `aula_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `taulavirtual_contenido`
--
ALTER TABLE `taulavirtual_contenido`
  MODIFY `content_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `taulavirtual_contenido_a`
--
ALTER TABLE `taulavirtual_contenido_a`
  MODIFY `content_a_id` int(100) NOT NULL AUTO_INCREMENT;

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
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
