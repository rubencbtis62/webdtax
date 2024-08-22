-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2024 a las 21:42:25
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tramites`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramite`
--

CREATE TABLE `tramite` (
  `id` int(11) NOT NULL,
  `estatus` varchar(20) NOT NULL,
  `plantel` varchar(20) NOT NULL,
  `area` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `responsable` varchar(100) NOT NULL,
  `correo1` varchar(60) NOT NULL,
  `oficio` varchar(20) NOT NULL,
  `importancia` varchar(15) NOT NULL,
  `asunto` varchar(250) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `domicilio` varchar(250) NOT NULL,
  `telefono` varchar(13) NOT NULL,
  `correo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tramite`
--

INSERT INTO `tramite` (`id`, `estatus`, `plantel`, `area`, `fecha`, `responsable`, `correo1`, `oficio`, `importancia`, `asunto`, `nombre`, `apellidos`, `domicilio`, `telefono`, `correo`) VALUES
(1, 'EN PROCESO', 'CBTIS62', 'RECURSOS HUMANOS', '2024-06-03', 'ANA ROSABERNAL', 'ruben.hernandez@cbtis62.edu.mx', '220/043/2024', 'NORMAL', 'RECLAMO PRESTACION DE ANTEOJOS ', 'FRANCISCO', 'COTA', 'Purisima 231, Col. Bellavista', '6121626910', 'ruben.hernandez@cbtis62.edu.mx'),
(2, 'EN TRAMITE', 'CBTIS69', 'RECURSOS HUMANOS', '2024-06-05', 'MIRIAM MARISOL', 'ruben.hernandez@cbtis62.edu.mx', '220/073/2024', 'NORMAL', 'CONSTANCIA DE ANTIGUEDAD', 'RUBEN', 'HERNANDEZ', 'LAS ANIMAS', '6121680993', 'ruben.hernandez@cbtis62.edu.mx'),
(3, 'EN TRAMITE', 'CBTIS69', 'RECURSOS HUMANOS', '2024-05-30', 'MARISOL MIRIAM', 'ruben.hernandez@cbtis62.edu.mx', '220/028/2024', 'NORMAL', 'CONSTANCIA DE ANTIGUEDAD', 'MARIN', 'TORRES', 'SIN VER, NO SE', '6121680993', 'ruben.hernandez@cbtis62.edu.mx'),
(4, 'EN PROCESO', 'CETIS81', 'RECURSOS HUMANOS', '2024-05-30', 'MARTHA SANCHEZ', 'ruben.hernandez@cbtis62.edu.mx', '220/055/2024', 'NORMAL', 'SOLICITUD DE ORTOPEDIA', 'MARIN', 'SENTADOS EN LA ORILLA', '', '6121680993', 'ruben.hernandez@cbtis62.edu.mx'),
(5, 'EN TRAMITE', 'CETIS81', 'RECURSOS HUMANOS', '2024-06-04', 'MIRIAM SOLTE', 'ruben.hernandez@cbtis62.edu.mx', '220/023/2024', 'NORMAL', 'RECLAMO UTILES ESCOLARES', 'JACINTO', 'PEREZ', '', '6121626910', 'ruben.conalep@gmail.com'),
(6, 'EN TRAMITE', 'CBTIS230', 'RECURSOS HUMANOS', '2024-06-04', 'RICARDO RENTERIA', 'ruben.hernandez@cbtis62.edu.mx', '220/076/2024', 'NORMAL', 'SOLICITUD DE SEGURO MEDICO', 'JOSE LUIS', 'MENDEZ', 'SIN CAMBIOS', '6121654546', 'ruben.hernandez@cbtis62.edu.mx'),
(7, 'OFICINAS DGETI', 'CBTIS230', 'RECURSOS HUMANOS', '2024-06-04', 'ALFREDO COSIO', 'ruben.hernandez@cbtis62.edu.mx', '220/045/24', 'NORMAL', 'SOLICITUD DE PRESTAMO', 'EMILIO', 'GERALDO', 'mas alla que pa aca', '6121680993', 'ruben.conalep@gmail.com'),
(8, 'EN PROCESO', 'CBTIS256', 'RECURSOS HUMANOS', '2024-06-05', 'MINIERVA PEREZ', 'ruben.hernandez@cbtis62.edu.mx', '220/089/24', 'NORMAL', 'PRESTACION DE QUINCENIOS ', 'BENJAMIN', 'MENDIETA', '', '6121256910', 'ruben.conalep@gmail.com'),
(9, 'EN PROCESO', 'CBTIS256', 'RECURSOS HUMANOS', '2024-06-04', 'karina ceste', 'ruben.hernandez@cbtis62.edu.mx', '220/032/24', 'NORMAL', 'PRESTACION DE 5 AÑOS ANTIGUEDAD', 'MATIAS', 'MENDEZ', '', '6121242667', 'ruben.hernandez@cbtis62.edu.mx'),
(10, 'EN PROCESO', 'CBTIS62', 'RECURSOS HUMANOS', '2024-06-07', 'MINIERVA PEREZ', 'ruben.hernandez@cbtis62.edu.mx', '220/032/24', 'NORMAL', 'RECLAMACION DE PRESTACION DE BONO DE COMPENSACION', 'JOSE', 'SALAS', '', '6121242667', 'ruben.conalep@gmail.com'),
(11, 'EN PROCESO', 'CBTIS69', 'RECURSOS HUMANOS', '2024-06-10', 'MINIERVA PEREZ', 'ruben.hernandez@cbtis62.edu.mx', '220/038/24', 'MEDIA', 'SOLICITUD DE PRESTACION DE ANTEOJOS', 'JORGE', 'DIAZ', '', '6121242667', 'ruben.conalep@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tramite`
--
ALTER TABLE `tramite`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tramite`
--
ALTER TABLE `tramite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
