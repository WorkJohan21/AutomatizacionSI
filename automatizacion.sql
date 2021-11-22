-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 04:17 PM
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

--
-- Dumping data for table `celular`
--

INSERT INTO `celular` (`idCelular`, `celular`, `idUsuario`) VALUES
(2, '6214-7545', 3),
(3, '6524-4485', 1);

-- --------------------------------------------------------

--
-- Table structure for table `departamento`
--

CREATE TABLE `departamento` (
  `idDepa` int(11) NOT NULL,
  `nombreDepa` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idFacultad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `departamento`
--

INSERT INTO `departamento` (`idDepa`, `nombreDepa`, `idFacultad`) VALUES
(1, 'Departamento de Ciencias Exactas', 1),
(2, 'Departamento de Ciencias Naturales', 1),
(3, 'Departamento de Ciencias Sociales y Humanísticas', 1),
(4, 'Departamento de Geociencias Aplicadas y Transporte', 2),
(5, 'Departamento de Representaciones Gráficas', 2),
(6, 'Departamento de Ciencias Marítimas y Portuarias', 2),
(7, 'Departamento de Mecánica Estructural', 2),
(8, 'Departamento de Gestión de la Construcción', 2),
(9, 'Departamento de Hidráulica, Sanitaria y Ciencias Ambientales', 2),
(10, 'Departamento Académico de Estadística y Economía', 5),
(11, 'Departamento Académico de Contabilidad y Finanzas', 5),
(12, 'Departamento de Logística', 5),
(13, 'Departamento Académico de Mercadeo', 5),
(14, 'Departamento Académico de Producción', 5),
(15, 'Departamento Académico de Recursos Humanos', 5),
(16, 'Departamento de Ingeniería Aeronáutica y Aviación', 5),
(17, 'Departamento de Ingeniería Naval', 5),
(18, 'Departamento de Metal Mecánica', 5),
(19, 'Departamento de Energía y Ambiente', 5),
(20, 'Departamento de Ciencias e Ingeniería de Materiales', 5),
(21, 'Departamento de Diseño de Sistemas y Componentes Mecánicos', 5),
(22, 'Departamento de Arquitectura y Redes de Computadoras', 6),
(23, 'Departamento de Computación y Simulación de Sistemas', 6),
(24, 'Departamento de Ingeniería de Software', 6),
(25, 'Departamento de Programación de Computadoras', 6),
(26, 'Departamento de Sistemas de Información, Control y Evaluación de Recursos Informáticos', 6);

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

--
-- Dumping data for table `equipo`
--

INSERT INTO `equipo` (`idEquipo`, `nombreEquipo`, `cantDispo`, `cantTotal`) VALUES
(1, 'Pantalla de 86 Pulgadas', 10, 10),
(2, 'Banderas de Diversos Países', 10, 10),
(3, 'Estandarte UTP', 20, 20),
(4, 'Astas y Bases', 30, 30),
(5, 'Soporte para Banner (Arana)', 30, 30),
(6, 'Flores Artificiales', 30, 30),
(7, 'Habladores', 5, 5),
(8, 'Bombas manuales para inflar globos', 4, 4),
(9, 'Rotafolio con Tablero Blanco', 6, 6),
(10, 'Karaoke', 2, 2),
(11, 'Radiograbadora con lector de CD y USB', 1, 1),
(12, 'Engrapadoras Semindustrial e Industrial', 15, 15);

-- --------------------------------------------------------

--
-- Table structure for table `facultad`
--

CREATE TABLE `facultad` (
  `idFacultad` int(11) NOT NULL,
  `nombreFacultad` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `facultad`
--

INSERT INTO `facultad` (`idFacultad`, `nombreFacultad`) VALUES
(1, 'Facultad de Ciencias y Tecnología (FCT)'),
(2, 'Facultad de Ingeniería Civíl (FIC)'),
(3, 'Facultad de Ingeniería Eléctrica (FIE)'),
(4, 'Facultad de Ingeniería Industrial (FII)'),
(5, 'Facultad de Ingeniería  Mecánica (FIM)'),
(6, 'Facultad de Ingeniería Sistemas Computacionales (FISC)');

-- --------------------------------------------------------

--
-- Table structure for table `lugar`
--

CREATE TABLE `lugar` (
  `idLugar` int(11) NOT NULL,
  `nombreLugar` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `lugar`
--

INSERT INTO `lugar` (`idLugar`, `nombreLugar`) VALUES
(1, 'Auditorio'),
(2, 'Lobby Edificio 3'),
(3, 'Lobby Edificio 1'),
(4, 'Piso FCT'),
(5, 'Piso FIC'),
(6, 'Piso FIE'),
(7, 'Piso FII'),
(8, 'Piso FIM'),
(9, 'Piso FISC');

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
  `idFacultad` int(11) NOT NULL,
  `nomActividad2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
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

--
-- Dumping data for table `s_prensa`
--

INSERT INTO `s_prensa` (`idPrensa`, `nombrePrensa`) VALUES
(1, 'Cobertura Periodistica'),
(2, 'Fotografia'),
(3, 'Filmacion'),
(4, 'Divulgacion en la Web de la UTP'),
(5, 'Equipo de Sonido'),
(6, 'Entrevista en los medios de comunicacion'),
(7, 'Publicar en las redes sociales'),
(8, 'Apoyo en Videoconferencias'),
(9, 'Transmision por Streaming');

-- --------------------------------------------------------

--
-- Table structure for table `s_protocolo`
--

CREATE TABLE `s_protocolo` (
  `idProtocolo` int(11) NOT NULL,
  `nombreProtocolo` varchar(350) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `s_protocolo`
--

INSERT INTO `s_protocolo` (`idProtocolo`, `nombreProtocolo`) VALUES
(1, 'Atencion Protocolar - Mesa Principal'),
(2, 'Atencion Protocolar - Estandartes'),
(3, 'Atencion Protocolar - Atencion de Invitados Especiales'),
(4, 'Atencion Protocolar - Logos'),
(5, 'Atencion Protocolar - Invitados'),
(6, 'Atencion Protocolar - Lista de Invitados internos y externos'),
(7, 'Atencion Protocolar - Banderas'),
(8, 'Atencion Protocolar - Maestro de Ceremonia'),
(9, 'Atencion Protocolar - Seminario de Protocolo y Etiqueta'),
(10, 'Asesorias en - Logistica General'),
(11, 'Asesorias en - Catering'),
(12, 'Asesorias en - Escenografia'),
(13, 'pPrecedencia - Mesa Principal'),
(14, 'pPrecedencia - Logos'),
(15, 'pPrecedencia - Banderas'),
(16, 'pPrecedencia - Etiqueta'),
(17, 'pPrecedencia - Estandartes'),
(18, 'pPrecedencia - Banners'),
(19, 'pPrecedencia - Invitados'),
(20, 'pContenido - Tarjetas'),
(21, 'pContenido - Certificados'),
(22, 'pContenido - Programas'),
(23, 'pContenido - Atencion de Invitados Especiales');

-- --------------------------------------------------------

--
-- Table structure for table `telefono`
--

CREATE TABLE `telefono` (
  `idTelefono` int(11) NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `telefono`
--

INSERT INTO `telefono` (`idTelefono`, `telefono`, `idUsuario`) VALUES
(1, '269-1384', 3),
(2, '255-8899', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `tipoUsuario` int(2) NOT NULL,
  `hash` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `email`, `password`, `tipoUsuario`) VALUES
(1, 'Samantha', 'Miranda', 'mirandasamy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(3, 'Edwin', 'Diaz', 'edwin.diaz5@utp.ac.pa', 'fcea920f7412b5da7be0cf42b8c93759', 2);

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
-- Indexes for table `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`idDepa`),
  ADD KEY `idFacultad` (`idFacultad`);

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
  MODIFY `idCelular` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departamento`
--
ALTER TABLE `departamento`
  MODIFY `idDepa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `equipo`
--
ALTER TABLE `equipo`
  MODIFY `idEquipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `facultad`
--
ALTER TABLE `facultad`
  MODIFY `idFacultad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lugar`
--
ALTER TABLE `lugar`
  MODIFY `idLugar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `idPrensa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `s_protocolo`
--
ALTER TABLE `s_protocolo`
  MODIFY `idProtocolo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `telefono`
--
ALTER TABLE `telefono`
  MODIFY `idTelefono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `celular`
--
ALTER TABLE `celular`
  ADD CONSTRAINT `celular_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);

--
-- Constraints for table `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `departamento_ibfk_1` FOREIGN KEY (`idFacultad`) REFERENCES `facultad` (`idFacultad`);

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
