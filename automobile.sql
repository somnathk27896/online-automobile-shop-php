-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2017 at 01:34 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `automobile`
--
CREATE DATABASE IF NOT EXISTS `automobile` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `automobile`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'soms', 'soms'),
(3, 'as', 'as');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `eusername` varchar(60) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `eusername`, `name`, `email`, `contact`, `address`) VALUES
(4, 'om', 'om', 'om@gmail.com', '1234567893', 'Mankhurd'),
(6, 'somnath', 'soms', 'soms@gmail.com', '2147483647', 'USA'),
(7, 'narendra', 'Narendra gupta', 'naren@yahoo.com', '2147483647', 'Wadala'),
(8, 'pramod', 'pramod more', 'pramodm@yahoo.com', '2147483647', 'Mankhurd');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `no` varchar(10) NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `comment` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `address`, `no`, `country`, `state`, `comment`) VALUES
(1, 'som', 'vyfk', '2147483647', 'India', 'maharashtra', 'dthgf'),
(2, 'somnath', 'belapur', '2147483647', 'India', 'maharashtra', 'GOOD UI');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `no` varchar(10) NOT NULL,
  `model` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `username`, `addr`, `no`, `model`, `price`, `date`) VALUES
(4, 'soms', 'USA', '2147483647', 'Fiat Coupe', '51 Lacs', '2017-09-17 12:49:16'),
(5, 'sujata84', 'belapur', '2147483647', 'Fiat Punto', '22 Lacs', '2017-09-21 14:45:55'),
(6, 'sujata84', 'belapur', '2147483647', 'Fiat Punto', '22 Lacs', '2017-09-21 14:53:34'),
(7, 'sujata84', 'belapur', '2147483647', '', '', '2017-09-23 15:46:39'),
(8, 'sujata84', 'belapur', '2147483647', 'alfa GTV', '40 Lacs', '2017-09-23 15:47:31'),
(9, 'sujata84', 'belapur', '2147483647', 'alf_spider', '35 Lacs', '2017-09-23 16:37:31'),
(10, 'sujata84', 'belapur', '2147483647', 'alf_spider', '35 Lacs', '2017-09-23 16:38:03'),
(11, 'sujata84', 'belapur', '2147483647', 'alf_spider', '35 Lacs', '2017-09-23 16:38:35'),
(12, 'sujata84', 'belapur', '2147483647', 'alf_spider', '35 Lacs', '2017-09-23 16:38:56'),
(13, 'sujata84', 'belapur', '2147483647', 'alf_spider', '35 Lacs', '2017-09-23 16:40:26'),
(14, 'sujata84', 'USA', '2147483647', 'alf_spider', '35 Lacs', '2017-09-23 16:40:56'),
(15, 'sujata84', 'belapur', '2147483647', 'alf_spider', '35 Lacs', '2017-09-23 16:41:33'),
(16, 'sujata84', 'belapur', '2147483647', 'fiat_punto', '22 Lacs', '2017-09-24 04:58:31'),
(17, 'sujata84', 'belapur', '2147483647', 'alfa_sz_and_rz', '41 Lacs', '2017-09-24 04:59:44'),
(18, 'sujata84', 'USA', '2147483647', 'alfa_mito', '45 Lacs', '2017-09-24 05:04:53'),
(19, 'sujata84', 'belapur', '2147483647', 'fiat_stilo', '65 Lacs', '2017-09-24 05:13:21'),
(20, 'sujata84', 'USA', '9892472678', 'fiat_stilo', '65 Lacs', '2017-09-24 05:18:47'),
(21, 'soms', 'belapur', '8286119230', 'ferrari_california', '60 Lacs', '2017-09-24 05:28:09'),
(22, 'soms', 'belapur', '8286119230', 'ferrari_california', '60 Lacs', '2017-09-24 05:30:55'),
(23, 'soms', 'belapur', '8286119230', 'ferrari_california', '60 Lacs', '2017-09-24 05:36:57'),
(24, 'soms', 'belapur', '8286119230', 'ferrari_california', '60 Lacs', '2017-09-24 05:37:17'),
(25, 'soms', 'belapur', '8286119230', 'ferrari_california', '60 Lacs', '2017-09-24 05:37:57'),
(26, 'som', 'belapur', '8286119230', 'ferrari_california', '60 Lacs', '2017-09-24 05:40:16'),
(27, 'som', 'belapur', '8286119230', 'ferrari_california', '60 Lacs', '2017-09-24 05:48:37'),
(28, 'som', 'belapur', '8286119230', 'ferrari_california', '60 Lacs', '2017-09-24 05:50:26'),
(29, 'som', 'belapur', '8286119230', 'ferrari_california', '60 Lacs', '2017-09-24 05:50:36'),
(30, 'som', 'gf', '8286119230', 'ferrari_california', '60 Lacs', '2017-09-24 05:51:59'),
(31, 'somkam', 'belapur', '8286119230', 'ferrari_f40', '50 Lacs', '2017-09-24 05:54:50'),
(32, 'om', 'belapur', '8286119230', 'ferrari_f40', '50 Lacs', '2017-09-24 05:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `m_no` varchar(10) NOT NULL,
  `t_no` varchar(8) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fname`, `lname`, `dob`, `gender`, `address`, `email`, `m_no`, `t_no`, `username`, `pass`) VALUES
(1, 'somnath', 'kamble', '1996-02-07', 'on', 'USA', 'somnathk48@yahoo.com', '2147483647', '0', 'soms', '12345'),
(2, 'somnath', 'vyfk', '0000-00-00', 'on', 'sds', 'ksomnath46@gmail.com', '2147483647', '85858858', 'E0356714', '123'),
(3, 'ketan', 'kamble', '2014-08-24', 'on', 'belapur', 'ketan@gmail.com', '2147483647', '0', 'ketan', '123456'),
(5, 'neha', 'kamble', '1999-08-15', 'female', 'bel', 'neha@gmail.com', '2147483647', '85858585', 'neha', '123'),
(6, 'Sujata', 'kamble', '1983-07-13', 'female', 'B/202, Royal APT, Sector-20, Shahabaz Gaon, Navi Mumbai-400614', 'sujata84@gmail.com', '2147483647', '0', 'sujata84', '123456789'),
(7, 'aeswf', 'wef', '1996-08-27', 'male', 'awef', 'somnathk48@yahoo.com', '1', '0', '123', '123'),
(8, 'ketan', 'kamble', '1996-12-12', 'male', 'USA', 'ketan@gmail.com', '8286119230', '', 'ket', '12345'),
(9, 'somnath', 'kamble', '1996-08-27', 'male', 'Chembur', 'somnathk48@yahoo.com', '8286119230', '', 'som', '123456789'),
(10, 'somnath', 'kamble', '1996-08-27', 'male', 'UK', 'somnathk48@yahoo.com', '8286119230', '', 'somkam', '123456'),
(11, 'om', 'kamble', '1996-12-12', 'male', 'UK', 'om@gmail.com', '8286119230', '', 'om', '123');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no` varchar(10) NOT NULL,
  `addr` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `username`, `name`, `email`, `no`, `addr`) VALUES
(3, 'Ferrai', 'ferrari PVT', 'ferrari@gmail.com', '5458745896', 'Uk'),
(4, 'Fiat', 'fiat PVT', 'fiat@yahoo.com', '9856478521', 'Itly'),
(5, 'Lancia', 'lancia PVT', 'lancia@yahoo.com', '8525165686', 'Bankok'),
(6, 'Alfa', 'alfa PVT', 'alfa@gmail.com', '4545454545', 'Argentina');

-- --------------------------------------------------------

--
-- Table structure for table `vehicals`
--

CREATE TABLE IF NOT EXISTS `vehicals` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `supplier` varchar(60) NOT NULL,
  `price` varchar(50) NOT NULL,
  `quentity` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `vehicals`
--

INSERT INTO `vehicals` (`id`, `name`, `supplier`, `price`, `quentity`) VALUES
(1, 'alf_spider', 'alfa PVT', '35lacs', 3),
(2, 'alfa_gtv', 'alfa PVT', '40 lacs', 2),
(3, 'alfa_mito', 'alfa PVT', '45 lacs', 5),
(4, 'alfa_sz_and_rz', 'alfa PVT', '41 lacs', 5),
(5, 'ferrari_california', 'ferrari PVT', '60 lacs', 8),
(6, 'ferrari_f40', 'ferrari PVT', '50 Lacs', 3),
(7, 'ferrari_599gtb', 'ferrari PVT', '30 Lacs', 2),
(8, 'ferrari612', 'ferrari PVT', '42 Lacs', 2),
(9, 'fiat_stilo', 'fiat PVT', '65 Lacs', 3),
(10, 'fiat_coupe', 'fiat PVT', '51 Lacs', 2),
(11, 'fiat_punto', 'fiat PVT', '22 Lacs', 2),
(12, 'fiat_linea', 'fiat PVT', '49 Lacs', 6),
(13, 'lancia_dedra', 'lancia PVT', '95 Lacs', 3),
(14, 'lancia_deltas4', 'lancia PVT', '48 Lacs', 2),
(15, 'lancia_delta2008', 'lancia PVT', '54 Lacs', 5),
(16, 'lancia_flamania', 'lancia PVT', '1.5 Cr', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
