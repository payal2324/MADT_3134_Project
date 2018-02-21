-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2018 at 01:01 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cestar_bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`id`, `username`, `password`) VALUES
(1, 'Ash', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bus_from_brampton`
--

CREATE TABLE `bus_from_brampton` (
  `id` int(5) NOT NULL,
  `day_id` varchar(11) NOT NULL,
  `dept_time` time(4) NOT NULL,
  `dept_loc` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_from_brampton`
--

INSERT INTO `bus_from_brampton` (`id`, `day_id`, `dept_time`, `dept_loc`, `destination`) VALUES
(2, '1', '11:00:00.0000', ' Brampton', 'Lambton'),
(3, '1', '11:40:00.0000', 'Brampton', 'Lambton'),
(4, '1', '12:30:00.0000', 'Brampton', 'Lambton'),
(5, '1', '14:30:00.0000', 'Brampton', 'Lambton'),
(6, '1', '15:40:00.0000', 'Brampton', 'Lambton'),
(7, '1', '16:00:00.0000', 'Brampton', 'Lambton'),
(8, '1', '16:25:00.0000', 'Brampton', 'Lambton'),
(9, '2', '10:20:00.0000', 'Brampton', 'Lambton'),
(10, '2', '11:00:00.0000', 'Brampton', 'Lambton'),
(11, '2', '11:40:00.0000', 'Brampton', 'Lambton'),
(12, '2', '12:30:00.0000', '    Brampton', 'Lambton'),
(13, '2', '14:30:00.0000', 'Brampton', 'Lambton'),
(14, '2', '15:40:00.0000', 'Brampton', 'Lambton'),
(15, '2', '16:00:00.0000', 'Brampton', 'Lambton'),
(16, '2', '16:25:00.0000', 'Brampton', 'Lambton'),
(17, '3', '10:20:00.0000', 'Brampton', 'Lambton'),
(18, '3', '11:00:00.0000', 'Brampton', 'Lambton'),
(19, '3', '11:40:00.0000', 'Brampton', 'Lambton'),
(20, '3', '12:30:00.0000', 'Brampton', 'Lambton'),
(21, '3', '14:30:00.0000', 'Brampton', 'Lambton'),
(22, '3', '15:40:00.0000', 'Brampton', 'Lambton'),
(23, '3', '16:00:00.0000', 'Brampton', 'Lambton'),
(24, '3', '16:25:00.0000', 'Brampton', 'Lambton'),
(25, '4', '10:20:00.0000', 'Brampton', 'Lambton'),
(26, '4', '11:00:00.0000', 'Brampton', 'Lambton'),
(27, '4', '11:40:00.0000', 'Brampton', 'Lambton'),
(28, '4', '12:30:00.0000', 'Brampton', 'Lambton'),
(29, '4', '14:30:00.0000', 'Brampton', 'Lambton'),
(30, '4', '15:40:00.0000', 'Brampton', 'Lambton'),
(31, '4', '16:00:00.0000', 'Brampton', 'Lambton'),
(32, '4', '16:25:00.0000', 'Brampton', 'Lambton'),
(33, '5', '10:20:00.0000', 'Brampton', 'Lambton'),
(34, '5', '11:00:00.0000', 'Brampton', 'Lambton'),
(35, '5', '11:40:00.0000', 'Brampton', 'Lambton'),
(36, '5', '12:30:00.0000', 'Brampton', 'Lambton'),
(37, '5', '14:30:00.0000', 'Brampton', 'Lambton'),
(38, '5', '15:40:00.0000', 'Brampton', 'Lambton'),
(39, '5', '16:00:00.0000', 'Brampton', 'Lambton'),
(40, '5', '16:25:00.0000', 'Brampton', 'Lambton'),
(41, '6', '06:45:00.0000', '    Brampton', 'Lambton'),
(42, '6', '11:00:00.0000', 'Brampton', 'Lambton'),
(43, '6', '11:40:00.0000', 'Brampton', 'Lambton'),
(44, '6', '12:30:00.0000', 'Brampton', 'Lambton'),
(45, '6', '16:00:00.0000', 'Brampton', 'Lambton'),
(46, '1', '06:45:00.0000', 'Brampton', 'Lambton'),
(47, '2', '06:45:00.0000', 'Brampton', 'Lambton'),
(48, '3', '06:45:00.0000', 'Brampton', 'Lambton'),
(49, '4', '06:45:00.0000', 'Brampton', 'Lambton'),
(50, '1', '06:45:00.0000', ' Missisauga', 'Lambton'),
(51, '1', '06:45:00.0000', 'Mississauga', 'Lambton'),
(52, '1', '11:30:00.0000', 'Lambton', 'Brampton'),
(53, '2', '11:30:00.0000', 'Lambton', 'Brampton'),
(54, '3', '11:30:00.0000', 'Lambton', 'Brampton'),
(55, '4', '11:30:00.0000', 'Lambton', 'Brampton'),
(56, '5', '11:30:00.0000', 'Lambton', 'Brampton'),
(57, '1', '12:30:00.0000', 'Lambton', 'Brampton'),
(58, '2', '12:30:00.0000', 'Lambton', 'Brampton'),
(59, '3', '12:30:00.0000', 'Lambton', 'Brampton'),
(60, '4', '12:30:00.0000', 'Lambton', 'Brampton'),
(61, '5', '12:30:00.0000', 'Lambton', 'Brampton'),
(62, '1', '12:30:00.0000', 'Lambton', 'Mississauga'),
(63, '2', '12:30:00.0000', 'Lambton', 'Mississauga'),
(64, '3', '12:30:00.0000', 'Lambton', 'Mississauga'),
(65, '4', '12:30:00.0000', 'Lambton', 'Mississauga'),
(66, '5', '12:30:00.0000', 'Lambton', 'Mississauga'),
(67, '1', '13:30:00.0000', 'Lambton', 'Brampton'),
(68, '2', '13:30:00.0000', 'Lambton', 'Brampton'),
(69, '3', '13:30:00.0000', 'Lambton', 'Brampton'),
(70, '4', '13:30:00.0000', 'Lambton', 'Brampton'),
(71, '5', '13:30:00.0000', 'Lambton', 'Brampton'),
(72, '1', '13:45:00.0000', 'Lambton', 'Brampton'),
(73, '2', '13:45:00.0000', 'Lambton', 'Brampton'),
(74, '4', '13:45:00.0000', 'Lambton', 'Brampton'),
(75, '3', '13:45:00.0000', 'Lambton', 'Brampton'),
(76, '5', '13:45:00.0000', 'Lambton', 'Brampton'),
(77, '1', '13:45:00.0000', 'Lambton', 'Mississauga'),
(78, '2', '13:45:00.0000', 'Lambton', 'Mississauga'),
(79, '3', '13:45:00.0000', 'Lambton', 'Mississauga'),
(80, '4', '13:45:00.0000', 'Lambton', 'Mississauga'),
(81, '5', '11:45:00.0000', 'Lambton', 'Mississauga'),
(82, '1', '14:15:00.0000', 'Lambton', 'Brampton'),
(83, '2', '14:15:00.0000', 'Lambton', 'Brampton'),
(84, '3', '14:15:00.0000', 'Lambton', 'Brampton'),
(85, '4', '14:15:00.0000', 'Brampton', 'Lambton'),
(86, '1', '15:30:00.0000', 'Lambton', 'Brampton'),
(87, '2', '15:30:00.0000', 'Lambton', 'Brampton'),
(88, '3', '15:30:00.0000', 'Lambton', 'Brampton'),
(89, '2', '06:45:00.0000', 'Mississauga', 'Lambton'),
(90, '3', '06:45:00.0000', 'Mississauga', 'Lambton'),
(91, '4', '06:45:00.0000', 'Mississauga', 'Lambton'),
(92, '5', '07:15:00.0000', 'Mississauga', 'Lambton'),
(93, '1', '11:15:00.0000', 'Mississauga', 'Lambton'),
(94, '2', '11:15:00.0000', 'Mississauga', 'Lambton'),
(95, '3', '11:15:00.0000', 'Mississauga', 'Lambton'),
(96, '4', '11:15:00.0000', 'Mississauga', 'Lambton'),
(97, '4', '15:30:00.0000', 'Lambton', 'Brampton'),
(98, '5', '15:30:00.0000', 'Lambton', 'Brampton'),
(99, '1', '15:30:00.0000', 'Lambton', 'Mississauga'),
(100, '2', '15:30:00.0000', 'Lambton', 'Mississauga'),
(101, '3', '15:30:00.0000', 'Lambton', 'Mississauga'),
(102, '4', '15:30:00.0000', 'Lambton', 'Mississauga'),
(103, '5', '15:30:00.0000', 'Lambton', 'Mississauga'),
(104, '1', '17:00:00.0000', 'Lambton', 'Brampton'),
(105, '2', '17:00:00.0000', 'Lambton', 'Brampton'),
(106, '3', '17:00:00.0000', 'Lambton', 'Brampton'),
(107, '4', '17:00:00.0000', 'Lambton', 'Brampton'),
(108, '1', '17:00:00.0000', 'Lambton', 'Mississauga'),
(109, '2', '17:00:00.0000', 'Lambton', 'Mississauga'),
(110, '3', '17:00:00.0000', 'Lambton', 'Mississauga'),
(111, '4', '17:00:00.0000', 'Lambton', 'Mississauga'),
(112, '5', '17:00:00.0000', 'Lambton', 'Mississauga'),
(113, '5', '17:00:00.0000', 'Lambton', 'Brampton'),
(114, '1', '17:40:00.0000', 'Lambton', 'Brampton'),
(115, '2', '17:40:00.0000', 'Lambton', 'Brampton'),
(116, '3', '17:40:00.0000', 'Lambton', 'Brampton'),
(117, '4', '17:40:00.0000', 'Lambton', 'Brampton'),
(118, '5', '17:40:00.0000', 'Lambton', 'Brampton'),
(119, '1', '18:00:00.0000', 'Lambton', 'Brampton'),
(120, '2', '18:00:00.0000', 'Lambton', 'Brampton'),
(121, '3', '18:00:00.0000', 'Lambton', 'Brampton'),
(122, '4', '18:00:00.0000', 'Lambton', 'Brampton'),
(123, '5', '18:00:00.0000', 'Lambton', 'Brampton'),
(124, '1', '18:15:00.0000', 'Lambton', 'Brampton'),
(125, '2', '18:15:00.0000', 'Lambton', 'Brampton'),
(126, '3', '18:15:00.0000', 'Lambton', 'Brampton'),
(127, '4', '18:15:00.0000', 'Lambton', 'Brampton'),
(128, '5', '18:15:00.0000', 'Lambton', 'Brampton'),
(129, '1', '19:30:00.0000', 'Lambton', 'Brampton'),
(130, '2', '19:30:00.0000', 'Lambton', 'Brampton'),
(131, '3', '19:30:00.0000', 'Lambton', 'Brampton'),
(132, '4', '19:30:00.0000', 'Lambton', 'Brampton'),
(133, '5', '19:30:00.0000', 'Lambton', 'Brampton'),
(134, '6', '19:30:00.0000', 'Lambton', 'Brampton'),
(135, '1', '19:45:00.0000', 'Lambton', 'Brampton'),
(136, '2', '19:45:00.0000', 'Lambton', 'Brampton'),
(137, '3', '19:45:00.0000', 'Lambton', 'Brampton'),
(138, '4', '19:45:00.0000', 'Lambton', 'Brampton'),
(139, '5', '19:45:00.0000', 'Lambton', 'Brampton'),
(140, '1', '20:00:00.0000', 'Lambton', 'Brampton'),
(141, '2', '20:00:00.0000', 'Lambton', 'Brampton'),
(142, '3', '20:00:00.0000', 'Lambton', 'Brampton'),
(143, '4', '20:00:00.0000', 'Lambton', 'Brampton'),
(144, '5', '20:00:00.0000', 'Lambton', 'Brampton'),
(145, '1', '20:00:00.0000', 'Lambton', 'Mississauga'),
(146, '2', '20:00:00.0000', 'Lambton', 'Mississauga'),
(147, '3', '20:00:00.0000', 'Lambton', 'Mississauga'),
(148, '4', '20:00:00.0000', 'Lambton', 'Mississauga'),
(149, '5', '20:00:00.0000', 'Lambton', 'Mississauga'),
(151, '1', '21:35:00.0000', 'Lambton', 'Brampton'),
(152, '2', '21:35:00.0000', 'Lambton', 'Brampton'),
(153, '3', '21:35:00.0000', 'Lambton', 'Brampton'),
(154, '4', '21:35:00.0000', 'Lambton', 'Brampton'),
(155, '5', '21:35:00.0000', 'Lambton', 'Brampton'),
(156, '1', '21:45:00.0000', 'Lambton', 'Brampton'),
(157, '2', '21:45:00.0000', 'Lambton', 'Brampton'),
(158, '3', '21:45:00.0000', 'Lambton', 'Brampton'),
(159, '4', '21:45:00.0000', 'Lambton', 'Brampton'),
(160, '5', '21:45:00.0000', 'Lambton', 'Brampton'),
(161, '1', '22:10:00.0000', 'Lambton', 'Brampton'),
(162, '2', '22:10:00.0000', 'Lambton', 'Brampton'),
(163, '3', '22:10:00.0000', 'Lambton', 'Brampton'),
(164, '4', '22:10:00.0000', 'Lambton', 'Brampton'),
(165, '5', '22:10:00.0000', 'Lambton', 'Brampton'),
(166, '1', '22:10:00.0000', 'Lambton', 'Mississauga'),
(167, '2', '22:10:00.0000', 'Lambton', 'Mississauga'),
(168, '3', '22:10:00.0000', 'Lambton', 'Mississauga'),
(169, '4', '22:10:00.0000', 'Lambton', 'Mississauga'),
(170, '5', '22:10:00.0000', 'Lambton', 'Mississauga'),
(171, '1', '21:35:00.0000', ' Lambton', 'Brampton'),
(172, '1', '21:00:00.0000', ' Brampton', 'Lambton'),
(173, 'Monday', '21:00:00.0000', 'Lambton', 'Brampton'),
(174, 'Monday', '21:00:00.0000', 'Lambton', 'Brampton'),
(175, '3', '11:35:00.0000', ' Lambton', 'Brampton'),
(176, 'Monday', '11:30:00.0000', 'Brampton', 'Lambton'),
(177, 'Monday', '00:00:00.0000', 'Brampton', 'Brampton');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `day_id` int(11) NOT NULL,
  `day_name` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`day_id`, `day_name`) VALUES
(3, 'Wed'),
(4, 'Thu'),
(5, 'Fri'),
(6, 'Sat'),
(7, 'Sun'),
(1, 'Mon'),
(2, 'Tue');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_from_brampton`
--
ALTER TABLE `bus_from_brampton`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin1`
--
ALTER TABLE `admin1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bus_from_brampton`
--
ALTER TABLE `bus_from_brampton`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
