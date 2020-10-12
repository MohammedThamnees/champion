-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 04:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `champion`
--

-- --------------------------------------------------------

--
-- Table structure for table `athlete_registration`
--

CREATE TABLE `athlete_registration` (
  `ath_id` int(11) NOT NULL COMMENT 'athlete id',
  `name` varchar(25) DEFAULT NULL COMMENT 'name of athlete',
  `dob` date DEFAULT NULL COMMENT 'date of birth',
  `gender` varchar(7) DEFAULT NULL COMMENT 'gender of athlete',
  `email` varchar(30) DEFAULT NULL COMMENT 'email of athlete',
  `phone` int(11) DEFAULT NULL COMMENT 'athlete phone number',
  `father_name` varchar(30) DEFAULT NULL COMMENT 'name of father',
  `mother_name` varchar(30) DEFAULT NULL COMMENT 'name of mother',
  `dist` varchar(15) DEFAULT NULL COMMENT 'district',
  `address` varchar(50) DEFAULT NULL COMMENT 'address',
  `pin` int(11) DEFAULT NULL COMMENT 'pin number',
  `coach` varchar(30) DEFAULT NULL COMMENT 'name of coach',
  `blood` varchar(5) DEFAULT NULL COMMENT 'blood group',
  `aadhar` varbinary(30) DEFAULT NULL COMMENT 'aadhar number',
  `photo` varbinary(30) DEFAULT NULL COMMENT 'athlete photo',
  `regno` varchar(15) DEFAULT NULL COMMENT 'register number',
  `clgid` int(11) DEFAULT NULL COMMENT 'registered college id',
  `approve` varchar(10) DEFAULT NULL COMMENT 'spprove or not'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `athlete_registration`
--

INSERT INTO `athlete_registration` (`ath_id`, `name`, `dob`, `gender`, `email`, `phone`, `father_name`, `mother_name`, `dist`, `address`, `pin`, `coach`, `blood`, `aadhar`, `photo`, `regno`, `clgid`, `approve`) VALUES
(1, 'thamnees', '2020-09-17', 'male', 'muthup611@gmail.com', 234567890, 'kunjutty', 'kadeeja', 'Malappuram', 'tirur', 4324, 'adarsh', 'A+ve', 0x6b7361612e706e67, 0x6473737364646464646464646464642e6a7067, '1000000000', 2, 'approved'),
(2, 'shijina', '2020-09-01', 'female', 'muthup611@gmail.com', 2147483647, 'areela', 'ariyeee illa', 'Kannur', 'shiji\r\nkannuur\r\nkerala\r\n', 67567, 'njan', 'A+ve', 0x61646d696e686f6d652e706e67, 0x6174686c5f6c6973745f61646d696e2e706e67, '0', 2, 'rejected'),
(3, 'rashid', '2020-09-17', 'male', 'rashi@gmail.com', 2147483647, 'rash', 'rashi', 'Ernakulam', 'rashid\r\nvairancode\r\nkerala', 765434, 'rafi', 'B+ve', 0x6174686c6574655f617070726f76616c312e706e67, 0x6174686c6574655f617070726f76616c322e706e67, '0', 4, 'pending'),
(4, 'aslam', '2020-07-15', 'male', 'aslam@gmail.com', 2147483647, 'asl', 'aslu', 'Malappuram', 'aslm veetil\r\nmalappuram', 87548, 'thamnees', 'B+ve', 0x6368616d70696f6e2e706e67, 0x726573756c745f7075626c6973682e706e67, '1000000001', 4, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `college_registration`
--

CREATE TABLE `college_registration` (
  `clg_id` int(11) NOT NULL COMMENT 'college id',
  `clg_name` varchar(30) DEFAULT NULL COMMENT 'college name',
  `affliation` int(11) DEFAULT NULL COMMENT 'affliation number',
  `address` varchar(50) DEFAULT NULL COMMENT 'college address',
  `district` varchar(15) DEFAULT NULL COMMENT 'college district',
  `pin` int(11) DEFAULT NULL COMMENT 'pin number',
  `email` varchar(30) DEFAULT NULL COMMENT 'email id of college',
  `phone` int(11) DEFAULT NULL COMMENT 'pnone number',
  `password` varchar(20) DEFAULT NULL COMMENT 'college password',
  `lid` int(11) DEFAULT NULL COMMENT 'login id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college_registration`
--

INSERT INTO `college_registration` (`clg_id`, `clg_name`, `affliation`, `address`, `district`, `pin`, `email`, `phone`, `password`, `lid`) VALUES
(1, 'kmct', 23456789, 'kmct college\r\nkallanthode\r\ncalicut', 'Kozhikode', 45455, 'kmct@gmail.com', 234567890, 'kmct', 2),
(2, 'ideal', 34567890, 'ideal college,\r\nkallanthode\r\nmalappuram', 'Malappuram', 45678, 'ideal@gmail.com', 456789055, 'ideal', 3),
(3, 'mes', 31232435, 'mes college\r\nkuttippuram\r\nmalappuram', 'Malappuram', 88877, 'mes@gmail.com', 2147483647, 'mes', 4),
(4, 'pmsa', 235627884, 'pmsa college\r\ntirur\r\nmalappuram', 'Malappuram', 654564, 'pmsa@gmail.com', 0, '', 5),
(5, '', 0, '', 'select', 0, '', 0, '', 6),
(6, 'ideal123', 4352764, 'ideal college\r\nmalappuram', 'Malappuram', 785548, 'ideal123@gmail.com', 2147483647, 'ideal123', 7);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `evt_id` int(11) NOT NULL COMMENT 'event id',
  `evt_name` varchar(30) DEFAULT NULL COMMENT 'event name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`evt_id`, `evt_name`) VALUES
(1, '100 meter running'),
(2, '200 meter running'),
(3, '400 meter running'),
(4, '800 meter running'),
(5, '1500 meter running'),
(6, '5000 meter running'),
(7, '10000 meter running'),
(8, '110 meter hurdles'),
(9, '400 meter hurdles'),
(10, 'shortput'),
(11, 'disc throw'),
(12, 'javelin'),
(13, 'hammer throw'),
(14, 'long jump'),
(15, 'triple jump'),
(16, 'high jump'),
(17, 'pole walt'),
(18, '4*100 meter relay'),
(19, '4*400 meter relay');

-- --------------------------------------------------------

--
-- Table structure for table `event_select`
--

CREATE TABLE `event_select` (
  `evtslc_id` int(11) NOT NULL COMMENT 'event select id',
  `evt_id` int(11) DEFAULT NULL COMMENT 'event id',
  `ath_id` int(11) DEFAULT NULL COMMENT 'athlete id',
  `meet_id` int(11) DEFAULT NULL COMMENT 'meet id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL COMMENT 'login id',
  `username` varchar(30) DEFAULT NULL COMMENT 'username',
  `password` varchar(20) DEFAULT NULL COMMENT 'password',
  `type` varchar(10) DEFAULT NULL COMMENT 'type of user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'kmct@gmail.com', 'kmct', 'user'),
(3, 'ideal@gmail.com', 'ideal', 'reject'),
(4, 'mes@gmail.com', 'mes', 'user'),
(5, 'pmsa@gmail.com', '', 'pending'),
(6, '', '', 'pending'),
(7, 'ideal123@gmail.com', 'ideal123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `meet_register`
--

CREATE TABLE `meet_register` (
  `meet_id` int(11) NOT NULL COMMENT 'meet id',
  `meet_name` varchar(40) DEFAULT NULL COMMENT 'name of meet',
  `venue` varchar(20) DEFAULT NULL COMMENT 'venue of meet',
  `place` varchar(20) DEFAULT NULL COMMENT 'place of meet',
  `start_date` date DEFAULT NULL COMMENT 'start date of meet',
  `end_date` date DEFAULT NULL COMMENT 'end date of meet',
  `apply_before` date DEFAULT NULL COMMENT 'apply before the date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athlete_registration`
--
ALTER TABLE `athlete_registration`
  ADD PRIMARY KEY (`ath_id`);

--
-- Indexes for table `college_registration`
--
ALTER TABLE `college_registration`
  ADD PRIMARY KEY (`clg_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`evt_id`);

--
-- Indexes for table `event_select`
--
ALTER TABLE `event_select`
  ADD PRIMARY KEY (`evtslc_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meet_register`
--
ALTER TABLE `meet_register`
  ADD PRIMARY KEY (`meet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athlete_registration`
--
ALTER TABLE `athlete_registration`
  MODIFY `ath_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'athlete id', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `college_registration`
--
ALTER TABLE `college_registration`
  MODIFY `clg_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'college id', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `evt_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'event id', AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `event_select`
--
ALTER TABLE `event_select`
  MODIFY `evtslc_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'event select id';

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'login id', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `meet_register`
--
ALTER TABLE `meet_register`
  MODIFY `meet_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'meet id';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
