-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2019 a las 23:08:18
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
-- Base de datos: `reporte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carea`
--
CREATE DATABASE reporte;

USE reporte;

CREATE TABLE `carea` (
  `id_carea` int(11) NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `carea`
--

INSERT INTO `carea` (`id_carea`, `area`, `status`) VALUES
(1, 'Sistemas', 1),
(2, 'Verificación de Distintivo H', 1),
(3, 'Verificación de Información Comercial', 1),
(4, 'Control Sanitario', 1),
(5, 'Verificación de Información Comercial', 1),
(6, 'Producto Eléctrico-Electrónico', 1),
(7, 'Turismo', 1),
(8, 'Verificacion de Distintivo H', 1),
(9, 'Certificación de Sistemas', 1),
(10, 'Dirección', 1),
(11, 'Administración', 1),
(12, 'Contabilidad', 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `coun`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `coun` (
`reporte` varchar(255)
,`id_reporte` int(11)
,`descripcion` text
,`fecha_hora` datetime
,`nombre` varchar(255)
,`status` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cpuesto`
--

CREATE TABLE `cpuesto` (
  `id_cpuesto` int(11) NOT NULL,
  `puesto` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cpuesto`
--

INSERT INTO `cpuesto` (`id_cpuesto`, `puesto`, `status`) VALUES
(1, 'Ingeniero en Sistemas', 1),
(2, 'Verificador de Distintivo H', 1),
(3, 'Correspondencia', 1),
(4, 'Verificador de Control Sanitario', 1),
(5, 'Verificador de Información Comercial', 1),
(6, 'Asistente de Certificación de Producto', 1),
(7, 'Representante Comercial', 1),
(8, 'Jefe de Verificacion Distintivo H', 1),
(9, 'Verificadora de Distintivo H', 1),
(10, 'Auditora', 1),
(11, 'Director de Administración y Finanzas', 1),
(12, 'Representante Comercial', 1),
(13, 'Verificadora de Control Sanitario', 1),
(14, 'Auditora', 1),
(15, 'Gerente de Certificación', 1),
(16, 'Director General', 1),
(17, 'Coordinadora de Producto', 1),
(18, 'Verificadora de Control Sanitario', 1),
(19, 'Auditor de Producto', 1),
(20, 'Asistente de Certificación de Producto', 1),
(21, 'Coordinasor de Sistemas', 1),
(22, 'Dictaminadora en Entrenamiento', 1),
(23, 'Coordinadora de Operaciones de Información Comercial', 1),
(24, 'Auxiliar Administrativa', 1),
(25, 'Auxiliar de Certificación', 1),
(26, 'Gerente de Verificación de Información Comercial', 1),
(27, 'Gerente de Certificacion de Producto', 1),
(28, 'Contadora', 1),
(29, 'Verificador de Turismo', 1),
(30, 'Auditor de Producto en Entrenamiento', 1),
(31, 'Supervisor de Turismo', 1),
(32, 'Auditor de Producto Eléctrico-Electrónicos', 1),
(33, 'Asistente de Direccion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creportes`
--

CREATE TABLE `creportes` (
  `idcreporte` int(11) NOT NULL,
  `reporte` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `creportes`
--

INSERT INTO `creportes` (`idcreporte`, `reporte`, `status`) VALUES
(1, 'Red', 1),
(2, 'Otro', 1),
(3, 'Proyector', 1),
(4, 'Correo', 1),
(5, 'Multifuncional', 1),
(6, 'Adobe Profesional', 1),
(7, 'Impresora', 1),
(8, 'Internet', 1),
(9, 'Windows (S.O)', 1),
(10, 'Software', 1),
(11, 'Office', 1),
(12, 'Hardware', 1),
(13, 'Telefono', 1),
(14, 'WFWEB', 1),
(15, 'PHRONESYS', 1),
(16, 'VPN', 1),
(17, 'Red Inalambrica', 1),
(18, 'Checador', 1),
(19, 'Tablet', 1),
(20, 'Toner de Impesora', 1),
(21, 'Aire Acondicionado', 1),
(22, 'Respaldo', 1),
(23, 'Celular', 1),
(24, 'Site', 1),
(27, 'Prestamo Laptop', 1),
(29, 'Conmutador', 1),
(30, 'Préstamo de Cable de Red', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cusuario`
--

CREATE TABLE `cusuario` (
  `id_cusuario` int(11) NOT NULL,
  `tipo` varchar(2555) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cusuario`
--

INSERT INTO `cusuario` (`id_cusuario`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `fechas`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `fechas` (
`id_reporte` int(11)
,`idcreporte` int(11)
,`descripcion` text
,`fecha_hora` datetime
,`status` int(11)
,`idusuario` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mreporte`
--

CREATE TABLE `mreporte` (
  `id_reporte` int(11) NOT NULL,
  `idcreporte` int(11) NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_hora` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `mreporte`
--

INSERT INTO `mreporte` (`id_reporte`, `idcreporte`, `descripcion`, `fecha_hora`, `status`, `idusuario`) VALUES
(1, 7, 'No imprime documento', '2019-03-20 12:18:11', 0, 45),
(2, 6, 'No puedo convertir Word a PDF', '2019-03-20 12:23:19', 0, 45),
(3, 7, 'No puedo Imprimir', '2019-03-20 12:31:16', 0, 34),
(4, 24, '   Falla en ventilador', '2019-03-20 13:02:33', 0, 1),
(5, 18, '  No está encendido', '2019-03-20 13:09:46', 0, 34),
(8, 6, '   No sirve\r\n', '2019-03-21 12:09:56', 0, 45),
(9, 7, 'No imprime', '2019-03-21 12:23:40', 0, 42),
(10, 23, 'No da señal', '2019-03-21 12:51:22', 0, 34),
(11, 5, 'No imprime\r\n', '2019-03-21 13:25:59', 0, 29),
(12, 12, 'Se cayo la pantalla ', '2019-03-21 13:33:01', 0, 29),
(13, 6, 'No convierto a pdf', '2019-03-21 13:37:30', 2, 29),
(14, 4, 'Se borró todo lo del correo', '2019-03-21 15:28:52', 0, 29),
(15, 4, 'Me pide cambio de Contraseña', '2019-03-21 15:50:54', 3, 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `msolucion`
--

CREATE TABLE `msolucion` (
  `id_msolucion` int(11) NOT NULL,
  `solucion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechahora` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `id_mreporte` int(11) NOT NULL,
  `soluciono` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tiempoinver` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `msolucion`
--

INSERT INTO `msolucion` (`id_msolucion`, `solucion`, `fechahora`, `status`, `id_mreporte`, `soluciono`, `tiempoinver`) VALUES
(1, ' Se hablará al proveedor de la impresora \r\nel dia 24 de marzo vendrá el proveedor y la arreglará\r\nSe arregló la impresora y ya se puede imprimir', '2019-03-20 12:21:13', 1, 1, 'José Martínez y Enrique Lara', 25),
(2, 'Se reiniciará la maquina a fábrica  \r\nSe reinició y se instalarán todas las cosas.\r\nSe reinstaló todo lo que tenía.\r\nYa puede convertir pdf a documentos', '2019-03-20 12:30:00', 1, 2, 'José Martínez y Enrique Lara', 30),
(3, ' \r\nSe llamo a proveedor \r\nVendrá el jueves 21 de marzo', '2019-03-20 12:57:19', 1, 3, 'José Martínez', 56),
(4, 'Se reparo ventilador', '2019-03-20 17:57:39', 1, 4, 'José Martínez', 20),
(5, 'Se debe conseguir la licencia de adobe\r\nLa trae amazon el 28 de marzo', '2019-03-21 12:12:09', 1, 8, 'José Martínez y Enrique Lara', 30),
(6, ' Se descompuso y se mandó a arreglar\r\nLo trajeron y ya sirve como antes', '2019-03-21 12:21:26', 1, 5, 'José Martínez', 30),
(7, 'Se conectó y desconectó la impresora', '2019-03-21 12:24:31', 1, 9, 'José Martínez', 25),
(8, 'Se reinició el teléfono', '2019-03-21 13:08:20', 1, 10, 'José Martínez', 5),
(9, 'Se habló con proveedor por que ya no tiene tóner\r\n', '2019-03-21 13:32:27', 1, 11, 'José Martínez', 0),
(10, ' Se debe comprar otra', '2019-03-21 13:35:48', 1, 12, 'José Martínez', 0),
(11, 'Se restauró la máquina y se hizop copia de todo el pst', '2019-03-21 15:30:32', 1, 14, 'José Martínez y Enrique Lara', 30),
(12, 'Se borró su cuenta\r\nSe restauró toda la cuenta y archivos', '2019-03-21 16:00:20', 1, 15, 'José Martínez y Enrique Lara', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `musuario`
--

CREATE TABLE `musuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nomusuario` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_carea` int(11) NOT NULL,
  `id_cpuesto` int(11) NOT NULL,
  `id_cusuario` int(11) NOT NULL DEFAULT '2',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `musuario`
--

INSERT INTO `musuario` (`idusuario`, `nombre`, `nomusuario`, `password`, `id_carea`, `id_cpuesto`, `id_cusuario`, `status`) VALUES
(1, 'Enrique Lara Guerrero', 'elara', '1234', 1, 1, 1, 1),
(7, 'Jesica Amezcua Velázquez', 'jamezcua', 'jamezcuafs', 2, 9, 2, 1),
(8, 'Simon Pedro Angeles Pereda', 'sangeles', 'sangelesfs', 3, 6, 2, 1),
(9, 'Jorge Isaac Aranda García', 'jaranda', 'jarandafs', 4, 4, 2, 1),
(10, 'Daniel Blancas Gallardo', 'dblancas', 'dblancasfs', 3, 5, 2, 1),
(11, 'Sonia Calderón Medina', 'scalderon', 'scalderonfs', 6, 6, 2, 1),
(12, 'Aurora Castillo Centeno', 'acastillo', 'acastillofs', 7, 12, 2, 1),
(13, 'Eloisa Maribel Cedillo Cortés', 'ecedillo', 'ecedillofs', 2, 8, 2, 1),
(14, 'Eduardo Vidal Cedillo Pérez', 'evidal', 'evidalfs', 2, 2, 2, 1),
(15, 'Griselda Osiris Colin Mosqueda', 'gcolin', 'gcolinfs', 9, 10, 2, 1),
(16, 'Fernando Chiquini Barrios', 'fchiquini', 'fchiquinifs', 10, 11, 2, 1),
(17, 'Carina Cruz León', 'ccruz', 'ccruzfs', 3, 12, 2, 1),
(18, 'Sara Rosario Cruz Morales', 'scruz', 'scruzfs', 4, 13, 2, 1),
(19, 'Yessica Domínguez Martínes', 'ydominguez', 'ydominguezfs', 9, 12, 2, 1),
(20, 'Roberto García Valtierra', 'rgarcia', 'rgarciafs', 3, 3, 2, 1),
(21, 'Marivel García Rúiz', 'mgarcia', 'mgarciafs', 9, 14, 2, 1),
(22, 'Carolina García Luna', 'cgarcia', 'cgarciafs', 3, 5, 2, 1),
(23, 'Verenice González Cid', 'vgonzalez', 'vgonzalezfs', 9, 14, 2, 1),
(24, 'Marco Antonio Heredia Duvignau', 'mheredia', 'mherediafs', 10, 16, 2, 1),
(25, 'Idania Gabriela Hernández Aburto', 'ihernandez', 'ihernandezfs', 6, 17, 2, 1),
(26, 'Maria Celia Hernández Estrada', 'mhernandez', 'mhernandezfs', 4, 13, 2, 1),
(27, 'Cándido Hernández Chávez', 'chernandez', 'chernandezfs', 6, 19, 2, 1),
(28, 'Richard Kersten Acosta', 'rkersten', 'rkerstenfs', 4, 7, 2, 1),
(29, 'Karen Zindahy Landín González', 'klandin', 'klandinfs', 6, 20, 2, 1),
(30, 'Margarita López Tovar', 'mlopez', 'mlopezfs', 4, 13, 2, 1),
(31, 'Cintia Ileana Llamas Fernández', 'cllamas', 'cllamasfs', 3, 5, 2, 1),
(32, 'Adriana Luna Santillán', 'aluna', 'alunafs', 9, 7, 2, 1),
(33, 'José Martínez Ortuño', 'jmartinez', 'jmartinezfs', 1, 21, 2, 1),
(34, 'Karina Maldonado Murillo', 'kmaldonado', 'kmaldonadofs', 4, 22, 2, 1),
(35, 'Karla Karina Medina Morales', 'kmedina', 'kmedinafs', 3, 5, 2, 1),
(36, 'Nancy Mendoza Aparicio', 'nmendoza', 'nmendozafs', 3, 23, 2, 1),
(37, 'Elvira Yolanda Moreno Cárdenas', 'emoreno', 'emorenofs', 3, 24, 2, 1),
(38, 'Teresa Judith Ramírez Lima', 'tramirez', 'tramirezfs', 3, 5, 2, 1),
(39, 'Carlos Abraham Ruíz Belmont', 'cruiz', 'cruizfs', 9, 25, 2, 1),
(40, 'Elizabeth Redonda Nieto', 'eredonda', 'eredondafs', 3, 26, 2, 1),
(41, 'Jorge Arturo Reyes Chiquini', 'jchiquini', 'jchiquinifs', 6, 27, 2, 1),
(42, 'Lorena Reyes Sánchez', 'lreyes', 'lreyesfs', 12, 28, 2, 1),
(43, 'Jesús Jonathan Rodríguez Velázquez', 'jrodriguez', 'jrodriguezfs', 9, 29, 2, 1),
(44, 'Guadalupe Rodríguez Morales', 'grodriguez', 'grodriguezfs', 6, 30, 2, 1),
(45, 'Maria Elizabeth Salazar González', 'msalazar', 'msalazarfs', 11, 33, 2, 1),
(46, 'Alexie Yenicei Santos Tovilla', 'asantos', 'asantosfs', 12, 31, 2, 1),
(47, 'Marco Antonio Silva Lara', 'msilva', 'msilvafs', 6, 7, 2, 1),
(48, 'Juan Carlos Vilchis Chávez', 'jvilchis', 'jvilchisfs', 4, 4, 2, 1),
(49, 'Alicia Margarita Vázquez Paredes', 'avazquez', 'avazquezfs', 6, 32, 2, 1),
(50, 'Lina Araceli González Morales', 'agonzalez', 'agonzalezfs', 9, 15, 2, 1),
(51, 'Jair Martínez Álvarez', 'jamartinez', 'jamartinezfs', 3, 5, 2, 1),
(52, 'Adán Martínez Sánchez', 'amartinez', 'amartinezfs', 6, 12, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solucionado`
--

CREATE TABLE `solucionado` (
  `idpersona` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `solucionado`
--

INSERT INTO `solucionado` (`idpersona`, `nombre`) VALUES
(1, 'José Martínez'),
(2, 'Enrique Lara'),
(3, 'José Martínez y Enrique Lara');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soluciontemporal`
--

CREATE TABLE `soluciontemporal` (
  `idsoluciontemp` int(11) NOT NULL,
  `soluciontemp` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechahora` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '2',
  `id_mreporte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `soluciontemporal`
--

INSERT INTO `soluciontemporal` (`idsoluciontemp`, `soluciontemp`, `fechahora`, `status`, `id_mreporte`) VALUES
(5, 'La máquina se descompuso\r\nSe hablo a la garantía y entregan la nueva el lunes 25 de marzo.\r\nEl 26 de marzo trajeron la nueva computadora', '2019-03-21 15:13:38', 2, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soluc_buena`
--

CREATE TABLE `soluc_buena` (
  `idsolucbuena` int(11) NOT NULL,
  `solucion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechaHora` int(11) NOT NULL,
  `soluciono` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` int(11) NOT NULL,
  `tiempo_inver` int(11) NOT NULL,
  `idsoluciontemp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura para la vista `coun`
--
DROP TABLE IF EXISTS `coun`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `coun`  AS  select `creportes`.`reporte` AS `reporte`,`mreporte`.`id_reporte` AS `id_reporte`,`mreporte`.`descripcion` AS `descripcion`,`mreporte`.`fecha_hora` AS `fecha_hora`,`musuario`.`nombre` AS `nombre`,`mreporte`.`status` AS `status` from ((`mreporte` join `creportes` on((`creportes`.`idcreporte` = `mreporte`.`idcreporte`))) join `musuario` on((`musuario`.`idusuario` = `mreporte`.`idusuario`))) where (`mreporte`.`status` = 3) order by `mreporte`.`id_reporte` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `fechas`
--
DROP TABLE IF EXISTS `fechas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`fechas`@`%` SQL SECURITY DEFINER VIEW `fechas`  AS  select `mreporte`.`id_reporte` AS `id_reporte`,`mreporte`.`idcreporte` AS `idcreporte`,`mreporte`.`descripcion` AS `descripcion`,`mreporte`.`fecha_hora` AS `fecha_hora`,`mreporte`.`status` AS `status`,`mreporte`.`idusuario` AS `idusuario` from `mreporte` where (`mreporte`.`fecha_hora` between ((2019 - 2) - 1) and ((2019 - 2) - 28)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carea`
--
ALTER TABLE `carea`
  ADD PRIMARY KEY (`id_carea`);

--
-- Indices de la tabla `cpuesto`
--
ALTER TABLE `cpuesto`
  ADD PRIMARY KEY (`id_cpuesto`);

--
-- Indices de la tabla `creportes`
--
ALTER TABLE `creportes`
  ADD PRIMARY KEY (`idcreporte`);

--
-- Indices de la tabla `cusuario`
--
ALTER TABLE `cusuario`
  ADD PRIMARY KEY (`id_cusuario`);

--
-- Indices de la tabla `mreporte`
--
ALTER TABLE `mreporte`
  ADD PRIMARY KEY (`id_reporte`),
  ADD KEY `id_creporte` (`idcreporte`),
  ADD KEY `id_usuario` (`idusuario`),
  ADD KEY `id_creporte_2` (`idcreporte`),
  ADD KEY `id_usuario_2` (`idusuario`);

--
-- Indices de la tabla `msolucion`
--
ALTER TABLE `msolucion`
  ADD PRIMARY KEY (`id_msolucion`),
  ADD KEY `id_mreporte` (`id_mreporte`);

--
-- Indices de la tabla `musuario`
--
ALTER TABLE `musuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `id_carea` (`id_carea`),
  ADD KEY `id_cpuesto` (`id_cpuesto`),
  ADD KEY `id_cusuario` (`id_cusuario`),
  ADD KEY `area` (`id_carea`);

--
-- Indices de la tabla `solucionado`
--
ALTER TABLE `solucionado`
  ADD PRIMARY KEY (`idpersona`);

--
-- Indices de la tabla `soluciontemporal`
--
ALTER TABLE `soluciontemporal`
  ADD PRIMARY KEY (`idsoluciontemp`),
  ADD KEY `id_mreporte` (`id_mreporte`);

--
-- Indices de la tabla `soluc_buena`
--
ALTER TABLE `soluc_buena`
  ADD PRIMARY KEY (`idsolucbuena`),
  ADD KEY `idsoluciontemp` (`idsoluciontemp`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carea`
--
ALTER TABLE `carea`
  MODIFY `id_carea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `cpuesto`
--
ALTER TABLE `cpuesto`
  MODIFY `id_cpuesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `creportes`
--
ALTER TABLE `creportes`
  MODIFY `idcreporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `cusuario`
--
ALTER TABLE `cusuario`
  MODIFY `id_cusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `mreporte`
--
ALTER TABLE `mreporte`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `msolucion`
--
ALTER TABLE `msolucion`
  MODIFY `id_msolucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `musuario`
--
ALTER TABLE `musuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `solucionado`
--
ALTER TABLE `solucionado`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `soluciontemporal`
--
ALTER TABLE `soluciontemporal`
  MODIFY `idsoluciontemp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `soluc_buena`
--
ALTER TABLE `soluc_buena`
  MODIFY `idsolucbuena` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mreporte`
--
ALTER TABLE `mreporte`
  ADD CONSTRAINT `mreporte_ibfk_1` FOREIGN KEY (`idcreporte`) REFERENCES `creportes` (`idcreporte`),
  ADD CONSTRAINT `mreporte_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `musuario` (`idusuario`);

--
-- Filtros para la tabla `msolucion`
--
ALTER TABLE `msolucion`
  ADD CONSTRAINT `msolucion_ibfk_1` FOREIGN KEY (`id_mreporte`) REFERENCES `mreporte` (`id_reporte`);

--
-- Filtros para la tabla `musuario`
--
ALTER TABLE `musuario`
  ADD CONSTRAINT `musuario_ibfk_1` FOREIGN KEY (`id_carea`) REFERENCES `carea` (`id_carea`),
  ADD CONSTRAINT `musuario_ibfk_2` FOREIGN KEY (`id_cpuesto`) REFERENCES `cpuesto` (`id_cpuesto`),
  ADD CONSTRAINT `musuario_ibfk_3` FOREIGN KEY (`id_cusuario`) REFERENCES `cusuario` (`id_cusuario`);

--
-- Filtros para la tabla `soluciontemporal`
--
ALTER TABLE `soluciontemporal`
  ADD CONSTRAINT `soluciontemporal_ibfk_1` FOREIGN KEY (`id_mreporte`) REFERENCES `mreporte` (`id_reporte`);

--
-- Filtros para la tabla `soluc_buena`
--
ALTER TABLE `soluc_buena`
  ADD CONSTRAINT `soluc_buena_ibfk_1` FOREIGN KEY (`idsoluciontemp`) REFERENCES `soluciontemporal` (`idsoluciontemp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
