-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2017 at 06:16 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdmybd`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE `add_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `add_division`
--

CREATE TABLE `add_division` (
  `id` int(11) NOT NULL,
  `division_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `add_sub_division`
--

CREATE TABLE `add_sub_division` (
  `id` int(11) NOT NULL,
  `division_name` varchar(255) NOT NULL,
  `sub_division_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `password`, `role`) VALUES
(3, 'test', '226c77dc77a2ae19445d07d0c212483bd35a2d6e', 'ADMIN'),
(4, 'admin', 'a76112db2c2635845077fb00c3139dafdc5cdab5', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `shopkeeper_id` int(55) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `image_description` varchar(255) NOT NULL,
  `path` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `shopkeeper_id`, `img_name`, `image_description`, `path`) VALUES
(47, 12, 'localhost_5380972416FILE0013-4.jpg', 'First', 'site_img/item_image/'),
(48, 12, 'localhost_7831492605IMG_1688.jpg', 'Second', 'site_img/item_image/'),
(49, 12, 'localhost_2453970681IMG_2734-2.jpg', 'Third', 'site_img/item_image/'),
(50, 12, 'localhost_2516809734IMG_2798-4.jpg', 'Fourth', 'site_img/item_image/'),
(51, 12, 'localhost_9203451876IMG_9164.jpg', 'Fifth', 'site_img/item_image/'),
(52, 12, 'localhost_5380246719IMG_9235.jpg', 'Sixth', 'site_img/item_image/'),
(53, 12, 'localhost_6901723548IMG_9350.jpg', 'Seventh', 'site_img/item_image/'),
(54, 12, 'localhost_8029157463IMG_9868.jpg', 'Eighth', 'site_img/item_image/'),
(55, 12, 'localhost_5897412360TFQ-2016-04-22-0020.jpg', 'Nineth', 'site_img/item_image/'),
(56, 12, 'localhost_7058624319Towfiq-Chowdhury brick_.jpg', 'Tenth', 'site_img/item_image/'),
(57, 12, 'localhost_3548096721Red-Chillie.jpg', 'Eleventh', 'site_img/item_image/'),
(58, 14, 'localhost_9564873120IMG_1688.jpg', 'First', 'site_img/item_image/'),
(59, 14, 'localhost_8206574913IMG_1813.jpg', 'Second', 'site_img/item_image/'),
(60, 14, 'localhost_1253890764IMG_1865.jpg', 'Third', 'site_img/item_image/'),
(61, 14, 'localhost_2410735986IMG_1945.jpg', 'Fourth', 'site_img/item_image/'),
(62, 14, 'localhost_2145609783IMG_1993.jpg', 'Fifth', 'site_img/item_image/'),
(63, 14, 'localhost_0425169378IMG_2016.jpg', 'Sixth', 'site_img/item_image/'),
(64, 15, 'localhost_4972186530IMG_8893.jpg', 'First', 'site_img/item_image/'),
(65, 15, 'localhost_6087531429IMG_9235.jpg', 'Second', 'site_img/item_image/'),
(66, 15, 'localhost_9306582471IMG_9350.jpg', 'Third', 'site_img/item_image/'),
(67, 15, 'localhost_7269038145IMG_9437.jpg', 'Fourth', 'site_img/item_image/'),
(68, 15, 'localhost_0648517932IMG_9497.jpg', 'Fifth', 'site_img/item_image/'),
(69, 15, 'localhost_7549836201TFQ-2016-04-22-0020.jpg', 'Sixth', 'site_img/item_image/'),
(70, 15, 'localhost_2453706198TFQ-2016-04-22-0023.jpg', 'Seventh', 'site_img/item_image/'),
(71, 16, 'localhost_3846127059IMG_8661.jpg', 'First', 'site_img/item_image/'),
(72, 17, 'localhost_0278361549IMG_8661.jpg', 'First', 'site_img/item_image/'),
(73, 17, 'localhost_0726134859IMG_8873.jpg', 'Second', 'site_img/item_image/'),
(74, 17, 'localhost_0138249576IMG_9019-2.jpg', 'Third', 'site_img/item_image/'),
(75, 17, 'localhost_7453210698IMG_9026.jpg', 'Fourth', 'site_img/item_image/'),
(76, 17, 'localhost_8941653072IMG_9826.jpg', 'Fifth', 'site_img/item_image/'),
(77, 17, 'localhost_2708493651IMG_9839.jpg', 'Sixth', 'site_img/item_image/'),
(78, 16, 'localhost_4058296137IMG_9164.jpg', 'First', 'site_img/item_image/'),
(79, 16, 'localhost_1394507682IMG_9368.jpg', 'Second', 'site_img/item_image/'),
(80, 16, 'localhost_7418526903IMG_9396.jpg', 'Third', 'site_img/item_image/'),
(81, 16, 'localhost_7540261839IMG_9521.jpg', 'Fourth', 'site_img/item_image/'),
(82, 16, 'localhost_1760348952IMG_9822.jpg', 'Fifth', 'site_img/item_image/'),
(83, 16, 'localhost_3705246891IMG_9868.jpg', 'Sixth', 'site_img/item_image/');

-- --------------------------------------------------------

--
-- Table structure for table `shopkeeper`
--

CREATE TABLE `shopkeeper` (
  `id` int(11) NOT NULL,
  `division_id` int(55) NOT NULL,
  `sub_division_id` int(55) NOT NULL,
  `category_id` int(55) NOT NULL,
  `sub_category_id` int(55) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `header_img` varchar(255) NOT NULL,
  `shop_description` text NOT NULL,
  `inset_time` date NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(33) NOT NULL,
  `email` varchar(55) NOT NULL,
  `web_address` varchar(122) NOT NULL,
  `offer_imformation` text NOT NULL,
  `status` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shopkeeper`
--

INSERT INTO `shopkeeper` (`id`, `division_id`, `sub_division_id`, `category_id`, `sub_category_id`, `shop_name`, `owner`, `header_img`, `shop_description`, `inset_time`, `address`, `phone_number`, `email`, `web_address`, `offer_imformation`, `status`) VALUES
(12, 1, 1, 1, 1, 'Slider', '1', 'localhost_65721430479526.png', 'Slider									', '2017-02-28', '1', '0167777777', 'test@test.com', '1', '1', 0),
(14, 1, 1, 1, 1, 'A special Child', '1', 'localhost_72430651IMG_1993.jpg', 'Bayezid Shikder he is only 4 year 5 month old. He is suffering a very rare genetic disorder makes him looks like 80 years old. When Bayezid was born in 2012 in a maternity hospital his parents were shocked by his appearance and devastated after the doctors told him they did not know what was good. His family has tried different types of medications, but nothing helped their him. His liver and kidney are not working properly. According to medical studies, people suffering from this rare disease usually die at 13 years of heart attacks or strokes. As current statistics there are 75 Progeria child in this world.\r\nBayezid loves to play with the ball, draw and paint on paper, and even usually break their toys and then try to fix them. At his early age people was afraid to get close to him but over the time neighbors are slowly getting used to presence of Bayezid and now they call him Old Child.\r\n', '2017-02-28', '1', '0167777777', 'test@test.com', '1', '1', 0),
(15, 1, 1, 1, 1, 'Brothel', '1', 'localhost_43765201TFQ-2016-04-22-0020.jpg', 'It is a vast brothel, where 400 women and girls lead painful and degrading lives, in the otherwise pleasant town of Faridpur, a couple of hours drive from the capital Dhaka.\r\nFemale sex workers are often abused. Most of the worker was forced to do this work. Some of their family had no choice because of poverty. Some of their families don’t know what they are actually doing. Some of their families throw them out. Allover are having very hard life in this dark world.	', '2017-02-28', '1', '0167777777', 'test@test.com', '1', '1', 0),
(16, 1, 1, 1, 1, 'Refugees', '1', 'localhost_76402135IMG_9164.jpg', 'The Rohingya people of Myanmar’s Rakhine State were forced to cross the dangerous Bay of Bengal in search of a safe place to live. The first large exodus occurred in the 1970’s, when thousands of Rohingya were forced out of their homes and into Bangladesh by the Myanmar military. While some returned in the interim, another mass purge occurred in 1991 and 1992. But as recently as November 2016, lots of Rohingya refugees coming everyday in Bangladesh.In Leda Camp new comer is now over 2000. There are 1992 house in Leda camp. The size of the house is 10 hand by 8 hand. In a tinny room 15-18 people sleep together. The health condition of camp is very poor. Everyday this people are facing new challenge to live.', '2017-02-28', '1', '0167777777', 'test@test.com', '1', '1', 0),
(17, 1, 1, 1, 1, 'Transgender', '1', 'localhost_03261547IMG_8873.jpg', 'Mithu Ahmed (Ria)said from my early childhood I used to be very shy in nature. I didn’t like to play with boys and used to stay at home and play with kitchen utensils. When I was in class 8 , I figured out that I like to behave like girls. Whenever there was nobody at home I would wear my elder sister’s cloth and apply her lipstick, powder, eyeliner to look like a beautiful girl. That year at my cousins wedding I went to stay there to celebrate. On the wedding night all of us started dancing. After the dance some of my relatives told me that I danced like a girl. At that night I had my first sex and I realized what I want to be. Few months later I met with some people from Hizra (She male) community. I explained them about myself and they accepted me in their community. Now I have spent several years in this community with great dignity. They behave properly with me. I can now wear clothes as my wish and also can do make up, which was my dream.', '2017-02-28', '1', '0167777777', 'test@test.com', '1', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `shop_id` int(55) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twiter` varchar(255) NOT NULL,
  `google_plus` varchar(256) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `shop_id`, `facebook`, `twiter`, `google_plus`, `status`) VALUES
(3, 3, '1', '1', '1', 0),
(7, 7, '1', '1', '1', 0),
(8, 8, '1', '1', '1', 0),
(9, 9, '1', '1', '1', 0),
(10, 10, '1', '1', '1', 0),
(11, 11, '1', '1', '1', 0),
(12, 12, '1', '1', '1', 0),
(13, 13, '1', '1', '1', 0),
(14, 14, '1', '1', '1', 0),
(15, 15, '1', '1', '1', 0),
(16, 16, '1', '1', '1', 0),
(17, 17, '1', '1', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `category_id` varchar(55) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `image` varchar(245) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_category`
--
ALTER TABLE `add_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_division`
--
ALTER TABLE `add_division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_sub_division`
--
ALTER TABLE `add_sub_division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopkeeper`
--
ALTER TABLE `shopkeeper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_category`
--
ALTER TABLE `add_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `add_division`
--
ALTER TABLE `add_division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `add_sub_division`
--
ALTER TABLE `add_sub_division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `shopkeeper`
--
ALTER TABLE `shopkeeper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
