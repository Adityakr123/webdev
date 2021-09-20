-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 19, 2021 at 08:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Trip`
--

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `name` text NOT NULL,
  `age` varchar(3) NOT NULL,
  `email` varchar(22) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `other` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`name`, `age`, `email`, `phone`, `other`, `date`) VALUES
('TEST NAME', '34', 'ADITYA@123', '1234567899', 'HI GUYS', '2021-09-19 20:54:58'),
('AS', '34', 'ADITYA@123', '1234567899', 'MY SECOND ENTRY', '2021-09-19 20:56:05'),
('ad', '12', 'aditya@123', '8860681189', 'hello', '2021-09-19 21:46:23'),
('ad', '12', 'aditya@123', '8860681189', 'hello', '2021-09-19 21:49:19'),
('ad', '12', 'aditya@123', '8860681189', 'hello', '2021-09-19 21:49:24'),
('ad', '12', 'aditya@123', '8860681189', 'hello', '2021-09-19 21:53:22'),
('adi', '12', 'adityakr@gmail.com', '1234567', 'hiw', '2021-09-19 21:53:38'),
('adi', '12', 'adityakr@gmail.com', '1234567', 'hiw', '2021-09-19 21:53:58'),
('adi', '12', 'adityakr@gmail.com', '1234567', 'hiw', '2021-09-19 21:54:01'),
('hi', '14', 'adityakr365@gmail.com', '1234567891', 'hi guys', '2021-09-19 21:54:59'),
('hi', '14', 'adityakr365@gmail.com', '1234567891', 'hi guys', '2021-09-19 21:55:32'),
('Aditya Kumar', '18', 'adityakr365@gmail.com', '8860681189', 'MY SELF ADITYA KUMAR ', '2021-09-19 21:57:26'),
('Aditya Kumar', '18', 'adityakr365@gmail.com', '8860681189', 'MY SELF ADITYA KUMAR ', '2021-09-19 23:29:05'),
('Aditya Kumar', '18', 'adityakr365@gmail.com', '8860681189', 'MY SELF ADITYA KUMAR ', '2021-09-19 23:29:13'),
('Aditya singh', '23', 'adityasingh@gmail.com', '9582433087', 'my self Aditya singh', '2021-09-19 23:30:44'),
('Aditya singh', '23', 'adityasingh@gmail.com', '9582433087', 'my self Aditya singh', '2021-09-19 23:31:28'),
('Aditya singh', '23', 'adityasingh@gmail.com', '9582433087', 'my self Aditya singh', '2021-09-19 23:31:31'),
('Vijay Kumar', '25', 'adityakr@gmail.com', '9582433087', 'aditya', '2021-09-19 23:33:07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
