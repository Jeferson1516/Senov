-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2018 a las 21:21:12
-- Versión del servidor: 5.7.21-log
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `senov`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `all_news`
--

CREATE TABLE `all_news` (
  `documento` varchar(15) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `ficha` varchar(30) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `acta` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `all_news`
--

INSERT INTO `all_news` (`documento`, `nombre`, `apellido`, `email`, `telefono`, `ficha`, `tipo`, `acta`, `fecha`, `estado`) VALUES
('1030659553', 'jeferson', 'fuentes', 'jfuentes@misena.edu.co', '4331311', '1438303-G1', 'cambio-jornada', 'ba776a_CANCELACION MATRICULA.doc', '2018-04-16', '1'),
('1233695162', 'kevin', 'Meneses', 'galindoll@gmail.com', '4881311', '1438299 G1-G2', 'desercion', 'd9058c_PARALELO  LENGUAJE CORPORAL.docx', '2018-06-15', '3'),
('12345675', 'juan', 'ortiz', 'elvergalargito@gmail.com', '4801311', '1438303-G1', '', '4e1e29_ACTA DE REINGRESO 2018.docx', '2018-04-18', '1'),
('123456789', 'pepe', 'juan', 'elvergalarga@gmail.com', '123456', '1438303-G1', '', 'd21d76_ACTA DE REINGRESO 2018.docx', '2018-04-17', '1'),
('1236565162', 'Kevin', 'Galindo', 'gmd06@misena.edu.co', '4331311', '1438303-G1', '', 'c33621_ACTA DE REINGRESO 2018.docx', '2018-04-17', '1'),
('1238985162', 'Kevin', 'Galindoo', 'mafelvt123@hotmail.com', '4186954', '1438303-G1', '', 'e47111_Encuesta google fp.docx', '2018-05-28', '2'),
('125697453', 'Kevin', 'Galindo', 'correo@gmail.com', '41882369', '1438672 G1\r\n', 'aplazamineto', '162ca8_Documento taller  3 JAVA-KEVIN GALINDO.docx', '2018-06-21', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplazamiento`
--

CREATE TABLE `aplazamiento` (
  `id_aplazamiento` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `causa` varchar(255) NOT NULL,
  `ficha` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `identificacion` varchar(12) NOT NULL,
  `tiempo_aplazado` date NOT NULL,
  `registro_aplazamiento` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cambiojornada`
--

CREATE TABLE `cambiojornada` (
  `id_cambiojornada` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `trimestre` tinyint(3) UNSIGNED NOT NULL,
  `ficha` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `identificacion` varchar(12) NOT NULL,
  `motivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancelacionmatricula`
--

CREATE TABLE `cancelacionmatricula` (
  `id_cancelacionmatricula` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `ficha` varchar(10) NOT NULL,
  `identificacion` varchar(12) NOT NULL,
  `motivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `tipo_cargo` varchar(20) NOT NULL,
  `codigo_carog` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deserciones`
--

CREATE TABLE `deserciones` (
  `id_deserciones` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `ficha` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `identificacion` varchar(12) NOT NULL,
  `motivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato`
--

CREATE TABLE `formato` (
  `codigo_formato` int(10) UNSIGNED NOT NULL,
  `nombre_novedad` varchar(100) NOT NULL,
  `enlace_formato` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `formato`
--

INSERT INTO `formato` (`codigo_formato`, `nombre_novedad`, `enlace_formato`) VALUES
(1, 'ACTA DE REINGRESO 2018', 'ACTA DE REINGRESO 2018.docx'),
(2, 'ACTA TRASLADO DE FICHA', 'ACTA TRASLADO DE FICHA.docx'),
(3, 'ACTO ACADÉMICO APLAZAMIENTO 2018', 'ACTO ACADÉMICO APLAZAMIENTO 2018.docx'),
(4, 'ACTO ACADÉMICO CANCELACIÓN DE MATRICULA POR DESERCIÓN', 'ACTO ACADÉMICO CANCELACIÓN DE MATRICULA POR DESERCIÓN.doc'),
(5, 'ACTO ACADÉMICO REINTEGRO 2018', 'ACTO ACADÉMICO REINTEGRO 2018.docx'),
(6, 'ACTO ACADÉMICO RETIRO VOLUNTARIO 2018 ', 'ACTO ACADÉMICO RETIRO VOLUNTARIO 2018.docx'),
(7, 'ACTO DESERCION', 'ACTO DESERCION.docx'),
(8, 'CANCELACION MATRICULA', 'CANCELACION MATRICULA.doc'),
(9, 'CONDICIONAMIENTO MATRICULA\r\n', 'CONDICIONAMIENTO MATRICULA.docx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE `novedades` (
  `id_novedades` int(11) UNSIGNED NOT NULL,
  `id_aplazamiento` int(11) NOT NULL,
  `id_reingreso` int(11) NOT NULL,
  `id_cambiojornada` int(11) NOT NULL,
  `id_retirovoluntario` int(11) NOT NULL,
  `id_deserciones` int(11) NOT NULL,
  `id_traslado` int(11) NOT NULL,
  `id_cancelacionmatricula` int(11) NOT NULL,
  `id_registro` int(11) NOT NULL,
  `tipo_novedad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_registro` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `identificacion` varchar(12) NOT NULL,
  `cargo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reingreso`
--

CREATE TABLE `reingreso` (
  `id_reingreso` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `trimestre` tinyint(3) UNSIGNED NOT NULL,
  `ficha` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `identificacion` varchar(12) NOT NULL,
  `registro_aplazamiento` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retirovoluntario`
--

CREATE TABLE `retirovoluntario` (
  `id_retirovoluntario` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `trimestre` tinyint(4) NOT NULL,
  `ficha` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `identificacion` varchar(12) NOT NULL,
  `motivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramite`
--

CREATE TABLE `tramite` (
  `id_tramite` int(10) UNSIGNED NOT NULL,
  `estado_tramite` varchar(20) NOT NULL,
  `tipo_formato` varchar(20) NOT NULL,
  `requisitos_tramite` varchar(50) NOT NULL,
  `seguridad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traslado`
--

CREATE TABLE `traslado` (
  `id_traslado` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `trimestre` tinyint(4) NOT NULL,
  `ficha` varchar(10) NOT NULL,
  `sede` tinyint(4) NOT NULL,
  `identificacion` varchar(12) NOT NULL,
  `motivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_admin`
--

CREATE TABLE `usuarios_admin` (
  `documento` varchar(15) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `cargo` char(1) NOT NULL,
  `password` varchar(250) NOT NULL,
  `intentos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios_admin`
--

INSERT INTO `usuarios_admin` (`documento`, `nombre`, `apellido`, `email`, `telefono`, `cargo`, `password`, `intentos`) VALUES
('1024785963', 'Daniel', 'Castañeda', 'daniel32@misena.edu.co', '3102589634', '3', 'wyLqdvcYfF', 0),
('1025639874', 'Geraldine', 'Rodriguez', 'geraldine@gmail.com', '3202516487', '2', 'ZwzuaRQMUE', 0),
('1030659553', 'Jeferson', 'Fuentes', 'jfuentes35@misena.edu.co', '3213062227', '3', '123', 0),
('1233695162', 'Kevin', 'Galindo', 'kjgalindo06@misena.edu.co', '4801311', '1', '123', 0),
('1234567890', 'Andres', 'Arboleda', 'andres145@gmail.com', '3201547896', '2', 'tqQxY3c5P8', 0),
('1258963472', 'Santiago', 'Torres', 'santiago@misena.edu.co', '3142508967', '2', 'rQDaCJ2ip4', 0),
('13246574', 'Kevin', 'Galindo', 'nuevocorreo@correo.com', '123456', '1', 'zmf2qyFVNG', 0),
('1354206987', 'Cristian', 'Lorenzo', 'cristian56@gmail.com', '3241025698', '3', 'TWRM0CjSB1', 0),
('1478965230', 'Kevin', 'Fuentes', 'edpf.sena@gmail.com', '3213062227', '3', 'GWwN2faQ0u', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `validacion`
--

CREATE TABLE `validacion` (
  `id_tramite` int(10) UNSIGNED NOT NULL,
  `requisitos_tramite` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `all_news`
--
ALTER TABLE `all_news`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `aplazamiento`
--
ALTER TABLE `aplazamiento`
  ADD PRIMARY KEY (`id_aplazamiento`);

--
-- Indices de la tabla `cambiojornada`
--
ALTER TABLE `cambiojornada`
  ADD PRIMARY KEY (`id_cambiojornada`);

--
-- Indices de la tabla `cancelacionmatricula`
--
ALTER TABLE `cancelacionmatricula`
  ADD PRIMARY KEY (`id_cancelacionmatricula`);

--
-- Indices de la tabla `deserciones`
--
ALTER TABLE `deserciones`
  ADD PRIMARY KEY (`id_deserciones`);

--
-- Indices de la tabla `formato`
--
ALTER TABLE `formato`
  ADD PRIMARY KEY (`codigo_formato`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_registro`);

--
-- Indices de la tabla `reingreso`
--
ALTER TABLE `reingreso`
  ADD PRIMARY KEY (`id_reingreso`);

--
-- Indices de la tabla `retirovoluntario`
--
ALTER TABLE `retirovoluntario`
  ADD PRIMARY KEY (`id_retirovoluntario`);

--
-- Indices de la tabla `tramite`
--
ALTER TABLE `tramite`
  ADD PRIMARY KEY (`id_tramite`);

--
-- Indices de la tabla `traslado`
--
ALTER TABLE `traslado`
  ADD PRIMARY KEY (`id_traslado`);

--
-- Indices de la tabla `usuarios_admin`
--
ALTER TABLE `usuarios_admin`
  ADD PRIMARY KEY (`documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aplazamiento`
--
ALTER TABLE `aplazamiento`
  MODIFY `id_aplazamiento` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cambiojornada`
--
ALTER TABLE `cambiojornada`
  MODIFY `id_cambiojornada` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cancelacionmatricula`
--
ALTER TABLE `cancelacionmatricula`
  MODIFY `id_cancelacionmatricula` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `deserciones`
--
ALTER TABLE `deserciones`
  MODIFY `id_deserciones` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formato`
--
ALTER TABLE `formato`
  MODIFY `codigo_formato` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_registro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reingreso`
--
ALTER TABLE `reingreso`
  MODIFY `id_reingreso` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `retirovoluntario`
--
ALTER TABLE `retirovoluntario`
  MODIFY `id_retirovoluntario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tramite`
--
ALTER TABLE `tramite`
  MODIFY `id_tramite` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `traslado`
--
ALTER TABLE `traslado`
  MODIFY `id_traslado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
