-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2019 at 02:18 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(5) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `jarak` int(10) NOT NULL,
  `harga` int(32) NOT NULL,
  `rating` float NOT NULL,
  `fasilitas` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `tempat`, `jarak`, `harga`, `rating`, `fasilitas`) VALUES
(1, 'Taman Wisata Lembah Dieng', 5200, 15000, 4.3, 3),
(2, 'Permata Jingga Swimming Pool & Cafe', 3400, 35000, 4.4, 3),
(3, 'Kolam Renang Stadion Gajayana', 4100, 15000, 4.1, 1),
(4, 'Araya Family Club House Swimming Pool', 7900, 60000, 4.5, 4),
(5, 'Hawai Waterpark', 7400, 100000, 4.2, 7),
(6, 'Taman Rekreasi Selecta', 20700, 35000, 4.4, 3),
(7, 'Kolam Renang Lantamal Malang', 7000, 10000, 4.2, 2),
(8, 'Taman Rekreasi Tlogomas', 3200, 40000, 4.1, 5),
(9, 'Istana Dieng Club House', 5300, 50000, 4.4, 6),
(10, 'Pemandian Air Panas Cangar', 33800, 11500, 4.2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
