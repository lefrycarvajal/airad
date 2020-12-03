-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 03:08 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airad_db`
--
CREATE DATABASE IF NOT EXISTS `airad_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `airad_db`;

-- --------------------------------------------------------

--
-- Table structure for table `airad_contacto`
--

CREATE TABLE `airad_contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `correo` varchar(600) NOT NULL,
  `telefono` varchar(600) NOT NULL,
  `asunto` varchar(600) NOT NULL,
  `mensaje` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airad_contacto`
--

INSERT INTO `airad_contacto` (`id`, `nombre`, `correo`, `telefono`, `asunto`, `mensaje`) VALUES
(1, 'goku', 'hola3@hotmail.com', '', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'asdadsadadsadsadsadasdasda'),
(2, 'pamela', 'begetta@gmail.com', '', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(3, 'pamela', 'bokynopico@gmail.com', '', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(4, 'maria', 'gokju@hotmail.com', '', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aasssssssssssssssssssssssssssssssssssssssss'),
(5, 'satanas', 'hhh-03183@hotmail.com', '+18096534999', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aasssssssssssssssssssssssssssssssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `airad_registro`
--

CREATE TABLE `airad_registro` (
  `id` int(7) NOT NULL,
  `correo` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airad_registro`
--

INSERT INTO `airad_registro` (`id`, `correo`) VALUES
(1, 'fredderick.rosario@gmaill.com'),
(2, 'ior-03183@hotmail.com'),
(3, 'junior-0313@hotmail.com'),
(4, '093333@hotmail.com'),
(5, 'manutos@hotmail.com'),
(6, 'ggggg3@hotmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airad_contacto`
--
ALTER TABLE `airad_contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airad_registro`
--
ALTER TABLE `airad_registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airad_contacto`
--
ALTER TABLE `airad_contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `airad_registro`
--
ALTER TABLE `airad_registro`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
