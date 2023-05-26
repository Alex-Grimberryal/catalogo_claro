-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2023 a las 23:09:51
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalo_claro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes_fija`
--

CREATE TABLE `planes_fija` (
  `cod_promofija` int(11) NOT NULL,
  `nombre_prom` varchar(100) NOT NULL,
  `img_prom` varchar(250) NOT NULL,
  `tipo_plan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `planes_fija`
--

INSERT INTO `planes_fija` (`cod_promofija`, `nombre_prom`, `img_prom`, `tipo_plan`) VALUES
(1, 'Planes 1play', 'linea grafica paolo-15.jpg', 'Planes Play'),
(2, 'Planes 2play', 'linea grafica paolo-14.jpg', 'Planes Play'),
(3, 'Planes 3play', 'linea grafica paolo-03.jpg', 'Planes Play');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes_movil`
--

CREATE TABLE `planes_movil` (
  `cod_promo` int(10) NOT NULL,
  `nombre_prom` varchar(100) NOT NULL,
  `img_prom` varchar(250) NOT NULL,
  `tipo_plan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `planes_movil`
--

INSERT INTO `planes_movil` (`cod_promo`, `nombre_prom`, `img_prom`, `tipo_plan`) VALUES
(1, 'Planes 10GB', 'linea grafica paolo-07.jpg', 'Planes Max'),
(2, 'Planes 25GB', 'linea grafica paolo-06.jpg', 'Planes Max'),
(3, 'Planes 30GB', 'linea grafica paolo-05.jpg', 'Planes Max'),
(4, 'Planes 50GB', 'linea grafica paolo-01.jpg', 'Planes Max'),
(5, 'Planes Max Play 55 GB', 'linea grafica paolo-09.jpg', 'PLANES MAX PLAY'),
(6, 'Planes Max Play 100 GB', 'linea grafica paolo-10.jpg', 'PLANES MAX PLAY'),
(7, 'Planes Max Play 145 GB', 'linea grafica paolo-08.jpg', 'PLANES MAX PLAY'),
(8, 'Planes Max Ilimitados 95 GB', 'linea grafica paolo-11.jpg', 'PLANES MAX ILIMITADOS'),
(9, 'Planes Max Ilimitados 105 GB', 'linea grafica paolo-13.jpg', 'PLANES MAX ILIMITADOS'),
(10, 'Planes Max Ilimitados 130 GB', 'linea grafica paolo-12.jpg', 'PLANES MAX ILIMITADOS'),
(11, 'Planes Max Ilimitados 140 GB', 'linea grafica paolo-02.jpg', 'PLANES MAX ILIMITADOS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `planes_fija`
--
ALTER TABLE `planes_fija`
  ADD PRIMARY KEY (`cod_promofija`);

--
-- Indices de la tabla `planes_movil`
--
ALTER TABLE `planes_movil`
  ADD PRIMARY KEY (`cod_promo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `planes_fija`
--
ALTER TABLE `planes_fija`
  MODIFY `cod_promofija` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `planes_movil`
--
ALTER TABLE `planes_movil`
  MODIFY `cod_promo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
