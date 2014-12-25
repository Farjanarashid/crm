-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2014 at 02:36 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crm`
--
CREATE DATABASE IF NOT EXISTS `crm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `crm`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `type` int(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `billing_contact`
--

CREATE TABLE IF NOT EXISTS `billing_contact` (
  `billing_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `fax` varchar(32) NOT NULL,
  `email` varchar(250) NOT NULL,
  `IM` varchar(250) NOT NULL,
  PRIMARY KEY (`billing_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `commercial_contact`
--

CREATE TABLE IF NOT EXISTS `commercial_contact` (
  `commercial_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `fax` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `IM` varchar(250) NOT NULL,
  PRIMARY KEY (`commercial_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE IF NOT EXISTS `company_info` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `company_address` text NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `zip_code` varchar(250) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `type`) VALUES
(1, 'admin', 1),
(2, 'vendor', 2);

-- --------------------------------------------------------

--
-- Table structure for table `docs`
--

CREATE TABLE IF NOT EXISTS `docs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `info_type` varchar(255) NOT NULL,
  `time` text NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_extension` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `docs`
--

INSERT INTO `docs` (`id`, `type`, `name`, `info_type`, `time`, `file_name`, `file_extension`) VALUES
(1, '0', 'fcl', 'Invoice', '2014/01/06 18:51:10', 'take.pdf', 'pdf'),
(2, '0', 'fcl', 'SOA', '2014/01/06 18:52:10', 'take.pdf', 'pdf'),
(3, 'Vendor', 'fcl', 'Payment Copy', '2014/01/06 18:55:48', 'take.pdf', 'pdf');

-- --------------------------------------------------------

--
-- Table structure for table `interconnection_info`
--

CREATE TABLE IF NOT EXISTS `interconnection_info` (
  `interc_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `equipment` varchar(250) NOT NULL,
  `ip_address_TFV` varchar(250) NOT NULL,
  `ip_address_TTV` varchar(250) NOT NULL,
  `protocol` varchar(250) NOT NULL,
  `if_prefex_required` text NOT NULL,
  `codex` varchar(250) NOT NULL,
  `termination_type` varchar(250) NOT NULL,
  PRIMARY KEY (`interc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `roll` varchar(250) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `roll`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'technical', '2840180493ff3073dc8ed330c972437d', 'technical');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE IF NOT EXISTS `rates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_code` int(11) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `code` int(100) NOT NULL,
  `prefix` int(100) NOT NULL,
  `rate` varchar(200) NOT NULL,
  `effective_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `vendor_code`, `destination`, `code`, `prefix`, `rate`, `effective_date`) VALUES
(1, 5, 'test', 333, 11, '22', '0000-00-00'),
(2, 5, 'test', 333, 11, '22', '2012-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `rates_contact`
--

CREATE TABLE IF NOT EXISTS `rates_contact` (
  `rates_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `fax` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `IM` varchar(250) NOT NULL,
  PRIMARY KEY (`rates_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `technical_contact`
--

CREATE TABLE IF NOT EXISTS `technical_contact` (
  `technical_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `fax` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `IM` varchar(250) NOT NULL,
  PRIMARY KEY (`technical_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
