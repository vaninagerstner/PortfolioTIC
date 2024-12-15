-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2024 a las 15:54:47
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `steamlab`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`nombre`, `email`, `mensaje`) VALUES
('Ana', 'a@gmail.com', 'Hola estoy probando'),
('Lucia', 'l@gmail.com', 'Hola me gustaría información'),
('Pedro', 'p@gmail.com', 'Quisiera más información'),
('Plácido Gerstner', 'p@gmail.com', 'Hola quisiera que me manden información');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuotas`
--

CREATE TABLE `cuotas` (
  `dni` int(8) NOT NULL,
  `concepto` varchar(100) NOT NULL,
  `vencimiento` date NOT NULL,
  `valor_cuota` decimal(50,0) NOT NULL,
  `estado` enum('Pagada','Pendiente','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cuotas`
--

INSERT INTO `cuotas` (`dni`, `concepto`, `vencimiento`, `valor_cuota`, `estado`) VALUES
(23900593, 'Octubre', '2024-10-10', 15000, 'Pagada'),
(23900593, 'Noviembre', '2024-11-11', 15000, 'Pagada'),
(23900593, 'Diciembre', '2024-12-10', 15000, 'Pendiente'),
(21539698, 'Octubre', '2024-10-10', 15000, 'Pagada'),
(46263137, 'Diciembre', '2024-12-10', 15000, 'Pagada'),
(46263137, 'Enero', '2025-01-10', 15000, 'Pendiente'),
(23900593, 'Enero', '2025-01-10', 1500, 'Pendiente'),
(21539698, 'Octubre', '2024-10-10', 1500, 'Pagada'),
(21539698, 'Noviembre', '2024-12-10', 15000, 'Pagada'),
(21539698, 'Diciembre', '2024-12-10', 15000, 'Pagada'),
(47745698, 'Diciembre', '2024-12-10', 15000, 'Pagada'),
(47745680, 'Enero', '2024-12-10', 15000, 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `futuros_alumnos`
--

CREATE TABLE `futuros_alumnos` (
  `nombre` text NOT NULL,
  `dni` int(8) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `futuros_alumnos`
--

INSERT INTO `futuros_alumnos` (`nombre`, `dni`, `celular`, `email`) VALUES
('panky', 47745680, '2147483647', 'j@gmail.com'),
('Vanina', 23900593, '2147483647', 'vaninagerstner@gmail.com'),
('Vanina', 23900593, '2147483647', 'vaninagerstner@gmail.com'),
('Vanina', 23900593, '2147483647', 'vaninagerstner@gmail.com'),
('pamela', 23900593, '2147483647', 'phonics@northfield.edu.ar'),
('pamela', 23900593, '11614141800', 'phonics@northfield.edu.ar'),
('laura', 11223344, '11614141888', 'l@gmail.com'),
('astrid', 11223344, '11614141888', 'ASD@GMAIL.COM'),
('Juana', 11223344, '11614141888', 'j@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE `socios` (
  `dni` int(8) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`dni`, `usuario`, `email`, `password`, `foto`) VALUES
(10112669, 'ana antonia', 'a@gmail.com', '1234567', 'foto/Captura de pantalla 2023-12-20 191900.png'),
(21539698, 'fabianalejandro', 'f@gmail.com', '1234567', 'foto/Captura de pantalla 2023-11-08 100251.png'),
(23900593, 'vaninagerstner', 'vaninagerstner@gmail.com', '1234567', 'foto/Captura de pantalla 2023-11-08 110816.png'),
(46263137, 'juancruz', 'p@gmail.com', '1234567', 'foto/Captura de pantalla 2023-11-21 092836.png'),
(47745680, 'bau', 'b@gmail.com', '1234567', 'foto/descarga.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`dni`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
