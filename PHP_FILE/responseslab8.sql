-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 09:09 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab8`
--

-- --------------------------------------------------------

--
-- Table structure for table `responseslab8`
--

CREATE TABLE `responseslab8` (
  `studentname` char(255) DEFAULT NULL,
  `coursetitle` char(255) DEFAULT NULL,
  `courserating` char(70) DEFAULT NULL,
  `comments` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responseslab8`
--

INSERT INTO `responseslab8` (`studentname`, `coursetitle`, `courserating`, `comments`) VALUES
('SMITH', 'BIT', 'Outstanding', 'Its brilliant'),
('JONES', 'BIT', 'Mostly Adequate', 'Its OK'),
('AVERY', 'BIT', 'Outstanding', 'Its brilliant'),
('MITCHELL', 'AIS', 'Dull', 'Yawn'),
('WEBB', 'AIS', 'Outstanding', 'Its brilliant'),
('TENNENT', 'BIM', 'Mostly Adequate', 'Its OK'),
('RUSSELL', 'BIM', 'Mostly Adequate', 'No comment'),
('GUERNEY', 'BIT', 'Outstanding', 'Its brilliant'),
('SMITH', 'BIT', 'Mostly Adequate', 'Its OK'),
('PATEL', 'BIM', 'Outstanding', 'Its brilliant'),
('BHATTY', 'BIM', 'Dull', 'Yawn'),
('KOTADIA', 'AIS', 'Outstanding', 'Its brilliant'),
('WING', 'BIT', 'Mostly Adequate', 'Its OK'),
('GARRETT', 'BIM', 'Mostly Adequate', 'No comment');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
