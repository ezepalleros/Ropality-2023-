-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2023 a las 10:24:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parcialfinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `nombreCategoria` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `nombreCategoria`) VALUES
(1, 'ellos'),
(2, 'ellas'),
(3, 'accesorios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codItem` int(11) NOT NULL,
  `nomItem` varchar(32) NOT NULL,
  `precioItem` mediumint(9) NOT NULL,
  `stockItem` smallint(6) NOT NULL,
  `fotoItem` varchar(32) NOT NULL DEFAULT 'notimg.png',
  `talleItem` varchar(3) NOT NULL,
  `categoriaItem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codItem`, `nomItem`, `precioItem`, `stockItem`, `fotoItem`, `talleItem`, `categoriaItem`) VALUES
(1, 'Remera Vans Rosa', 9999, 20, '1700730631.jpg', 'L', 1),
(2, 'Pantalón Cargo Verde', 12999, 10, '1700730709.jpg', 'XL', 1),
(3, 'Zapas Adidas Blancas', 25999, 10, '1700730765.jpg', 'M', 1),
(4, 'Remera TLOZ', 7999, 25, '1700730838.jpg', 'M', 2),
(5, 'Jean Chupín Mujer', 13999, 15, '1700730891.jpg', 'M', 2),
(6, 'Top de Mujer Deportivo', 7999, 15, '1700730948.jpg', 'L', 2),
(7, 'Sombrero Paja Toquilla', 4999, 25, '1700731040.jpg', 'NO', 3),
(8, 'Cartera Mujer Blue Paradise', 21999, 5, '1700731111.jpg', 'NO', 3),
(9, 'Lentes Ombak Waikiki Black', 5999, 15, '1700731160.jpg', 'NO', 3),
(10, 'ff', 12, 12, '1700732999.jpg', 'XL', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(8) NOT NULL,
  `NOMBRE` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `APELLIDO` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `EMAIL` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `CONTRA` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `ROL` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `FECHA_ALTA` datetime DEFAULT NULL,
  `ESTADO` enum('seguro','baneado') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOMBRE`, `APELLIDO`, `EMAIL`, `CONTRA`, `ROL`, `FECHA_ALTA`, `ESTADO`) VALUES
(1, 'Jefe', 'Supremo', 'Jefesupremo@gmail.com', '6ef471d9136a29f4b9e3b43519914729', 'Admin', '2023-12-13 04:32:44', 'seguro'),
(2, 'dede', 'ss', 'papa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin', '2023-12-13 06:14:35', 'seguro'),
(3, 'Juan', 'Perez', 'elpepe@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'usuario', '2023-12-13 06:19:29', 'baneado'),
(4, 'Rigo', 'Berto', 'rigoberto@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'usuario', '2023-12-13 06:21:29', 'seguro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codItem`),
  ADD KEY `categoriaItem` (`categoriaItem`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
