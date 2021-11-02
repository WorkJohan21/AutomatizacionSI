-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 06:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `automatizacion`
--

-- --------------------------------------------------------

--
-- Table structure for table `actividad`
--

CREATE TABLE `actividad` (
  `idActividad` int(11) NOT NULL,
  `nombreActividad` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `celular`
--

CREATE TABLE `celular` (
  `idCelular` int(11) NOT NULL,
  `celular` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipo`
--

CREATE TABLE `equipo` (
  `idEquipo` int(11) NOT NULL,
  `nombreEquipo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cantDispo` int(10) NOT NULL,
  `cantTotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facultad`
--

CREATE TABLE `facultad` (
  `idFacultad` int(11) NOT NULL,
  `nombreFacultad` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lugar`
--

CREATE TABLE `lugar` (
  `idLugar` int(11) NOT NULL,
  `nombreLugar` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orden`
--

CREATE TABLE `orden` (
  `idOrden` int(11) NOT NULL,
  `fechaActividad` date NOT NULL,
  `horaActividad` time NOT NULL,
  `fechaRetiro` date NOT NULL,
  `fechaDevolucion` date NOT NULL,
  `observacion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `idLugar` int(11) NOT NULL,
  `idFacultad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orden_equipo`
--

CREATE TABLE `orden_equipo` (
  `idOrdenEquipo` int(11) NOT NULL,
  `idOrden` int(11) NOT NULL,
  `idEquipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orden_usuario`
--

CREATE TABLE `orden_usuario` (
  `idOrdenUsuario` int(11) NOT NULL,
  `idOrden` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `tipoUsuario` varchar(2) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solicitud`
--

CREATE TABLE `solicitud` (
  `idSolicitud` int(11) NOT NULL,
  `nombreEvento` varchar(350) COLLATE utf8_spanish_ci NOT NULL,
  `fechaEvento` date NOT NULL,
  `horaInicio` time NOT NULL,
  `horaFinal` time NOT NULL,
  `observacion` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `idLugar` int(11) NOT NULL,
  `idFacultad` int(11) NOT NULL,
  `idActividad` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solicitud_diseno`
--

CREATE TABLE `solicitud_diseno` (
  `idSolicitudDiseno` int(11) NOT NULL,
  `idSolicitud` int(11) NOT NULL,
  `idDiseno` int(11) NOT NULL,
  `tamano` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solicitud_imprenta`
--

CREATE TABLE `solicitud_imprenta` (
  `idSolicitudImprenta` int(11) NOT NULL,
  `idSolicitud` int(11) NOT NULL,
  `idImprenta` int(11) NOT NULL,
  `nCopias` int(4) NOT NULL,
  `nOriginales` int(4) NOT NULL,
  `tipoMaterial` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tamanoMaterial` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `colo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solicitud_prensa`
--

CREATE TABLE `solicitud_prensa` (
  `idSolicitudPrensa` int(11) NOT NULL,
  `idSolicitud` int(11) NOT NULL,
  `idPrensa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solicitud_protocolo`
--

CREATE TABLE `solicitud_protocolo` (
  `idSolicitudProtocolo` int(11) NOT NULL,
  `idSolicitud` int(11) NOT NULL,
  `idProtocolo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_diseno`
--

CREATE TABLE `s_diseno` (
  `idDiseno` int(11) NOT NULL,
  `nombreDiseno` varchar(350) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_imprenta`
--

CREATE TABLE `s_imprenta` (
  `idImprenta` int(11) NOT NULL,
  `nombreImprenta` varchar(350) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_prensa`
--

CREATE TABLE `s_prensa` (
  `idPrensa` int(11) NOT NULL,
  `nombrePrensa` varchar(350) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_protocolo`
--

CREATE TABLE `s_protocolo` (
  `idProtocolo` int(11) NOT NULL,
  `nombreProtocolo` varchar(350) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telefono`
--

CREATE TABLE `telefono` (
  `idTelefono` int(11) NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(4) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `tipoUsuario` varchar(2) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`idActividad`);

--
-- Indexes for table `celular`
--
ALTER TABLE `celular`
  ADD PRIMARY KEY (`idCelular`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`idEquipo`);

--
-- Indexes for table `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`idFacultad`);

--
-- Indexes for table `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`idLugar`);

--
-- Indexes for table `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`idOrden`),
  ADD KEY `idLugar` (`idLugar`),
  ADD KEY `idFacultad` (`idFacultad`);

--
-- Indexes for table `orden_equipo`
--
ALTER TABLE `orden_equipo`
  ADD PRIMARY KEY (`idOrdenEquipo`),
  ADD KEY `idOrden` (`idOrden`),
  ADD KEY `idEquipo` (`idEquipo`);

--
-- Indexes for table `orden_usuario`
--
ALTER TABLE `orden_usuario`
  ADD PRIMARY KEY (`idOrdenUsuario`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idOrden` (`idOrden`);

--
-- Indexes for table `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`idSolicitud`),
  ADD KEY `idLugar` (`idLugar`),
  ADD KEY `idFacultad` (`idFacultad`),
  ADD KEY `idActividad` (`idActividad`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `solicitud_diseno`
--
ALTER TABLE `solicitud_diseno`
  ADD PRIMARY KEY (`idSolicitudDiseno`),
  ADD KEY `idSolicitud` (`idSolicitud`),
  ADD KEY `idDiseno` (`idDiseno`);

--
-- Indexes for table `solicitud_imprenta`
--
ALTER TABLE `solicitud_imprenta`
  ADD PRIMARY KEY (`idSolicitudImprenta`),
  ADD KEY `idSolicitud` (`idSolicitud`),
  ADD KEY `idImprenta` (`idImprenta`);

--
-- Indexes for table `solicitud_prensa`
--
ALTER TABLE `solicitud_prensa`
  ADD PRIMARY KEY (`idSolicitudPrensa`),
  ADD KEY `idSolicitud` (`idSolicitud`),
  ADD KEY `idPrensa` (`idPrensa`);

--
-- Indexes for table `solicitud_protocolo`
--
ALTER TABLE `solicitud_protocolo`
  ADD PRIMARY KEY (`idSolicitudProtocolo`),
  ADD KEY `idSolicitud` (`idSolicitud`),
  ADD KEY `idProtocolo` (`idProtocolo`);

--
-- Indexes for table `s_diseno`
--
ALTER TABLE `s_diseno`
  ADD PRIMARY KEY (`idDiseno`);

--
-- Indexes for table `s_imprenta`
--
ALTER TABLE `s_imprenta`
  ADD PRIMARY KEY (`idImprenta`);

--
-- Indexes for table `s_prensa`
--
ALTER TABLE `s_prensa`
  ADD PRIMARY KEY (`idPrensa`);

--
-- Indexes for table `s_protocolo`
--
ALTER TABLE `s_protocolo`
  ADD PRIMARY KEY (`idProtocolo`);

--
-- Indexes for table `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`idTelefono`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actividad`
--
ALTER TABLE `actividad`
  MODIFY `idActividad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `celular`
--
ALTER TABLE `celular`
  MODIFY `idCelular` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `equipo`
--
ALTER TABLE `equipo`
  MODIFY `idEquipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facultad`
--
ALTER TABLE `facultad`
  MODIFY `idFacultad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lugar`
--
ALTER TABLE `lugar`
  MODIFY `idLugar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orden`
--
ALTER TABLE `orden`
  MODIFY `idOrden` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orden_equipo`
--
ALTER TABLE `orden_equipo`
  MODIFY `idOrdenEquipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orden_usuario`
--
ALTER TABLE `orden_usuario`
  MODIFY `idOrdenUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `idSolicitud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `solicitud_diseno`
--
ALTER TABLE `solicitud_diseno`
  MODIFY `idSolicitudDiseno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `solicitud_imprenta`
--
ALTER TABLE `solicitud_imprenta`
  MODIFY `idSolicitudImprenta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `solicitud_prensa`
--
ALTER TABLE `solicitud_prensa`
  MODIFY `idSolicitudPrensa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `solicitud_protocolo`
--
ALTER TABLE `solicitud_protocolo`
  MODIFY `idSolicitudProtocolo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s_diseno`
--
ALTER TABLE `s_diseno`
  MODIFY `idDiseno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s_imprenta`
--
ALTER TABLE `s_imprenta`
  MODIFY `idImprenta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s_prensa`
--
ALTER TABLE `s_prensa`
  MODIFY `idPrensa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s_protocolo`
--
ALTER TABLE `s_protocolo`
  MODIFY `idProtocolo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `telefono`
--
ALTER TABLE `telefono`
  MODIFY `idTelefono` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `celular`
--
ALTER TABLE `celular`
  ADD CONSTRAINT `celular_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);

--
-- Constraints for table `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`idLugar`) REFERENCES `lugar` (`idLugar`),
  ADD CONSTRAINT `orden_ibfk_2` FOREIGN KEY (`idFacultad`) REFERENCES `facultad` (`idFacultad`);

--
-- Constraints for table `orden_equipo`
--
ALTER TABLE `orden_equipo`
  ADD CONSTRAINT `orden_equipo_ibfk_1` FOREIGN KEY (`idOrden`) REFERENCES `orden` (`idOrden`),
  ADD CONSTRAINT `orden_equipo_ibfk_2` FOREIGN KEY (`idEquipo`) REFERENCES `equipo` (`idEquipo`);

--
-- Constraints for table `orden_usuario`
--
ALTER TABLE `orden_usuario`
  ADD CONSTRAINT `orden_usuario_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `orden_usuario_ibfk_2` FOREIGN KEY (`idOrden`) REFERENCES `orden` (`idOrden`);

--
-- Constraints for table `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`idLugar`) REFERENCES `lugar` (`idLugar`),
  ADD CONSTRAINT `solicitud_ibfk_2` FOREIGN KEY (`idFacultad`) REFERENCES `facultad` (`idFacultad`),
  ADD CONSTRAINT `solicitud_ibfk_3` FOREIGN KEY (`idActividad`) REFERENCES `actividad` (`idActividad`),
  ADD CONSTRAINT `solicitud_ibfk_4` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);

--
-- Constraints for table `solicitud_diseno`
--
ALTER TABLE `solicitud_diseno`
  ADD CONSTRAINT `solicitud_diseno_ibfk_1` FOREIGN KEY (`idSolicitud`) REFERENCES `solicitud` (`idSolicitud`),
  ADD CONSTRAINT `solicitud_diseno_ibfk_2` FOREIGN KEY (`idDiseno`) REFERENCES `s_diseno` (`idDiseno`);

--
-- Constraints for table `solicitud_imprenta`
--
ALTER TABLE `solicitud_imprenta`
  ADD CONSTRAINT `solicitud_imprenta_ibfk_1` FOREIGN KEY (`idSolicitud`) REFERENCES `solicitud` (`idSolicitud`),
  ADD CONSTRAINT `solicitud_imprenta_ibfk_2` FOREIGN KEY (`idImprenta`) REFERENCES `s_imprenta` (`idImprenta`);

--
-- Constraints for table `solicitud_prensa`
--
ALTER TABLE `solicitud_prensa`
  ADD CONSTRAINT `solicitud_prensa_ibfk_1` FOREIGN KEY (`idSolicitud`) REFERENCES `solicitud` (`idSolicitud`),
  ADD CONSTRAINT `solicitud_prensa_ibfk_2` FOREIGN KEY (`idPrensa`) REFERENCES `s_prensa` (`idPrensa`);

--
-- Constraints for table `solicitud_protocolo`
--
ALTER TABLE `solicitud_protocolo`
  ADD CONSTRAINT `solicitud_protocolo_ibfk_1` FOREIGN KEY (`idSolicitud`) REFERENCES `solicitud` (`idSolicitud`),
  ADD CONSTRAINT `solicitud_protocolo_ibfk_2` FOREIGN KEY (`idProtocolo`) REFERENCES `s_protocolo` (`idProtocolo`);

--
-- Constraints for table `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `telefono_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
