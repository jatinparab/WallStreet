-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2017 at 11:30 AM
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
  `news_title` longtext NOT NULL,
  `Reliance Industrials` int(11) NOT NULL,
  `Reliance Petroleum` int(11) NOT NULL,
  `Tata Consultancy Services` int(11) NOT NULL,
  `HDFC Bank` int(11) NOT NULL,
  `Maruti Suzuki India` int(11) NOT NULL,
  `Infosys` int(11) NOT NULL,
  `Google` int(11) NOT NULL,
  `Nestle India` int(11) NOT NULL,
  `Ambuja Cement LTD` int(11) NOT NULL,
  `Kingfisher` int(11) NOT NULL,
  `Air India` int(11) NOT NULL,
  `Samsung` int(11) NOT NULL,
  `taken` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`number`, `news_title`, `Reliance Industrials`, `Reliance Petroleum`, `Tata Consultancy Services`, `HDFC Bank`, `Maruti Suzuki India`, `Infosys`, `Google`, `Nestle India`, `Ambuja Cement LTD`, `Kingfisher`, `Air India`, `Samsung`, `taken`) VALUES
(1, 'Samsung pulls Galaxy Note 7 off the market.', 4, -3, 2, 1, 1, 2, 8, -3, 4, 5, 4, -9, 0),
(2, 'Google launches a new phone', -3, 2, -1, 2, 3, 4, 6, -2, 2, 1, 2, -3, 0),
(3, 'Automata - An artificial intelligence company launches a new software to train personal assistants over live calls.', 0, 0, -12, 3, 1, -7, -1, 2, 0, 2, 1, -2, 0),
(4, 'Petrol, Diesel prices reach a new high, highest percent change in this quarter.', 4, 12, 1, 2, -7, 2, 2, 2, -2, -2, -5, 1, 0),
(5, 'Heavy rainfall in Maharashtra, most companies to remain shut as precautionary measures.', -4, -5, 0, 2, 2, 1, 4, 2, -8, -6, -10, 2, 0),
(6, 'PM Modi decides to ban Rs. 1000, Rs. 500, as a preventive measure against black money.', -5, -6, 4, -10, 2, 8, 9, -2, -1, 2, 7, -3, 0),
(7, 'Government approves the work of Mumbai Metro, to start construction work as soon as possible.', 9, 8, 2, 1, -6, 2, 1, 2, 9, -3, -5, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `receipt_number` varchar(255) NOT NULL,
  `current_amount` int(11) NOT NULL,
  `Reliance Industrials` int(11) NOT NULL,
  `Reliance Petroleum` int(11) NOT NULL,
  `Tata Consultancy Services` int(11) NOT NULL,
  `HDFC Bank` int(11) NOT NULL,
  `Maruti Suzuki India` int(11) NOT NULL,
  `Infosys` int(11) NOT NULL,
  `Google` int(11) NOT NULL,
  `Nestle India` int(11) NOT NULL,
  `Ambuja Cement LTD` int(11) NOT NULL,
  `Kingfisher` int(11) NOT NULL,
  `Air India` int(11) NOT NULL,
  `Samsung` int(11) NOT NULL
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
('Reliance Industrials', 350, 0, 0),
('Reliance Petroleum', 300, 0, 0),
('Tata Consultancy Services', 250, 0, 0),
('HDFC Bank', 250, 0, 0),
('Maruti Suzuki India', 300, 0, 0),
('Infosys', 350, 0, 0),
('Google', 450, 0, 0),
('Nestle India', 350, 0, 0),
('Ambuja Cement LTD', 250, 0, 0),
('Kingfisher', 300, 0, 0),
('Air India', 350, 0, 0),
('Samsung', 400, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD UNIQUE KEY `number` (`number`);

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
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
