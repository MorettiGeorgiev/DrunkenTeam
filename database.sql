-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `junk`
--

-- --------------------------------------------------------

--
-- Структура на таблица `signals`
--

CREATE TABLE IF NOT EXISTS `signals` (
  `id` int(11) NOT NULL,
  `reg_number` varchar(8) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `other_desc` text NOT NULL,
  `date` datetime NOT NULL,
  `names` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `signals`
--

INSERT INTO `signals` (`id`, `reg_number`, `photo`, `other_desc`, `date`, `names`, `phone`, `email`) VALUES
(1, 'CA9999AC', 'none', 'none', '2015-06-23 00:00:00', 'Marian Belchev', 35988888, 'marianbelchev@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signals`
--
ALTER TABLE `signals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signals`
--
ALTER TABLE `signals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
