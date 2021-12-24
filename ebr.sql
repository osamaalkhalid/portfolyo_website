-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 07:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebr`
--

-- --------------------------------------------------------

--
-- Table structure for table `mesaj`
--

CREATE TABLE `mesaj` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mesaj`
--

INSERT INTO `mesaj` (`id`, `name`, `email`, `title`, `subtitle`) VALUES
(1, 'OSAMA ALKHALID', 'ansosama12345@gmail.com', 'sadasdasdasdsadasdas', 'asdasdasdasdasdasd'),
(2, 'OSAMA ALKHALID', 'ansosama12345@gmail.com', 'sadasdasdasdasdas', 'saddasadsd'),
(3, 'OSAMA ALKHALID', 'ansosama12345@gmail.com', 'sadasdsdasd', 'سيسيشسيشسيش'),
(4, 'OSAMA ALKHALID', 'ansosama12345@gmail.com', 'sadasdsdasd', 'سيسيشسيشسيش'),
(5, 'OSAMA ALKHALID', 'ansosama12345@gmail.com', 'sadasdsdasd', 'سيسيشسيشسيش'),
(6, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `id` int(11) NOT NULL,
  `name` longblob NOT NULL,
  `snf` text NOT NULL,
  `prname` text NOT NULL,
  `tarih` text NOT NULL,
  `detail` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mesaj`
--
ALTER TABLE `mesaj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mesaj`
--
ALTER TABLE `mesaj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
