-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-01-2017 a las 22:59:10
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laboratorio`
--
CREATE DATABASE IF NOT EXISTS `laboratorio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `laboratorio`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis`
--

CREATE TABLE `analisis` (
  `idanalisis` int(11) NOT NULL,
  `tipomuestra` varchar(45) NOT NULL,
  `ensayo` varchar(45) NOT NULL,
  `resultado` varchar(45) NOT NULL,
  `observ` tinytext NOT NULL,
  `protocolo` varchar(45) NOT NULL,
  `folio` varchar(45) NOT NULL,
  `fechaP` datetime NOT NULL,
  `quimico_idquimico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `analisis`
--

INSERT INTO `analisis` (`idanalisis`, `tipomuestra`, `ensayo`, `resultado`, `observ`, `protocolo`, `folio`, `fechaP`, `quimico_idquimico`) VALUES
(1, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 5),
(2, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 6),
(3, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 7),
(4, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 8),
(5, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 9),
(6, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 10),
(7, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 11),
(8, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 12),
(9, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 13),
(10, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 14),
(11, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 15),
(12, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 16),
(13, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 17),
(14, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 18),
(15, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 19),
(16, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 20),
(17, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 21),
(18, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 22),
(19, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 23),
(20, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 24),
(21, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 25),
(22, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 26),
(23, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 27),
(24, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 28),
(25, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 29),
(26, 'SANGRE', 'ADN', 'CLONACIÓN', '<p>Guerras Clonicas</p>', '201745', '2017001245', '0000-00-00 00:00:00', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `idarchivos` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descripcion` longtext NOT NULL,
  `binario_archivo` longblob NOT NULL,
  `binario_nombre` varchar(255) NOT NULL,
  `binario_peso` varchar(15) NOT NULL,
  `binario_tipo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo`
--

CREATE TABLE `codigo` (
  `idcodigo` int(11) NOT NULL,
  `UltimoNum` decimal(30,0)  zerofill  NOT NULL,
  `Responsable_idResponsable` int(11) NOT NULL,
  `muestra_idmuestra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hclinica`
--

CREATE TABLE `hclinica` (
  `idHclinica` int(11) NOT NULL,
  `medico_idmedico` int(11) NOT NULL,
  `paciente_idpaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `idmedico` int(11) NOT NULL,
  `nombreMD` varchar(45) NOT NULL,
  `appaternoMD` varchar(45) NOT NULL,
  `apmaternoMD` varchar(45) NOT NULL,
  `matricula` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muestra`
--

CREATE TABLE `muestra` (
  `idmuestra` int(11) NOT NULL,
  `muestra` varchar(45) NOT NULL,
  `contenedor` varchar(45) NOT NULL,
  `umedida` float NOT NULL,
  `sufijo` varchar(10) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `fechaR` time NOT NULL,
  `observ` tinytext NOT NULL,
  `resguardo` varchar(45) NOT NULL,
  `protocolo` varchar(45) NOT NULL,
  `almacen` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `idpaciente` int(11) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `appaterno` varchar(45) NOT NULL,
  `apmaterno` varchar(45) NOT NULL,
  `nacimiento` datetime NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `Tiempo_idTiempo` int(11) NOT NULL,
  `archivos_idarchivos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quimico`
--

CREATE TABLE `quimico` (
  `idquimico` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `appaterno` varchar(45) NOT NULL,
  `apmaterno` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `quimico`
--

INSERT INTO `quimico` (`idquimico`, `nombre`, `appaterno`, `apmaterno`) VALUES
(1, 'JOSE', 'REYES', 'TORRES'),
(2, 'JOSE', 'REYES', 'TORRES'),
(3, 'JOSE', 'REYES', 'TORRES'),
(4, 'JOSE', 'REYES', 'TORRES'),
(5, 'JOSE', 'REYES', 'TORRES'),
(6, 'JOSE', 'REYES', 'TORRES'),
(7, 'JOSE', 'REYES', 'TORRES'),
(8, 'JOSE', 'REYES', 'TORRES'),
(9, 'JOSE', 'REYES', 'TORRES'),
(10, 'JOSE', 'REYES', 'TORRES'),
(11, 'JOSE', 'REYES', 'TORRES'),
(12, 'JOSE', 'REYES', 'TORRES'),
(13, 'JOSE', 'REYES', 'TORRES'),
(14, 'JOSE', 'REYES', 'TORRES'),
(15, 'JOSE', 'REYES', 'TORRES'),
(16, 'JOSE', 'REYES', 'TORRES'),
(17, 'JOSE', 'REYES', 'TORRES'),
(18, 'JOSE', 'REYES', 'TORRES'),
(19, 'JOSE', 'REYES', 'TORRES'),
(20, 'JOSE', 'REYES', 'TORRES'),
(21, 'JOSE', 'REYES', 'TORRES'),
(22, 'JOSE', 'REYES', 'TORRES'),
(23, 'JOSE', 'REYES', 'TORRES'),
(24, 'JOSE', 'REYES', 'TORRES'),
(25, 'JOSE', 'REYES', 'TORRES'),
(30, 'JOSE', 'REYES', 'TORRES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable`
--

CREATE TABLE `responsable` (
  `idResponsable` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `appaterno` varchar(45) NOT NULL,
  `apmaterno` varchar(45) NOT NULL,
  `fecha` time NOT NULL,
  `hora` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rusuario`
--

CREATE TABLE `rusuario` (
  `id_rusuario` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `rpass` varchar(45) NOT NULL,
  `alta` datetime NOT NULL,
  `correo` varchar(45) NOT NULL,
  `tel` decimal(15,0) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempo`
--

CREATE TABLE `tiempo` (
  `idTiempo` int(11) NOT NULL,
  `edad` varchar(45) NOT NULL,
  `tiempoV` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apaterno` varchar(45) NOT NULL,
  `apmaterno` varchar(45) NOT NULL,
  `matricula` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`idanalisis`),
  ADD KEY `fk_analisis_quimico1_idx` (`quimico_idquimico`);

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`idarchivos`);

--
-- Indices de la tabla `codigo`
--
ALTER TABLE `codigo`
  ADD PRIMARY KEY (`idcodigo`),
  ADD KEY `fk_codigo_Responsable1_idx` (`Responsable_idResponsable`),
  ADD KEY `fk_codigo_muestra1_idx` (`muestra_idmuestra`);

--
-- Indices de la tabla `hclinica`
--
ALTER TABLE `hclinica`
  ADD PRIMARY KEY (`idHclinica`),
  ADD KEY `fk_Hclinica_medico1_idx` (`medico_idmedico`),
  ADD KEY `fk_Hclinica_paciente1_idx` (`paciente_idpaciente`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`idmedico`);

--
-- Indices de la tabla `muestra`
--
ALTER TABLE `muestra`
  ADD PRIMARY KEY (`idmuestra`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idpaciente`),
  ADD KEY `fk_paciente_Tiempo1_idx` (`Tiempo_idTiempo`),
  ADD KEY `fk_paciente_archivos1_idx` (`archivos_idarchivos`);

--
-- Indices de la tabla `quimico`
--
ALTER TABLE `quimico`
  ADD PRIMARY KEY (`idquimico`);

--
-- Indices de la tabla `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`idResponsable`);

--
-- Indices de la tabla `rusuario`
--
ALTER TABLE `rusuario`
  ADD PRIMARY KEY (`id_rusuario`),
  ADD KEY `fk_rusuario_usuario_idx` (`usuario_idusuario`);

--
-- Indices de la tabla `tiempo`
--
ALTER TABLE `tiempo`
  ADD PRIMARY KEY (`idTiempo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `analisis`
--
ALTER TABLE `analisis`
  MODIFY `idanalisis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `idarchivos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `codigo`
--
ALTER TABLE `codigo`
  MODIFY `idcodigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `hclinica`
--
ALTER TABLE `hclinica`
  MODIFY `idHclinica` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `idmedico` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `muestra`
--
ALTER TABLE `muestra`
  MODIFY `idmuestra` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idpaciente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `quimico`
--
ALTER TABLE `quimico`
  MODIFY `idquimico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `responsable`
--
ALTER TABLE `responsable`
  MODIFY `idResponsable` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rusuario`
--
ALTER TABLE `rusuario`
  MODIFY `id_rusuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tiempo`
--
ALTER TABLE `tiempo`
  MODIFY `idTiempo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
