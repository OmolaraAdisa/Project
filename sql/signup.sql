-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 03:34 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phoneno` int(7) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `male` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `female` varchar(6) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `address` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `lastname`, `email`, `phoneno`, `password`, `male`, `female`, `date`, `address`) VALUES
(1, '', '', 'omolara', 245678, 'olatunji', '', '', '2018-12-09 13:49:29', 'xcvxdvd'),
(2, 'asdfas', 'asdfa', 'omolara', 5888, 'olatunji', 'option1', '', '2018-12-09 13:52:10', 'asdfa'),
(3, 'asdfasASD', 'asdfa', 'omolara', 5888, 'olatunji', '', '', '2018-12-09 13:55:36', 'asdfa'),
(4, 'asdfasASD', 'asdfa', 'omolara', 5888, 'olatunji', '', '', '2018-12-09 13:56:28', 'asdfa'),
(5, 'ASDAs', 'asda', 'omolara', 467346436, 'olatunji', 'option2', '', '2018-12-09 13:59:23', 'ASDFASDF'),
(6, 'ASDAs', 'asda', 'omolara', 467346436, 'olatunji', 'option2', '', '2018-12-09 14:00:27', 'ASDFASDF'),
(7, 'ASDAs', 'asda', 'omolara', 467346436, 'olatunji', 'option2', '', '2018-12-09 14:03:02', 'ASDFASDF'),
(8, 'z ', 'ASD', 'omolara', 6562, 'olatunji', 'female', '', '2018-12-09 14:03:26', 'asd'),
(9, 'z ', 'ASD', 'omolara', 6562, 'olatunji', '', 'female', '2018-12-09 14:07:14', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
