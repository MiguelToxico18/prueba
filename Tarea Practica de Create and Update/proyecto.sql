-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2024 at 03:44 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyecto`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `estado` int(1) NOT NULL,
  `id_grupo_usu` int(11) NOT NULL,
  `user_activo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `user`, `pass`, `estado`, `id_grupo_usu`, `user_activo`) VALUES
(1, 'Juan Perez', 'juan', 'password123', 1, 1, 1),
(2, 'María López', 'maria', 'secreto456', 1, 2, 1),
(3, 'Carlos Ruiz', 'carlos', 'clave789', 1, 3, 1),
(20, 'VASQUEZ MIGUEL', 'VMIGUEL', '7e04da88cbb8cc933c7b89fbfe121cca', 0, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `usuario_grupo`
--

CREATE TABLE `usuario_grupo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usuario_grupo`
--

INSERT INTO `usuario_grupo` (`id`, `nombre`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'PROCESOS'),
(3, 'CAJERO'),
(4, 'CONTADOR'),
(5, 'ADMINISTRACION'),
(6, 'TOMA DE MUESTRA'),
(7, 'VENTAS'),
(9, 'ECOGRAFIAS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario_grupo`
--
ALTER TABLE `usuario_grupo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `usuario_grupo`
--
ALTER TABLE `usuario_grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
