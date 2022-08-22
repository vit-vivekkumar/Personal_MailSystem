-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql112.byetcluster.com
-- Generation Time: Aug 22, 2022 at 10:09 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31873589_login_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `addressbook`
--

CREATE TABLE `addressbook` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addressbook`
--

INSERT INTO `addressbook` (`id`, `firstname`, `lastname`, `contact`) VALUES
(8, 'vivek', 'kumar', 'vivek@gmail.com'),
(11, 'Ayushman ', 'Palo', '965656534534'),
(12, 'ram singh', 's', '95657657567'),
(13, '<script>alert(123)</script>', 's', '95657657567'),
(14, '<img src=\"\" onerror=\"alert(123)\">', 's', '95657657567'),
(15, '<h1>XSS</h1>', 's', '95657657567'),
(16, '<script>alert(\'VOOKI-STORED-XSS\')</script>', 's', '95657657567'),
(17, 'ram singh', '<script>alert(123)</script>', '95657657567'),
(18, 'ram singh', '<img src=\"\" onerror=\"alert(123)\">', '95657657567'),
(19, 'ram singh', '<h1>XSS</h1>', '95657657567'),
(20, 'ram singh', '<script>alert(\'VOOKI-STORED-XSS\')</script>', '95657657567'),
(21, 'ram singh', 's', '<script>alert(123)</script>'),
(22, 'ram singh', 's', '<img src=\"\" onerror=\"alert(123)\">'),
(23, 'ram singh', 's', '<h1>XSS</h1>'),
(24, 'ram singh', 's', '<script>alert(\'VOOKI-STORED-XSS\')</script>'),
(25, 'ram singh', 's', '95657657567'),
(26, 'ram singh', 's', '95657657567'),
(27, 'ram singh', 's', '95657657567'),
(28, 'ram singh', 's', '95657657567'),
(29, 'ram singh', 's', 'Vegabird'),
(30, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 's', '95657657567'),
(31, 'ram singh', 's', '95657657567'),
(32, 'ram singh', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '95657657567'),
(33, 'ram singh', 's', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(34, '\'', 's', '95657657567'),
(35, '\"', 's', '95657657567'),
(36, 'ram singh', '\'', '95657657567'),
(37, 'ram singh', '\"', '95657657567'),
(38, 'ram singh', 's', '\''),
(39, 'ram singh', 's', '\"'),
(40, 'ram singh', 's', '95657657567'),
(41, 'ram singh', 's', '95657657567'),
(42, 'VEGA\nBIRD', 's', '95657657567'),
(43, 'ram singh', 'VEGA\nBIRD', '95657657567'),
(44, 'ram singh', 's', 'VEGA\nBIRD'),
(45, 'ram singh', 's', '95657657567'),
(46, 'vegabird | dir', 's', '95657657567'),
(47, 'vegabird ', 's', '95657657567'),
(48, 'ram singh', 'vegabird | dir', '95657657567'),
(49, 'ram singh', 'vegabird ', '95657657567'),
(50, 'ram singh', 's', 'vegabird | dir'),
(51, 'ram singh', 's', 'vegabird '),
(52, 'ram singh', 's', '95657657567'),
(53, 'ram singh', 's', '95657657567'),
(54, 'ram singh', 's', '95657657567'),
(55, 'ram singh', 's', '95657657567'),
(56, 'sleep(25)', 's', '95657657567'),
(57, 'ram singh', 'sleep(25)', '95657657567'),
(58, 'ram singh', 's', 'sleep(25)'),
(59, 'ram singh', 's', '95657657567'),
(60, 'ram singh', 's', '95657657567'),
(61, 'ram singh', 's', '95657657567'),
(62, 'vegabird | dir', 's', '95657657567'),
(63, 'vegabird ', 's', '95657657567'),
(64, 'ram singh', 'vegabird | dir', '95657657567'),
(65, 'ram singh', 'vegabird ', '95657657567'),
(66, 'ram singh', 's', 'vegabird | dir'),
(67, 'ram singh', 's', 'vegabird '),
(68, 'ram singh', 's', '95657657567'),
(69, 'ram singh', 's', '95657657567'),
(70, 'ram singh', 's', '95657657567'),
(71, 'ram singh', 's', '95657657567'),
(72, '1\' AND SLEEP(25)#', 's', '95657657567'),
(73, '1\" AND SLEEP(25)#', 's', '95657657567'),
(74, 'ram singh', '1\' AND SLEEP(25)#', '95657657567'),
(75, 'ram singh', '1\" AND SLEEP(25)#', '95657657567'),
(76, 'ram singh', 's', '1\' AND SLEEP(25)#'),
(77, 'ram singh', 's', '1\" AND SLEEP(25)#'),
(78, 'ram singh', 's', '95657657567'),
(79, 'ram singh', 's', '95657657567');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `evt_id` bigint(20) NOT NULL,
  `evt_start` datetime NOT NULL,
  `evt_end` datetime NOT NULL,
  `evt_text` text NOT NULL,
  `evt_color` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`evt_id`, `evt_start`, `evt_end`, `evt_text`, `evt_color`) VALUES
(1, '2022-06-16 00:00:00', '2022-06-16 00:00:00', 'sdsd', '#e4edff');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `to_mail` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `from_mail` varchar(30) NOT NULL,
  `attachement` text DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `name`, `to_mail`, `subject`, `content`, `from_mail`, `attachement`, `date`) VALUES
(1, '', 'vivek@gmail.com', 'loce', '<p>hare skris</p>', '', NULL, '2022-05-22 01:50:03'),
(2, '', 'hasmukhgupta@gmail.com', 'Wow! this is work now..', '<p>Welcome to personal mailling system</p>', 'naveenvit3000@personalmail.com', NULL, '2022-05-22 01:50:03'),
(3, '', 'love@gmail', 'hello', '<p>Hello World!</p>', 'naveenvit3000@personalmail.com', NULL, '2022-05-22 01:50:38'),
(4, '', 'hasmukhgupta@gmail.com', 'hello World', '<p>hjgfdsadfghjklkjhgf</p>', 'naveenvit3000@personalmail.com', NULL, '2022-05-22 01:51:22'),
(5, '', 'ramSinght', 'ddas', '<p>sdjks f fjsdjf djsdj</p>', 'naveenvit3000@personalmail.com', NULL, '2022-05-22 02:31:16'),
(6, '', 'xa', 'dfs', '<p>dssfd</p>', 'naveenvit3000@personalmail.com', NULL, '2022-05-22 02:31:58'),
(7, '', 'vivek@gmail.com', 'lds', '<p>hidsdf</p>', 'naveenvit3000@personalmail.com', NULL, '2022-05-22 02:36:20'),
(8, '', 'nn', 'nnn', '<p>bbb</p>', 'hasmukhgupta@personalmail.com', 'ducat background.png', '2022-05-22 02:50:00'),
(10, '', 'hasmukhgupta@gmail.com', 'second msg', '<p>hello shani</p>', 'hasmukhgupta@personalmail.com', '', '2022-05-22 23:29:36'),
(15, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-24 00:13:25'),
(16, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-24 00:14:16'),
(17, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 01:36:44'),
(18, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 01:37:08'),
(19, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 01:38:29'),
(20, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 01:42:02'),
(21, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 01:42:19'),
(22, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 01:50:19'),
(23, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 02:01:00'),
(24, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 02:01:13'),
(25, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 02:03:02'),
(26, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 02:03:10'),
(27, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 02:03:26'),
(28, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 02:03:32'),
(29, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 02:03:39'),
(30, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 02:09:33'),
(31, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 02:09:39'),
(32, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 02:09:45'),
(33, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 02:14:17'),
(34, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 02:17:49'),
(35, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 02:18:36'),
(36, 'Hasmukh Gupta', '', '', '', 'hasmukhgupta@personalmail.com', NULL, '2022-05-25 02:26:35'),
(37, 'Hasmukh Gupta', 'hasmukhgupta@personalmail.com', 'Hello Shani Gupta', '<p>Welcome to vit university</p>', 'hasmukhgupta@personalmail.com', 'head1.png', '2022-05-31 10:57:40'),
(38, 'Naveen P', 'vivek909@personalmail.com', 'Test mail', '<p><em>hii this is the first mail for test</em></p>', 'Naveen@personalmail.com', '', '2022-06-03 02:00:29'),
(39, 'vivek kumar vishwakarma', 'vivekkumar@personalmail.com', 'Welcome to Vit', '<p>Hello everyone this is vivek</p>', 'vitianvivek2021@personalmail.c', '', '2022-06-10 06:46:54'),
(40, 'vivek kumar vishwakarma', 'vivekkumar@personalmail.com', 'Welcome to Testing', '<p>Welcome to Vit, I am vivek Kumar</p>', 'vitianvivek2021@personalmail.c', '', '2022-06-10 06:54:50'),
(41, 'vivek kumar vishwakarma', '', '', '', 'vitianvivek2021@personalmail.c', NULL, '2022-06-10 07:03:12'),
(42, 'vivek kumar vishwakarma', '', '', '', 'vitianvivek2021@personalmail.c', NULL, '2022-06-10 07:03:12'),
(43, 'vivek kumar vishwakarma', '', '', '', 'vitianvivek2021@personalmail.c', NULL, '2022-06-10 07:03:13'),
(44, 'vivek kumar vishwakarma', 'vivekkumar@personalmail.com', 'Welcome to Testing', '<p>Welcome to Vit, I am vivek Kumar</p>', 'vitianvivek2021@personalmail.c', '', '2022-06-10 07:03:13'),
(45, 'vivek kumar vishwakarma', '', '', '', 'vitianvivek2021@personalmail.c', NULL, '2022-06-10 07:03:13'),
(46, 'Ayushman Palo', 'naveen@personalmail.com', 'Hii', '<p>Hii</p>', 'Ayush@personalmail.com', '', '2022-07-19 04:31:34'),
(47, 'darksoul ', 'vasasainivas18@gmail.com', 'dvx', '<p>vxdf</p>', 'darksoul@personalmail.com', '', '2022-07-19 05:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `name`) VALUES
(39, 'vivekkumar909@personalmail.com', '$2y$10$TroQ6nK7i1TpSe6OhE/jd.p6f4o39B9mQ6kRv2ZohIBpfic1EOcli', '2022-06-02 23:16:20', 'vivek kumar vishwakarma'),
(40, 'Naveen@personalmail.com', '$2y$10$iuzBGZOnegEYqCOx6LrQj.PoJMJi/l/VuPfcyLkCiPrE21dNmgLOu', '2022-06-03 01:58:30', 'Naveen P'),
(41, 'guptashani269@gmail.com@personalmail.com', '$2y$10$d8EXTwGHObS5eO4RIknOpeAefWsq8TkN0eamzcaK1q5nsR7DZ/aTi', '2022-06-03 02:13:52', 'Shani Gupta'),
(42, 'guptashani269@personalmail.com', '$2y$10$KwsoOElcOV36E0M7T3PbHupoPdU625HUeWPNBOEseakoVFux.7Hve', '2022-06-03 02:14:21', 'Shani Gupta'),
(43, 'jagdish.77nimcet@personalmail.com', '$2y$10$IS7njatR0kNj94xrhBIWO.X2OdjxPKcdilGs1LCeLXRZsDPM9rUBa', '2022-06-03 05:21:02', 'jd patidar'),
(44, 'vivek964800@personalmail.com', '$2y$10$N7mZZjXSrHQp5W3qCq7U.e4AX0JSk7d2XC4LXGM/nHKXes3P/1m76', '2022-06-04 13:32:41', 'Vivek Kumar'),
(45, 'vitianvivek2021@personalmail.com', '$2y$10$7Xqvmd9A7kD1Ha8Cn5aoTec3sR9D69oripVXiG0EwhNCDeMdHZz8m', '2022-06-10 06:45:19', 'vivek kumar vishwakarma'),
(46, 'Ayush@personalmail.com', '$2y$10$WvKYYqCSnWC6vB8WLqimGefR7uF5ZJsw4cMtBOvTkkdN1p2Drx8.W', '2022-07-19 04:25:55', 'Ayushman Palo'),
(47, 'darksoul@personalmail.com', '$2y$10$MgwU9fEzbp5TKnokK9Te8eOCZp0rkJuUoXcG23siBk10Q/w8pyMfO', '2022-07-19 05:02:15', 'darksoul ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addressbook`
--
ALTER TABLE `addressbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`evt_id`),
  ADD KEY `evt_start` (`evt_start`),
  ADD KEY `evt_end` (`evt_end`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addressbook`
--
ALTER TABLE `addressbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `evt_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
