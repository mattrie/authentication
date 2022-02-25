-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 03:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myboss`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`) VALUES
(5, 'Jack Wilson', 'anitaolsen2k@gmail.com', 'd5f12e53a182c062b6bf30c1445153faff12269a'),
(6, 'James Richard', 'matriebelle@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(7, 'test2356', 'Test2356@Test2356.com', 'f1bbb14afbe5e0b254e3b4ce9960e925e28f039c'),
(8, 'Test2356', 'Test2356@Test2356.com', 'f1bbb14afbe5e0b254e3b4ce9960e925e28f039c'),
(9, 'Daniel loyd', 'daniel@gmail.com', 'f350d780ea8aaa48030b4db64f790c14dbcd757f'),
(10, 'testing1', 'Testing1@gmail.com', 'cf15657ba577f89e8c5f5c812745e88f660abe6d'),
(11, 'Testing1 Testing1 Testing1', 'Testing1@gmail2.com', 'cf15657ba577f89e8c5f5c812745e88f660abe6d'),
(12, 'Testing1 Testing1 Testing1', 'Testing1@gmail3.com', '7ac58aa2dee0b54a8c53729249462317149d5a14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
