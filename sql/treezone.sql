-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 05:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
(1, '50', '2023-08-21'),
(2, '100', '2023-09-19'),
(3, '150', '2023-09-13'),
(4, '200', '2023-09-30'),
(5, '250', '2023-09-13'),
(6, '300', '2023-09-19'),
(7, '350', '2023-09-16'),
(8, '400', '2023-09-29'),
(9, '450', '2023-09-20'),
(10, '500', '2023-09-14');

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
(1, '1', '2023-08-21'),
(2, '25', '2023-09-24'),
(3, '50', '2023-09-24'),
(5, '75', '2023-09-17'),
(6, '100', '2023-09-12'),
(7, '125', '2023-09-04'),
(8, '150', '2023-09-02'),
(9, '175', '2023-09-12'),
(10, '200', '2023-09-27');

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
(1, 'Antonio Narino', '0', '0', 1, 3, 7),
(2, 'Barrios Unidos', '0', '0', 1, 6, 2),
(3, 'Bosa', '0', '0', 1, 3, 7),
(4, 'Chapinero', '0', '0', 1, 4, 7),
(5, 'Ciudad Bolivar', '0', '0', 1, 4, 10),
(6, 'Engativa', '0', '0', 1, 3, 7),
(7, 'Fontibon', '0', '0', 1, 5, 10),
(8, 'Kennedy', '0', '0', 1, 1, 9),
(9, 'La Candelaria', '0', '0', 1, 8, 8),
(10, 'Los Martires', '0', '0', 1, 6, 5),
(11, 'Puente Aranda', '0', '0', 1, 3, 6),
(12, 'Rafael Uribe Uribe', '0', '0', 1, 1, 6),
(13, 'San Cristobal', '0', '0', 1, 7, 7),
(14, 'Santa fe', '0', '0', 1, 5, 7),
(15, 'Suba', '0', '0', 1, 10, 10),
(16, 'Sumapaz', '0', '0', 1, 2, 2),
(17, 'Teusaquillo', '0', '0', 1, 6, 7),
(18, 'Tunjuelito', '0', '0', 1, 6, 9),
(19, 'Usaquen', '0', '0', 1, 1, 3),
(20, 'Usme', '0', '0', 1, 2, 3);

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
(3, 'a', 5, 1),
(5, 'Casa', 10, 14),
(10, 'Trabajo', 10, 15);

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
(9, '1', 'a@a', 'c4ca4238a0b923820dcc509a6f75849b', '1', '2023-08-26 17:36:36'),
(10, 'Lina', 'linacruzmolina@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Cra 34a #37-90', '2023-08-31 00:52:04'),
(11, 'marcela', 'marce85molina@gmail.com', 'a917847ce55c2ceaaefd60bbcb2805b2', 'colombia', '2023-08-31 02:16:22');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `arboles`
--
ALTER TABLE `arboles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
