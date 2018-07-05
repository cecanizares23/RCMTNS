-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 05, 2018 at 04:18 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rcmtns`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE `app_users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `app_users`
--

INSERT INTO `app_users` (`id`, `username`, `password`, `email`, `is_active`) VALUES
(3, 'admin', 'admin', 'carlos22iva@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `candidata`
--

CREATE TABLE `candidata` (
  `id` int(11) NOT NULL,
  `tipo_doc` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cual_tipo_doc` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_id` int(11) DEFAULT NULL,
  `nombres` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_nacimiento` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado_civil` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hijos` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nivel_estudios` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ultimo_titulo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_titulo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actualmente_estudia` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `que_estudia` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_titulo_obtener` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actualmente_trabaja` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sector_laboral` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cual_sector` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negocio_propio` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forma_trabajo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_empresa` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ha_trabajado` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiempo_desempleo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conoce_tic` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usa_tic` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entretenimiento_uso` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redes_uso` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo_uso` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compras_uso` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ventas_uso` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comunicaion_uso` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educacion_uso` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banco_uso` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `servicios_publicos_uso` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tramites_uso` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otro_uso` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interes_tic` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entretenimiento_interes` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redes_interes` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo_interes` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compras_interes` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ventas_interes` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comunicacion_interes` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educacion_interes` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banco_interes` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `servicios_publicos_interes` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tramites_interes` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desinteres_tic` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cual_desinteres` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cual_interes` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidata_tipo_candidata`
--

CREATE TABLE `candidata_tipo_candidata` (
  `candidata_id` int(11) NOT NULL,
  `tipo_candidata_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20180602164756'),
('20180602185456'),
('20180602204106'),
('20180602205246'),
('20180602211723'),
('20180602211947'),
('20180602214804'),
('20180602214945');

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`id`, `nombre`) VALUES
(1, 'ROLE_ADMIN'),
(2, 'ROLE_USER');

-- --------------------------------------------------------

--
-- Table structure for table `socio`
--

CREATE TABLE `socio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nit` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `representante` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula_representante` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo_representante` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_representante` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `tipo_socio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socio_tipo_aporte`
--

CREATE TABLE `socio_tipo_aporte` (
  `socio_id` int(11) NOT NULL,
  `tipo_aporte_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_aporte`
--

CREATE TABLE `tipo_aporte` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_candidata`
--

CREATE TABLE `tipo_candidata` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tipo_candidata`
--

INSERT INTO `tipo_candidata` (`id`, `nombre`) VALUES
(1, 'Familiar'),
(2, 'Profesional'),
(3, 'Estudiante'),
(4, 'Laboral'),
(5, 'Empresaria');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_socio`
--

CREATE TABLE `tipo_socio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_rol`
--

CREATE TABLE `user_rol` (
  `user_id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_rol`
--

INSERT INTO `user_rol` (`user_id`, `rol_id`) VALUES
(3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C2502824F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_C2502824E7927C74` (`email`);

--
-- Indexes for table `candidata`
--
ALTER TABLE `candidata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidata_tipo_candidata`
--
ALTER TABLE `candidata_tipo_candidata`
  ADD PRIMARY KEY (`candidata_id`,`tipo_candidata_id`),
  ADD KEY `IDX_BC7193FA1EDF10D6` (`candidata_id`),
  ADD KEY `IDX_BC7193FAAD8C4ED6` (`tipo_candidata_id`);

--
-- Indexes for table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socio`
--
ALTER TABLE `socio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_38B65309CC1BC60` (`tipo_socio_id`);

--
-- Indexes for table `socio_tipo_aporte`
--
ALTER TABLE `socio_tipo_aporte`
  ADD PRIMARY KEY (`socio_id`,`tipo_aporte_id`),
  ADD KEY `IDX_68F3B33BDA04E6A9` (`socio_id`),
  ADD KEY `IDX_68F3B33B4191624D` (`tipo_aporte_id`);

--
-- Indexes for table `tipo_aporte`
--
ALTER TABLE `tipo_aporte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_candidata`
--
ALTER TABLE `tipo_candidata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_socio`
--
ALTER TABLE `tipo_socio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_rol`
--
ALTER TABLE `user_rol`
  ADD PRIMARY KEY (`user_id`,`rol_id`),
  ADD KEY `IDX_E5435EBCA76ED395` (`user_id`),
  ADD KEY `IDX_E5435EBC4BAB96C` (`rol_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `candidata`
--
ALTER TABLE `candidata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socio`
--
ALTER TABLE `socio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tipo_aporte`
--
ALTER TABLE `tipo_aporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipo_candidata`
--
ALTER TABLE `tipo_candidata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tipo_socio`
--
ALTER TABLE `tipo_socio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidata_tipo_candidata`
--
ALTER TABLE `candidata_tipo_candidata`
  ADD CONSTRAINT `FK_BC7193FA1EDF10D6` FOREIGN KEY (`candidata_id`) REFERENCES `candidata` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BC7193FAAD8C4ED6` FOREIGN KEY (`tipo_candidata_id`) REFERENCES `tipo_candidata` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `socio`
--
ALTER TABLE `socio`
  ADD CONSTRAINT `FK_38B65309CC1BC60` FOREIGN KEY (`tipo_socio_id`) REFERENCES `tipo_socio` (`id`);

--
-- Constraints for table `socio_tipo_aporte`
--
ALTER TABLE `socio_tipo_aporte`
  ADD CONSTRAINT `FK_68F3B33B4191624D` FOREIGN KEY (`tipo_aporte_id`) REFERENCES `tipo_aporte` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_68F3B33BDA04E6A9` FOREIGN KEY (`socio_id`) REFERENCES `socio` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_rol`
--
ALTER TABLE `user_rol`
  ADD CONSTRAINT `FK_E5435EBC4BAB96C` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E5435EBCA76ED395` FOREIGN KEY (`user_id`) REFERENCES `app_users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
