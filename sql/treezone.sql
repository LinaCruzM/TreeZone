-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 06:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `treezone`
--

-- --------------------------------------------------------

--
-- Table structure for table `aire`
--

CREATE TABLE `aire` (
  `id` int(11) NOT NULL,
  `nivel` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aire`
--

INSERT INTO `aire` (`id`, `nivel`, `fecha`) VALUES
(1, '1', '2023-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `arboles`
--

CREATE TABLE `arboles` (
  `id` int(11) NOT NULL,
  `cantidad` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `arboles`
--

INSERT INTO `arboles` (`id`, `cantidad`, `fecha`) VALUES
(1, '1', '2023-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `ciudad`
--

CREATE TABLE `ciudad` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ciudad`
--

INSERT INTO `ciudad` (`id`, `nombre`) VALUES
(1, 'Bogotá');

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `gp` text NOT NULL,
  `longitud` text NOT NULL,
  `ciud_id` int(11) NOT NULL,
  `aire_id` int(11) NOT NULL,
  `arbol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`id`, `nombre`, `gp`, `longitud`, `ciud_id`, `aire_id`, `arbol_id`) VALUES
(1, 'Antonio Nariño', '0', '0', 1, 1, 1),
(2, 'Barrios Unidos', '0', '0', 1, 1, 1),
(3, 'Bosa', '0', '0', 1, 1, 1),
(4, 'Chapinero', '0', '0', 1, 1, 1),
(5, 'Ciudad Bolívar', '0', '0', 1, 1, 1),
(6, 'Engativá', '0', '0', 1, 1, 1),
(7, 'Fontibón\r\n', '0', '0', 1, 1, 1),
(8, 'Kennedy', '0', '0', 1, 1, 1),
(9, 'La Candelaria', '0', '0', 1, 1, 1),
(10, 'Los Mártires', '0', '0', 1, 1, 1),
(11, 'Puente Aranda', '0', '0', 1, 1, 1),
(12, 'Rafael Uribe Uribe', '0', '0', 1, 1, 1),
(13, 'San Cristóbal', '0', '0', 1, 1, 1),
(14, 'Santa fe', '0', '0', 1, 1, 1),
(15, 'Suba', '0', '0', 1, 1, 1),
(16, 'Sumapaz', '0', '0', 1, 1, 1),
(17, 'Teusaquillo', '0', '0', 1, 1, 1),
(18, 'Tunjuelito', '0', '0', 1, 1, 1),
(19, 'Usaquén', '0', '0', 1, 1, 1),
(20, 'Usme', '0', '0', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ubicación`
--

CREATE TABLE `ubicación` (
  `id` int(11) NOT NULL,
  `frecuente` text NOT NULL,
  `usua_id` int(11) NOT NULL,
  `sect_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ubicación`
--

INSERT INTO `ubicación` (`id`, `frecuente`, `usua_id`, `sect_id`) VALUES
(2, 'a', 5, 1),
(3, 'a', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `correo` text NOT NULL,
  `contraseña` text NOT NULL,
  `residencia` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contraseña`, `residencia`, `fecha`) VALUES
(5, 'a', 'a@a', 'c4ca4238a0b923820dcc509a6f75849b', 'a', '2023-08-21 23:10:45'),
(9, '1', 'a@a', 'c4ca4238a0b923820dcc509a6f75849b', '1', '2023-08-26 17:36:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aire`
--
ALTER TABLE `aire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arboles`
--
ALTER TABLE `arboles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id`),
  ADD KEY `arbol_id` (`arbol_id`),
  ADD KEY `aire_id` (`aire_id`),
  ADD KEY `ciud_id` (`ciud_id`);

--
-- Indexes for table `ubicación`
--
ALTER TABLE `ubicación`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usua_id` (`usua_id`,`sect_id`),
  ADD KEY `ubicacion_ibfk_1` (`sect_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aire`
--
ALTER TABLE `aire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `arboles`
--
ALTER TABLE `arboles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ubicación`
--
ALTER TABLE `ubicación`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sector`
--
ALTER TABLE `sector`
  ADD CONSTRAINT `sector_ibfk_1` FOREIGN KEY (`arbol_id`) REFERENCES `arboles` (`id`),
  ADD CONSTRAINT `sector_ibfk_2` FOREIGN KEY (`aire_id`) REFERENCES `aire` (`id`),
  ADD CONSTRAINT `sector_ibfk_3` FOREIGN KEY (`ciud_id`) REFERENCES `ciudad` (`id`);

--
-- Constraints for table `ubicación`
--
ALTER TABLE `ubicación`
  ADD CONSTRAINT `ubicacion_ibfk_1` FOREIGN KEY (`sect_id`) REFERENCES `sector` (`id`),
  ADD CONSTRAINT `ubicacion_ibfk_2` FOREIGN KEY (`usua_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `ubicación_ibfk_1` FOREIGN KEY (`sect_id`) REFERENCES `sector` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
