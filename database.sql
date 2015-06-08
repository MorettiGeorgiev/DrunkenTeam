-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2015 at 08:18 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date-registered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `date-registered`) VALUES
(1, 'admin', 'admin@junco.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2015-06-07 13:00:36');

-- --------------------------------------------------------

--
-- Table structure for table `signals`
--

CREATE TABLE IF NOT EXISTS `signals` (
`id` int(11) NOT NULL,
  `reg_number` varchar(8) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `latFld` varchar(255) NOT NULL,
  `lngFld` varchar(255) NOT NULL,
  `other_desc` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `names` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signals`
--

INSERT INTO `signals` (`id`, `reg_number`, `photo`, `latFld`, `lngFld`, `other_desc`, `date`, `names`, `phone`, `email`) VALUES
(16, 'CB3818AC', '/DrunkenTeam/assets/uploads/44d88022b69f4b995067dde0d91eb959.jpg', '42.1485421894', '23.495165424', 'asd', '2015-06-07 16:57:50', 'Asd Asd Asd', '359878641143', 'marianbelchev@gmail.com'),
(17, '', '/DrunkenTeam/assets/uploads/e1091bfa4669a50dbaccd4500b8247fa.jpg', '42.1376916415', '23.1491510826', '', '2015-06-07 16:58:27', 'Georgi L Velev', '+359895589829', 'george.velev1177@gmail.com'),
(18, 'CB3818AC', '/DrunkenTeam/assets/uploads/1ad66cd9d186e538213d0a2346fabc6e.jpg', '42.641386808', '23.1454746601', 'Изоставена кола в тревните площи пред блока', '2015-06-07 17:36:43', 'Мариян Александров Белчев', '359878641143', 'marianbelchev@gmail.com');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
