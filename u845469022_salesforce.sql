-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 16, 2024 at 09:34 AM
-- Server version: 10.11.9-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u845469022_salesforce`
--

-- --------------------------------------------------------

--
-- Table structure for table `birthdays`
--

CREATE TABLE `birthdays` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Active` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Linkedin` varchar(255) DEFAULT NULL,
  `Birthday` date NOT NULL,
  `Location` varchar(50) DEFAULT NULL,
  `Serving` varchar(10) DEFAULT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `Exposure` varchar(10) DEFAULT NULL,
  `days_warning` int(11) DEFAULT NULL,
  `CurrentCompany` varchar(100) DEFAULT NULL,
  `LastContact` date DEFAULT NULL,
  `LastComments` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `birthdays`
--

INSERT INTO `birthdays` (`id`, `Firstname`, `Lastname`, `Active`, `Email`, `Linkedin`, `Birthday`, `Location`, `Serving`, `Title`, `Department`, `Exposure`, `days_warning`, `CurrentCompany`, `LastContact`, `LastComments`, `created_at`) VALUES
(17, 'prasanth', 'kumar', 'true', 'asdf@gmail.com', 'linkedin.com', '2024-11-13', 'Location1', 'Serving1', 'worker', 'Marketing', 'Medium', 6, 'skype', '2024-11-11', 'no comments', '2024-11-01 07:30:40'),
(19, 'kumarswami', 'kumar', 'true', 'asdf@gmail.com', 'asdt@linkedin.com', '1994-11-01', 'Location2', 'Serving2', 'creative', 'Marketing', 'Low', 8, 'creative.com', '2024-11-15', 'no comments', '2024-11-01 08:57:28'),
(24, 'dharma', 'ba', 'false', 'dharma@gmail.com1', 'dharma.linkedin.com1', '1996-11-14', 'Location2', 'Serving2', 'developer1', 'Sales', 'Medium', 10, 'procom1', '2024-11-11', 'none1', '2024-11-01 12:42:24'),
(29, 'dharma', 'b', 'false', 'kumar@gmail.com', 'd@linkedin.com', '2022-11-02', 'Location2', 'Serving2', 'developer', 'Account Executive', 'Medium', 5, 'procom', '2024-10-27', 'none', '2024-11-01 13:15:55'),
(30, 'Steven', 'Green', 'true', 'stevengreen@test.com', 'steven@linkedin.com', '2023-11-15', 'Location1', 'Serving1', 'Account Executive', 'Account Executive', 'High', 10, 'SF', '2024-10-15', 'Call back in 10 days', '2024-11-02 20:28:17'),
(31, 'prasnth', 'sp', 'true', 'vijay@gmail.com', 'vijayb@linkedin.com', '2024-11-15', 'Location1', 'Serving2', 'excutive', 'Sales', 'High', 15, 'procom', '2024-10-10', 'nothing', '2024-11-04 04:46:54'),
(32, 'vijay', 'b', 'false', 'vijay@gmail.com', 'vijayb@linkedin.com', '1995-09-04', 'Location1', 'Serving1', 'excutive', 'Marketing', 'High', 30, 'procom', '2024-10-10', 'nothing', '2024-11-04 04:48:27'),
(35, 'jack', 'den', 'true', 'jack@gmail.com', 'jack@linkedin.com', '1998-11-16', 'Location1', 'Serving2', 'excutive', 'Account Executive', 'High', 10, 'procom', '2024-11-06', 'just checking', '2024-11-15 09:42:06'),
(38, 'Yaminni', 'Nakkaaaaa', 'false', 'yamininakka89@gmail.com', 'https//11', '2024-11-11', 'Location2', 'Serving2', 'gfgfgfgfg', 'Sales', 'Medium', 111, 'Procom software solutions', '2024-11-11', 'no comments', '2024-11-15 12:26:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birthdays`
--
ALTER TABLE `birthdays`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birthdays`
--
ALTER TABLE `birthdays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
