-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 05:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notify`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` bigint(20) NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` int(11) NOT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postby_id` int(6) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `is_verified` tinyint(1) DEFAULT 0,
  `verifiedby_id` int(6) DEFAULT 1,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `status` tinyint(1) DEFAULT 1,
  `value` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `title`, `name`, `username`, `email`, `password`, `address`, `contact`, `city`, `zip`, `remarks`, `postby_id`, `created_at`, `is_verified`, `verifiedby_id`, `updated_at`, `status`, `value`) VALUES
(9, 'Screenshot (200).png', 'hamrogas', 'hamrogas', 'm@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'bhaktapur', 9865741234, 'bhaktapur', 0, NULL, 1, '2020-11-08 14:59:51', 1, 1, '2020-11-19 17:16:51', 1, 1),
(71, '1605785757-himal-gas.jpg', 'admin', 'admin', 'hamrogas.nepal@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Golmadi', 9860916619, 'Bhaktapur', 10001, NULL, 1, '2020-03-27 09:22:50', 1, 1, '2020-11-19 17:20:57', 1, 1),
(72, '1605841931-r2.jpg', 'goramanisha', 'manish', 'mamams@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'gkkg', 9874563212, '3', 4004, NULL, 1, '2020-11-20 03:12:11', 0, 1, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE `confirm` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `code` mediumint(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirm`
--

INSERT INTO `confirm` (`id`, `c_id`, `email`, `code`) VALUES
(104, 131, 'kevin@gmail.com', 15),
(105, 10012, 'm.hyongoju04@gmail.com', 15),
(106, 10014, 'jenishprajapati@yahoo.com', 15);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(6) UNSIGNED NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postby_id` int(6) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `is_verified` tinyint(1) DEFAULT 0,
  `verifiedby_id` int(6) DEFAULT 1,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `status` tinyint(1) DEFAULT 1,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(10) NOT NULL,
  `item` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(3) NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizenship_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` mediumint(7) NOT NULL,
  `latitude` decimal(12,8) NOT NULL,
  `longitude` decimal(12,8) NOT NULL,
  `type` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `email`, `postby_id`, `created_at`, `is_verified`, `verifiedby_id`, `updated_at`, `status`, `first_name`, `last_name`, `address`, `phone_number`, `item`, `payment`, `purpose`, `quantity`, `profile`, `citizenship_card`, `code`, `latitude`, `longitude`, `type`, `amt`) VALUES
(131, 'kevin@gmail.com', 1, '2020-08-30 11:10:45', 0, 1, '2020-11-20 09:40:21', 1, 'kwvin', 'kook', 'dadeldura', 1234567899, 'HP GAS', 'Pay Online', 'comercial', 5, '1604998571-1585573172-ed.jpg', 'gas5.jpg', 637815, '27.68240640', '85.33114880', 'new', 0),
(132, 'orera52@gmail.com', 1, '2020-08-30 11:19:08', 0, 1, '2020-11-20 09:40:25', 1, 'treat', 'trea', 'surya', 1234567890, 'HP GAS', 'Pay Online', 'domestic', 1, '1604998571-1585573172-ed.jpg', 'gas3.jpg', 503564, '27.68240640', '85.33114880', 'old', 0),
(10013, 'amanmool03@gmail.com', 1, '2020-11-19 04:23:34', 0, 1, '2020-11-20 09:38:43', 1, 'aman', 'mool', 'bhaktapur', 2147483647, 'NEPAL GAS', 'COD', 'domestic', 1, 'Capture.JPG', 'Capture.JPG', 842702, '27.66664400', '85.42778400', 'old', 1375),
(10031, 'zenish4577@gmail.com', 1, '2020-11-20 02:54:44', 0, 1, '2020-11-20 09:38:51', 1, 'Jenish', 'Prajapati', 'bkt', 2147483647, 'NEPAL GAS', 'COD', 'domestic', 2, 'r1 (1).jpg', 'r1.jpg', 203856, '27.66664400', '85.42778400', 'new', 8000),
(10035, 'zenish077@gmail.com', 1, '2020-11-20 03:50:48', 0, 1, '2020-11-20 10:23:02', 1, 'Jenish', 'Prajapati', 'bkr', 2147483647, 'NEPAL GAS', 'COD', 'domestic', 1, 'r0.jpg', 'r0.jpg', 540097, '27.66664400', '85.42778400', 'old', 1350),
(10036, 'zenish77@gmail.com', 1, '2020-11-20 03:52:07', 0, 1, '2020-11-20 10:23:05', 1, 'Jenish', 'Prajapati', 'bkt', 2147483647, 'NEPAL GAS', 'COD', 'domestic', 2, 'r0.jpg', 'r0.jpg', 878630, '27.66664400', '85.42778400', 'new', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `delivered`
--

CREATE TABLE `delivered` (
  `id` int(11) NOT NULL,
  `C_id` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` int(11) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `item` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(3) NOT NULL,
  `purpose` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `Delivered_date` datetime NOT NULL,
  `Confirmed_date` datetime NOT NULL DEFAULT current_timestamp(),
  `profile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` decimal(12,8) NOT NULL,
  `latitude` decimal(12,8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivered`
--

INSERT INTO `delivered` (`id`, `C_id`, `name`, `email`, `address`, `contact`, `item`, `payment`, `quantity`, `purpose`, `date`, `Delivered_date`, `Confirmed_date`, `profile`, `longitude`, `latitude`) VALUES
(31, 10011, 'mani', 'm.hyongoju04@gmail.com', 0, 2147483647, 'NEPAL GAS', 'COD', 1, 'domestic', '2020-11-16 12:53:00', '2020-11-16 12:55:31', '2020-11-16 15:32:54', 'IMG_20200420_163656.jpg', '85.33330000', '27.66670000'),
(32, 10012, 'manish', 'm.hyongoju04@gmail.com', 0, 2147483647, 'NEPAL GAS', 'COD', 1, 'domestic', '2020-11-17 12:42:56', '2020-11-17 12:44:50', '2020-11-17 12:45:01', 'bg.jpg', '85.33330000', '27.66670000'),
(33, 10014, 'Jenish', 'jenishprajapati@yahoo.com', 0, 2147483647, 'NEPAL GAS', 'COD', 1, 'domestic', '2020-11-19 19:59:23', '2020-11-19 21:43:47', '2020-11-19 21:44:06', '1.jpg', '85.33770240', '27.69223680');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boy`
--

CREATE TABLE `delivery_boy` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` bigint(20) NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` int(11) NOT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postby_id` int(6) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `is_verified` tinyint(1) DEFAULT 0,
  `verifiedby_id` int(6) DEFAULT 1,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `status` tinyint(1) DEFAULT 1,
  `value` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_boy`
--

INSERT INTO `delivery_boy` (`id`, `title`, `name`, `username`, `email`, `password`, `address`, `contact`, `city`, `zip`, `remarks`, `postby_id`, `created_at`, `is_verified`, `verifiedby_id`, `updated_at`, `status`, `value`) VALUES
(69, '1585298137-ed.jpg', 'admin', 'admin', 'hamrogas.nepal@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Golmadi', 9860916619, 'Bhaktapur', 10001, NULL, 1, '2020-03-26 12:14:42', 0, 1, '2020-11-19 17:18:04', 1, 0),
(71, '1585300970-aman.png', 'Amanmool', 'amanmool10', 'amanmool03@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Golmadi', 9860916619, 'Bhaktapur', 10001, NULL, 1, '2020-03-27 09:22:50', 0, 1, '2020-11-19 17:17:41', 1, 0),
(83, '1605785726-r0.jpg', 'Jenish Prajapati', 'izenish', 'zenish77@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'suryabinay', 9860465540, '3', 4004, NULL, 1, '2020-11-19 11:35:26', 0, 1, NULL, 1, 2),
(85, '1605842106-r2.jpg', 'gora', 'gora', 'hamrogasds.nepal@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'bkt', 1234567898, '3', 1234, NULL, 1, '2020-11-20 03:15:06', 0, 1, NULL, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `gas_cylinders`
--

CREATE TABLE `gas_cylinders` (
  `gas_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `exc_price` smallint(6) NOT NULL,
  `new_price` smallint(6) NOT NULL,
  `stock` int(11) NOT NULL,
  `purpose` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gas_cylinders`
--

INSERT INTO `gas_cylinders` (`gas_id`, `title`, `content`, `author`, `featured_image`, `exc_price`, `new_price`, `stock`, `purpose`, `type`, `user_name`, `email`) VALUES
(1, 'SHREE GAS', '15L of SHREE domestic gas. Not for Commercial Use', '', 'gas3.jpg', 1375, 4000, 2, '', '', '', ''),
(2, 'NEPAL GAS', '15L of NEPAL Gas domestic gas. Not for Commercial Use', '', 'gas1.jpg', 1350, 4000, 50, '', '', '', ''),
(3, 'HIMAL GAS', '15L of HIMAL domestic gas. Not for Commercial Use', '', 'gas4.jpg', 1350, 4000, 5, '', '', '', ''),
(4, 'BHERI GAS', '15L of BHERI domestic gas. Not for Commercial Use', '', 'gas2.jpg', 1375, 400, 138, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `gas_name` varchar(30) NOT NULL,
  `purpose` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `gas_name`, `purpose`, `type`) VALUES
(1, 'HP GAS', 'domestic', 'old'),
(4, 'Everest Gas', 'comercial', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`location`) VALUES
('<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.5294059481016!2d85.42990101505737!3d27.670027933737895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1aae9c06cdc7%3A0xf12112babca2e0d5!2sBhaktapur%20No.7%20Ward%20Office%2C%20Golmadhi!5e0!3m2!1sen!2snp!4v1585470344859!5m2!1sen!2snp\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(80) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `cr_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`, `status`, `cr_date`) VALUES
(39, 'aman', 'amanmool384@gmail.com', 'This is the message for completion of dashboard..', 1, '2020-03-17 11:35:28'),
(40, 'Zenish', 'zenish12@gmail.com', 'This website is great i love it..', 1, '2020-03-27 08:14:24'),
(41, 'duster', 'duster@dust.com', 'This is duster...', 0, '2020-03-27 08:22:45'),
(42, 'aman', 'amanmool384@gmail.com', 'This is the message for completion of dashboard..', 1, '2020-03-17 11:35:28'),
(43, 'Zenish', 'zenish12@gmail.com', 'This website is great i love it..', 0, '2020-03-27 08:14:24'),
(44, 'duster', 'duster@dust.com', 'This is duster...', 0, '2020-03-27 08:22:45'),
(45, 'aman', 'amanmool384@gmail.com', 'This is the message for completion of dashboard..', 1, '2020-03-17 11:35:28'),
(46, 'Zenish', 'zenish12@gmail.com', 'This website is great i love it..', 0, '2020-03-27 08:14:24'),
(47, 'duster', 'duster@dust.com', 'This is duster...', 0, '2020-03-27 08:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `card_number` bigint(20) NOT NULL,
  `card_exp_month` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `card_exp_year` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item_price` float(10,2) NOT NULL,
  `item_price_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `paid_amount` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `paid_amount_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `name`, `email`, `card_number`, `card_exp_month`, `card_exp_year`, `item_name`, `item_number`, `item_price`, `item_price_currency`, `paid_amount`, `paid_amount_currency`, `txn_id`, `payment_status`, `created`, `modified`) VALUES
(1, 0, 'Jenish Prajapati', 'zenish77@gmail.com', 4242424242424242, '08', '2022', 'Demo Product', 'PN12345', 1200.00, 'USD', '1200', 'usd', 'txn_1GMRoVDSTWXJ032VLdAX35gw', 'succeeded', '2020-03-14 10:26:31', '2020-03-14 10:26:31'),
(2, 0, 'Aman Mool', 'amsbjasdb@gmail.com', 4242424242424242, '02', '2022', 'Demo Product', 'PN12345', 1200.00, 'USD', '1200', 'usd', 'txn_1GMW3qDSTWXJ032VKBpIlMH4', 'succeeded', '2020-03-14 14:58:39', '2020-03-14 14:58:39'),
(3, 0, 'manish', 'masmas@gmail.com', 4242424242424242, '02', '2022', 'Demo Product', 'PN12345', 1200.00, 'USD', '1200', 'usd', 'txn_1GMW6uDSTWXJ032VtLbq3Nxv', 'succeeded', '2020-03-14 15:01:49', '2020-03-14 15:01:49'),
(4, 0, 'jenish', 'zenish707@gmail.com', 4242424242424242, '6', '2022', 'Demo Product', 'PN12345', 1200.00, 'USD', '1200', 'usd', 'txn_1GMZtQDSTWXJ032V9u3sP0gQ', 'succeeded', '2020-03-14 19:04:08', '2020-03-14 19:04:08'),
(5, 0, 'Random', 'lolololo@gmail.com', 378282246310005, '06', '2022', 'GAS', '2', 1375.00, 'NPR', '137500', 'npr', 'txn_1GMjt1DSTWXJ032VIQFuKDmc', 'succeeded', '2020-03-15 05:44:24', '2020-03-15 05:44:24'),
(6, 0, 'Manish Gora', 'manisa33@gmail.com', 4242424242424242, '03', '2022', 'GAS', '2', 1375.00, 'NPR', '137500', 'npr', 'txn_1Gc845DSTWXJ032VGU86oljS', 'succeeded', '2020-04-26 16:35:28', '2020-04-26 16:35:28'),
(7, 0, 'mn', 'oera52@gmail.com', 4242424242424242, '2', '2022', 'HP GAS', '2', 27500.00, 'NPR', '275000', 'npr', 'txn_1HLQmjDSTWXJ032VeqnDUi8T', 'succeeded', '2020-08-29 15:40:45', '2020-08-29 15:40:45'),
(8, 131, 'manisha', 'maishakook@gmail.com', 4242424242424242, '2', '2022', 'HP GAS', '2', 6875.00, 'NPR', '687500', 'npr', 'txn_1HLoSoDSTWXJ032VRje0vRdj', 'succeeded', '2020-08-30 16:57:46', '2020-08-30 16:57:46'),
(9, 132, 'kookie', 'a_gora@hotmail.com', 4242424242424242, '2', '2022', 'HP GAS', '2', 1375.00, 'NPR', '137500', 'npr', 'txn_1HLoZpDSTWXJ032VN2yMDeJW', 'succeeded', '2020-08-30 17:05:01', '2020-08-30 17:05:01'),
(10, 10015, 'Jenish Prajapati', 'zenish77@gmail.com', 4242424242424242, '02', '2022', 'HIMAL GAS', '2', 1350.00, 'NPR', '135000', 'npr', 'txn_1HpENiDSTWXJ032VtBYya4QL', 'succeeded', '2020-11-19 20:30:06', '2020-11-19 20:30:06'),
(11, 10033, 'Jenish Prajapati', 'zenish77@gmail.com', 4242424242424242, '02', '2022', 'NEPAL GAS', '2', 270000.00, 'NPR', '270000', 'npr', 'txn_1HpPuRDSTWXJ032VBKA28NOB', 'succeeded', '2020-11-20 08:48:39', '2020-11-20 08:48:39'),
(12, 10034, 'Jenish Prajapati', 'zenish77@gmail.com', 4242424242424242, '02', '2022', 'NEPAL GAS', '2', 1200000.00, 'NPR', '1200000', 'npr', 'txn_1HpPzaDSTWXJ032V0oJF2WJS', 'succeeded', '2020-11-20 08:53:59', '2020-11-20 08:53:59'),
(13, 10034, 'Jenish Prajapati', 'zenish77@gmail.com', 4242424242424242, '02', '2022', 'NEPAL GAS', '2', 1200000.00, 'NPR', '1200000', 'npr', 'txn_1HpQ0cDSTWXJ032VAnysCyoV', 'succeeded', '2020-11-20 08:55:15', '2020-11-20 08:55:15');

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `item` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `profile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` decimal(12,8) NOT NULL,
  `latitude` decimal(12,8) NOT NULL,
  `order_date` datetime NOT NULL,
  `Delivered_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`id`, `customer_id`, `name`, `email`, `address`, `phone_number`, `item`, `payment`, `purpose`, `quantity`, `profile`, `longitude`, `latitude`, `order_date`, `Delivered_date`) VALUES
(52, 10000, 'manish', 'm.hyongoju04@gmail.com', 'Kamalbiniyak', 2147483647, 'NEPAL GAS', 'COD', 'domestic', 2, '1604998574-1585573172-ed.jpg', '85.00000000', '28.00000000', '2020-11-16 10:41:37', '2020-11-16 06:37:26'),
(53, 10004, 'manish', 'hyongojumanish@gmail.com', 'kamalbiniyak', 2147483647, 'NEPAL GAS', 'COD', 'domestic', 2, '1604998574-1585573172-ed.jpg', '85.33330000', '27.66670000', '2020-11-16 10:46:39', '2020-11-16 07:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `Name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Content` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_Price` smallint(6) NOT NULL,
  `exc_price` int(11) NOT NULL,
  `ADD_Date` date NOT NULL DEFAULT current_timestamp(),
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reset`
--

CREATE TABLE `reset` (
  `id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Code` bigint(20) NOT NULL,
  `Password` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `rating` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `email`, `comment`, `rating`) VALUES
(1, 'Amanmool10', 'aman.mool@yahoo.com', 'You guys rock! I will let my mum know about this, she could really make use of gas booking! Thanks to gas booking, we\'ve just launched our 5th website! Gas booking is the most valuable business resource we have EVER purchased.', 3.7),
(2, 'Zenish prajapati', 'zenish12@gmail.com', 'This website has made my take very easy of having to stay in line for many hours is cut to few minutes. It is very impressive how far we have come in the field of using internet for everything. I am loving this', 5),
(4, 'Random', 'ran@dom.com', 'Test, Test', 1.9),
(5, 'Gora', 'gora@gmail.com', 'Awesomeeeeeeeeee!', 4.5);

-- --------------------------------------------------------

--
-- Table structure for table `stove`
--

CREATE TABLE `stove` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `new_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stove`
--

INSERT INTO `stove` (`id`, `title`, `content`, `author`, `featured_image`, `stock`, `new_price`) VALUES
(1, 'Dual Burner', '', '', 'stove2.png', '5', 3075),
(2, 'Burner with Pans', '', '', 'stovewithpan.png', '0', 4195),
(3, 'Tri-Stove', '', '', 'stove3.png', '50', 6250),
(4, 'Quad Burner', '', '', 'stove4.png', '50', 7777);

-- --------------------------------------------------------

--
-- Table structure for table `view_stats`
--

CREATE TABLE `view_stats` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `page_views` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `view_stats`
--

INSERT INTO `view_stats` (`id`, `date`, `page_views`) VALUES
(1, '2020-03-19', 8),
(2, '2020-03-20', 5),
(3, '2020-03-21', 2),
(4, '2020-03-22', 8),
(5, '2020-03-23', 15),
(6, '2020-03-24', 1),
(7, '2020-03-25', 1),
(9, '2020-03-26', 2),
(10, '2020-03-27', 3),
(11, '2020-03-29', 12),
(12, '2020-04-10', 1),
(13, '2020-04-16', 2),
(14, '2020-07-16', 6),
(15, '2020-07-26', 8),
(16, '2020-08-05', 2),
(17, '2020-08-07', 2),
(18, '2020-08-08', 13),
(19, '2020-08-11', 1),
(20, '2020-11-08', 30),
(21, '2020-11-09', 5),
(22, '2020-11-10', 15),
(23, '2020-11-11', 11),
(24, '2020-11-12', 14),
(25, '2020-11-13', 3),
(26, '2020-11-14', 13),
(27, '2020-11-15', 3),
(28, '2020-11-16', 20),
(29, '2020-11-19', 2),
(30, '2020-11-20', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `verifiedby_id` (`verifiedby_id`),
  ADD KEY `postby_id` (`postby_id`);

--
-- Indexes for table `confirm`
--
ALTER TABLE `confirm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `verifiedby_id` (`verifiedby_id`),
  ADD KEY `postby_id` (`postby_id`);

--
-- Indexes for table `delivered`
--
ALTER TABLE `delivered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_boy`
--
ALTER TABLE `delivery_boy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `verifiedby_id` (`verifiedby_id`),
  ADD KEY `postby_id` (`postby_id`);

--
-- Indexes for table `gas_cylinders`
--
ALTER TABLE `gas_cylinders`
  ADD PRIMARY KEY (`gas_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `name` (`name`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `pending`
--
ALTER TABLE `pending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset`
--
ALTER TABLE `reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stove`
--
ALTER TABLE `stove`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view_stats`
--
ALTER TABLE `view_stats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `confirm`
--
ALTER TABLE `confirm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10037;

--
-- AUTO_INCREMENT for table `delivered`
--
ALTER TABLE `delivered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `delivery_boy`
--
ALTER TABLE `delivery_boy`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `gas_cylinders`
--
ALTER TABLE `gas_cylinders`
  MODIFY `gas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `reset`
--
ALTER TABLE `reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stove`
--
ALTER TABLE `stove`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `view_stats`
--
ALTER TABLE `view_stats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
