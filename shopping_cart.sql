-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2014 at 11:08 PM
-- Server version: 5.5.35
-- PHP Version: 5.3.10-1ubuntu3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `Authors`
--

CREATE TABLE IF NOT EXISTS `Authors` (
  `author_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  KEY `author_id` (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `Authors`
--

INSERT INTO `Authors` (`author_id`, `name`) VALUES
(1, 'Adiran Mckinty'),
(2, 'Daniel Levine'),
(3, 'Rob Thomos'),
(4, 'John Grisham'),
(5, 'Abdul Kalam'),
(6, 'J. K. Rowling');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `author_id` int(11) NOT NULL,
  `year` varchar(4) NOT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY (`book_id`),
  KEY `author_id` (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `author_id`, `year`, `price`) VALUES
(1, 'In The Morning Ill  be Gone', 1, '2013', 27),
(3, 'A Time to Kill, the Firm, the Client', 4, '2014', 30),
(4, 'Sycamore Row', 4, '2013', 30),
(5, 'The King of Torts', 4, '2012', 30),
(6, 'The Broker', 4, '2012', 30),
(7, 'The Summons', 4, '2012', 30),
(8, 'Mission India', 5, '2005', 10),
(9, 'Inspiring Thoughts', 5, '2005', 10),
(10, 'My Journey', 5, '2005', 10),
(11, 'Wings of Fire', 5, '1999', 10),
(12, 'India 2020', 5, '1998', 10),
(13, 'Ignited Minds', 5, '2002', 10),
(14, 'Target 3 Million', 5, '2002', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE IF NOT EXISTS `user_accounts` (
  `UserId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `FName` varchar(40) NOT NULL,
  `LName` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `CreditCard` varchar(16) NOT NULL,
  PRIMARY KEY (`UserId`),
  UNIQUE KEY `UserId` (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`UserId`, `FName`, `LName`, `Password`, `Address`, `Email`, `CreditCard`) VALUES
(1, 'jay', 'krishna', 'krishna', '', 'deepu@gmail.com', ''),
(2, '', '', '', '', '', ''),
(3, 'jaya', 'krishna', 'krishna', '', 'nandyala.deepu@gmail.com', ''),
(4, 'jaya', 'krishna', 'krishna', '', 'nandyala.deepu@hotmail.com', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `Authors` (`author_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
