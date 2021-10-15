-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2019 a las 18:25:56
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cef152`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_eventos`
--

CREATE TABLE `imagenes_eventos` (
  `id_imagen` int(11) NOT NULL,
  `imagen` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `thumbnail` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `imagenes_eventos`
--

INSERT INTO `imagenes_eventos` (`id_imagen`, `imagen`, `thumbnail`, `id_evento`) VALUES
(101, '1568375626_bcb2.jpg', '', 11),
(102, '1568375626_bcb4.jpg', '', 11),
(103, '1568375626_bcb6.jpg', '', 11),
(104, '1568375626_bcb10.jpg', '', 11),
(105, '1568375626_bcb11.jpg', '', 11),
(106, '1568375626_bcb15.jpg', '', 11),
(107, '1568375626_bcb18.jpg', '', 11),
(108, '1568375626_bcb28.jpg', '', 11),
(109, '1568376102_fmc2.jpg', '', 9),
(110, '1568376102_fmc5.jpg', '', 9),
(111, '1568376102_fmc7.jpg', '', 9),
(112, '1568376102_fmc8.jpg', '', 9),
(113, '1568376102_fmc10.jpg', '', 9),
(114, '1568376102_fmc13.jpg', '', 9),
(115, '1568376102_fmc18.jpg', '', 9),
(116, '1568376102_fmc21.jpg', '', 9),
(118, '1568376966_fm1.jpg', '', 10),
(119, '1568376966_fm3.jpg', '', 10),
(120, '1568376966_fm4.jpg', '', 10),
(121, '1568376966_fm5.jpg', '', 10),
(122, '1568376967_fm7.jpg', '', 10),
(123, '1568376967_fm9.jpg', '', 10),
(124, '1568376967_fm10.jpg', '', 10),
(125, '1568376967_fm12.jpg', '', 10),
(132, '1568382670_muestragim.jpg', '', 16),
(133, '1568382670_muestragim2.jpg', '', 16),
(134, '1568382670_muestragim3.jpg', '', 16),
(135, '1568383210_cancer.jpg', '', 17),
(136, '1568383210_cancer2.jpg', '', 17),
(137, '1568383210_cancer3.jpg', '', 17),
(138, '1568383210_cancer4.jpg', '', 17),
(149, '1568383607_diadelnino2.jpg', '', 18),
(150, '1568383607_diadelnino3.jpg', '', 18),
(151, '1568383607_diadelnino4.jpg', '', 18),
(152, '1568383607_diadelnino.jpg', '', 18),
(153, '1568383607_dia-del-nino.jpg', '', 18),
(159, '1568384460_baila.jpg', '', 20),
(160, '1568384460_baila2.jpg', '', 20),
(161, '1568384460_baila3.jpg', '', 20),
(162, '1568384461_baila4.jpg', '', 20),
(175, '1569594171_aqua.jpg', '1569594171_thumb_aqua.jpg', 15),
(176, '1569594171_aqua2.jpg', '1569594171_thumb_aqua2.jpg', 15),
(177, '1569594172_aqua3.jpg', '1569594172_thumb_aqua3.jpg', 15),
(178, '1569594172_aqua4.jpg', '1569594172_thumb_aqua4.jpg', 15),
(179, '1569594491_zumba2.0.jpg', '1569594491_thumb_zumba2.0.jpg', 19),
(180, '1569594491_zumbaanuncio2.jpg', '1569594491_thumb_zumbaanuncio2.jpg', 19),
(181, '1569594492_zumbathon.jpg', '1569594492_thumb_zumbathon.jpg', 19),
(182, '1569594492_zumbathon2.jpg', '1569594492_thumb_zumbathon2.jpg', 19),
(183, '1569594492_zumbathon3.jpg', '1569594492_thumb_zumbathon3.jpg', 19),
(184, '1569594493_zumbathon4.jpg', '1569594493_thumb_zumbathon4.jpg', 19);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes_eventos`
--
ALTER TABLE `imagenes_eventos`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `id_evento` (`id_evento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes_eventos`
--
ALTER TABLE `imagenes_eventos`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenes_eventos`
--
ALTER TABLE `imagenes_eventos`
  ADD CONSTRAINT `imagenes_eventos_ibfk_1` FOREIGN KEY (`id_evento`) REFERENCES `eventos` (`id_evento`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
