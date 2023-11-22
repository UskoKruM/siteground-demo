-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2023 a las 01:05:07
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
-- Base de datos: `nearsure`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE PROCEDURE `sp_listPositions` ()  BEGIN
	SELECT id, name FROM position;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `position`
--

CREATE TABLE `position` (
  `id` smallint(4) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Stores the positions.';

--
-- Volcado de datos para la tabla `position`
--

INSERT INTO `position` (`id`, `name`) VALUES
(1, 'Semi Senior Full-Stack Developer'),
(2, 'Semi-Senior .NET Application Developer'),
(3, 'Semi-Senior Full-Stack Developer'),
(4, 'Semi-Senior Node & React Developer'),
(5, 'Semi-Senior Python & JavaScript Developer'),
(6, 'Senior Backend .NET Core Developer'),
(7, 'Senior Backend .NET Engineer'),
(8, 'Senior Backend Developer'),
(9, 'Senior Backend Engineer'),
(10, 'Senior Backend Golang Developer'),
(11, 'Senior Backend Java Developer'),
(12, 'Senior Backend Java Engineer'),
(13, 'Senior Backend NodeJS Engineer'),
(14, 'Senior Backend Python Developer'),
(15, 'Senior Backend Python Engineer'),
(16, 'Senior C# Developer'),
(17, 'Senior DevOps Engineer'),
(18, 'Senior Frontend Angular Developer'),
(19, 'Senior Frontend Engineer'),
(20, 'Senior Frontend React Developer'),
(21, 'Senior Frontend React Engineer'),
(22, 'Senior Frontend VueJS'),
(23, 'Senior Full-Stack .NET Developer'),
(24, 'Senior Full-Stack Engineer'),
(25, 'Senior Full-Stack Java Developer'),
(26, 'Senior Full-Stack JavaScript Developer'),
(27, 'Senior Full-Stack React Developer'),
(28, 'Senior Full-Stack Software Engineer'),
(29, 'Senior Java Backend Engineer'),
(30, 'Senior Node & React Developer'),
(31, 'Senior NodeJS Engineer'),
(32, 'Senior PHP Developer'),
(33, 'Senior PHP Engineer'),
(34, 'Senior React Developer'),
(35, 'Senior UI React Developer'),
(36, 'Senior UI VueJS Engineer'),
(37, 'Staff Full-Stack Vue & Node Engineer'),
(38, 'Tech Lead (Frontend)'),
(39, 'Senior Full-Stack Python Engineer');

-- --------------------------------------------------------

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de la tabla `position`
--
ALTER TABLE `position`
  MODIFY `id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
