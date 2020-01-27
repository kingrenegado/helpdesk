-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-04-2019 a las 01:35:52
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
(13, 'Verificadora de Control Sanitario', 1),
(15, 'Gerente de Certificación', 1),
(16, 'Director General', 1),
(17, 'Coordinadora de Producto', 1),
(18, 'Verificadora de Control Sanitario', 1),
(19, 'Auditor de Producto', 1),
(21, 'Coordinador de Sistemas', 1),
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
(30, 'Préstamo de Cable de Red', 1),
(31, 'Alta de Usuario', 1),
(32, 'Help Desk', 1);

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
(1, 7, '   No puedo imprimir en el multinacional samsung, ', '2019-03-27 09:17:15', 0, 15),
(2, 14, '   Actualizar en el sistema de operaciones el domicilio fiscal de nuestros clientes de la Ciudad de México, ya que dicen \"Delegación\" o su abreviatura \"Del\". Al igual que el domiclio de Factual Services en la plantilla de en dictámenes, constancias, solicitudes contratos y adendums', '2019-03-27 10:36:15', 1, 40),
(3, 2, '   Favor de ingresar la máquina de Marcos Vite al dominio FS:\r\nUsuario:Marcos Vite Ríos\r\nPuesto: Representante comercial', '2019-03-27 11:47:10', 0, 40),
(4, 4, '   Favor de generar el correo y firma para  el tercer representante comercial:\r\ncomercial_uva3@factualservices.com\r\npara Marcos Vite Ríos', '2019-03-27 11:48:52', 0, 40),
(5, 2, '   Favor de crear el usuario de Marcos Vite Ríos para que pueda ingresar reportes en ésta plataforma.', '2019-03-27 11:54:33', 0, 40),
(6, 11, '   Se traba el Word', '2019-03-27 14:31:55', 0, 18),
(7, 13, '   Favor de proporcionar clave para  hacer llamadas de larga distancia y celular.\r\ngracias', '2019-03-27 16:21:07', 0, 37),
(8, 18, '   Hola buenas tardes favor de poner la hora el checador porque adelantado.\r\nMuchas gracias.  ', '2019-03-27 16:29:59', 0, 37),
(9, 32, '  Favor de poner o configurar el acceso a reportes en la máquina de Marcos Vite.', '2019-03-27 17:59:10', 0, 40),
(10, 4, '   Estimados compañeros de sistemas:\r\n\r\ncon el gusto de saludarlos, les reporto que desapareció mi carpeta de elementos enviados y necesito reenviar un correo de manera urgente.\r\n\r\nsi pudieran apoyarme se los agradeceré, saludos. ', '2019-03-28 10:53:31', 0, 47),
(11, 4, '   nos pide actualizar la contraseña de contabilidad de la maquina de cobranza.', '2019-03-28 11:44:10', 0, 45),
(12, 2, 'Solicito la contraseña de las computadoras de producto', '2019-03-28 12:28:34', 0, 25),
(13, 8, '   Amigos de sistemas no puedo acceder al portal de un cliente para subir facturas ', '2019-03-28 14:20:58', 0, 37),
(14, 6, '   Atasco en multifuncional de tercer piso', '2019-03-28 15:50:09', 3, 51),
(15, 2, '  Buenos días, me pueden ayudar por favor en revisar la máquina que uso ya que al instalar la actualización de licencia de office se ha alentado mucho el outlook y el excel.\r\nMuchas gracias. Saludos! ', '2019-03-29 09:52:01', 1, 42),
(16, 4, '   Tengo un correo sospechoso aún no lo he abierto pero el remitente dice Rental Manager y el título del correo dice Payment, podrían apoyarme checando si es o no malicioso. Muchas gracias', '2019-03-29 10:12:35', 0, 26),
(17, 5, 'Cambiar el plug del multifuncional ', '2019-03-29 10:48:16', 0, 43),
(18, 8, 'Restricción del acceso a YouTube ', '2019-03-29 11:04:08', 0, 43),
(19, 7, 'se requiere instalar la impresora DH a la computadora de  verificacion de DH que utiliza Jesi, por favor', '2019-03-29 17:44:40', 0, 13),
(20, 2, '  Solicito por favor dar de alta el sistema de reporte para soporte tecnico   en la maquina de verificacion de Distintivo H y al usuario de Jesi', '2019-03-29 17:48:29', 0, 13),
(21, 6, '   ', '2019-03-29 18:00:55', 0, 7),
(22, 2, 'buenos dias, mi maquina lanza una ventan que entiendo yo es de antivirus, y aqui me notifica que al parcer tiene2 virus troyanos, adicional despues de la actualización que se le hizo  mi maquina esta exageradamente lenta, ojalá y puedan ayudarme.', '2019-04-01 10:08:55', 3, 32),
(23, 18, '   me pueden apoyar con mis registros del checador gracias. ', '2019-04-01 10:11:19', 3, 45),
(24, 14, '   Buen día, favor de hacer el salto de solicitudes correspondiente al mes de abril. El viernes envié por correo los números ya que no estaba disponible Help_Desk en la noche.\r\nGracias', '2019-04-01 10:43:31', 0, 40),
(25, 4, '   Favor de hacer respaldo de correos.\r\n\r\nsaludos. ', '2019-04-01 11:29:28', 0, 47),
(26, 6, '   aun no se resuelve lo de los links para el documento de paquete informativo ', '2019-04-01 13:10:50', 1, 47),
(27, 5, '  la bandeja del multifuncional esta sucia ', '2019-04-01 14:59:41', 0, 43);

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
(1, 'Se bajó a revisar la impresora y tenía una hoja atascada la solución fue abrir la impresora y sacar el atasco que tenía.', '2019-03-27 09:46:35', 1, 1, 'Enrique Lara', 15),
(2, ' Se solícito a Recursos Humanos, alta de usuario en sistema Help Desk.\r\n\r\nConfirma recursos humanos alta de usuario\r\nNombre:Marcos Vite Ríos\r\nNombre de usuario:mvite\r\nContraseña: mvitefs\r\nÁrea:Verificación de Información Comercial\r\nPuesto:Representante Comercial', '2019-03-27 12:41:45', 1, 5, 'José Martínez y Enrique Lara', 10),
(3, 'Se cierran todos los programas y se restablece Word, recuperando los últimos cambios', '2019-03-27 14:33:44', 1, 6, 'José Martínez', 10),
(4, 'Se le solicita a recursos humanos colocar hora exacta.\r\nConfirma Recursos Humanos que ha sido corregida la hora de checador.', '2019-03-27 16:43:42', 1, 8, 'José Martínez', 10),
(5, 'Se le solicita al jefe del área correo donde autoriza el uso de clave para llamadas a celular y larga distancia.\r\n\r\nYolanda Moreno	Verificación	CLAVE: 9635	27/03/2019	ACTIVA\r\n', '2019-03-27 17:52:25', 1, 7, 'José Martínez', 15),
(6, 'Se ingresó al Admin Center de Microsoft y se dió de alta el usuario:\r\ncorreo: comercial_uva3@factualservices.com\r\ncontraseña: Ruq26850 .\r\nSe crea y se configura firma de correo para Marco Vite en Microsoft Outlook.', '2019-03-27 17:59:40', 1, 4, 'José Martínez y Enrique Lara', 120),
(7, 'Se instaló el acceso directo en el escritorio de la computadora de Marco Vite para poder acceder al sistema Help Desk ', '2019-03-27 18:04:26', 1, 9, 'Enrique Lara', 3),
(9, 'Se dió de alta la maquina de Marco Vite en el dominio FS.Net. \r\nSe cambió el nombre de la máquina desde el panel de control para personalizarla.\r\nSe dio de alta en el Zentyal para que pueda acceder al sistema.', '2019-03-27 18:09:29', 1, 3, 'José Martínez y Enrique Lara', 120),
(10, 'Se restablece contraseña\r\nNueva Contraseña: Yal83074\r\nRegistrar la nueva contraseña en la ventana que la solicita y dar aceptar', '2019-03-28 12:09:14', 1, 11, 'José Martínez', 10),
(11, 'Se envía listado por correo a Idania Hernandez y Jorge Reyes', '2019-03-28 12:43:01', 1, 12, 'José Martínez', 10),
(12, 'El usuario restablece la carpeta que no encontraba', '2019-03-28 12:44:21', 1, 10, 'José Martínez', 5),
(13, 'Se revisa IP y se accede a la página. SI se tiene acceso al portal.', '2019-03-28 14:47:14', 1, 13, 'José Martínez', 10),
(14, 'Se checó el muntifuncional y se eliminó la hoja que tenía atascada se hizo la prueba con una hoja y logro imprimir sin ningún problema', '2019-03-28 16:34:01', 1, 14, 'Enrique Lara', 5),
(15, 'Se elimina correo malware.', '2019-03-29 11:37:45', 1, 16, 'José Martínez', 10),
(16, 'Se cambiaron los plugs de el muntifuncional', '2019-03-29 11:42:57', 1, 17, 'Enrique Lara', 15),
(17, 'Se restringió el acceso a las páginas solicitadas', '2019-03-29 11:43:48', 1, 18, 'José Martínez y Enrique Lara', 15),
(18, 'prueba', '2019-03-29 18:01:38', 1, 21, 'Enrique Lara', 2),
(19, 'El usuario ya estaba dado de alta en el sistema con nombre de usuario: jamezcua\r\ncontraseña: jamezcuafs\r\nSe generó el acceso directo de el Sistema Help DEsk', '2019-03-29 18:06:11', 1, 20, 'Enrique Lara', 10),
(20, 'Se realiza brinco en base de datos', '2019-04-01 11:07:11', 1, 24, 'José Martínez', 10),
(21, 'Entregados los registros del mes de Marzo', '2019-04-01 12:01:50', 1, 23, 'José Martínez y Enrique Lara', 30),
(22, 'Se eliminó la amenaza y se eliminaron procesos activos que no se necesitan.', '2019-04-01 12:08:15', 1, 22, 'Enrique Lara', 45),
(23, ' Se inicia copia de respaldo a la carpeta TEMPORALES/MARCO SILVA/RESPALDOS/CORREO\r\nTiempo estimado 20 minutos\r\n\r\nSe realiza respaldo completo.', '2019-04-01 12:50:52', 1, 25, 'José Martínez', 30),
(24, 'Se instaló la impresora en la computadora se imprimió un archivo de prueba y fue exitoso', '2019-04-01 13:20:43', 1, 19, 'Enrique Lara', 10),
(25, 'Se limpió la bandeja del multifuncional y se avisó a recursos humanos que pidiera mantenimiento con el proveedor ', '2019-04-01 15:18:24', 1, 27, 'Enrique Lara', 5);

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
  `status` int(11) NOT NULL DEFAULT '1',
  `correo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `musuario`
--

INSERT INTO `musuario` (`idusuario`, `nombre`, `nomusuario`, `password`, `id_carea`, `id_cpuesto`, `id_cusuario`, `status`, `correo`) VALUES
(1, 'Enrique Lara Guerrero', 'elara', '1234', 1, 1, 1, 1, 'enriquelg939@gmail.com'),
(7, 'Jesica Amezcua Velázquez', 'jamezcua', 'jamezcuafs', 2, 9, 2, 1, 'distintivoh2@hotmail.com'),
(9, 'Jorge Isaac Aranda García', 'jaranda', 'jarandafs', 4, 4, 2, 1, 'registrosanitario4@factualservices.com'),
(10, 'Daniel Blancas Gallardo', 'dblancas', 'dblancasfs', 3, 5, 2, 1, 'verificacion@factualservices.com'),
(11, 'Sonia Calderón Medina', 'scalderon', 'scalderonfs', 6, 6, 2, 1, 'administracionee@factualservices.com'),
(12, 'Aurora Castillo Centeno', 'acastillo', 'acastillofs', 7, 7, 2, 1, 'comercial_uva2@factualservices.com'),
(13, 'Eloisa Maribel Cedillo Cortés', 'ecedillo', 'ecedillofs', 2, 8, 2, 1, 'distintivoh2@factualservices.com'),
(14, 'Eduardo Vidal Cedillo Pérez', 'evidal', 'evidalfs', 2, 2, 2, 0, 'verificaciondh@factualservices.com'),
(15, 'Griselda Osiris Colin Mosqueda', 'gcolin', 'gcolinfs', 9, 10, 2, 1, 'auditores2@factualservices.com'),
(16, 'Fernando Chiquini Barrios', 'fchiquini', 'fchiquinifs', 10, 11, 1, 1, 'fchiquini@factualservices.com'),
(17, 'Carina Cruz León', 'ccruz', 'ccruzfs', 3, 7, 2, 1, 'comercial_uva@factualservices.com'),
(18, 'Sara Rosario Cruz Morales', 'scruz', 'scruzfs', 4, 13, 2, 1, 'registrosanitario3@factualservices.com'),
(19, 'Yessica Domínguez Martínez', 'ydominguez', 'ydominguezfs', 9, 7, 2, 1, 'comercializacion@factualservices.com'),
(21, 'Marivel García Rúiz', 'mgarcia', 'mgarciafs', 9, 10, 2, 1, 'auditores@factualservices.com'),
(22, 'Carolina García Luna', 'cgarcia', 'cgarciafs', 3, 5, 2, 1, 'verificacion@factualservices.com'),
(23, 'Verenice González Cid', 'vgonzalez', 'vgonzalezfs', 9, 10, 2, 1, 'comercializacion2@factualservices.com'),
(24, 'Marco Antonio Heredia Duvignau', 'mheredia', 'mherediafs', 10, 16, 1, 1, 'mheredia@factualservices.com'),
(25, 'Idania Gabriela Hernández Aburto', 'ihernandez', 'ihernandezfs', 6, 17, 2, 1, 'ihernandez@factualservices.com'),
(26, 'Maria Celia Hernández Estrada', 'mhernandez', 'mhernandezfs', 4, 13, 2, 1, 'registrosanitario5@factualservices.com'),
(27, 'Cándido Hernández Chávez', 'chernandez', 'chernandezfs', 6, 19, 2, 1, 'solicitudnom3@factualservices.com'),
(28, 'Richard Kersten Acosta', 'rkersten', 'rkerstenfs', 4, 7, 2, 1, 'registrosanitario@factualservices.com'),
(29, 'Karen Zindahy Landín González', 'klandin', 'klandinfs', 6, 6, 2, 1, 'zlandin@factualservices.com'),
(30, 'Margarita López Tovar', 'mlopez', 'mlopezfs', 4, 13, 2, 1, 'registrosanitario6@factualservices.com'),
(31, 'Cintia Ileana Llamas Fernández', 'cllamas', 'cllamasfs', 3, 5, 2, 1, 'verificadores@factualservices.com'),
(32, 'Adriana Luna Santillán', 'aluna', 'alunafs', 9, 7, 2, 1, 'aluna@factualservices.com'),
(33, 'José Martínez Ortuño', 'jmartinez', 'jmartinezfs', 1, 21, 1, 1, 'sistemas@factualservices.com'),
(34, 'Karina Maldonado Murillo', 'kmaldonado', 'kmaldonadofs', 4, 22, 2, 1, 'registrosanitario7@factualservices.com'),
(35, 'Karla Karina Medina Morales', 'kmedina', 'kmedinafs', 3, 5, 2, 1, 'registrosanitario7@factualservices.com'),
(36, 'Nancy Mendoza Aparicio', 'nmendoza', 'nmendozafs', 3, 23, 2, 1, 'fsverificacion@factualservices.com'),
(37, 'Elvira Yolanda Moreno Cárdenas', 'ymoreno', 'ymorenofs', 3, 24, 2, 1, 'evaluacionfs@factualservices.com'),
(38, 'Teresa Judith Ramírez Lima', 'tramirez', 'tramirezfs', 3, 5, 2, 1, 'solicitudes@factualservices.com'),
(39, 'Carlos Abraham Ruíz Belmont', 'cruiz', 'cruizfs', 9, 25, 2, 1, 'certificacion2@factualservices.com'),
(40, 'Elizabeth Redonda Nieto', 'eredonda', 'eredondafs', 3, 26, 2, 1, 'verificacion@factualservices.com'),
(41, 'Jorge Arturo Reyes Chiquini', 'jreyes', 'jreyesfs', 6, 27, 1, 1, 'jreyes@factualservices.com'),
(42, 'Lorena Reyes Sánchez', 'lreyes', 'lreyesfs', 12, 28, 2, 1, 'lreyes@factualservices.com'),
(43, 'Jesús Jonathan Rodríguez Velázquez', 'jrodriguez', 'jrodriguezfs', 9, 29, 2, 1, 'certificacioniso@factualservices.com'),
(44, 'Guadalupe Rodríguez Moran', 'grodriguez', 'grodriguezfs', 6, 30, 2, 1, 'solicitudelectricos@factualservices.com'),
(45, 'Maria Elizabeth Salazar González', 'msalazar', 'msalazarfs', 11, 33, 2, 1, 'recursoshumanos@factualservices.com'),
(46, 'Alexie Yenicei Santos Tovilla', 'asantos', 'asantosfs', 12, 31, 2, 1, 'turismo@factualservices.com'),
(47, 'Marco Antonio Silva Lara', 'msilva', 'msilvafs', 6, 7, 2, 1, 'comercialproducto3@factualservices.com'),
(48, 'Juan Carlos Vilchis Chávez', 'jvilchis', 'jvilchisfs', 4, 4, 2, 1, 'registrosanitario2@factualservices.com'),
(49, 'Alicia Margarita Vázquez Paredes', 'avazquez', 'avazquezfs', 6, 32, 2, 1, 'solicitudnom2@factualservices.com'),
(50, 'Lina Araceli González Morales', 'agonzalez', 'agonzalezfs', 9, 15, 2, 1, 'agonzalez@factualservices.com'),
(51, 'Jair Martínez Álvarez', 'jamartinez', 'jamartinezfs', 3, 5, 2, 1, 'atencionfs@factualservices.com'),
(52, 'Adán Martínez Sánchez', 'amartinez', 'amartinezfs', 6, 7, 2, 1, 'comercialproducto3@factualservices.com'),
(54, 'Marcos Vite Ríos ', 'mvite', 'mvitefs', 3, 7, 2, 1, 'comercial_uva3@factualservices.com');

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
  MODIFY `idcreporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `cusuario`
--
ALTER TABLE `cusuario`
  MODIFY `id_cusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `mreporte`
--
ALTER TABLE `mreporte`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `msolucion`
--
ALTER TABLE `msolucion`
  MODIFY `id_msolucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `musuario`
--
ALTER TABLE `musuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `solucionado`
--
ALTER TABLE `solucionado`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `soluciontemporal`
--
ALTER TABLE `soluciontemporal`
  MODIFY `idsoluciontemp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
