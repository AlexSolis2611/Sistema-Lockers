-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2019 a las 05:03:41
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test_empleados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `fecha_asignacion` datetime NOT NULL,
  `puesto` varchar(50) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `no_locker` varchar(50) NOT NULL,
  `area_locker` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombres`, `fecha_asignacion`, `puesto`, `sexo`, `no_locker`, `area_locker`) VALUES
(125, 'askjdkasb', '2019-02-28 04:09:08', 'a,sdkajnd', 'laknd', '123', 'aksjdka'),
(126, 'kajsbdkba', '2019-02-28 04:11:46', 'kwjbdkqb', 'kjbd', '123876', 'asjb'),
(127, 'kajsbdkba', '2019-02-28 04:12:22', 'kwjbdkqb', 'kjbd', '123876', 'asjb'),
(128, 'kajsbdkba', '2019-02-28 04:12:43', 'kwjbdkqb', 'kjbd', '123876', 'asjb'),
(129, 'akjda', '2019-02-28 04:15:03', 'kjasdkjb', 'aksjdbkajb', '12387', 'asjbdkjb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lockers`
--

CREATE TABLE `lockers` (
  `no_locker` int(11) NOT NULL,
  `estado_locker` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lockers`
--

INSERT INTO `lockers` (`no_locker`, `estado_locker`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lockers`
--
ALTER TABLE `lockers`
  ADD PRIMARY KEY (`no_locker`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT de la tabla `lockers`
--
ALTER TABLE `lockers`
  MODIFY `no_locker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
