-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2024 a las 03:30:58
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
-- Base de datos: `whattoosee`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `bannerId` int(11) NOT NULL,
  `productionId` int(11) NOT NULL,
  `poster` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE `comment` (
  `commentId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productionId` int(11) NOT NULL,
  `rating` float NOT NULL,
  `comment` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `follow`
--

CREATE TABLE `follow` (
  `userId` int(11) NOT NULL,
  `userIdFollowed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `production`
--

CREATE TABLE `production` (
  `productionId` int(11) NOT NULL,
  `nameProd` varchar(26) NOT NULL,
  `rating` float NOT NULL,
  `genre` varchar(80) NOT NULL,
  `director` varchar(80) NOT NULL,
  `writer` varchar(80) NOT NULL,
  `cast` varchar(80) NOT NULL,
  `releaseDate` varchar(50) NOT NULL,
  `runtime` varchar(50) NOT NULL,
  `bestMovie` tinyint(1) NOT NULL DEFAULT 0,
  `bestSerie` tinyint(1) NOT NULL DEFAULT 0,
  `premierMovie` tinyint(1) NOT NULL DEFAULT 0,
  `newSerie` tinyint(1) NOT NULL DEFAULT 0,
  `typeProd` tinyint(1) NOT NULL,
  `poster` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `photo` longblob DEFAULT NULL,
  `description` varchar(550) DEFAULT NULL,
  `follows` int(11) DEFAULT 0,
  `followers` int(11) DEFAULT 0,
  `isAdmin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`idUser`, `email`, `username`, `pass`, `photo`, `description`, `follows`, `followers`, `isAdmin`) VALUES
(5, 'edsonibarra54@gmail.com', 'edson', 'edsonibarra54', NULL, NULL, 0, 0, 1),
(10, 'jorge@gmail.com', 'Themaster', 'jorge12345', NULL, NULL, 0, 0, 0),
(12, 'mani@gmail.com', 'hectormani', '12345678', NULL, NULL, 0, 0, 0),
(13, 'arturo@gmail.com', 'arturo', 'arturoibarra54', NULL, NULL, 0, 0, 0),
(14, 'yorch@gmail.com', 'yorch', 'yorchsiqueiros', NULL, NULL, 0, 0, 0),
(15, 'franco@gmail.com', 'franco', 'francopartida54', NULL, NULL, 0, 0, 0),
(16, 'oman@gmail.com', 'oman', 'omansitopolinesio', NULL, NULL, 0, 0, 0),
(17, 'toniou@gmail.com', 'toniou', 'tuckytucky', NULL, NULL, 0, 0, 0),
(18, 'rita@gmail.com', 'rita', 'ritamoon7', NULL, NULL, 0, 0, 0),
(19, 'andres@gmail.com', 'andres', 'sexdude69', NULL, NULL, 0, 0, 0),
(20, 'julio@gmail.com', 'julio', 'julioxmessi', NULL, NULL, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`bannerId`),
  ADD KEY `productionId` (`productionId`);

--
-- Indices de la tabla `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `productionId` (`productionId`);

--
-- Indices de la tabla `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`userId`,`userIdFollowed`),
  ADD KEY `userId` (`userId`,`userIdFollowed`),
  ADD KEY `userIdFollowed` (`userIdFollowed`);

--
-- Indices de la tabla `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`productionId`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`,`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `bannerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `comment`
--
ALTER TABLE `comment`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `production`
--
ALTER TABLE `production`
  MODIFY `productionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`productionId`) REFERENCES `production` (`productionId`);

--
-- Filtros para la tabla `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`productionId`) REFERENCES `production` (`productionId`);

--
-- Filtros para la tabla `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `follow_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `follow_ibfk_2` FOREIGN KEY (`userIdFollowed`) REFERENCES `user` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
