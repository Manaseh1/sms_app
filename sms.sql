-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 02, 2023 at 01:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`first_name`, `last_name`, `phone_number`, `email`, `password`, `id`) VALUES
('Gideon', 'Mbuthia', '+254723658593', 'gideon@gmail.com', '123456', 1),
('Manaseh', 'Mbuthia', '072612212', 'mananjoroup7@gmail.com', '$2y$10$6s.Cxo9sXtDN1gsEt4cBCu0F6RHw5obkR5XRtIxvssQT0n1G/Fpky', 2),
('Manaseh', 'Mbuthia', '072612212', 'mananjoroup7@gmail.com', '$2y$10$Qqrv5/z76hq/l6pvbMJbDuGKbHDSrlUOhd1EvtgOyTnBCLf9AQB.C', 3),
('Manaseh', 'Mbuthia', '072612212', 'mananjoroup7@gmail.com', '$2y$10$OtytJHkIGGYc/6BeoMmv2OZatzAspq27VQHAAqKQm6ljTdbGFb2zW', 4),
('Manaseh', 'Mbuthia', '072612212', 'mananjoroup7@gmail.com', '$2y$10$bIxSpWsjxuv/x1fBRrtdN.yqmpRKRxKmkgzhPka38PMsfNg5nSto2', 5),
('Manaseh', 'Mbuthia', '072612212', 'mananjoroup7@gmail.com', '$2y$10$o6JE.cSrppYIzcuXGQ7W5OPPfDHmqSSCRwWi6vPlqEotnGBtu9g/a', 6),
('Samuel', 'Mureithi', '072612212', 'mananjoroup7@gmail.com', '$2y$10$9SzN68neN1HdPpITCYnPGOej0c/zhQQW6tiJLMwj2wSlJJ9n6dq.e', 7),
('Christopher', 'Mwangi', '0726166461', 'chris@gmail.com', '$2y$10$6G5gsT7.JJYyYR4felTqxeR1MPrNh1Le6IDYrfjSBUNSiElkL2NTS', 8);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
