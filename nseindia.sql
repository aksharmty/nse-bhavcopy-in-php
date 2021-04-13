-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2021 at 01:10 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ishwakbi_angel`
--

-- --------------------------------------------------------

--
-- Table structure for table `nse`
--

CREATE TABLE `nse` (
  `id` int(225) NOT NULL,
  `symbol` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `series` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `open` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `close` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `high` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `low` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nse`
--

INSERT INTO `nse` (`id`, `symbol`, `series`, `open`, `close`, `high`, `low`, `date`, `timestamp`) VALUES
(1, '', '', '', '', '', '', '', '13-04-2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nse`
--
ALTER TABLE `nse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nse`
--
ALTER TABLE `nse`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
