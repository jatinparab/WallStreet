-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2017 at 09:46 AM
-- Server version: 5.6.34-79.1-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `easymjyz_dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(25555) NOT NULL,
  `Reliance Industrials` int(11) DEFAULT NULL,
  `Reliance Petroleum` int(11) DEFAULT NULL,
  `Tata Consultancy Services` int(11) DEFAULT NULL,
  `HDFC Bank` int(11) DEFAULT NULL,
  `Maruti Suzuki India` int(11) DEFAULT NULL,
  `Infosys` int(11) DEFAULT NULL,
  `Google` int(11) DEFAULT NULL,
  `Nestle India` int(11) DEFAULT NULL,
  `Ambuja Cement LTD` int(11) DEFAULT NULL,
  `Kingfisher` int(11) DEFAULT NULL,
  `Air India` int(11) NOT NULL,
  `Samsung` int(11) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`number`, `news_title`, `Reliance Industrials`, `Reliance Petroleum`, `Tata Consultancy Services`, `HDFC Bank`, `Maruti Suzuki India`, `Infosys`, `Google`, `Nestle India`, `Ambuja Cement LTD`, `Kingfisher`, `Air India`, `Samsung`) VALUES
(1, 'BPCL plans to expand board', -7, -4, 1, -3, 1, 3, -2, 2, -1, -2, -2, -3),
(2, 'RIL surges to record high', 7, 2, -1, 1, -2, -1, 1, -1, 2, -1, -1, 1),
(3, '4G coverage in India will beat 2G in a year', 8, 2, 1, -2, -3, -2, 2, -2, 1, 1, 1, -1),
(4, 'data is new oil for India', 6, 1, -1, 3, 1, 2, -3, 1, -2, 1, 1, 2),
(5, 'oil spills in Indian ocean', 1, 6, 1, -1, 2, -1, -3, -1, 1, 1, 1, 1),
(6, 'Retail investors miss rally in mahanagar Gas:stock hits newhigh ', -4, -2, 3, 2, 3, 1, 1, 2, 3, -2, -2, 2),
(7, 'MRPL launch skill development centre in mangalore', -6, -3, 2, 2, 2, 1, 2, 1, 1, 2, 2, 3),
(8, 'sebi bans 13 industries from quity derivation market for 1 year', 2, 5, 1, 3, 1, 1, -1, 2, -1, 2, 2, 3),
(9, 'oil minister invites RIL,BP to invest in fuel retailing', 3, 7, 2, -2, -1, -4, 2, 3, 3, -2, -2, -2),
(10, 'big penalty on RPL in case of manipulation of shares', -1, -4, 2, -3, 2, -3, 2, 1, -3, 3, 3, 2),
(11, 'BP may partner with oil to open petrol pump in india', 3, 6, -2, 3, -2, -1, 2, 3, 1, -3, -3, -2),
(12, 'new algorithm develops that reduces transactions time', 1, 1, 2, 6, 2, -2, 3, -2, 1, -1, -1, -2),
(13, 'RIL-BP to invest Rs,40,000cr in India energy sector', 2, 7, 2, 2, -2, -1, 3, 2, -2, -1, -1, 2),
(14, 'number of accounts increased under aadhar card yojna', 1, 2, -1, 7, 2, -1, 3, -3, 3, -2, -2, 3),
(15, 'RIL wins licence for coal gas pipeline', 4, 7, -2, -3, -2, 2, 3, -1, -1, -2, -2, 2),
(16, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'NEXAis now top customer satisfy brand ', -2, -4, -2, 3, 7, -3, 2, 1, 4, -2, -2, 3),
(18, 'government floats transaction tender to private banks ', -2, 2, 3, 8, -2, -1, 2, -1, -3, 2, 2, 2),
(19, '70% of the urban people refer private bank for better customer service ', -3, -1, -1, 7, -2, 1, 1, -1, -2, -3, -3, 2),
(20, 'due to GST Black car selling market drops ', -3, -2, -2, 3, 7, -1, 2, 2, -2, -3, -3, -1),
(21, 'rise in number of DEMAT account holder as more Indians aware of the share market', 1, -1, -2, 9, -1, -1, 2, -1, -2, -3, -3, 2),
(22, 'Decreasing prices of steel and rubber by government', -3, -3, -2, -4, 7, 2, 3, -2, -1, -3, -3, -3),
(23, 'Lowest maintenance cars among the segment', -3, -4, -3, -2, 6, 2, 1, -4, 2, 3, 3, -2),
(24, 'India needs cars most preferred in the budget segment', -3, -3, 2, -2, 7, -3, 2, 3, 2, -3, -3, -1),
(25, 'goverment banded on production of V4 engine and automobile made before 2000', -3, -2, 1, 2, -7, 3, 2, 3, 3, 1, 1, 4),
(26, '8 out 10 shock up manufacturing companies goes on strike due to increase rate of raw materials.', -2, -3, 2, 1, -7, 2, 4, 1, 2, -3, -3, -2),
(27, 'foreing companies manufactering electric budget cars in India.', -3, -2, 2, 2, -7, -2, -3, 3, 4, -2, -2, -1),
(28, 'Next  generation requires newly build IT software as computer revolution is progressing.', -2, -3, -1, 2, -2, 7, 4, 3, -2, -2, -2, 3),
(29, 'HCL technologies facing a major drop in share prices.', 2, -3, -1, 2, 4, 7, 3, 2, -3, -2, -2, 2),
(30, 'IT stocks gain as Accenture result  beat estimate', 2, 3, -3, -3, -2, 6, 3, -2, -3, -2, -2, -1),
(31, 'Goverment introduce lots of new software project in India.', -3, -2, -2, 4, 2, 6, 3, 1, -3, -2, -2, -1),
(32, 'WIPRO shows highly adaptive nature ', 3, 2, -2, 2, 1, 7, 2, 2, -1, -2, -2, -1),
(33, 'Increase in sell of software develop freelancers.', 1, 3, 1, -2, -1, -6, 2, 2, -3, -1, -1, 2),
(34, 'The software company terms negative media coverage,activist investers as risk factors.', 2, 3, -2, -4, 2, -7, 2, 3, -2, -3, -3, -4),
(35, 'LIC has acquired 40000 shares in FMCG', -4, -2, -3, -2, 3, 2, 4, 8, -4, -3, -3, -2),
(36, 'FSSAI Issues Draft Quality Standards for Instant Noodles', 2, 3, -3, -2, 2, -3, -4, 6, -2, -3, -3, -2),
(37, 'Maggi With 57 Per cent Share Regains Top Slot in Noodles Market', -3, -2, -4, -5, -2, 3, 4, 7, -3, -5, -5, 2),
(38, 'A Year On, Maggi Back to Winning Ways', -3, -2, -4, 2, 3, -4, 3, 7, 2, 3, 3, 2),
(39, 'Supreme Court Nod To Destroying 550 Tonnes Of Maggi', 2, 2, 3, 4, 2, 3, -2, -7, 2, -2, -2, 2),
(40, 'Patanjali products gains highest share in the market', 2, 3, 2, -2, -4, -3, 2, -8, -3, 3, 3, -4),
(41, 'Zoonatic disease spread through cows', 2, 3, 2, -3, -4, -2, -3, -7, 2, 3, 3, -3),
(42, 'FSSAI banned all the milk product ', -3, -2, 3, 2, -3, -2, -3, -8, 2, 3, 3, -3),
(43, 'FMCG, sugar stocks decline', -3, -4, -3, -2, 3, 3, 2, -9, -2, -3, -3, 6),
(44, 'FMCG, pharma shares decline', -3, -2, -6, -2, -3, 2, 3, -8, -3, 2, 2, -3),
(45, 'FMCG Companies Looks Beyond ''Temporary Blip'', Keep Faith In GST', -3, -2, -1, -2, -3, 3, 2, 7, 3, 2, 2, -2),
(46, 'HDFC bank asking customers to sell Ambuja Cement Stocks.', -1, -2, 1, 2, -1, -1, 1, -1, -5, 1, 1, 1),
(47, 'Back to Back building  Collapses in Mumbai.', 1, 1, -1, -2, -2, -1, -2, 2, -6, 1, 1, 3),
(48, 'Jk Cements made a total of 5% increase in share price.', 1, 1, 1, 3, 2, 1, -2, 1, -6, -1, -1, 2),
(49, '50 New stocks of Ambuja cements Hits the Stock Market.', -1, -1, -1, 2, 2, -2, 1, 1, -7, 1, 1, 1),
(50, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, '20 shell companies mallya setup to park funds raised to save kingfisher airlines.', 1, 1, 1, 1, 1, -1, -1, -1, -2, 8, 8, -1),
(52, '72 new shares of kingfisher to hit the share market.', -1, -1, 1, 1, 1, -1, -1, -2, 2, 7, 7, -1),
(53, 'Kingfishers house auction to fail 5th time.', 1, 1, 1, 1, 1, 1, -1, -1, -1, 9, 9, 2),
(54, 'Supreme court holds vijay mallya guilty of contempt on plea by consortium of banks', -1, -1, 1, 1, 1, 2, 2, -1, -1, 7, 7, 2),
(55, 'Lenders get no takers for vijay mallyas properties again.', -2, -2, 1, 1, -1, 1, -2, -1, -2, 9, 9, 3),
(56, 'Non bailable warrant against vijay mallya to be charged.', -1, -1, 1, 1, 1, -2, -2, 3, -1, 6, 6, -3),
(57, 'Kingfisher  to plan 20 new Aircrafts with low financial condition.', 1, 1, 1, 1, 1, -1, -2, 2, 2, -7, -7, 1),
(58, 'Vijay mallya found to be insolvent.', 1, 1, 1, 1, 1, -1, -2, -1, -2, -4, -4, -2),
(59, 'Two Kingfisher airlines on auction today.', -1, -2, -1, -2, 1, 2, 1, 2, -1, -6, -6, 1),
(60, 'Royal challengers banglore to sell their players in auction.', 1, 1, 1, 1, 1, 1, 1, -2, -2, -5, -5, 1),
(61, 'A truck gets hit a IGI airport.No one harmed', -3, -4, -1, 2, -2, 3, -1, -2, -1, 3, 3, -2),
(62, 'Air India plans to take total of Rs.3250 core for urgent capital need.', 2, 3, 2, 1, -2, -2, -1, 3, 3, -2, -2, -1),
(63, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 'Faulty aircrafts engines to be made  and caught.', 1, 1, 2, -1, -2, 1, -2, 1, -1, -6, -6, 1),
(65, 'After a huge Loss of kingfisher airlines 20 new shares hit the share market.', 1, 1, 1, 1, 2, -2, 1, -2, -3, -7, -7, 3),
(66, 'Air India gets a new title "Moutain of Debt"', 3, 4, -2, -1, -3, 3, -2, -4, -1, 3, 3, 1),
(67, 'Affable Ashwani Lohani  alights from disinvestment bound in air india.', 1, -2, -1, 3, 2, -2, 3, 2, -2, -2, -2, 2),
(68, 'Air india airlines under inspection.', 1, -1, -1, -1, 1, -2, -2, -3, 2, 1, 1, -1),
(69, 'Iraq cuts Kurdistan airlinks with outside world', 1, 1, 2, 2, 3, -1, -2, -3, 1, 1, 1, 2),
(70, 'Samsung launches  galaxy note 8', -2, -3, 2, 1, 1, 3, -2, 2, -3, 2, 2, 2),
(71, 'Air india ties up with Punjab national bank.', 1, 2, 3, -1, -2, -3, 1, -1, -2, 2, 2, 3),
(72, 'Vistara plans to connect 50 destinations in Europe, the Middle East and Southeast Asia through a mix of its own aircraft and codeshare partners over a period of three years', 3, -3, 2, -2, 1, -2, -1, -2, 2, 2, 2, 3),
(73, 'Samsung launches  galaxy note 8', -2, -3, -1, 3, 2, 3, 3, -2, -1, -2, -2, 8),
(74, 'A trial flight to shirdi airport was made successfully', -1, -1, 1, 1, 2, -2, 3, 3, -2, -1, -1, -1),
(75, 'NBCC will be launching flats and commercial area across the country. The flats will be priced between Rs 15 lakh and Rs 1 crore,', 1, 1, 1, 1, -2, -3, -2, 2, 2, -1, -1, 1),
(76, 'After a Hard recovery 100 new shares of samsung hit the share market.', 1, -1, 2, -1, -4, 2, 3, -2, 2, -3, -3, 7),
(77, 'Samsung to be launching refrigerators,TV,smartphones in late 2017', 2, 1, -2, -3, -2, -1, 1, -1, 2, 2, 2, 7),
(78, 'Samsung to be compared with Apple Iphone ', 3, 2, 3, -2, -1, -2, 3, 2, 1, 1, 1, 8),
(79, 'Samsung CEO promise to take back Company to Top', 2, 2, -3, -2, -1, -3, 2, -3, -2, 2, 2, 9),
(80, 'Samsung and xiomi Hits the market at a same time', 2, 3, -3, -2, 3, -2, 2, 3, 2, -2, -2, -7),
(81, 'Redmi Note 4 sale flashesh in a minutes.', 2, 3, -3, -1, -2, 2, 3, -2, -3, 1, 1, -9),
(82, 'Samsung grand 2 launch date to be extended', -2, -1, 3, 2, 2, 3, 2, 2, -2, 3, 3, -7),
(83, 'Back to Back Smart phones incident .', -2, -3, 2, 3, -2, 2, 4, 1, -3, -2, -2, -9);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
