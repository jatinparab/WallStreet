-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2017 at 05:56 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dalal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('jatin', 'wallstreet1011');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `number` int(11) NOT NULL,
  `news_title` varchar(25555) NOT NULL,
  `Reliance Petroleum` int(11) DEFAULT NULL,
  `Maruti Suzuki India` int(11) DEFAULT NULL,
  `Nestle India` int(11) DEFAULT NULL,
  `Bharat Petroleum` int(11) NOT NULL,
  `Hyundai` int(11) NOT NULL,
  `Patanjali` int(11) NOT NULL,
  `Sun Pharmaceuticals` int(11) NOT NULL,
  `Cipla` int(11) NOT NULL,
  `ICICI Bank` int(11) NOT NULL,
  `HDFC Bank` int(11) NOT NULL,
  `Hindustan Unilever` int(11) NOT NULL,
  `Wipro` int(11) NOT NULL,
  `Larsen and Tubro` int(11) NOT NULL,
  `BHEL` int(11) NOT NULL,
  `JP Morgan` int(11) NOT NULL,
  `taken` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`number`, `news_title`, `Reliance Petroleum`, `Maruti Suzuki India`, `Nestle India`, `Bharat Petroleum`, `Hyundai`, `Patanjali`, `Sun Pharmaceuticals`, `Cipla`, `ICICI Bank`, `HDFC Bank`, `Hindustan Unilever`, `Wipro`, `Larsen and Tubro`, `BHEL`, `JP Morgan`, `taken`) VALUES
(1, 'lel test', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 1),
(2, 'lel test2', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `receipt_number` varchar(255) NOT NULL,
  `current_amount` int(11) NOT NULL,
  `Reliance Petroleum` int(11) NOT NULL,
  `Maruti Suzuki India` int(11) NOT NULL,
  `Nestle India` int(11) NOT NULL,
  `Bharat Petroleum` int(11) NOT NULL,
  `Hyundai` int(11) NOT NULL,
  `Patanjali` int(11) NOT NULL,
  `Sun Pharmaceuticals` int(11) NOT NULL,
  `Cipla` int(11) NOT NULL,
  `ICICI Bank` int(11) NOT NULL,
  `HDFC Bank` int(11) NOT NULL,
  `Hindustan Unilever` int(11) NOT NULL,
  `Wipro` int(11) NOT NULL,
  `Larsen and Tubro` int(11) NOT NULL,
  `BHEL` int(11) NOT NULL,
  `JP Morgan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `stock_name` varchar(255) NOT NULL,
  `stock_price` int(255) NOT NULL,
  `delta` int(11) NOT NULL,
  `delta_pc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`stock_name`, `stock_price`, `delta`, `delta_pc`) VALUES
('Reliance Petroleum', 357, 2, 2),
('Maruti Suzuki India', 312, 2, 4),
('Nestle India', 265, 2, 6),
('Bharat Petroleum', 270, 2, 8),
('Hyundai', 330, 2, 10),
('Patanjali', 392, 2, 12),
('Sun Pharmaceuticals', 513, 2, 14),
('Cipla', 406, 2, 16),
('ICICI Bank', 295, 2, 18),
('HDFC Bank', 360, 2, 20),
('Hindustan Unilever', 427, 2, 22),
('Wipro', 496, 2, 24),
('Larsen and Tubro', 378, 2, 26),
('BHEL', 448, 2, 28),
('JP Morgan', 390, 2, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD UNIQUE KEY `receipt_number` (`receipt_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
