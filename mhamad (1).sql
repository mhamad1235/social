-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 08:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhamad`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `uid` int(100) NOT NULL,
  `fav` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '[]',
  `zhmara` varchar(11) DEFAULT '0',
  `coment` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '[]',
  `comentuid` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`comentuid`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `name`, `title`, `uid`, `fav`, `zhmara`, `coment`, `comentuid`) VALUES
(28, 'karzan@gmail.com', 'laravel is best', 70, '[\"68\",\"69\"]', '2', '[\"jwana\",\"dast xosh\"]', '[\"kodo@gmail.com\",\"mhamad@gmail.com\"]'),
(29, 'karzan@gmail.com', 'React is best', 70, '[]', '0', '[]', '[]'),
(30, 'mhamad@gmail.com', 'Node js is best', 68, '[\"69\"]', '1', '[]', '[]');

-- --------------------------------------------------------

--
-- Table structure for table `prsiar`
--

CREATE TABLE `prsiar` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(68, 'mhamad@gmail.com', '123456'),
(69, 'kodo@gmail.com', '123456'),
(70, 'karzan@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `xarjy`
--

CREATE TABLE `xarjy` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `uid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `xarjy`
--

INSERT INTO `xarjy` (`id`, `name`, `type`, `price`, `uid`) VALUES
(1, 'jbs', 'xwardn', '5', 48),
(2, 'sharbat', 'xwardn', '6', 48),
(3, 'write hear', 'a.,s', '78', 48),
(4, 'karawz', 'tara', '6', 49),
(5, 'karawz', 'tara', '6', 49),
(6, 'slq', 'tara', '1', 49),
(7, 'karawz', 'tara', '2', 53);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `post` ADD FULLTEXT KEY `fav` (`fav`);

--
-- Indexes for table `prsiar`
--
ALTER TABLE `prsiar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xarjy`
--
ALTER TABLE `xarjy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `prsiar`
--
ALTER TABLE `prsiar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `xarjy`
--
ALTER TABLE `xarjy`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
