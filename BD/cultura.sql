-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2019 a las 06:56:53
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cultura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `idcurso` int(11) NOT NULL,
  `nucleo` text NOT NULL,
  `expresion` text NOT NULL,
  `idsalon` int(11) NOT NULL,
  `idprofesor` int(11) NOT NULL,
  `estatus` varchar(10) NOT NULL,
  `nivel` varchar(2) NOT NULL,
  `turno` text NOT NULL,
  `dias` text NOT NULL,
  `hoentrada` varchar(10) NOT NULL,
  `hosalida` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idcurso`, `nucleo`, `expresion`, `idsalon`, `idprofesor`, `estatus`, `nivel`, `turno`, `dias`, `hoentrada`, `hosalida`) VALUES
(5, 'MUSICA', 'CUATRO', 15, 1, 'VACIO', 'I', 'MANANA', 'LUNES MARTES MIERCOLES  ', '11:00 AM  ', '12:00 PM  '),
(6, 'MUSICA', 'GUITARRA POPULAR VENEZOLA', 12, 3, 'VACIO', 'II', 'TARDE', 'LUNES MARTES MIERCOLES  ', '12:00 PM', '03:00 PM'),
(7, 'MUSICA', 'LUTHERIA', 15, 3, 'VACIO', 'II', 'TARDE', '   JUEVES ', '02:00 PM', '04:00 PM'),
(22, 'CINEMATOGRAFIA', 'DIRECCION', 12, 3, 'VACIO', 'II', 'TARDE', '  MIERCOLES  ', '03:00 PM', '05:00 PM'),
(23, 'ARTES ESCENICAS', 'TEATRO', 12, 3, 'VACIO', 'II', 'TARDE', '   JUEVES ', '04:00 PM', '06:00 PM'),
(24, 'PLASTICA', 'DIBUJO Y PINTURA', 12, 1, 'VACIO', 'I', 'TARDE', ' MARTES   ', '06:00 PM', '05:00 PM'),
(25, 'ARTESANIA', 'LUTHERIA', 11, 1, 'VACIO', 'II', 'TARDE', '  MIERCOLES  ', '06:33 AM', '08:00 AM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursofinal`
--

CREATE TABLE `cursofinal` (
  `idcursofinal` int(11) NOT NULL,
  `idestudiante` int(11) NOT NULL,
  `idprofesor` int(11) NOT NULL,
  `idcurso` int(11) NOT NULL,
  `idsalon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursofinal`
--

INSERT INTO `cursofinal` (`idcursofinal`, `idestudiante`, `idprofesor`, `idcurso`, `idsalon`) VALUES
(28, 10, 1, 5, 15),
(29, 14, 1, 5, 15),
(30, 9, 1, 5, 15),
(31, 10, 2, 6, 11),
(32, 10, 2, 6, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `idestudiante` int(11) NOT NULL,
  `participante` varchar(2) NOT NULL,
  `integrante` varchar(2) NOT NULL,
  `cedulapersona` int(11) NOT NULL,
  `pertenece` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`idestudiante`, `participante`, `integrante`, `cedulapersona`, `pertenece`) VALUES
(4, 'NO', 'NO', 27240568, 'UBEVISTA'),
(5, 'NO', 'NO', 27814068, 'UBEVISTA'),
(6, 'NO', 'NO', 26303334, 'UBEVISTA'),
(7, 'NO', 'NO', 26040800, 'UBEVISTA'),
(8, 'NO', 'NO', 26819742, 'UBEVISTA'),
(9, 'NO', 'NO', 2993708, 'UBEVISTA'),
(10, 'SI', 'NO', 8675170, 'UBEVISTA'),
(11, 'NO', 'NO', 6972254, 'UBEVISTA'),
(12, 'NO', 'NO', 3482603, 'UBEVISTA'),
(13, 'NO', 'SI', 372928, 'UBEVISTA'),
(14, 'SI', 'NO', 16148762, 'UBEVISTA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `idevento` int(11) NOT NULL,
  `nombre` varchar(55) NOT NULL,
  `estatus` varchar(55) NOT NULL,
  `fechainicio` date NOT NULL,
  `fechacierre` date NOT NULL,
  `hoinicio` varchar(10) NOT NULL,
  `hocierre` varchar(10) NOT NULL,
  `capacidad` int(2) NOT NULL,
  `tipoevento` varchar(10) NOT NULL,
  `cuporest` int(2) NOT NULL,
  `lugarevento` text NOT NULL,
  `responsableevento` text NOT NULL,
  `invitados` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`idevento`, `nombre`, `estatus`, `fechainicio`, `fechacierre`, `hoinicio`, `hocierre`, `capacidad`, `tipoevento`, `cuporest`, `lugarevento`, `responsableevento`, `invitados`) VALUES
(15, 'BIENVENIDA A LA NAVIDAD GAITEROS DE LA UBV', 'ACTIVO', '2019-09-28', '2019-09-28', '12:00 PM', '03:00 PM', 20, 'ESPECIAL', 1, 'CAFETIN', 'DANIEL', 'RAP UNEFA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `idgrupo` int(11) NOT NULL,
  `nucleo` text NOT NULL,
  `expresion` text NOT NULL,
  `estatus` varchar(25) NOT NULL,
  `capacidad` int(2) NOT NULL,
  `idprofesor` int(11) NOT NULL,
  `cuporest` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participanteevento`
--

CREATE TABLE `participanteevento` (
  `idparticipanteevento` int(11) NOT NULL,
  `idestudiante` int(11) NOT NULL,
  `idevento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `participanteevento`
--

INSERT INTO `participanteevento` (`idparticipanteevento`, `idestudiante`, `idevento`) VALUES
(1, 10, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantegrupo`
--

CREATE TABLE `participantegrupo` (
  `idparticipantegrupo` int(11) NOT NULL,
  `idestudiante` int(11) NOT NULL,
  `idgrupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `idprofesor` int(11) NOT NULL,
  `estudio` text NOT NULL,
  `especialidad` text NOT NULL,
  `curso` text NOT NULL,
  `cedulapersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`idprofesor`, `estudio`, `especialidad`, `curso`, `cedulapersona`) VALUES
(1, 'TSU', '', 'CUATRO', 14201380),
(2, 'LICENCIADO', 'CANTO', 'CANTO POPULAR Y CORAL', 5972867),
(3, 'LICENCIADO', 'TEATRO', 'TEATRO', 19508225);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE `salon` (
  `idsalon` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `estatus` text NOT NULL,
  `capacidad` int(11) NOT NULL,
  `cuporest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salon`
--

INSERT INTO `salon` (`idsalon`, `codigo`, `estatus`, `capacidad`, `cuporest`) VALUES
(11, 'SH5A', 'DISPONIBLE', 15, 0),
(12, 'SH5B', 'DISPONIBLE', 30, 0),
(13, 'SH5C', 'INDISPONIBLE', 20, 20),
(14, 'SH5E', 'DISPONIBLE', 15, 0),
(15, 'SH5X', 'DISPONIBLE', 15, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cedula` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `correo` text NOT NULL,
  `edad` int(11) NOT NULL,
  `tipo_usuario` varchar(200) NOT NULL,
  `tipo_persona` varchar(200) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `clave` text NOT NULL,
  `rutaimagen` text NOT NULL,
  `activo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cedula`, `nombre`, `apellido`, `correo`, `edad`, `tipo_usuario`, `tipo_persona`, `telefono`, `clave`, `rutaimagen`, `activo`) VALUES
(372928, 'OLGA ', 'GONZALEZ', 'cultura@gmail.com', 20, 'ESTUDIANTES', 'ESTUDIANTES', '04149022366', 'e6da8e51b4510f9c253957d20dfd3090', '', 1),
(2993708, 'MIGUEL ', 'GONZALEZ', 'miguelagoldhappi@gmail.com', 73, 'ESTUDIANTES', 'ESTUDIANTES', '04166343409', 'e6da8e51b4510f9c253957d20dfd3090', '', 1),
(3482603, 'DILIA ', 'ACEVEDO', 'diliadegonzalez@gmail.com', 25, 'ESTUDIANTES', 'ESTUDIANTES', '04120136565', 'e6da8e51b4510f9c253957d20dfd3090', '', 1),
(5972867, 'JESUS', 'PONCE', 'japonce2003@hotmail.com', 58, 'PROFESOR', 'PROFESOR', '04142882287', '41f6dce40d99c8e0466f0dc5b62ff568', '', 1),
(6972254, 'CARLOS', 'OLBES', 'cultura@gmail.com', 25, 'ESTUDIANTES', 'ESTUDIANTES', '04164118685', 'e6da8e51b4510f9c253957d20dfd3090', '', 1),
(8675170, 'FLORENCIO', 'ESPINOSA', 'cultura@gmail.com', 26, 'ESTUDIANTES', 'ESTUDIANTES', '04128097713', 'e6da8e51b4510f9c253957d20dfd3090', '', 1),
(11648884, 'JOLIVET', 'CAMPELO', 'jolivetcampelo@gmail.com', 45, 'ADMINISTRADOR', 'ADMINISTRADOR', '04143726047', '6c3b56d74a8f5d08cee7544a5fab698a', 'Los destroyers 20190303_135706.jpg', 1),
(12679868, 'MARVIS', 'VASQUEZ', 'marvisvas2014@gmail.com', 45, 'ASISTENTE', 'ASISTENTE', '04141181377', '7ff518c4873e038396e1d8699c12f3eb', 'IMG-20190823-WA0023.jpeg', 1),
(14201380, 'DANIEL ', 'HERNANDEZ', 'ramsessanta@gmail.com', 39, 'PROFESOR', 'PROFESOR', '04123731658', '8d345c98661d218445235029c91133ea', '', 1),
(16148762, 'PABLE', 'HERNANDEZ', 'pvha_88@hotmail.com', 36, 'ESTUDIANTES', 'ESTUDIANTES', '04242977041', 'e10adc3949ba59abbe56e057f20f883e', 'bases de dato.png', 1),
(19508225, 'LUIS ENRIQUE', 'ORTIZ SILVA', 'luisort.arte@gmail.com', 29, 'PROFESOR', 'PROFESOR', '04143784529', '196f1630a89c4791602747c3c851314e', '', 1),
(26040800, 'ANGELO', 'DUARTE', 'asomuduarte@gmail.com', 20, 'ESTUDIANTES', 'ESTUDIANTES', '04241233435', 'e6da8e51b4510f9c253957d20dfd3090', '', 1),
(26303334, 'MARCO ', 'RODRIGUEZ', 'marco.r.2497@gmail.com', 25, 'ESTUDIANTES', 'ESTUDIANTES', '042420666240', 'e6da8e51b4510f9c253957d20dfd3090', '', 1),
(26819742, 'DHARLYN', 'URBINA', 'dhanlin.urbina@gmail.com', 29, 'ESTUDIANTES', 'ESTUDIANTES', '04241233435', 'e6da8e51b4510f9c253957d20dfd3090', '', 1),
(27240568, 'MIRIAN', 'VELAZCO', 'mirianveaz50@gmail.com', 20, 'ESTUDIANTES', 'ESTUDIANTES', '04241746674', 'e6da8e51b4510f9c253957d20dfd3090', '', 1),
(27814068, 'STEVEN', 'RUEDA', 'severus842009@gmail.com', 18, 'ESTUDIANTES', 'ESTUDIANTES', '04269038017', 'e6da8e51b4510f9c253957d20dfd3090', '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idcurso`),
  ADD KEY `idprofesor` (`idprofesor`),
  ADD KEY `idsalon` (`idsalon`);

--
-- Indices de la tabla `cursofinal`
--
ALTER TABLE `cursofinal`
  ADD PRIMARY KEY (`idcursofinal`),
  ADD KEY `idestudiante` (`idestudiante`),
  ADD KEY `idprofesor` (`idprofesor`),
  ADD KEY `idcurso` (`idcurso`),
  ADD KEY `idsalon` (`idsalon`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`idestudiante`),
  ADD KEY `cedulapersona` (`cedulapersona`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`idevento`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`idgrupo`),
  ADD KEY `idprofesor` (`idprofesor`);

--
-- Indices de la tabla `participanteevento`
--
ALTER TABLE `participanteevento`
  ADD PRIMARY KEY (`idparticipanteevento`),
  ADD KEY `idestudiante` (`idestudiante`),
  ADD KEY `idevento` (`idevento`);

--
-- Indices de la tabla `participantegrupo`
--
ALTER TABLE `participantegrupo`
  ADD PRIMARY KEY (`idparticipantegrupo`),
  ADD KEY `idestudiante` (`idestudiante`),
  ADD KEY `idgrupo` (`idgrupo`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`idprofesor`),
  ADD KEY `cedulapersona` (`cedulapersona`);

--
-- Indices de la tabla `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`idsalon`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `cursofinal`
--
ALTER TABLE `cursofinal`
  MODIFY `idcursofinal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `idestudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `idevento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `participanteevento`
--
ALTER TABLE `participanteevento`
  MODIFY `idparticipanteevento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `participantegrupo`
--
ALTER TABLE `participantegrupo`
  MODIFY `idparticipantegrupo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `idprofesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `salon`
--
ALTER TABLE `salon`
  MODIFY `idsalon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`),
  ADD CONSTRAINT `curso_ibfk_2` FOREIGN KEY (`idsalon`) REFERENCES `salon` (`idsalon`);

--
-- Filtros para la tabla `cursofinal`
--
ALTER TABLE `cursofinal`
  ADD CONSTRAINT `cursofinal_ibfk_1` FOREIGN KEY (`idsalon`) REFERENCES `salon` (`idsalon`),
  ADD CONSTRAINT `cursofinal_ibfk_2` FOREIGN KEY (`idestudiante`) REFERENCES `estudiante` (`idestudiante`),
  ADD CONSTRAINT `cursofinal_ibfk_3` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`),
  ADD CONSTRAINT `cursofinal_ibfk_4` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`cedulapersona`) REFERENCES `usuario` (`cedula`);

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`);

--
-- Filtros para la tabla `participanteevento`
--
ALTER TABLE `participanteevento`
  ADD CONSTRAINT `participanteevento_ibfk_1` FOREIGN KEY (`idestudiante`) REFERENCES `estudiante` (`idestudiante`),
  ADD CONSTRAINT `participanteevento_ibfk_2` FOREIGN KEY (`idevento`) REFERENCES `evento` (`idevento`);

--
-- Filtros para la tabla `participantegrupo`
--
ALTER TABLE `participantegrupo`
  ADD CONSTRAINT `participantegrupo_ibfk_1` FOREIGN KEY (`idestudiante`) REFERENCES `estudiante` (`idestudiante`),
  ADD CONSTRAINT `participantegrupo_ibfk_2` FOREIGN KEY (`idgrupo`) REFERENCES `grupo` (`idgrupo`);

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`cedulapersona`) REFERENCES `usuario` (`cedula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
