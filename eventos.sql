-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2020 a las 07:30:12
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eventos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocina`
--

CREATE TABLE `cocina` (
  `idCocinero` int(100) NOT NULL,
  `nombreEvento` varchar(100) NOT NULL,
  `idTrabajador` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entretenimiento`
--

CREATE TABLE `entretenimiento` (
  `idEntretenimiento` int(100) NOT NULL,
  `nombreEvento` varchar(100) NOT NULL,
  `idTrabajador` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `idEvento` int(100) NOT NULL,
  `nombreEvento` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `hora` datetime(6) NOT NULL,
  `lugar` varchar(100) NOT NULL,
  `publico` varchar(100) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`idEvento`, `nombreEvento`, `fecha`, `hora`, `lugar`, `publico`, `descripcion`) VALUES
(1, 'prueba', '0000-00-00', '2020-11-25 06:33:31.000000', 'dkmfksm', 'skskkksksksk', 'skskksksksks');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_evento`
--

CREATE TABLE `informacion_evento` (
  `idInformacion` int(100) NOT NULL,
  `idEvento` int(100) NOT NULL,
  `idOrganizador` int(100) NOT NULL,
  `idServicio` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesero`
--

CREATE TABLE `mesero` (
  `idMesero` int(100) NOT NULL,
  `nombreEvento` varchar(100) NOT NULL,
  `idTrabajador` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizador`
--

CREATE TABLE `organizador` (
  `idOrganizador` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` int(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguridad`
--

CREATE TABLE `seguridad` (
  `idSeguridad` int(100) NOT NULL,
  `nombreEvento` varchar(100) NOT NULL,
  `idTrabajador` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `idServicio` int(100) NOT NULL,
  `idMesero` int(100) DEFAULT NULL,
  `idCocinero` int(100) DEFAULT NULL,
  `idSeguridad` int(100) DEFAULT NULL,
  `idEntretenimiento` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `idTrabajador` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` int(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `puesto` varchar(100) NOT NULL,
  `pago` int(100) NOT NULL,
  `horarioEntrada` datetime(6) NOT NULL,
  `horarioSalida` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cocina`
--
ALTER TABLE `cocina`
  ADD PRIMARY KEY (`idCocinero`),
  ADD KEY `idTrabajador` (`idTrabajador`);

--
-- Indices de la tabla `entretenimiento`
--
ALTER TABLE `entretenimiento`
  ADD PRIMARY KEY (`idEntretenimiento`),
  ADD KEY `idTrabajador` (`idTrabajador`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`idEvento`);

--
-- Indices de la tabla `informacion_evento`
--
ALTER TABLE `informacion_evento`
  ADD PRIMARY KEY (`idInformacion`),
  ADD KEY `idEvento` (`idEvento`),
  ADD KEY `idOrganizador` (`idOrganizador`),
  ADD KEY `idServicio` (`idServicio`);

--
-- Indices de la tabla `mesero`
--
ALTER TABLE `mesero`
  ADD PRIMARY KEY (`idMesero`),
  ADD KEY `idTrabajador` (`idTrabajador`);

--
-- Indices de la tabla `organizador`
--
ALTER TABLE `organizador`
  ADD PRIMARY KEY (`idOrganizador`);

--
-- Indices de la tabla `seguridad`
--
ALTER TABLE `seguridad`
  ADD PRIMARY KEY (`idSeguridad`),
  ADD KEY `idTrabajador` (`idTrabajador`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`idServicio`),
  ADD KEY `idMesero` (`idMesero`),
  ADD KEY `idComida` (`idCocinero`),
  ADD KEY `idSeguridad` (`idSeguridad`),
  ADD KEY `idEntretenimiento` (`idEntretenimiento`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`idTrabajador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cocina`
--
ALTER TABLE `cocina`
  MODIFY `idCocinero` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entretenimiento`
--
ALTER TABLE `entretenimiento`
  MODIFY `idEntretenimiento` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `idEvento` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `informacion_evento`
--
ALTER TABLE `informacion_evento`
  MODIFY `idInformacion` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mesero`
--
ALTER TABLE `mesero`
  MODIFY `idMesero` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `organizador`
--
ALTER TABLE `organizador`
  MODIFY `idOrganizador` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seguridad`
--
ALTER TABLE `seguridad`
  MODIFY `idSeguridad` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `idServicio` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `idTrabajador` int(100) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cocina`
--
ALTER TABLE `cocina`
  ADD CONSTRAINT `cocina_ibfk_1` FOREIGN KEY (`idTrabajador`) REFERENCES `trabajador` (`idTrabajador`);

--
-- Filtros para la tabla `entretenimiento`
--
ALTER TABLE `entretenimiento`
  ADD CONSTRAINT `entretenimiento_ibfk_1` FOREIGN KEY (`idTrabajador`) REFERENCES `trabajador` (`idTrabajador`);

--
-- Filtros para la tabla `informacion_evento`
--
ALTER TABLE `informacion_evento`
  ADD CONSTRAINT `informacion_evento_ibfk_1` FOREIGN KEY (`idEvento`) REFERENCES `evento` (`idEvento`),
  ADD CONSTRAINT `informacion_evento_ibfk_2` FOREIGN KEY (`idOrganizador`) REFERENCES `organizador` (`idOrganizador`),
  ADD CONSTRAINT `informacion_evento_ibfk_3` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`idServicio`);

--
-- Filtros para la tabla `mesero`
--
ALTER TABLE `mesero`
  ADD CONSTRAINT `mesero_ibfk_1` FOREIGN KEY (`idTrabajador`) REFERENCES `trabajador` (`idTrabajador`);

--
-- Filtros para la tabla `seguridad`
--
ALTER TABLE `seguridad`
  ADD CONSTRAINT `seguridad_ibfk_1` FOREIGN KEY (`idTrabajador`) REFERENCES `trabajador` (`idTrabajador`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`idSeguridad`) REFERENCES `seguridad` (`idSeguridad`),
  ADD CONSTRAINT `servicios_ibfk_2` FOREIGN KEY (`idMesero`) REFERENCES `mesero` (`idMesero`),
  ADD CONSTRAINT `servicios_ibfk_3` FOREIGN KEY (`idEntretenimiento`) REFERENCES `entretenimiento` (`idEntretenimiento`),
  ADD CONSTRAINT `servicios_ibfk_4` FOREIGN KEY (`idCocinero`) REFERENCES `cocina` (`idCocinero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
