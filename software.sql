-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2022 a las 15:11:02
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `software`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `access`
--

CREATE TABLE `access` (
  `acce_id` int(10) UNSIGNED NOT NULL,
  `pers_id` int(10) UNSIGNED NOT NULL,
  `acce_email` varchar(100) NOT NULL,
  `acce_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `access`
--

INSERT INTO `access` (`acce_id`, `pers_id`, `acce_email`, `acce_password`) VALUES
(1, 1, 'l@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `country`
--

CREATE TABLE `country` (
  `coun_id` int(10) UNSIGNED NOT NULL,
  `coun_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `country`
--

INSERT INTO `country` (`coun_id`, `coun_nombre`) VALUES
(1, 'COLOMBIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

CREATE TABLE `person` (
  `pers_id` int(10) UNSIGNED NOT NULL,
  `sex_id` int(10) UNSIGNED NOT NULL,
  `coun_id_nacionality` int(10) UNSIGNED NOT NULL,
  `coun_id_where_live` int(10) UNSIGNED NOT NULL,
  `pers_document` varchar(15) NOT NULL,
  `pers_names` varchar(50) NOT NULL,
  `pers_surnames` varchar(50) NOT NULL,
  `pers_birth_date` date DEFAULT NULL,
  `pers_smart_phone` varchar(10) DEFAULT NULL,
  `pers_email` varchar(100) DEFAULT NULL,
  `reli_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `person`
--

INSERT INTO `person` (`pers_id`, `sex_id`, `coun_id_nacionality`, `coun_id_where_live`, `pers_document`, `pers_names`, `pers_surnames`, `pers_birth_date`, `pers_smart_phone`, `pers_email`, `reli_id`) VALUES
(1, 1, 1, 1, '13174156', 'LUIS', 'HERN&Aacute;NDEZ', '2021-03-16', '316512547', 'l@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `religion`
--

CREATE TABLE `religion` (
  `reli_id` int(11) NOT NULL,
  `reli_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `religion`
--

INSERT INTO `religion` (`reli_id`, `reli_name`) VALUES
(1, 'CATOLICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sex`
--

CREATE TABLE `sex` (
  `sex_id` int(10) UNSIGNED NOT NULL,
  `sex_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sex`
--

INSERT INTO `sex` (`sex_id`, `sex_name`) VALUES
(1, 'MASCULINO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`acce_id`),
  ADD UNIQUE KEY `acce_usuario_UNIQUE` (`acce_email`),
  ADD KEY `fk_pers_id` (`pers_id`);

--
-- Indices de la tabla `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`coun_id`),
  ADD UNIQUE KEY `uc_pais_nombre` (`coun_nombre`);

--
-- Indices de la tabla `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`pers_id`),
  ADD UNIQUE KEY `uc_pers_documento` (`pers_document`),
  ADD KEY `fk_sexo_id` (`sex_id`),
  ADD KEY `fk_pais_id_nacionalidad` (`coun_id_nacionality`),
  ADD KEY `fk_pais_id_donde_vive` (`coun_id_where_live`),
  ADD KEY `fk_personas_religiones1_idx` (`reli_id`);

--
-- Indices de la tabla `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`reli_id`),
  ADD UNIQUE KEY `uc_reli_nombre` (`reli_name`);

--
-- Indices de la tabla `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`sex_id`),
  ADD UNIQUE KEY `uc_sexo_nombre` (`sex_name`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `access`
--
ALTER TABLE `access`
  MODIFY `acce_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `country`
--
ALTER TABLE `country`
  MODIFY `coun_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `person`
--
ALTER TABLE `person`
  MODIFY `pers_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `religion`
--
ALTER TABLE `religion`
  MODIFY `reli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sex`
--
ALTER TABLE `sex`
  MODIFY `sex_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `access`
--
ALTER TABLE `access`
  ADD CONSTRAINT `fk_accesos_personas1` FOREIGN KEY (`pers_id`) REFERENCES `person` (`pers_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `fk_personas_paises1` FOREIGN KEY (`coun_id_nacionality`) REFERENCES `country` (`coun_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_personas_paises2` FOREIGN KEY (`coun_id_where_live`) REFERENCES `country` (`coun_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_personas_religiones1` FOREIGN KEY (`reli_id`) REFERENCES `religion` (`reli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_personas_sexos` FOREIGN KEY (`sex_id`) REFERENCES `sex` (`sex_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
