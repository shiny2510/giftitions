-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2020 at 10:19 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shiny_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `product_price` decimal(9,2) NOT NULL,
  `product_description` varchar(512) NOT NULL,
  `category` varchar(64) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image_main` varchar(256) NOT NULL,
  `image_other` varchar(512) NOT NULL,
  `image_thumb` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_description`, `category`, `quantity`, `image_main`, `image_other`, `image_thumb`, `date_create`, `date_modify`) VALUES
(1, 'Butterfly Windchime', 18.00, 'Butterfly shaped elements, Paper product, pink color, windchime', 'home decor', 1, 'images/windchime_main.jpg', 'images/windchime_1.jpg, images/windchime_2.jpg, images/windchime_3.jpg', '', '2020-11-07 22:35:46', '0000-00-00 00:00:00'),
(2, '25 anniversary theme Bottle Lamp ', 35.00, '25th Anniversary Themed bottle silver lamp with fairy lights and picture frames silver color', 'home decor', 1, 'images/bottlelamp25_main.jpg', 'images/bottlelamp25_1.jpg,\r\nimages/bottlelamp25_2.jpg,\r\nimages/bottlelamp25_3.jpg', '', '2020-11-07 22:35:42', '0000-00-00 00:00:00'),
(3, 'family book ', 45.00, 'scrap book / family album , insert customized pictures and messages ', 'photo albums', 1, 'familybook_1.jpg', 'images/familybook_1.jpg,\r\nimages/familybook_2.jpg,\r\nimages/familybook.mov', '', '2020-11-07 22:35:38', '0000-00-00 00:00:00'),
(4, 'valentines day photo album', 45.00, 'valentines day theme photo album, insert your pictures and messages ', 'photo album', 1, 'valentinesalbum_1.jpg', 'images/valentinesalbum_1.jpg,\r\nimages/valentinesalbum_2.jpg', '', '2020-11-07 22:35:32', '0000-00-00 00:00:00'),
(5, 'Birthday Hamper Red', 60.00, 'Red Theme Birthday Basket Hamper with 12 products (handmade cards and accessories)', 'hampers', 1, 'hamper_1.jpg', 'images/hamper_1.jpg,\r\nimages/hamper_2.jpg,\r\nimaes/hamper.mov', '', '2020-11-07 22:35:07', '0000-00-00 00:00:00'),
(6, 'Birthday Hamper purple', 60.00, 'purple blue Theme Birthday Basket Hamper with 12 products (handmade cards and accessories)', 'hampers', 1, 'hamper2_1.jpg', 'images/hamper2_1.jpg,\r\nimages/hamper2_2.jpg,\r\nimaes/hamper.mov', '', '2020-11-07 22:35:07', '0000-00-00 00:00:00'),
(7, 'frames - mothers day ', 25.00, 'mothers day wall frame with 11 pictures insertable', 'frames', 1, 'images/momframe_1.jpg', 'images/momframe_1.jpg,\r\nimages/momframe_2.jpg,\r\nimages/momframe_3.jpg', '', '2020-11-07 22:35:07', '0000-00-00 00:00:00'),
(8, 'frames - set of 3', 25.00, 'set of 3 frames desk mounted', 'frames', 1, 'images/frameset_1.jpg', 'images/frameset_1.jpg,\r\nimages/frameset_2.jpg,', '', '2020-11-07 22:35:07', '0000-00-00 00:00:00'),
(9, 'explosion box - theme 1', 45.00, 'explosion box with customized pictures and messages, 3 layers', 'explosion box', 1, 'images/eboxtheme1_1.jpg', 'images/eboxtheme1_1.jpg,\r\nimages/eboxtheme1_2.jpg,', '', '2020-11-07 22:35:07', '0000-00-00 00:00:00'),
(10, 'explosion box - theme 2', 45.00, 'explosion box with customized pictures and messages, 3 layers', 'explosion box', 1, 'images/eboxtheme2_1.jpg', 'images/eboxtheme2_1.jpg,\r\nimages/eboxtheme2_2.jpg,', '', '2020-11-07 22:35:07', '0000-00-00 00:00:00'),
(11, 'thank you card ', 8.00, 'Handmade Thank you Card', 'cards', 1, 'images/tycard_1.jpg', 'images/tycard_1.jpg,\r\nimages/tycard_2.jpg,', '', '2020-11-07 22:35:07', '0000-00-00 00:00:00'),
(12, 'birthday card ', 8.00, 'Handmade birthday Card', 'cards', 1, 'images/bdcard_1.jpg', 'images/bdcard_1.jpg,\r\nimages/bdcard_2.jpg,', '', '2020-11-07 22:35:07', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
