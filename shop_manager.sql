-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2016 at 06:42 PM
-- Server version: 5.5.15
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminstrator`
--

CREATE TABLE IF NOT EXISTS `adminstrator` (
  `admin_id` int(22) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminstrator`
--

INSERT INTO `adminstrator` (`admin_id`, `username`, `password`) VALUES
(1, 'mimi', '78');

-- --------------------------------------------------------

--
-- Table structure for table `particulars`
--

CREATE TABLE IF NOT EXISTS `particulars` (
  `particular_id` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `available_stock` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `selling_price` varchar(255) NOT NULL,
  `expected_profit` varchar(255) NOT NULL,
  `earned_profit` varchar(255) NOT NULL,
  `loss` varchar(255) NOT NULL,
  PRIMARY KEY (`particular_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `particulars`
--

INSERT INTO `particulars` (`particular_id`, `name`, `stock`, `available_stock`, `price`, `selling_price`, `expected_profit`, `earned_profit`, `loss`) VALUES
(2, 'Hassy Juice', '10', '3', '200', '500', '5000', '3500', '1500'),
(6, 'Azam Juice', '100', '70', '2000', '2500', '250000', '75000', '175000'),
(7, 'Milk', '200', '195', '700', '1000', '200000', '5000', '195000'),
(10, 'Soda', '400', '377', '400', '600', '240000', '13800', '226200'),
(11, 'Water', '50', '35', '700', '1000', '50000', '15000', '35000');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `item` varchar(255) NOT NULL,
  `ammount` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `item`, `ammount`, `price`, `date`, `signature`) VALUES
(3, 'Azam Juice', '20', '2500', 'Thursday 13th of October 2016 09:01:49 AM', 'myshop'),
(4, 'Azam Juice', '10', '2500', 'Thursday 13th of October 2016 09:02:40 AM', 'myshop'),
(7, 'Hassy Juice', '3', '500', 'Thursday 13th of October 2016 01:40:25 PM', 'admin02'),
(8, 'Hassy Juice', '1', '500', 'Thursday 13th of October 2016 01:42:59 PM', 'admin02'),
(9, 'Hassy Juice', '1', '500', 'Thursday 13th of October 2016 01:56:39 PM', 'Azizi'),
(10, 'Hassy Juice', '2', '500', 'Thursday 13th of October 2016 01:57:38 PM', 'Baddgal'),
(11, 'Milk', '5', '1000', 'Thursday 13th of October 2016 03:07:33 PM', 'mimi'),
(12, 'Soda', '23', '600', 'Thursday 13th of October 2016 03:08:42 PM', 'mimi'),
(13, 'Water', '15', '1000', 'Thursday 13th of October 2016 03:09:30 PM', 'mimi');

-- --------------------------------------------------------

--
-- Table structure for table `standard_users`
--

CREATE TABLE IF NOT EXISTS `standard_users` (
  `user_id` int(22) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `standard_users`
--

INSERT INTO `standard_users` (`user_id`, `fullname`, `username`, `password`) VALUES
(1, 'Azizi Daudy', 'Azizi', '321');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
