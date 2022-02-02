-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2018 at 04:14 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `affirmative`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE IF NOT EXISTS `admin_table` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `user_email`, `password`, `name`) VALUES
(1, 'mail@shahrear.me', 'himel', 'Munem');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(20) NOT NULL AUTO_INCREMENT,
  `product_id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `cat_id` int(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `img1` varchar(50) NOT NULL,
  `img2` varchar(50) NOT NULL,
  `img3` varchar(50) NOT NULL,
  `pro` varchar(50) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE IF NOT EXISTS `carts` (
  `order_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `product_id` int(20) NOT NULL,
  `price` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`order_id`, `name`, `adress`, `product_id`, `price`, `email`) VALUES
(1, 'himel', 'adress', 0, '30', 'email'),
(2, 'munem', '', 0, '', 'mail@shahrear.me'),
(3, 'munem', 'dhanmondi', 0, '', 'mail@shahrear.me'),
(4, 'munem', 'dhanmondi', 0, '', 'mail@shahrear.me'),
(5, 'himel', 'sdsd', 0, '', 's@dsdds'),
(6, 'himel', 'sdsd', 0, '', 's@dsdds');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(50) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Mens'),
(2, 'Women'),
(3, 'Accessory'),
(4, 'Beauty '),
(5, 'Home & Living');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE IF NOT EXISTS `electronics` (
  `mobile` varchar(20) NOT NULL,
  `laptop` varchar(20) NOT NULL,
  `charger` varchar(20) NOT NULL,
  `cable` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `NID` int(30) NOT NULL,
  `phone_number` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE IF NOT EXISTS `men` (
  `shirt` varchar(20) NOT NULL,
  `pant` varchar(20) NOT NULL,
  `footware` varchar(20) NOT NULL,
  `fitness` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `exchange` varchar(20) NOT NULL,
  `repair` varchar(20) NOT NULL,
  `gift` varchar(20) NOT NULL,
  `%free` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(50) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `img1` varchar(50) NOT NULL,
  `img2` varchar(50) NOT NULL,
  `img3` varchar(50) NOT NULL,
  `keywords` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `title`, `description`, `price`, `img1`, `img2`, `img3`, `keywords`, `status`, `date`) VALUES
(18, 4, 'Nakes Lip Stick', 'color:rose red,orange red,pink rose\r\nLipsticks For Women Brand Lips Color Cosmetics Waterproof Long ', '400', '2521832867_1873737459.jpg', 'naked_swatch.png', '2521832867_1873737459.jpg', 'lip women makeup', 'on', '2018-07-26'),
(19, 4, 'Lip Stick', 'color:rose red,orrange red,pink rose\r\nLipsticks For Women Waterproof Long Lasting', '400', '214968-675x450-redlipstick.jpg', '214968-675x450-redlipstick.jpg', '214968-675x450-redlipstick.jpg', 'lip women makeup', 'on', '2018-07-26'),
(20, 3, 'Cool Sun glass', 'Cool sunglasses for men and women.\r\ntype: Mercury reflection.\r\ncolor:black,brown\r\nreflections:silver', '1200', 'sunglass (7).jpg', 'sunglass (7).jpg', 'sunglass (10).jpg', 'glass sunglass women men', 'on', '2018-07-26'),
(21, 3, 'Women Sun glass', 'Cool sunglasses for  women.\r\ntype:eyebrow effecting \r\ncolor:black,brown\r\n\r\n ', '1899', 'sunglass (11).jpg', 'sunglass (11).jpg', 'sunglass (9).jpg', 'glass sunglass women', 'on', '2018-07-26'),
(22, 3, 'Goggles', 'Cool sunglasses for men and women.\r\n\r\ncolor:black,brown\r\n\r\n ', '1500', 'sunglass (2).jpg', 'sunglass (8).jpg', 'sunglass (2).jpg', 'glass sunglass women men', 'on', '2018-07-26'),
(23, 3, 'casual polarized glass', 'Cool sunglasses for women.\r\ntype: casual\r\ncolor:black', '1200', 'sunglass (4).jpg', 'sunglass (4).jpg', 'sunglass (4).jpg', 'glass sunglass women casual official', 'on', '2018-07-26'),
(24, 3, 'Sun glass', 'Cool sunglasses for men and women.\r\n\r\ncolor:black,brown\r\n\r\n ', '800', 'sunglass (5).jpg', 'sunglass (6).jpg', 'sunglass (5).jpg', 'glass sunglass women men', 'on', '2018-07-26'),
(25, 3, 'Formal glass', 'formal glasses', '400', 'sunglass (3).jpg', 'sunglass (3).jpg', 'sunglass (3).jpg', 'men formal glass black', 'on', '2018-07-26'),
(26, 1, 'casual suit', 'casual suit for man\r\ncolor :grey', '4000', 'men (12).jpg', 'men (9).jpg', 'men (12).jpg', 'grey suit casual', 'on', '2018-07-26'),
(27, 2, 'Summer dress collection', 'summer collection for women.\r\nonly top.\r\nno more color available', '2000', 'women (9).jpg', 'women (9).jpg', '', 'women summer dress', 'on', '2018-07-26'),
(28, 2, 'High hills', 'women foot wear', '25899', 'hot-sale-women-sandals-2017-summer-new-open.jpg', 'hot-sale-women-sandals-2017-summer-new-open.jpg', 'hot-sale-women-sandals-2017-summer-new-open.jpg', 'footware party purple', 'on', '2018-07-26'),
(30, 2, 'yellow dress', 'yellow cotton', '1200', 'women (4).jpg', 'women (4).jpg', 'women (4).jpg', 'women summer dress', 'on', '2018-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_pic` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `user_name`, `user_email`, `user_pass`, `user_pic`) VALUES
(3, 'user', 'user@gmail.com', 'himel', ''),
(4, 'himel', 'himel@gmail.com', 'himel', ''),
(5, 'Kangkan Bar', 'kangkan@bar.com', 'kangkan', '');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE IF NOT EXISTS `women` (
  `dress` varchar(20) NOT NULL,
  `footware` varchar(20) NOT NULL,
  `cosmetics` varchar(20) NOT NULL,
  `fitness` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
