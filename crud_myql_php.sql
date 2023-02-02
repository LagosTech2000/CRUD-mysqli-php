-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2023 a las 05:13:56
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud+myql+php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` int(11) NOT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `marca`, `precio`, `createdAt`, `idUsuario`, `modelo`) VALUES
(12, '  Iphone', 12500, '2023-01-29 00:00:00', 36, '  X'),
(14, 'Samsung', 12345, '2023-01-29 00:00:00', 40, 'galaxy s10'),
(15, ' Huawei', 3400, '2023-01-29 00:00:00', 35, ' Y9 2018'),
(16, 'Samsung', 4500, '2023-01-29 00:00:00', 35, 'note 8+'),
(17, '  Samsung', 12000, '2023-01-29 00:00:00', 36, '  Galaxy s22 ultra'),
(19, ' Xiaomi', 8900, '2023-01-29 00:00:00', 36, ' Redmi Note 10'),
(20, 'Samsung', 5500, '2023-01-29 00:00:00', 36, 'Note 8+'),
(21, 'Samsung', 6400, '2023-01-30 00:00:00', 36, 'Note 9'),
(23, 'Iphone', 10000, '2023-01-30 00:00:00', 36, 'XR 120GB'),
(24, 'Iphone', 8900, '2023-01-30 00:00:00', 35, 'XS  '),
(25, 'Iphone', 12000, '2023-01-30 00:00:00', 35, 'X'),
(26, 'Samsung', 4500, '2023-01-30 00:00:00', 36, 'Galaxy a50'),
(27, 'Xiaomi', 14500, '2023-01-30 00:00:00', 35, 'Redmi 8 MI'),
(28, 'Macbook', 18500, '2023-01-31 00:00:00', 35, 'Pro 2017 TouchBar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `usuario` varchar(16) NOT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`usuario`, `correo`, `pass`, `createdAt`, `Id`) VALUES
('meylin1998', 'dasasdasd@das.com', '$argon2id$v=19$m=65536,t=4,p=1$UVZFQTRGVGxzaFZHQXVrRQ$soJcJUuMGCbnbzTPcvAPaowCggTWVDDZTev433PWQMs', '2023-01-29 06:00:00', 35),
('Fernando1233', 'fer@123.com', '$argon2id$v=19$m=65536,t=4,p=1$eS8uY2YwN1dOZENGSU42bQ$PMEorMk3XyqReE6znCuhFWUzhk1yXJvciSJLCkUKtvo', '2023-01-29 06:00:00', 36),
('Fernando123', 'fer@123.com', '$argon2id$v=19$m=65536,t=4,p=1$UWgvU3hheXBKNjc2RUFjRw$NCVnWSvFYsoa3tjdH3Djo6kDHSm7eM5jZgsLhQesNWo', '2023-01-29 06:00:00', 38),
('Fernando12345', 'fer@123.com', '$argon2id$v=19$m=65536,t=4,p=1$QW1hYVBXNDdYbWpjaDNxLg$EZDS+g2GTn0hyFpcgza6HkCDIsA9BGweWMz2/9bntAU', '2023-01-29 06:00:00', 39),
('paola2005', 'tiapaola2005@pao.com', '$argon2id$v=19$m=65536,t=4,p=1$ZEIxUk9NQ2VtQlF1WXU4Sw$96RQCS7xrB+RCFzXHGKB3vmNowVMreRUGCkUTV5xFU4', '2023-01-29 06:00:00', 40),
('Ana1990', 'fer@123.com', '$argon2id$v=19$m=65536,t=4,p=1$WjAueWtpMlNPTXpFVUIwMw$TJGjb9X8qoR9kfjKNlNLf0GnUr+2HOJvxa0UA2I6tnI', '2023-01-30 06:00:00', 41),
('Fer1738', 'adad@asda.cmo', '$argon2id$v=19$m=65536,t=4,p=1$eUUyR3ZmQWdoeTRKUHU1Zw$y9Nm6qrTwynCxhQGJdeZNe22vUkD7W8cgBJkI2xKNQM', '2023-01-30 06:00:00', 42);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
