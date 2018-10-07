-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 06:25 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_userdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `skill`) VALUES
(1, 'Imtiaz Ahmed Epu', 'info@gmail.com', 'PHP'),
(2, 'Robin Ahmed', 'robin@gmail.com', 'JAVA'),
(3, 'Faisal Ahmed', 'faisal@gmail.com', 'Ruby'),
(4, 'Asif Jabir', 'asif@gmail.com', 'Python'),
(5, 'Naim Islam', 'naim@gmail.com', 'Laravel'),
(6, 'Muhiut Ullah', 'muhith@gmail.com', 'JavaScript'),
(7, 'Reezoo Ahmed', 'reezo@gmail.com', 'IOS'),
(8, 'Zahidur Rahman', 'zahid@gmail.com', 'Android'),
(9, 'Robin Mollik Shen', 'robin@gmail.com', 'Node.js,PHP '),
(10, 'Mark Jeson', 'mark@gmail.com', 'Angular.js');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
