-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2018 at 11:55 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epolicing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Username`, `Password`) VALUES
(1, 'Reuben', 'mimi');

-- --------------------------------------------------------

--
-- Table structure for table `alerts`
--

CREATE TABLE `alerts` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Crime` varchar(50) NOT NULL DEFAULT 'Burglary',
  `Scene` varchar(50) NOT NULL DEFAULT 'Place of Residence',
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Acknowledged` varchar(3) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alerts`
--

INSERT INTO `alerts` (`ID`, `Name`, `Crime`, `Scene`, `Time`, `Acknowledged`) VALUES
(1, 'Rinchez', 'burglary', 'residence', '2015-07-16 00:11:42', 'NO'),
(2, 'Rinchez', 'burglary', 'residence', '2015-07-16 00:11:48', 'NO'),
(3, 'Rinchez', 'burglary', 'residence', '2015-07-16 00:16:39', 'NO'),
(4, 'Mimi', 'burglary', 'residence', '2015-08-02 01:47:06', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `bk`
--

CREATE TABLE `bk` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `aut` varchar(50) NOT NULL,
  `des` varchar(50) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `it` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bk`
--

INSERT INTO `bk` (`id`, `title`, `aut`, `des`, `pic`, `it`) VALUES
(14, 'Hp', 'Hp Desktop', 'core i3', 'images/jolie.jpg', 'images/jolie.jpg'),
(15, 'T-shirt', 'McMahone  Saloone', 'Nice,cool and the best T-shirt in town.', 'upload/brunei1.jpg', 'books/Voca people.wmv'),
(16, 'Headphone', 'xenon headphone @1150 ', 'Amazon product', 'upload/11.jpg', 'books/2AERIAL1008CAV_.jpg.gif'),
(17, 'Headphone', 'Xenon headphones @1300', 'Jumia', 'images/11.jpg', 'images/upload/11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dk`
--

CREATE TABLE `dk` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `cate` varchar(50) NOT NULL,
  `des` text NOT NULL,
  `pic` varchar(255) NOT NULL,
  `it` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dk`
--

INSERT INTO `dk` (`id`, `title`, `cate`, `des`, `pic`, `it`) VALUES
(8, 'Pinto Rinto', 'B', 'Magnanita Markey', 'pictures/alien.jpg', 'items/allienware.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(9) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `National_ID` int(8) NOT NULL,
  `Event` varchar(50) NOT NULL,
  `Venue` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='All events that members want to share over the system';

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `Name`, `National_ID`, `Event`, `Venue`, `Date`) VALUES
(1, '', 0, 'Grad', 'Coast', '2015-05-21'),
(2, 'Rinchez iz Me', 30179988, 'Grad', 'Oloolua resort', '2015-11-19'),
(5, 'Mimi ni nani?', 30179901, 'Grad', 'Las Vegas', '0000-00-00'),
(6, 'Mimi ni nani?', 30179901, 'Grad', 'LA', '2013-11-11'),
(7, 'The Big Boy', 18827836, 'Pool party', 'Jordan', '2013-11-11'),
(8, 'The Big Boy', 18827836, 'Pool party fiesta', 'Splash waterworld', '2015-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `fsc`
--

CREATE TABLE `fsc` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `lang` varchar(50) NOT NULL,
  `sdesc` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `it` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fsc`
--

INSERT INTO `fsc` (`id`, `title`, `lang`, `sdesc`, `pic`, `it`) VALUES
(2, 'Online Examination', 'A', 'Be a good programmer', 'upload/codestar.JPG', 'items/1375193841275911.jpg'),
(3, 'fact about life', 'A', 'nice code', 'upload/5life.jpeg', 'items/22.jpeg'),
(4, 'Mater of the Universe', 'B', 'Just Image', 'upload/3.jpg', 'items/11.jpg'),
(5, 'NICE APPLICATION FOR USE', 'B', 'Very interesting and good app to use', 'upload/12air550.jpg', 'items/');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `ID` int(9) NOT NULL,
  `Activity` varchar(20) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`ID`, `Activity`, `User`, `Time`) VALUES
(1, 'Registration', 'Reuben Rotich', '2018-01-01 10:48:00'),
(2, 'Security request', 'Evanso', '2018-01-27 10:51:33'),
(39, 'Registration', 'George Kanyi', '2018-02-21 09:11:32'),
(41, 'login', 'Admin', '2018-02-21 09:20:58'),
(42, 'login', 'Admin', '2018-02-21 13:32:09'),
(43, 'login', 'Admin', '2018-02-21 13:32:27'),
(44, 'login', 'Admin', '2018-03-05 12:05:04'),
(45, 'login', 'Admin', '2018-03-05 12:38:46'),
(46, 'login', 'Admin', '2018-03-05 13:07:35'),
(47, 'login', 'Admin', '2018-03-07 08:48:43'),
(48, 'login', 'Admin', '2018-03-07 09:23:42'),
(49, 'login', 'Admin', '2018-03-07 09:41:05'),
(50, 'login', 'Admin', '2018-04-07 09:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `Name` varchar(50) NOT NULL,
  `Photo` varchar(200) NOT NULL DEFAULT 'images/avatars/1av.jpg' COMMENT 'Member photo',
  `National_ID` int(7) NOT NULL,
  `Marital_status` varchar(50) NOT NULL,
  `Spouse` varchar(50) NOT NULL,
  `Hood` varchar(50) NOT NULL DEFAULT 'LA',
  `POB` varchar(50) NOT NULL COMMENT 'place of birth',
  `DOB` date NOT NULL COMMENT 'date of birth',
  `Email` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Member_since` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'date of registration'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='details entered during member registration';

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`Name`, `Photo`, `National_ID`, `Marital_status`, `Spouse`, `Hood`, `POB`, `DOB`, `Email`, `Username`, `Password`, `Member_since`) VALUES
('Reuben', 'images/Members/', 32075235, 'single', '', 'Kisumu', 'Kitale', '1995-01-14', 'reubenbomett@gmail.com', 'Reuben', '', '2018-02-21 12:17:01'),
('George Kanyi', 'images/Members/', 32678678, 'single', '', 'Eldoret', 'Kikuyu', '1993-11-15', 'george.kanyi@gmail,com', 'George', '', '2018-02-21 12:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `Sender` varchar(50) NOT NULL,
  `Receipient` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` text NOT NULL,
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Seen` varchar(3) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `Sender`, `Receipient`, `Subject`, `Message`, `Time`, `Seen`) VALUES
(2, 'Rinchez', 'Admin', 'UI', 'I want to commned you for the remarkable user interface. It is very friendly', '0000-00-00 00:00:00', ''),
(9, 'Rinchez', 'Admin', 'saidia', 'shit will heat the fun', '0000-00-00 00:00:00', 'NO'),
(10, 'Reuben', '', '', '', '0000-00-00 00:00:00', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `ID` int(11) NOT NULL,
  `User` varchar(20) NOT NULL,
  `Details` text NOT NULL,
  `Poster` varchar(200) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`ID`, `User`, `Details`, `Poster`, `Date`) VALUES
(1, 'The Big Boy', 'bla bla blaaah', 'images/Notices/BERBEQUE FRIDAY AT THE STUDENT CENTER.png', '0000-00-00'),
(2, 'The Big Boy', 'bla bla blaaah', 'images/Notices/BERBEQUE FRIDAY AT THE STUDENT CENTER.png', '2015-08-02'),
(3, 'The Big Boy', 'bla bla blaaah', 'images/Notices/BERBEQUE FRIDAY AT THE STUDENT CENTER.png', '2015-08-02'),
(4, 'The Big Boy', 'shitwillhitthefun', 'images/Notices/nyumbakumibg2.PNG', '2015-08-02'),
(5, 'The Big Boy', 'hkdjbvjksb vsdjhbvsjkbvks dvk sjkvs m vsd vsk sj', 'images/Notices/phpstorm_tn_2.png', '2015-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `tw`
--

CREATE TABLE `tw` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `cate` varchar(50) NOT NULL,
  `sdesc` varchar(50) NOT NULL,
  `ldesc` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `it` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tw`
--

INSERT INTO `tw` (`id`, `title`, `cate`, `sdesc`, `ldesc`, `pic`, `it`) VALUES
(3, 'Sun Rise Melting', 'C', 'Good one', 'You will love this more than ever before', 'upload/tumblr_mr69irlP9W1svfl1so1_500.jpg', 'items/cutest.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(6) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_private_requests`
--

CREATE TABLE `user_private_requests` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `National_ID` int(8) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Event` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_private_requests`
--

INSERT INTO `user_private_requests` (`ID`, `Name`, `National_ID`, `Phone`, `Event`, `Location`, `Date`) VALUES
(1, 'Reuben', 31179941, 727337772, 'account details', 'Nakuru', '0000-00-00'),
(2, 'Evanso', 32179642, 711338452, 'Change Password', 'Eldoret', '0000-00-00'),
(3, 'Stanley', 32075235, 717338872, 'item delivery', 'Kitale', '2018-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `wanted`
--

CREATE TABLE `wanted` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `National_ID` int(8) NOT NULL,
  `DOB` date NOT NULL,
  `Complexion` varchar(10) NOT NULL,
  `Height` int(2) NOT NULL,
  `Last_seen` date NOT NULL,
  `Criminal` varchar(3) NOT NULL DEFAULT 'NO',
  `Photo` varchar(200) NOT NULL,
  `Arrested` varchar(3) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wanted`
--

INSERT INTO `wanted` (`ID`, `Name`, `National_ID`, `DOB`, `Complexion`, `Height`, `Last_seen`, `Criminal`, `Photo`, `Arrested`) VALUES
(1, 'Mtu sugu', 12345678, '1989-09-22', 'Dark tan', 7, '2015-06-11', 'YES', 'images/', 'NO'),
(2, 'Mtu aina gani', 12321232, '1994-04-06', 'dark', 7, '2015-04-09', 'YES', 'images/', 'NO'),
(3, 'Mtu aina gani', 12321232, '1994-04-06', 'dark', 7, '2015-04-09', 'YES', 'images/avatars/7av.jpg', 'YES'),
(4, 'Mtu sugu', 12345678, '1989-09-22', 'Dark tan', 7, '2015-06-11', 'YES', 'images/avatars/8av.jpg', 'YES'),
(5, 'Mtu sugu', 12345676, '1989-09-22', 'Dark tan', 7, '2015-06-11', 'YES', 'images/avatars/20av.jpg', 'NO'),
(6, 'Derp Le me', 30179000, '2015-04-09', 'sfgsdf', 23523, '2015-04-09', 'YES', 'images/Wanted/0-0-cargen3.jpg', 'NO'),
(7, 'Derp Le me', 30179001, '2015-04-09', 'sfgsdf', 23523, '2015-04-09', 'YES', 'images/Wanted/0-0-cargen3.jpg', 'NO'),
(8, 'Derp Le me', 30179001, '2015-04-09', 'sfgsdf', 23523, '2015-04-09', 'YES', 'images/Wanted/0-0-cargen3.jpg', 'NO'),
(9, 'Derp Le me', 30179001, '2015-04-09', 'sfgsdf', 23523, '2015-04-09', 'YES', 'images/Wanted/0-0-cargen3.jpg', 'NO'),
(10, 'dxfvcg', 30179010, '2015-04-09', 'sfgsdf', 23523, '2015-04-09', 'NO', 'images/Wanted/BERBEQUE FRIDAY AT THE STUDENT CENTER.png', 'NO'),
(11, 'dxfvcgaaat', 30079010, '1986-04-15', 'sfgsdf', 23523, '2015-08-04', 'NO', 'images/Wanted/30av.jpg', 'NO'),
(12, 'dxfvcgaaat', 30079011, '1986-04-15', 'sfgsdf', 23523, '2015-08-04', 'NO', 'images/Wanted/6av.jpg', 'NO'),
(13, 'dxfvcgaaat', 30078011, '1986-04-15', 'sfgsdf', 23523, '2015-08-04', 'NO', 'images/Wanted/7av.jpg', 'NO'),
(14, 'Most wanted', 22277721, '1995-04-03', 'Dark tan', 6, '2015-07-01', 'YES', 'images/Wanted/18av.jpg', 'NO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `alerts`
--
ALTER TABLE `alerts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bk`
--
ALTER TABLE `bk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dk`
--
ALTER TABLE `dk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fsc`
--
ALTER TABLE `fsc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`National_ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tw`
--
ALTER TABLE `tw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_private_requests`
--
ALTER TABLE `user_private_requests`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wanted`
--
ALTER TABLE `wanted`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `alerts`
--
ALTER TABLE `alerts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bk`
--
ALTER TABLE `bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `dk`
--
ALTER TABLE `dk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `fsc`
--
ALTER TABLE `fsc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tw`
--
ALTER TABLE `tw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_private_requests`
--
ALTER TABLE `user_private_requests`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `wanted`
--
ALTER TABLE `wanted`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
