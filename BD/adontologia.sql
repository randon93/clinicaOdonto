-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2019 a las 22:18:11
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `odontologia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `cedula` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atencion_cita`
--

CREATE TABLE `atencion_cita` (
  `numero_cita` int(11) NOT NULL,
  `fecha_asignada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxiliar`
--

CREATE TABLE `auxiliar` (
  `id` int(11) NOT NULL,
  `cedula` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `numero_cita` int(11) NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `cedula_p` int(11) NOT NULL,
  `id_consultorio` int(11) NOT NULL,
  `fecha_asignada` date NOT NULL,
  `cedula_o` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colsultorio`
--

CREATE TABLE `colsultorio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorio_auxialiar`
--

CREATE TABLE `consultorio_auxialiar` (
  `cedula_a` int(11) NOT NULL,
  `id_consultorio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorio_persona`
--

CREATE TABLE `consultorio_persona` (
  `id_consultorio` int(11) NOT NULL,
  `cedula_p` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `pago` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_paciente`
--

CREATE TABLE `factura_paciente` (
  `id_factura` int(11) NOT NULL,
  `cedula_p` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `odontologo`
--

CREATE TABLE `odontologo` (
  `id` int(11) NOT NULL,
  `cedula` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `odontologo_especialidad`
--

CREATE TABLE `odontologo_especialidad` (
  `id_especialidad` int(11) NOT NULL,
  `cedula_o` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `cedula` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `cedula` varchar(10) NOT NULL,
  `nonbre` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procedimiento`
--

CREATE TABLE `procedimiento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procedimiento_paciente`
--

CREATE TABLE `procedimiento_paciente` (
  `id_procedimiento` int(11) NOT NULL,
  `cedula_p` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `atencion_cita`
--
ALTER TABLE `atencion_cita`
  ADD PRIMARY KEY (`numero_cita`);

--
-- Indices de la tabla `auxiliar`
--
ALTER TABLE `auxiliar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`numero_cita`),
  ADD KEY `cedula_p` (`cedula_p`),
  ADD KEY `cedula_o` (`cedula_o`),
  ADD KEY `id_consultorio` (`id_consultorio`);

--
-- Indices de la tabla `colsultorio`
--
ALTER TABLE `colsultorio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consultorio_auxialiar`
--
ALTER TABLE `consultorio_auxialiar`
  ADD PRIMARY KEY (`cedula_a`,`id_consultorio`),
  ADD KEY `id_consultorio` (`id_consultorio`);

--
-- Indices de la tabla `consultorio_persona`
--
ALTER TABLE `consultorio_persona`
  ADD KEY `id_consultorio` (`id_consultorio`),
  ADD KEY `cedula_p` (`cedula_p`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factura_paciente`
--
ALTER TABLE `factura_paciente`
  ADD PRIMARY KEY (`cedula_p`,`id_factura`),
  ADD KEY `cedula_p` (`cedula_p`),
  ADD KEY `id_factura` (`id_factura`);

--
-- Indices de la tabla `odontologo`
--
ALTER TABLE `odontologo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `odontologo_especialidad`
--
ALTER TABLE `odontologo_especialidad`
  ADD PRIMARY KEY (`id_especialidad`,`cedula_o`),
  ADD KEY `id_especialidad` (`id_especialidad`),
  ADD KEY `cedula_o` (`cedula_o`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `procedimiento`
--
ALTER TABLE `procedimiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `procedimiento_paciente`
--
ALTER TABLE `procedimiento_paciente`
  ADD PRIMARY KEY (`cedula_p`,`id_procedimiento`),
  ADD KEY `cedula_p` (`cedula_p`),
  ADD KEY `id_procedimiento` (`id_procedimiento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `auxiliar`
--
ALTER TABLE `auxiliar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `numero_cita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `colsultorio`
--
ALTER TABLE `colsultorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `consultorio_auxialiar`
--
ALTER TABLE `consultorio_auxialiar`
  MODIFY `cedula_a` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `odontologo`
--
ALTER TABLE `odontologo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `procedimiento`
--
ALTER TABLE `procedimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `persona` (`cedula`);

--
-- Filtros para la tabla `atencion_cita`
--
ALTER TABLE `atencion_cita`
  ADD CONSTRAINT `atencion_cita_ibfk_1` FOREIGN KEY (`numero_cita`) REFERENCES `cita` (`numero_cita`);

--
-- Filtros para la tabla `auxiliar`
--
ALTER TABLE `auxiliar`
  ADD CONSTRAINT `auxiliar_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `persona` (`cedula`);

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`

  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`cedula_p`) REFERENCES `paciente` (`id`);

--
-- Filtros para la tabla `consultorio_auxialiar`
--
ALTER TABLE `consultorio_auxialiar`
  ADD CONSTRAINT `consultorio_auxialiar_ibfk_1` FOREIGN KEY (`cedula_a`) REFERENCES `auxiliar` (`id`),
  ADD CONSTRAINT `consultorio_auxialiar_ibfk_2` FOREIGN KEY (`id_consultorio`) REFERENCES `colsultorio` (`id`);

--
-- Filtros para la tabla `consultorio_persona`
--
ALTER TABLE `consultorio_persona`
  ADD CONSTRAINT `consultorio_persona_ibfk_1` FOREIGN KEY (`cedula_p`) REFERENCES `persona` (`cedula`),
  ADD CONSTRAINT `consultorio_persona_ibfk_2` FOREIGN KEY (`id_consultorio`) REFERENCES `colsultorio` (`id`);

--
-- Filtros para la tabla `factura_paciente`
--
ALTER TABLE `factura_paciente`
  ADD CONSTRAINT `factura_paciente_ibfk_1` FOREIGN KEY (`cedula_p`) REFERENCES `paciente` (`id`),
  ADD CONSTRAINT `factura_paciente_ibfk_2` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id`);

--
-- Filtros para la tabla `odontologo`
--
ALTER TABLE `odontologo`
  ADD CONSTRAINT `odontologo_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `persona` (`cedula`);

--
-- Filtros para la tabla `odontologo_especialidad`
--
ALTER TABLE `odontologo_especialidad`
  ADD CONSTRAINT `odontologo_especialidad_ibfk_1` FOREIGN KEY (`cedula_o`) REFERENCES `odontologo` (`id`),
  ADD CONSTRAINT `odontologo_especialidad_ibfk_2` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidad` (`id`);

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `persona` (`cedula`);

--
-- Filtros para la tabla `procedimiento_paciente`
--
ALTER TABLE `procedimiento_paciente`
  ADD CONSTRAINT `procedimiento_paciente_ibfk_1` FOREIGN KEY (`cedula_p`) REFERENCES `paciente` (`id`),
  ADD CONSTRAINT `procedimiento_paciente_ibfk_2` FOREIGN KEY (`id_procedimiento`) REFERENCES `procedimiento` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
