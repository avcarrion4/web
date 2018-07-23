-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-07-2018 a las 06:53:55
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(10) NOT NULL,
  `nombre_alumno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre2_alumno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_alumno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido2_alumno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_alumno` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_alumno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `correo_alumno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `edad_alumno` int(10) NOT NULL,
  `porcentaje_discapacidad` int(2) DEFAULT NULL,
  `id_discapacidad` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `nombre_alumno`, `nombre2_alumno`, `apellido_alumno`, `apellido2_alumno`, `cedula_alumno`, `telefono_alumno`, `correo_alumno`, `edad_alumno`, `porcentaje_discapacidad`, `id_discapacidad`) VALUES
(8, 'Cristian', 'Jose', 'Macas', 'Pineda', '1900734151', '0959244432', 'cjmacas@utpl.edu.ec', 25, NULL, 3),
(9, 'Andres', 'Vinicio', 'Carrion', 'Malla', '1104659386', '0968852819', 'avcarrion4@utpl.edu.ec', 21, NULL, 3),
(10, 'Yoder', 'Omar', 'Rivadeneira', 'Cajas', '1726793969', '0989182467', 'yorivadeneira@utpl.edu.ec', 23, NULL, 3),
(11, 'Alumno11', 'Alumno12', 'Apellido11', 'Apellido12', '1111', '09999', 'alumno1@hotmail.com', 20, 25, 1),
(15, 'Alumno21', 'Alumno22', 'Apellido21', 'Apellido22', '1102', '09002', 'alumno2@utpl.edu.ec', 18, 5, 1),
(16, 'Alumno31', 'Alumno32', 'Apellido31', 'Apellido32', '1103', '09003', 'alumno3@utpl.edu.ec', 19, 10, 2),
(17, 'Alumno41', 'Alumno42', 'Apellido41', 'Apellido42', '1104', '09004', 'alumno4@utpl.edu.ec', 20, 0, 3),
(18, 'Alumno51', 'Alumno52', 'Apellido51', 'Apellido52', '1105', '09005', 'alumno5@utpl.edu.ec', 21, 20, 4),
(19, 'Alumno61', 'Alumno62', 'Apellido61', 'Apellido62', '1106', '09006', 'alumno6@utpl.edu.ec', 22, 25, 5),
(20, 'Alumno71', 'Alumno72', 'Apellido71', 'Apellido72', '1107', '09007', 'alumno7@utpl.edu.ec', 23, 30, 6),
(21, 'Alumno81', 'Alumno82', 'Apellido81', 'Apellido82', '1108', '09008', 'alumno8@utpl.edu.ec', 24, 35, 7),
(22, 'Alumno91', 'Alumno92', 'Apellido91', 'Apellido92', '1109', '09009', 'alumno9@utpl.edu.ec', 25, 40, 8),
(23, 'Alumno101', 'Alumno102', 'Apellido101', 'Apellido102', '1110', '09010', 'alumno10@utpl.edu.ec', 26, 45, 1),
(24, 'Alumno111', 'Alumno112', 'Apellido111', 'Apellido112', '1111', '09011', 'alumno11@utpl.edu.ec', 27, 50, 2),
(25, 'Alumno121', 'Alumno122', 'Apellido121', 'Apellido122', '1112', '09012', 'alumno12@utpl.edu.ec', 22, 0, 3),
(26, 'Alumno131', 'Alumno132', 'Apellido131', 'Apellido132', '1113', '09013', 'alumno13@utpl.edu.ec', 23, 60, 4),
(27, 'Alumno141', 'Alumno142', 'Apellido141', 'Apellido142', '1114', '09014', 'alumno14@utpl.edu.ec', 24, 65, 5),
(28, 'Alumno151', 'Alumno152', 'Apellido151', 'Apellido152', '1115', '09015', 'alumno15@utpl.edu.ec', 25, 70, 6),
(29, 'Alumno161', 'Alumno162', 'Apellido161', 'Apellido162', '1116', '09016', 'alumno16@utpl.edu.ec', 26, 75, 7),
(30, 'Alumno171', 'Alumno172', 'Apellido171', 'Apellido172', '1117', '09017', 'alumno17@utpl.edu.ec', 27, 80, 4),
(31, 'Alumno181', 'Alumno182', 'Apellido181', 'Apellido182', '1118', '09018', 'alumno18@utpl.edu.ec', 18, 45, 5),
(32, 'Alumno191', 'Alumno192', 'Apellido191', 'Apellido192', '1119', '09019', 'alumno19@utpl.edu.ec', 19, 50, 6),
(33, 'Alumno201', 'Alumno202', 'Apellido201', 'Apellido202', '1120', '09020', 'alumno20@utpl.edu.ec', 20, 55, 7),
(34, 'Alumno211', 'Alumno212', 'Apellido211', 'Apellido212', '1121', '09021', 'alumno21@utpl.edu.ec', 21, 60, 8),
(35, 'Alumno221', 'Alumno222', 'Apellido221', 'Apellido222', '1122', '09022', 'alumno22@utpl.edu.ec', 18, 65, 1),
(36, 'Alumno231', 'Alumno232', 'Apellido231', 'Apellido232', '1123', '09023', 'alumno23@utpl.edu.ec', 19, 70, 2),
(37, 'Alumno241', 'Alumno242', 'Apellido241', 'Apellido242', '1124', '09024', 'alumno24@utpl.edu.ec', 20, 0, 3),
(38, 'Alumno251', 'Alumno252', 'Apellido251', 'Apellido252', '1125', '09025', 'alumno25@utpl.edu.ec', 21, 80, 1),
(39, 'Alumno261', 'Alumno262', 'Apellido261', 'Apellido262', '1126', '09026', 'alumno26@utpl.edu.ec', 22, 5, 2),
(40, 'Alumno271', 'Alumno272', 'Apellido271', 'Apellido272', '1127', '09027', 'alumno27@utpl.edu.ec', 23, 0, 3),
(41, 'Alumno281', 'Alumno282', 'Apellido281', 'Apellido282', '1128', '09028', 'alumno28@utpl.edu.ec', 24, 15, 4),
(42, 'Alumno291', 'Alumno292', 'Apellido291', 'Apellido292', '1129', '09029', 'alumno29@utpl.edu.ec', 25, 20, 5),
(43, 'Alumno301', 'Alumno302', 'Apellido301', 'Apellido302', '1130', '09030', 'alumno30@utpl.edu.ec', 26, 25, 6),
(44, 'Alumno311', 'Alumno312', 'Apellido311', 'Apellido312', '1131', '09031', 'alumno31@utpl.edu.ec', 27, 30, 7),
(45, 'Alumno321', 'Alumno322', 'Apellido321', 'Apellido322', '1132', '09032', 'alumno32@utpl.edu.ec', 22, 35, 8),
(46, 'Alumno331', 'Alumno332', 'Apellido331', 'Apellido332', '1133', '09033', 'alumno33@utpl.edu.ec', 23, 40, 1),
(47, 'Alumno341', 'Alumno342', 'Apellido341', 'Apellido342', '1134', '09034', 'alumno34@utpl.edu.ec', 24, 75, 2),
(48, 'Alumno351', 'Alumno352', 'Apellido351', 'Apellido352', '1135', '09035', 'alumno35@utpl.edu.ec', 25, 0, 3),
(49, 'Alumno361', 'Alumno362', 'Apellido361', 'Apellido362', '1136', '09036', 'alumno36@utpl.edu.ec', 26, 45, 4),
(50, 'Alumno371', 'Alumno372', 'Apellido371', 'Apellido372', '1137', '09037', 'alumno37@utpl.edu.ec', 27, 50, 5),
(51, 'Alumno381', 'Alumno382', 'Apellido381', 'Apellido382', '1138', '09038', 'alumno38@utpl.edu.ec', 18, 55, 6),
(52, 'Alumno391', 'Alumno392', 'Apellido391', 'Apellido392', '1139', '09039', 'alumno39@utpl.edu.ec', 19, 60, 7),
(53, 'Alumno401', 'Alumno402', 'Apellido401', 'Apellido402', '1140', '09040', 'alumno40@utpl.edu.ec', 20, 65, 4),
(54, 'Alumno411', 'Alumno412', 'Apellido411', 'Apellido412', '1141', '09041', 'alumno41@utpl.edu.ec', 21, 70, 5),
(55, 'Alumno421', 'Alumno422', 'Apellido421', 'Apellido422', '1142', '09042', 'alumno42@utpl.edu.ec', 27, 75, 6),
(56, 'Alumno431', 'Alumno432', 'Apellido431', 'Apellido432', '1143', '09043', 'alumno43@utpl.edu.ec', 22, 80, 7),
(57, 'Alumno441', 'Alumno442', 'Apellido441', 'Apellido442', '1144', '09044', 'alumno44@utpl.edu.ec', 23, 5, 8),
(58, 'Alumno451', 'Alumno452', 'Apellido451', 'Apellido452', '1145', '09045', 'alumno45@utpl.edu.ec', 24, 10, 1),
(59, 'Alumno461', 'Alumno462', 'Apellido461', 'Apellido462', '1146', '09046', 'alumno46@utpl.edu.ec', 25, 15, 2),
(60, 'Alumno471', 'Alumno472', 'Apellido471', 'Apellido472', '1147', '09047', 'alumno47@utpl.edu.ec', 26, 0, 3),
(61, 'Alumno481', 'Alumno482', 'Apellido481', 'Apellido482', '1148', '09048', 'alumno48@utpl.edu.ec', 27, 25, 6),
(62, 'Alumno491', 'Alumno492', 'Apellido491', 'Apellido492', '1149', '09049', 'alumno49@utpl.edu.ec', 18, 30, 4),
(63, 'Alumno501', 'Alumno502', 'Apellido501', 'Apellido502', '1150', '09050', 'alumno50@utpl.edu.ec', 19, 35, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_paralelo`
--

CREATE TABLE `alumno_paralelo` (
  `id_alupar` int(10) NOT NULL,
  `id_alumno` int(10) NOT NULL,
  `id_paralelo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `alumno_paralelo`
--

INSERT INTO `alumno_paralelo` (`id_alupar`, `id_alumno`, `id_paralelo`) VALUES
(155, 20, 31),
(156, 63, 32),
(157, 53, 31),
(158, 60, 32),
(159, 26, 31),
(160, 55, 32),
(161, 37, 31),
(162, 62, 32),
(163, 41, 31),
(164, 9, 32),
(165, 49, 31),
(166, 21, 31),
(167, 43, 32),
(168, 52, 32),
(169, 44, 31),
(170, 47, 32),
(171, 30, 31),
(172, 10, 32),
(173, 39, 31),
(174, 16, 32),
(175, 35, 32),
(176, 8, 31),
(177, 59, 32),
(178, 22, 31),
(179, 61, 32),
(180, 48, 31),
(181, 17, 32),
(182, 29, 31),
(183, 32, 32),
(184, 57, 31),
(185, 33, 32),
(186, 50, 31),
(187, 24, 32),
(188, 51, 31),
(189, 19, 32),
(190, 45, 31),
(191, 15, 32),
(192, 34, 31),
(193, 40, 32),
(194, 38, 31),
(195, 36, 32),
(196, 27, 31),
(197, 11, 32),
(198, 18, 31),
(199, 31, 32),
(200, 54, 31),
(201, 46, 32),
(202, 23, 31),
(203, 25, 32),
(204, 42, 31),
(205, 58, 32),
(206, 56, 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` int(10) NOT NULL,
  `nombre_area` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id_periodo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id_area`, `nombre_area`, `id_periodo`) VALUES
(1, 'Área Técnica', 1),
(2, 'Área Sociohumanística', 1),
(3, 'Área Administrativa', 1),
(4, 'Área Biológica y Biomédica', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discapacidad`
--

CREATE TABLE `discapacidad` (
  `id_discapacidad` int(10) NOT NULL,
  `nombre_discapacidad` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `discapacidad`
--

INSERT INTO `discapacidad` (`id_discapacidad`, `nombre_discapacidad`) VALUES
(1, 'Ciego'),
(2, 'Sordomudo'),
(3, 'Ninguna'),
(4, 'Monoplejia'),
(5, 'Paraplejia'),
(6, 'Tetraplejia'),
(7, 'Hemiplejia'),
(8, 'Esclerosis múltiple'),
(9, 'Distrofia muscular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id_docente` int(10) NOT NULL,
  `nombre_docente` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre2_docente` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_docente` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido2_docente` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_docente` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_docente` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `correo_docente` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `docente_pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `titulo_docente` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_docente`, `nombre_docente`, `nombre2_docente`, `apellido_docente`, `apellido2_docente`, `cedula_docente`, `telefono_docente`, `correo_docente`, `docente_pass`, `titulo_docente`) VALUES
(2, 'Docente11', 'Docente12', 'Docentea11', 'Docentea12', '1901', '095001', 'docente1@utpl.edu.ec', '1234', 'Ing'),
(3, 'Docente21', 'Docente22', 'Docentea21', 'Docentea22', '1902', '095002', 'docente2@utpl.edu.ec', '1234', 'Ing'),
(4, 'Docente31', 'Docente32', 'Docentea31', 'Docentea32', '1903', '095003', 'docente3@utpl.edu.ec', '1234', 'Ing'),
(5, 'Docente41', 'Docente42', 'Docentea41', 'Docentea42', '1904', '095004', 'docente4@utpl.edu.ec', '1234', 'Ing'),
(6, 'Docente51', 'Docente52', 'Docentea51', 'Docentea52', '1905', '095005', 'docente5@utpl.edu.ec', '1234', 'Ing'),
(7, 'Docente61', 'Docente62', 'Docentea61', 'Docentea62', '1906', '095006', 'docente6@utpl.edu.ec', '1234', 'Ing'),
(8, 'Docente71', 'Docente72', 'Docentea71', 'Docentea72', '1907', '095007', 'docente7@utpl.edu.ec', '1234', 'Ing'),
(9, 'Docente81', 'Docente82', 'Docentea81', 'Docentea82', '1908', '095008', 'docente8@utpl.edu.ec', '1234', 'Ing'),
(10, 'Docente91', 'Docente92', 'Docentea91', 'Docentea92', '1909', '095009', 'docente9@utpl.edu.ec', '1234', 'Ing'),
(11, 'Docente101', 'Docente102', 'Docentea101', 'Docentea102', '1910', '095010', 'docente10@utpl.edu.ec', '1234', 'Ing'),
(12, 'Docente111', 'Docente112', 'Docentea111', 'Docentea112', '1911', '095011', 'docente11@utpl.edu.ec', '1234', 'Ing'),
(13, 'Docente121', 'Docente122', 'Docentea121', 'Docentea122', '1912', '095012', 'docente12@utpl.edu.ec', '1234', 'Ing'),
(14, 'Docente131', 'Docente132', 'Docentea131', 'Docentea132', '1913', '095013', 'docente13@utpl.edu.ec', '1234', 'Ing'),
(15, 'Docente141', 'Docente142', 'Docentea141', 'Docentea142', '1914', '095014', 'docente14@utpl.edu.ec', '1234', 'Ing'),
(16, 'Docente151', 'Docente152', 'Docentea151', 'Docentea152', '1915', '095015', 'docente15@utpl.edu.ec', '1234', 'Ing'),
(17, 'Docente161', 'Docente162', 'Docentea161', 'Docentea162', '1916', '095016', 'docente16@utpl.edu.ec', '1234', 'Ing'),
(18, 'Docente171', 'Docente172', 'Docentea171', 'Docentea172', '1917', '095017', 'docente17@utpl.edu.ec', '4321', 'Ing'),
(19, 'Docente181', 'Docente182', 'Docentea181', 'Docentea182', '1918', '095018', 'docente18@utpl.edu.ec', '4321', 'Ing'),
(20, 'Docente191', 'Docente192', 'Docentea191', 'Docentea192', '1919', '095019', 'docente19@utpl.edu.ec', '4321', 'Ing'),
(21, 'Docente201', 'Docente202', 'Docentea201', 'Docentea202', '1920', '095020', 'docente20@utpl.edu.ec', '4321', 'Ing'),
(22, 'Docente211', 'Docente212', 'Docentea211', 'Docentea212', '1921', '095021', 'docente21@utpl.edu.ec', '4321', 'Ing'),
(23, 'Docente221', 'Docente222', 'Docentea221', 'Docentea222', '1922', '095022', 'docente22@utpl.edu.ec', '4321', 'Ing'),
(24, 'Docente231', 'Docente232', 'Docentea231', 'Docentea232', '1923', '095023', 'docente23@utpl.edu.ec', '4321', 'Ing'),
(25, 'Docente241', 'Docente242', 'Docentea241', '', '1924', '095024', 'docente24@utpl.edu.ec', '4321', 'Ing'),
(26, 'Docente251', 'Docente252', 'Docentea251', 'Docentea252', '1925', '095025', 'docente25@utpl.edu.ec', '4321', 'Ing'),
(27, 'Docente261', 'Docente262', 'Docentea261', 'Docentea262', '1926', '095026', 'docente26@utpl.edu.ec', '4321', 'Ing'),
(28, 'Docente271', 'Docente272', 'Docentea271', 'Docentea272', '1927', '095027', 'docente27@utpl.edu.ec', '4321', 'Ing'),
(29, 'Docente281', 'Docente282', 'Docentea281', 'Docentea282', '1928', '095028', 'docente28@utpl.edu.ec', '4321', 'Ing'),
(30, 'Docente291', 'Docente292', 'Docentea291', 'Docentea292', '1929', '095029', 'docente29@utpl.edu.ec', '4321', 'Ing'),
(31, 'Docente301', 'Docente302', 'Docentea301', 'Docentea302', '1930', '095030', 'docente30@utpl.edu.ec', '4321', 'Ing'),
(32, 'Docente311', 'Docente312', 'Docentea311', 'Docentea312', '1931', '095031', 'docente31@utpl.edu.ec', '4321', 'Ing'),
(33, 'Docente321', 'Docente322', 'Docentea321', 'Docentea322', '1932', '095032', 'docente32@utpl.edu.ec', '4321', 'Ing');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente_paralelo`
--

CREATE TABLE `docente_paralelo` (
  `id_docpar` int(10) NOT NULL,
  `id_docente` int(10) NOT NULL,
  `id_paralelo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `docente_paralelo`
--

INSERT INTO `docente_paralelo` (`id_docpar`, `id_docente`, `id_paralelo`) VALUES
(1, 2, 1),
(2, 3, 2),
(3, 4, 3),
(4, 5, 4),
(5, 6, 5),
(6, 7, 6),
(7, 8, 7),
(8, 9, 8),
(9, 10, 9),
(10, 11, 10),
(11, 12, 11),
(12, 13, 12),
(13, 14, 13),
(14, 15, 14),
(15, 16, 15),
(16, 17, 16),
(17, 18, 17),
(18, 19, 18),
(19, 20, 19),
(20, 21, 20),
(21, 22, 21),
(22, 23, 22),
(23, 24, 23),
(24, 25, 24),
(25, 26, 25),
(26, 27, 26),
(27, 28, 27),
(28, 29, 28),
(29, 30, 29),
(30, 31, 30),
(31, 32, 31),
(32, 33, 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_materia` int(10) NOT NULL,
  `nombre_materia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ciclo` int(2) NOT NULL,
  `id_titulacion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `nombre_materia`, `ciclo`, `id_titulacion`) VALUES
(1, 'Mercado de valores', 10, 1),
(2, 'Valoración de Empresas', 10, 1),
(3, 'Teoría de Acumulación y Crecimiento', 9, 2),
(4, 'Economía Política', 9, 2),
(5, 'Química General', 8, 3),
(6, 'Biología General', 8, 3),
(7, 'Morfofuncional I', 7, 4),
(8, 'Introducción a los estudios médicos', 7, 4),
(9, 'Derecho Constitucional', 6, 5),
(10, 'Introducción al Derecho', 6, 5),
(11, 'Reading and Writing I', 5, 6),
(12, 'Communicative Grammar I', 4, 6),
(13, 'Introducción a la Arquitectura', 3, 7),
(14, 'Dibujo Artístico', 2, 7),
(15, 'Lógica de la Programación', 1, 8),
(16, 'Fundamentos Informáticos', 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paralelo`
--

CREATE TABLE `paralelo` (
  `id_paralelo` int(10) NOT NULL,
  `nombre_paralelo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_materia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `paralelo`
--

INSERT INTO `paralelo` (`id_paralelo`, `nombre_paralelo`, `id_materia`) VALUES
(1, 'A', 1),
(2, 'B', 1),
(3, 'A', 2),
(4, 'B', 2),
(5, 'A', 3),
(6, 'B', 3),
(7, 'A', 4),
(8, 'B', 4),
(9, 'A', 5),
(10, 'B', 5),
(11, 'A', 6),
(12, 'B', 6),
(13, 'A', 7),
(14, 'B', 7),
(15, 'A', 8),
(16, 'B', 8),
(17, 'A', 9),
(18, 'B', 9),
(19, 'A', 10),
(20, 'B', 10),
(21, 'A', 11),
(22, 'B', 11),
(23, 'A', 12),
(24, 'B', 12),
(25, 'A', 13),
(26, 'B', 13),
(27, 'A', 14),
(28, 'B', 14),
(29, 'A', 15),
(30, 'B', 15),
(31, 'A', 16),
(32, 'B', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id_periodo` int(10) NOT NULL,
  `anio` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `detalle` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id_periodo`, `anio`, `detalle`) VALUES
(1, '2017', '2017-2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id_pregunta` int(10) NOT NULL,
  `titulo_pregunta` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `id_prueba` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id_pregunta`, `titulo_pregunta`, `id_prueba`) VALUES
(11, 'Al convertir el numero 11011,111 en decimal, obtenemos:', 17),
(12, 'Al transformar 2505 de decimal a binario, obtenemos:', 17),
(13, 'La mayor parte de funciones que no esta controlada directamente por el sistema operativo, lo esta por:', 17),
(14, '135 en binario es:', 17),
(15, 'Un programa de software esta diseñado para ayudarte a cumplir una tarea especifica se llama:', 17),
(16, 'Si sumamos 18+23, obtenemos en binario:', 17),
(17, 'En la mayoría de computadores, se guarda una pequeña parte del sistema operativo, en:', 17),
(18, 'Cuando el empleado de un banco transfiere dinero a su cuenta, es muy posible que la transacción este siendo almacenada en:', 17),
(20, 'Cual de los siguientes códigos de texto normalizado utiliza 7 byts y es el mas utilizado:', 17),
(25, 'Seleccione el ejemplo mas común de software código abierto:', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `id_prueba` int(10) NOT NULL,
  `codigo_prueba` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_prueba` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `estado_prueba` tinyint(1) NOT NULL,
  `id_docente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`id_prueba`, `codigo_prueba`, `nombre_prueba`, `estado_prueba`, `id_docente`) VALUES
(2, '0001', 'Mercado de valores	A', 0, 33),
(3, '0002', 'Valoracion de Empresas	A', 1, 28),
(4, '0003', 'Teoria de acumulacion y Crecimiento	A', 1, 22),
(5, '0004', 'Economia Politica	A', 1, 10),
(6, '0005', 'Quimica General	A', 0, 15),
(7, '0006', 'Biologia General	A', 1, 17),
(8, '0007', 'Morfofuncional I	A', 0, 3),
(9, '0008', 'Introduccion a los estudios medicos	A', 1, 31),
(10, '0009', 'Derecho Constitucional	A', 1, 32),
(11, '0010', 'Introduccion al derecho	A', 1, 27),
(12, '0011', 'Reading and Writing I	A', 0, 4),
(13, '0012', 'Comunicative Gramar I	A', 1, 13),
(14, '0013', 'Introduccion a la arquitectura	A', 0, 20),
(15, '0014', 'Dibujo artistico	A', 1, 18),
(16, '0015', 'Logica de la programacion	A', 1, 21),
(17, '0016', 'Fundamentos informaticos	A', 1, 30),
(18, '0017', 'Mercado de valores	B', 0, 5),
(19, '0018', 'Valoracion de Empresas	B', 1, 29),
(20, '0019', 'Teoria de acumulacion y Crecimiento	B', 1, 23),
(21, '0020', 'Economia Politica	B', 0, 16),
(22, '0021', 'Quimica General	B', 1, 7),
(23, '0022', 'Biologia General	B', 0, 8),
(24, '0023', 'Morfofuncional I	B', 0, 24),
(25, '0024', 'Introduccion a los estudios medicos	B', 1, 19),
(26, '0025', 'Derecho Constitucional	B', 1, 9),
(27, '0026', 'Introduccion al derecho	B', 0, 25),
(28, '0027', 'Reading and Writing I	B', 1, 11),
(29, '0028', 'Comunicative Gramar I	B', 1, 12),
(30, '0029', 'Introduccion a la arquitectura	B', 0, 2),
(31, '0030', 'Dibujo artistico	B', 1, 14),
(32, '0031', 'Logica de la programacion	B', 0, 6),
(33, '0032', 'Fundamentos informaticos	B', 1, 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `id_respuesta` int(10) NOT NULL,
  `opcion_respuesta` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `verificacion` tinyint(1) NOT NULL,
  `id_pregunta` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`id_respuesta`, `opcion_respuesta`, `verificacion`, `id_pregunta`) VALUES
(1, 'El código ABCD', 0, 20),
(2, 'El codigo EBCDIC', 0, 20),
(3, 'El código ASCII', 1, 20),
(4, '1111111111', 0, 14),
(5, '1201111', 0, 14),
(6, '10000111', 1, 14),
(7, '110111011010', 0, 12),
(8, '101101110101', 0, 12),
(9, '100111001001', 1, 12),
(10, 'RUM', 0, 17),
(11, 'RAM', 0, 17),
(12, 'ROM', 1, 17),
(13, '26,005', 0, 11),
(14, '29,875', 0, 11),
(15, '27,875', 1, 11),
(16, 'Una pagina web', 0, 18),
(17, 'Un servidor de aplicaciones', 0, 18),
(18, 'Un mainframe', 1, 18),
(19, '41', 0, 16),
(20, '100101', 0, 16),
(21, '101001', 1, 16),
(22, 'Software integrado', 0, 13),
(23, 'Firewall', 0, 13),
(24, 'Algoritmos', 1, 13),
(25, 'Navegador', 0, 15),
(26, 'Excel', 0, 15),
(27, 'Aplicacion', 1, 15),
(28, 'Microsoft Windows', 0, 25),
(29, 'Mac OS', 0, 25),
(30, 'Linux', 1, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

CREATE TABLE `resultado` (
  `id_resultado` int(10) NOT NULL,
  `cedula_alumno` int(10) NOT NULL,
  `id_prueba` int(10) NOT NULL,
  `id_pregunta` int(10) NOT NULL,
  `valor` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulacion`
--

CREATE TABLE `titulacion` (
  `id_titulacion` int(10) NOT NULL,
  `nombre_titulacion` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `id_area` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `titulacion`
--

INSERT INTO `titulacion` (`id_titulacion`, `nombre_titulacion`, `id_area`) VALUES
(1, 'Administración de Empresas', 3),
(2, 'Economia', 3),
(3, 'Biología', 4),
(4, 'Medicina', 4),
(5, 'Derecho', 2),
(6, 'Ingles', 2),
(7, 'Arquitectura', 1),
(8, 'Sistemas Informáticos y Computación', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `fk_alumno_discapacidad` (`id_discapacidad`);

--
-- Indices de la tabla `alumno_paralelo`
--
ALTER TABLE `alumno_paralelo`
  ADD PRIMARY KEY (`id_alupar`),
  ADD KEY `fk_alumno_paralelo` (`id_paralelo`),
  ADD KEY `fk_paralelo_alumno` (`id_alumno`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`),
  ADD KEY `fk_area_periodo` (`id_periodo`);

--
-- Indices de la tabla `discapacidad`
--
ALTER TABLE `discapacidad`
  ADD PRIMARY KEY (`id_discapacidad`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id_docente`);

--
-- Indices de la tabla `docente_paralelo`
--
ALTER TABLE `docente_paralelo`
  ADD PRIMARY KEY (`id_docpar`),
  ADD KEY `fk_docente_paralelo` (`id_docente`),
  ADD KEY `fk_paralelo_docente` (`id_paralelo`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`),
  ADD KEY `fk_materia_titulacion` (`id_titulacion`);

--
-- Indices de la tabla `paralelo`
--
ALTER TABLE `paralelo`
  ADD PRIMARY KEY (`id_paralelo`),
  ADD KEY `fk_paralelo_materia` (`id_materia`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id_periodo`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD KEY `fk_pregunta_prueba` (`id_prueba`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`id_prueba`),
  ADD KEY `fk_prueba_docente` (`id_docente`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `fk_respuesta_pregunta` (`id_pregunta`);

--
-- Indices de la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`id_resultado`);

--
-- Indices de la tabla `titulacion`
--
ALTER TABLE `titulacion`
  ADD PRIMARY KEY (`id_titulacion`),
  ADD KEY `fk_titulacion_area` (`id_area`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `alumno_paralelo`
--
ALTER TABLE `alumno_paralelo`
  MODIFY `id_alupar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `discapacidad`
--
ALTER TABLE `discapacidad`
  MODIFY `id_discapacidad` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id_docente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `docente_paralelo`
--
ALTER TABLE `docente_paralelo`
  MODIFY `id_docpar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `paralelo`
--
ALTER TABLE `paralelo`
  MODIFY `id_paralelo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id_pregunta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `prueba`
--
ALTER TABLE `prueba`
  MODIFY `id_prueba` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `id_respuesta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `resultado`
--
ALTER TABLE `resultado`
  MODIFY `id_resultado` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `titulacion`
--
ALTER TABLE `titulacion`
  MODIFY `id_titulacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `fk_alumno_discapacidad` FOREIGN KEY (`id_discapacidad`) REFERENCES `discapacidad` (`id_discapacidad`);

--
-- Filtros para la tabla `alumno_paralelo`
--
ALTER TABLE `alumno_paralelo`
  ADD CONSTRAINT `fk_alumno_paralelo` FOREIGN KEY (`id_paralelo`) REFERENCES `paralelo` (`id_paralelo`),
  ADD CONSTRAINT `fk_paralelo_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`);

--
-- Filtros para la tabla `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `fk_area_periodo` FOREIGN KEY (`id_periodo`) REFERENCES `periodo` (`id_periodo`);

--
-- Filtros para la tabla `docente_paralelo`
--
ALTER TABLE `docente_paralelo`
  ADD CONSTRAINT `fk_docente_paralelo` FOREIGN KEY (`id_docente`) REFERENCES `docente` (`id_docente`),
  ADD CONSTRAINT `fk_paralelo_docente` FOREIGN KEY (`id_paralelo`) REFERENCES `paralelo` (`id_paralelo`);

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `fk_materia_titulacion` FOREIGN KEY (`id_titulacion`) REFERENCES `titulacion` (`id_titulacion`);

--
-- Filtros para la tabla `paralelo`
--
ALTER TABLE `paralelo`
  ADD CONSTRAINT `fk_paralelo_materia` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`);

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `fk_pregunta_prueba` FOREIGN KEY (`id_prueba`) REFERENCES `prueba` (`id_prueba`);

--
-- Filtros para la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD CONSTRAINT `fk_prueba_docente` FOREIGN KEY (`id_docente`) REFERENCES `docente` (`id_docente`);

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `fk_respuesta_pregunta` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta` (`id_pregunta`);

--
-- Filtros para la tabla `titulacion`
--
ALTER TABLE `titulacion`
  ADD CONSTRAINT `fk_titulacion_area` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
