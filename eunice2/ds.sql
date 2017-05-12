-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2017 at 10:11 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ds`
--

-- --------------------------------------------------------

--
-- Table structure for table `di`
--

CREATE TABLE IF NOT EXISTS `di` (
  `name` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `solution` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `di`
--

INSERT INTO `di` (`name`, `id`, `solution`) VALUES
('type1', 1, 'Diabetes injection of insulin or insulin pump is needed.\r\nControlled by exercise and diet\r\n'),
('type2', 2, 'Exercise and modest weight reduction, use of metformin (a drug for the treatment of type 2 diabetes, ineffective in patients above 60 years old), good lifestyle and healthy diet'),
('doctor', 3, 'see a doctor');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE IF NOT EXISTS `disease` (
  `digno_id` int(11) NOT NULL AUTO_INCREMENT,
  `di_id` int(11) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `recomm` varchar(255) NOT NULL,
  PRIMARY KEY (`digno_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`digno_id`, `di_id`, `username`, `date`, `status`, `recomm`) VALUES
(1, 1, '0', '2017/05/03', 'okay', 'system'),
(2, 1, '0', '2017/05/03', 'okay', 'system'),
(3, 1, 'ajax', '2017/05/03', 'okay', 'system');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `Blood_groups` varchar(255) DEFAULT NULL,
  `county` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `firstname`, `lastname`, `username`, `password`, `sex`, `Blood_groups`, `county`, `occupation`, `adress`, `email`, `phone_number`, `status`) VALUES
(1, 'admin', 'a', 'ajax', 'a', 'female', 'O', 'aa', 'a', 'a', 'admin@admin.com', '23', 1),
(2, 'eunice', 'eunice', 'eunice', 'e', 'male', 'O', 'lagos', 'dancer', 'lo', 'eniolsolomon@gmail.com', '0909892772', 0),
(3, 'aa', 'aa', 'aa', 'aa', 'male', 'O', 'aa', 'fff', 'cccc', 'eniolsolomon@gmail.com', '008754', 2);

-- --------------------------------------------------------

--
-- Table structure for table `patient_history`
--

CREATE TABLE IF NOT EXISTS `patient_history` (
  `id` int(11) DEFAULT NULL,
  `disease` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `hist_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`hist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
