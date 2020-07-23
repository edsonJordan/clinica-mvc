-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2019 a las 18:07:17
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_clinica`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserta_tbcliente` (IN `_name_cliente` VARCHAR(40), IN `_apellido_paterno` VARCHAR(25), IN `_apellido_materno` VARCHAR(25), IN `_pass` VARCHAR(60), IN `_dni` VARCHAR(40), IN `_domicilio` BIGINT(12), IN `_pais` VARCHAR(35), IN `_telefono` INT(12), IN `_correo` VARCHAR(30), IN `_sexo` TINYINT(1))  NO SQL
BEGIN
    INSERT INTO tb_cliente (name_cliente, apellido_paterno, apellido_materno, pass, dni, domicilio, pais, telefono, correo, sexo) VALUES (_name_cliente, _apellido_paterno, _apellido_materno, _pass, _dni, _domicilio, _pais, _telefono, _correo, _sexo);
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `prueba` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`prueba`) VALUES
(3),
(3.123),
(100),
(100.222),
(400.111),
(2.1232),
(350.233),
(400.112);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `cod_cliente` int(11) NOT NULL,
  `name_cliente` varchar(40) NOT NULL,
  `apellido_paterno` varchar(25) NOT NULL,
  `apellido_materno` varchar(25) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `dni` varchar(40) DEFAULT NULL,
  `domicilio` varchar(60) DEFAULT NULL,
  `pais` varchar(35) NOT NULL,
  `telefono` int(12) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `sexo` int(1) NOT NULL,
  `foto` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_cliente`
--

INSERT INTO `tb_cliente` (`cod_cliente`, `name_cliente`, `apellido_paterno`, `apellido_materno`, `pass`, `dni`, `domicilio`, `pais`, `telefono`, `correo`, `sexo`, `foto`) VALUES
(1, 'edson', 'Huamani', 'Ñahuin', '$2y$10$RDO.iQ4y/wzy5xG4Vdzzt.2/f9rwEC9jaSvGwEnN5a7c3u6snh7re', '48570568', '1232131221', 'PE', 975549039, 'edson_4555@hotmail.com', 1, NULL),
(2, 'jose', 'perales', 'gomez', '$2y$10$r6mxmqKGnE8qyhQ.mdXJ9.RDdLl.C3VuRHH.txSsx2qNU9yt0SZlG', '32423423', 'domicilio', 'PE', 1474014, 'edson_45@hotmail.com', 1, NULL),
(3, 'juan', 'huamani', 'huamani', '$2y$10$pjvC2Orr7pzYjxifixCuOOg1jLA8vCW0r7sZB0czm.4AiDJHjq/ue', '98868223', 'werwe', 'AT', 42422442, 'edson@hotmail.com', 1, NULL),
(4, 'jose antonio', 'robles', 'alvares', '$2y$10$Zm9nIPd7RB.hyS1HhKHKs.h1O2ndiR24Y8/oO0nS8AzEdDrIKCfJq', '48570568', '0', 'PE', 989783746, 'jose_4555@hotmail.com', 1, NULL),
(5, 'juan', 'askldklas', 'asdkldaslkl', '$2y$10$2PTwLwBtKOquvVH9R03xCOdvRZHLotZErs59DgSoSeMS9WXk/mV/K', '42342323', '0', 'AT', 989878938, 'edson_4444@hotmail.com', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_detalle_cliente`
--

CREATE TABLE `tb_detalle_cliente` (
  `id` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  `cod_permiso` int(11) NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_detalle_cliente`
--

INSERT INTO `tb_detalle_cliente` (`id`, `cod_cliente`, `cod_permiso`, `created_at`) VALUES
(1, 1, 4, '2019-10-16 01:58:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_examen_heces`
--

CREATE TABLE `tb_examen_heces` (
  `cod_examen_heces` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  `cod_atencion` varchar(30) NOT NULL,
  `fecha_ingresado` datetime NOT NULL,
  `fecha_reportado` datetime NOT NULL,
  `consistencia` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `moco` char(1) NOT NULL,
  `sangre_macroscopica` char(1) NOT NULL,
  `reaccion_ph` varchar(40) NOT NULL,
  `celulas_vegetales` varchar(15) NOT NULL,
  `almidones` varchar(15) NOT NULL,
  `fibras_musculares` varchar(15) NOT NULL,
  `grasas_neutras` varchar(15) NOT NULL,
  `jabones` varchar(15) NOT NULL,
  `acidos_grasos` varchar(15) NOT NULL,
  `levaduras` varchar(15) NOT NULL,
  `eritrocitos` int(1) NOT NULL,
  `leucocitos` int(1) NOT NULL,
  `celulas_epiteliales` int(1) NOT NULL,
  `inv_parasitos` int(1) NOT NULL,
  `resultado` int(1) NOT NULL,
  `sangre_oculta` int(1) NOT NULL,
  `transferrina` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_examen_heces`
--

INSERT INTO `tb_examen_heces` (`cod_examen_heces`, `cod_cliente`, `cod_atencion`, `fecha_ingresado`, `fecha_reportado`, `consistencia`, `color`, `moco`, `sangre_macroscopica`, `reaccion_ph`, `celulas_vegetales`, `almidones`, `fibras_musculares`, `grasas_neutras`, `jabones`, `acidos_grasos`, `levaduras`, `eritrocitos`, `leucocitos`, `celulas_epiteliales`, `inv_parasitos`, `resultado`, `sangre_oculta`, `transferrina`) VALUES
(33, 1, 'asdsa', '2019-10-04 10:08:00', '2019-10-11 11:06:00', 'asdas', 'asd', '1', '1', 'asds', 'ESCASOS', 'ESCASOS', 'REGULAR', 'REGULAR', 'ESCASOS', 'ESCASOS', 'REGULAR', 0, 0, 0, 0, 0, 0, 0),
(35, 2, 'adas', '2019-10-07 11:45:00', '2019-10-03 10:11:00', 'asdasd', 'saddsa', '0', '0', 'dsaasd', 'ABUNDANTE', 'ESCASOS', 'REGULAR', 'REGULAR', 'REGULAR', 'ABUNDANTE', 'REGULAR', 0, 1, 1, 0, 1, 1, 0),
(36, 3, 'adas', '2019-10-07 11:45:00', '2019-10-03 10:11:00', 'asdasd', 'saddsa', '0', '0', 'dsaasd', 'ABUNDANTE', 'ESCASOS', 'REGULAR', 'REGULAR', 'REGULAR', 'ABUNDANTE', 'REGULAR', 0, 1, 1, 0, 1, 1, 0),
(37, 2, 'adas', '2019-10-07 11:45:00', '2019-10-03 10:11:00', 'asdasd', 'saddsa', '0', '0', 'dsaasd', 'ABUNDANTE', 'ESCASOS', 'REGULAR', 'REGULAR', 'REGULAR', 'ABUNDANTE', 'REGULAR', 0, 1, 1, 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_examen_hemograma`
--

CREATE TABLE `tb_examen_hemograma` (
  `cod_examen_hemograma` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  `cod_atencion` varchar(15) NOT NULL,
  `fecha_ingresado` datetime NOT NULL,
  `fecha_reportado` datetime NOT NULL,
  `hematocrito` double NOT NULL,
  `hemoglobina` double NOT NULL,
  `recuento_leucocitos` double NOT NULL,
  `vsg` varchar(10) NOT NULL,
  `metamielocitos` double NOT NULL,
  `abastonados` double NOT NULL,
  `segmentados` double NOT NULL,
  `neutrofilos` double NOT NULL,
  `eosinofilos` double NOT NULL,
  `basofilos` double NOT NULL,
  `monocitos` double NOT NULL,
  `linfocitos` double NOT NULL,
  `linfocitos_activos` double DEFAULT NULL,
  `hipocromia` char(1) NOT NULL,
  `microcitosis` char(1) NOT NULL,
  `anisocitosis` char(1) NOT NULL,
  `macrocitosis` char(1) NOT NULL,
  `crenocitos` char(1) NOT NULL,
  `poiquilocitosis` char(1) NOT NULL,
  `policromatofilia` char(1) NOT NULL,
  `normoblastos` int(3) NOT NULL,
  `normoblastos_detalle` varchar(50) NOT NULL,
  `serie_plaquetaria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_examen_hemograma`
--

INSERT INTO `tb_examen_hemograma` (`cod_examen_hemograma`, `cod_cliente`, `cod_atencion`, `fecha_ingresado`, `fecha_reportado`, `hematocrito`, `hemoglobina`, `recuento_leucocitos`, `vsg`, `metamielocitos`, `abastonados`, `segmentados`, `neutrofilos`, `eosinofilos`, `basofilos`, `monocitos`, `linfocitos`, `linfocitos_activos`, `hipocromia`, `microcitosis`, `anisocitosis`, `macrocitosis`, `crenocitos`, `poiquilocitosis`, `policromatofilia`, `normoblastos`, `normoblastos_detalle`, `serie_plaquetaria`) VALUES
(14, 2, 'aea', '2019-10-07 11:45:00', '2019-10-16 11:01:00', 4, 0.4, 0.4, '0.3', 0.5, 0.4, 0.3, 0.3, 0.3, 0.3, 0.5, 0.4, 0.4, '0', '1', '0', '0', '0', '1', '0', 0, 'rttrere', 0.4),
(15, 4, 'prueba', '2019-10-07 11:45:00', '2019-10-16 11:01:00', 4, 0.4, 0.4, '0.3', 0.5, 0.4, 0.3, 0.3, 0.3, 0.3, 0.5, 0.4, 0.4, '0', '1', '0', '0', '0', '1', '0', 0, 'rttrere', 0.4),
(16, 3, 'aea', '2019-10-04 10:08:00', '2019-10-04 10:09:00', 9, 0.6, 0.7, '0.5', 0.5, 0.5, 0.1, 0.3, 0.3, 0.3, 0.4, 0.3, 0.5, '0', '1', '0', '0', '0', '1', '1', 1, 'sdfds', 0.3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_examen_orina`
--

CREATE TABLE `tb_examen_orina` (
  `cod_examen_orina` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  `cod_atencion` varchar(20) NOT NULL,
  `fecha_ingresado` datetime NOT NULL,
  `fecha_reportado` datetime NOT NULL,
  `colesterol` int(4) NOT NULL,
  `hdl_colesterol` int(4) NOT NULL,
  `vldl_colesterol` int(4) NOT NULL,
  `trigliceridos` int(4) NOT NULL,
  `color` varchar(30) NOT NULL,
  `aspecto` varchar(50) NOT NULL,
  `densidad` double NOT NULL,
  `ph` varchar(30) NOT NULL,
  `glucosa` char(1) NOT NULL,
  `bilirrubina` char(1) NOT NULL,
  `cuerpos_cetonicos` char(1) NOT NULL,
  `proteinas` char(1) NOT NULL,
  `urobilinogeno` char(1) NOT NULL,
  `nitritos` char(1) NOT NULL,
  `hemoglobina` char(1) NOT NULL,
  `sangre` char(1) NOT NULL,
  `leucocitos_bioqui` char(1) NOT NULL,
  `leucocitos_micro` varchar(10) NOT NULL,
  `hematies` varchar(20) NOT NULL,
  `celulas` varchar(20) NOT NULL,
  `germenes` varchar(30) NOT NULL,
  `glucosa_basal` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_examen_orina`
--

INSERT INTO `tb_examen_orina` (`cod_examen_orina`, `cod_cliente`, `cod_atencion`, `fecha_ingresado`, `fecha_reportado`, `colesterol`, `hdl_colesterol`, `vldl_colesterol`, `trigliceridos`, `color`, `aspecto`, `densidad`, `ph`, `glucosa`, `bilirrubina`, `cuerpos_cetonicos`, `proteinas`, `urobilinogeno`, `nitritos`, `hemoglobina`, `sangre`, `leucocitos_bioqui`, `leucocitos_micro`, `hematies`, `celulas`, `germenes`, `glucosa_basal`) VALUES
(5, 3, 'asdasd', '2019-10-03 10:11:00', '2019-10-03 10:11:00', 3, 4, 4, 4, 'asddsa', 'asdsa', 0.03, 'sadsa', '0', '1', '0', '0', '1', '0', '0', '0', '0', 'asdas', 'asdas', 'REGULAR', 'ESCASOS', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_permiso`
--

CREATE TABLE `tb_permiso` (
  `cod_permiso` int(11) NOT NULL,
  `permiso` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_permiso`
--

INSERT INTO `tb_permiso` (`cod_permiso`, `permiso`) VALUES
(1, 'administrador'),
(2, 'enfermera'),
(3, 'doctor'),
(4, 'paciente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`cod_cliente`);

--
-- Indices de la tabla `tb_detalle_cliente`
--
ALTER TABLE `tb_detalle_cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod_cliente` (`cod_cliente`),
  ADD KEY `cod_permiso` (`cod_permiso`);

--
-- Indices de la tabla `tb_examen_heces`
--
ALTER TABLE `tb_examen_heces`
  ADD PRIMARY KEY (`cod_examen_heces`),
  ADD KEY `cod_cliente` (`cod_cliente`);

--
-- Indices de la tabla `tb_examen_hemograma`
--
ALTER TABLE `tb_examen_hemograma`
  ADD PRIMARY KEY (`cod_examen_hemograma`),
  ADD KEY `cod_cliente` (`cod_cliente`);

--
-- Indices de la tabla `tb_examen_orina`
--
ALTER TABLE `tb_examen_orina`
  ADD PRIMARY KEY (`cod_examen_orina`),
  ADD KEY `cod_cliente` (`cod_cliente`);

--
-- Indices de la tabla `tb_permiso`
--
ALTER TABLE `tb_permiso`
  ADD PRIMARY KEY (`cod_permiso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tb_detalle_cliente`
--
ALTER TABLE `tb_detalle_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tb_examen_heces`
--
ALTER TABLE `tb_examen_heces`
  MODIFY `cod_examen_heces` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `tb_examen_hemograma`
--
ALTER TABLE `tb_examen_hemograma`
  MODIFY `cod_examen_hemograma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `tb_examen_orina`
--
ALTER TABLE `tb_examen_orina`
  MODIFY `cod_examen_orina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tb_permiso`
--
ALTER TABLE `tb_permiso`
  MODIFY `cod_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_detalle_cliente`
--
ALTER TABLE `tb_detalle_cliente`
  ADD CONSTRAINT `tb_detalle_cliente_ibfk_1` FOREIGN KEY (`cod_cliente`) REFERENCES `tb_cliente` (`cod_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detalle_cliente_ibfk_2` FOREIGN KEY (`cod_permiso`) REFERENCES `tb_permiso` (`cod_permiso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_examen_heces`
--
ALTER TABLE `tb_examen_heces`
  ADD CONSTRAINT `tb_examen_heces_ibfk_1` FOREIGN KEY (`cod_cliente`) REFERENCES `tb_cliente` (`cod_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_examen_hemograma`
--
ALTER TABLE `tb_examen_hemograma`
  ADD CONSTRAINT `tb_examen_hemograma_ibfk_1` FOREIGN KEY (`cod_cliente`) REFERENCES `tb_cliente` (`cod_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_examen_orina`
--
ALTER TABLE `tb_examen_orina`
  ADD CONSTRAINT `tb_examen_orina_ibfk_1` FOREIGN KEY (`cod_cliente`) REFERENCES `tb_cliente` (`cod_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
