-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2017 at 02:23 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cubesphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `polaznici`
--

CREATE TABLE `polaznici` (
  `id` int(11) NOT NULL,
  `ime` char(50) NOT NULL,
  `prezime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `polaznici`
--

INSERT INTO `polaznici` (`id`, `ime`, `prezime`) VALUES
(1, 'Ivan', 'Tijanic');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `specification` longtext,
  `price` decimal(10,2) NOT NULL,
  `quantity` float NOT NULL,
  `category` char(20) NOT NULL,
  `on_sale` tinyint(1) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `tags` char(50) DEFAULT NULL,
  `created_et` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `specification`, `price`, `quantity`, `category`, `on_sale`, `discount`, `tags`, `created_et`) VALUES
(1, 'Nokia', '', NULL, '100.00', 15, 'Mobilni Telefon', 1, '5.00', NULL, '2017-10-25 00:00:00'),
(2, 'iPhone5', 'Bas je zgodan.', NULL, '250.00', 100, 'Mobilni Telefon', 0, '0.00', NULL, '2017-10-25 14:07:13'),
(3, 'Sporet', 'Plinski sporet', NULL, '300.00', 3, 'Bela Tehnika', 0, '0.00', NULL, '2017-10-25 00:00:00'),
(4, 'Ves masina', '', NULL, '250.00', 0, 'Bela Tehnika', 1, '0.00', NULL, '2017-10-25 00:00:00'),
(5, 'Bojler', '', NULL, '149.00', 12, 'Bela Tehnika', 0, '0.00', NULL, '2017-10-25 00:00:00'),
(6, 'Bojler', '', NULL, '310.00', 12, 'Bela Tehnika', 1, '40.00', NULL, '2017-10-25 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `polaznici`
--
ALTER TABLE `polaznici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `polaznici`
--
ALTER TABLE `polaznici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
