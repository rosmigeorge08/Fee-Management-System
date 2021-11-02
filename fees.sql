-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 08:21 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fees`
--

-- --------------------------------------------------------

--
-- Table structure for table `comps`
--

CREATE TABLE `comps` (
  `name` varchar(20) NOT NULL,
  `id` int(20) NOT NULL,
  `contact` int(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `joindate` date NOT NULL,
  `balance` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comps`
--

INSERT INTO `comps` (`name`, `id`, `contact`, `email`, `joindate`, `balance`) VALUES
('Ravi Kumar', 101, 885236987, 'ravikumar@gmail.com', '2021-09-01', 25000),
('Raj Kapoor', 102, 2147483647, 'rajkapoor@gmail.com', '2021-09-01', 25000),
('Raveena Kashyap', 103, 836472147, 'kraveen@gmail.com', '2021-09-01', 25000),
('Sunny Singh', 104, 815699847, 'sunsingh@gmail.com', '2021-09-01', 0),
('Roger King', 105, 825694371, 'rogerking@gmail.com', '2021-09-01', 25000),
('Sana Khan', 106, 812564397, 'sanakhan@gmail.com', '2021-09-01', 25000),
('Sofie Kingham', 107, 912367557, 'kingsofie@gmail.com', '2021-09-01', 25000),
('Naresh Nagar', 108, 995648237, 'nagarnar@gmail.com', '2021-09-01', 25000),
('Sheetal Nair', 109, 854931573, 'sheetal@gmail.com', '2021-09-01', 25000),
('Paresh Rawal', 110, 836471474, 'paresh@gmail.com', '2021-09-01', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `extc`
--

CREATE TABLE `extc` (
  `name` varchar(20) NOT NULL,
  `id` int(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `joindate` date NOT NULL,
  `balance` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `extc`
--

INSERT INTO `extc` (`name`, `id`, `contact`, `email`, `joindate`, `balance`) VALUES
('Shein James', 301, '852367877', 'sjames@gmail.com', '2021-09-01', 25000),
('Emma Watson', 302, '841235687', 'emmwatson@gmail.com', '2021-09-01', 25000),
('Sunil Sharma', 303, '852639741', 'sunsharma@gmail.com', '2021-09-01', 25000),
('Ritika Rajput', 304, '852364591', 'ritikarajput@gmail.com', '2021-09-01', 25000),
('Komal Kadam', 305, '8423698751', 'kadkomal@gmail.com', '2021-09-01', 0),
('Jatin Das', 306, '852688951', 'jatindas@gmail.com', '2021-09-01', 25000),
('Arzoo Shaik', 307, '869735421', 'arzooo@gmail.com', '2021-09-01', 25000),
('Leena Rai', 308, '9965832411', 'leenarai@gmail.com', '2021-09-01', 25000),
('Rita Paniwala', 309, '9849657231', 'ritap@gmail.com', '2021-09-01', 25000),
('Poonam Pandit', 310, '9364978511', 'ppoonam@gmail.com', '2021-09-01', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `it`
--

CREATE TABLE `it` (
  `name` varchar(20) NOT NULL,
  `id` int(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `joindate` date NOT NULL,
  `balance` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `it`
--

INSERT INTO `it` (`name`, `id`, `contact`, `email`, `joindate`, `balance`) VALUES
('Shama Mukbal', 201, '8652394', 'shamamuk@gmail.com', '2021-09-01', 25000),
('Radhika Singh', 202, '81236589', 'singhradh@gmail.com', '2021-09-01', 25000),
('Ram Nath', 203, '88569747', 'ramnath@gmail.com', '2021-09-01', 25000),
('Katy Dzousa', 204, '84237679', 'dzousakat@gmail.com', '2021-09-01', 0),
('Manya Sharma', 205, '965487231', 'mansharma@gmail.com', '2021-09-01', 25000),
('Mayank Patel ', 206, '85243695', 'mayank@gmail.com', '2021-09-01', 25000),
('Sushil Kumar', 207, '836459782', 'kumarsush@gmail.com', '2021-09-01', 25000),
('Kaira Taloja', 208, '82595475', 'kairataloja@gmail.com', '2021-09-01', 25000),
('Kavita Thakur', 209, '87369524', 'kavitathak@gmail.com', '2021-09-01', 25000),
('Shub Dixit', 210, '813624969', 'shubdixit@gmail.com', '2021-09-01', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `mechanical`
--

CREATE TABLE `mechanical` (
  `name` varchar(20) NOT NULL,
  `id` int(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `joindate` date NOT NULL,
  `balance` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mechanical`
--

INSERT INTO `mechanical` (`name`, `id`, `contact`, `email`, `joindate`, `balance`) VALUES
('Kabir Khan', 401, '9261645966', 'kabirkhan@gmail.com', '2021-01-09', 25000),
('Dhruv Joshi', 402, '84215122', 'dhruvjoshi@gmail.com', '2021-01-09', 25000),
('Rudra Chand', 403, '821252234', 'rudrachand@gmail.com', '2021-01-09', 25000),
('Dhvani Dhuri', 404, '8365498612', 'dhvanidhuri@gmail.com', '2021-01-09', 25000),
('Bhumi Bhatt', 405, '9569487312', 'bhumibhatt@gmail.com', '2021-01-09', 25000),
('Karan Kundra ', 406, '82569355', 'karankundra@gmail.com', '2021-01-09', 0),
('Arsh Roy', 407, '8323698542', 'arshroy@gmail.com', '2021-01-09', 25000),
('Rakesh Dev', 408, '8123456978', 'devrakesh@gmail.com', '2021-01-09', 25000),
('Suraj Jadhav', 409, '8723469758', 'surajjadhav@gmail.com', '2021-01-09', 25000),
('Tina Mathew', 410, '698745211', 'tinamathew@gmail.com', '2021-01-09', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `paycomps`
--

CREATE TABLE `paycomps` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `joindate` date NOT NULL,
  `paid` int(8) NOT NULL,
  `remark` varchar(30) NOT NULL,
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paycomps`
--

INSERT INTO `paycomps` (`id`, `name`, `contact`, `email`, `joindate`, `paid`, `remark`, `datetime`) VALUES
(104, 'Sunny Singh', '815699847', 'sunsingh@gmail.com', '2021-09-01', 25000, 'Paid', '2021-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `payextc`
--

CREATE TABLE `payextc` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `joindate` date NOT NULL,
  `paid` int(8) NOT NULL,
  `remark` varchar(30) NOT NULL,
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payextc`
--

INSERT INTO `payextc` (`id`, `name`, `contact`, `email`, `joindate`, `paid`, `remark`, `datetime`) VALUES
(305, 'Komal Kadam', '8423698751', 'kadkomal@gmail.com', '2021-09-01', 25000, 'Paid', '2021-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `payit`
--

CREATE TABLE `payit` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `joindate` date NOT NULL,
  `paid` int(8) NOT NULL,
  `remark` varchar(30) NOT NULL,
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payit`
--

INSERT INTO `payit` (`id`, `name`, `contact`, `email`, `joindate`, `paid`, `remark`, `datetime`) VALUES
(204, 'Katy Dzousa', '84237679', 'dzousakat@gmail.com', '2021-09-01', 25000, 'Paid', '2021-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `paymech`
--

CREATE TABLE `paymech` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `joindate` date NOT NULL,
  `paid` int(8) NOT NULL,
  `remark` varchar(30) NOT NULL,
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymech`
--

INSERT INTO `paymech` (`id`, `name`, `contact`, `email`, `joindate`, `paid`, `remark`, `datetime`) VALUES
(406, 'Karan Kundra ', '82569355', 'karankundra@gmail.com', '2021-01-09', 25000, 'Paid', '2021-10-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comps`
--
ALTER TABLE `comps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extc`
--
ALTER TABLE `extc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it`
--
ALTER TABLE `it`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mechanical`
--
ALTER TABLE `mechanical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paycomps`
--
ALTER TABLE `paycomps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payextc`
--
ALTER TABLE `payextc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payit`
--
ALTER TABLE `payit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymech`
--
ALTER TABLE `paymech`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
