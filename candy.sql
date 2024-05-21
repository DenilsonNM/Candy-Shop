-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2023 a las 19:21:44
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `candy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `altas`
--

CREATE TABLE `altas` (
  `id` int(10) NOT NULL,
  `nombre` varchar(15) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `nacimiento` varchar(20) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `contrasena` varchar(10) COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `altas`
--

INSERT INTO `altas` (`id`, `nombre`, `nacimiento`, `contrasena`) VALUES
(1, 'Alfredo', '2000-09-02', '123'),
(4, 'kratos', '1997-12-07', 'kratos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `precio` varchar(10) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `disponibles` int(5) DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `ruta` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `disponibles`, `descripcion`, `ruta`) VALUES
(18, 'Aciduladito', '30', 9, 'Caramelos sabor acido con chile, en ricos sabores', 'productos/2023-06-06-04-01-aciduladito.png'),
(19, 'Mazapán', '25', 20, 'Elaborado con cacahuates tostados, 30 pzs', 'productos/2023-06-06-04-57-mazapanes.png'),
(20, 'Mazapán Chocola', '33', 7, 'También al mazapán le tocó su baño de chocolate, más irresistible todavía', 'productos/2023-06-06-04-25-mazapanes_chocolate.png'),
(21, 'Gummy Pop', '15', 23, 'Jugosas gomitas multicolores', 'productos/2023-06-06-04-22-Gummy_pop.png'),
(22, 'Gummers Chocofr', '26', 8, 'Gomitas de grenetina sabor fresa cubiertas en delicioso chocolate', 'productos/2023-06-06-04-02-Gummers-chochofresa.png'),
(23, 'Gummy Bery', '35', 35, 'Deliciosas gomitas de grenetina con forma de ositos', 'productos/2023-06-06-04-34-Gummy-bery.png'),
(24, 'Gomitas Frutas ', '42', 8, 'Gomitas en forma de mora y frambuesa, juntas', 'productos/2023-06-06-04-56-Gomitas-frutas.png'),
(25, 'Gomita Malvabon', '38', 24, 'Gomita con jalea de fresa natural con sabor chocolate', 'productos/2023-06-06-04-20-Gomita-Malvabon.png'),
(26, 'Japonés Nishiya', '52', 27, 'Deliciosos cacahuates estilo japonés', 'productos/2023-06-06-04-28-Japonés-Nishiyama.png'),
(27, 'Cacahuates Pico', '37', 45, 'Frescos Cacahuates Picositos', 'productos/2023-06-06-04-53-Cacahuates-picositos.jpg'),
(28, 'Goma de Mascar ', '32', 19, 'Goma de mascar sabores surtidos', 'productos/2023-06-06-04-31-Chicles-moño.png'),
(29, 'Airmints Menta', '28', 5, 'Goma de mascar con relleno líqudo sabor menta', 'productos/2023-06-06-04-09-Airmints.jpg'),
(30, 'Litos Bolsa', '54', 26, 'Caramelo macizo con sabroso relleno sabor a frutas', 'productos/2023-06-06-04-55-caramelitos.png'),
(31, 'Milkaramel Surt', '66', 8, 'Sabroso caramelo de leche, con deliciosos sabores, ahora en presentación surtida', 'productos/2023-06-06-04-38-milkaramel.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `altas`
--
ALTER TABLE `altas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `altas`
--
ALTER TABLE `altas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
