-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Aug 09, 2021 at 03:45 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipd25_projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbids`
--

CREATE TABLE `tblbids` (
  `bid_id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `username` varchar(10) NOT NULL,
  `item_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblbids`
--

INSERT INTO `tblbids` (`bid_id`, `amount`, `username`, `item_id`, `date_time`) VALUES
(1, 6000, 'tom1234', 21, '2021-08-08 21:14:35'),
(2, 1300, 'tom1234', 24, '2021-08-08 21:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `tblitems`
--

CREATE TABLE `tblitems` (
  `item_id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `end_date_time` datetime NOT NULL,
  `starting_bid` int(10) NOT NULL,
  `owner` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblitems`
--

INSERT INTO `tblitems` (`item_id`, `description`, `end_date_time`, `starting_bid`, `owner`) VALUES
(1, 'whatever I want', '2021-08-02 10:11:30', 1000, 'nima'),
(20, 'Laptop', '2021-08-18 17:18:54', 1000, 'mahan1234'),
(21, 'Cellphone', '2021-08-31 17:18:54', 800, 'tom1234'),
(24, 'Smart Watch', '2021-08-21 19:18:54', 1100, 'tom1234'),
(29, 'Knife', '2021-08-03 18:03:38', 50, 'nely1234');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `username` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`username`, `name`, `email`, `password`) VALUES
('mahan1234', 'mahan edi', 'mahan@g.com', '1234'),
('nely1234', 'nely', 'nely@g.com', '1234'),
('nima', 'nima', 'nima@g.com', '1234'),
('tom1234', 'tom', 'tom@g.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbids`
--
ALTER TABLE `tblbids`
  ADD PRIMARY KEY (`bid_id`),
  ADD KEY `fk_tblbids_tblitems` (`item_id`),
  ADD KEY `fk_bid_user` (`username`);

--
-- Indexes for table `tblitems`
--
ALTER TABLE `tblitems`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `fk_tblitems_tblusers` (`owner`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbids`
--
ALTER TABLE `tblbids`
  MODIFY `bid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblitems`
--
ALTER TABLE `tblitems`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblbids`
--
ALTER TABLE `tblbids`
  ADD CONSTRAINT `fk_bid_user` FOREIGN KEY (`username`) REFERENCES `tblusers` (`username`),
  ADD CONSTRAINT `fk_bids_items` FOREIGN KEY (`item_id`) REFERENCES `tblitems` (`item_id`);

--
-- Constraints for table `tblitems`
--
ALTER TABLE `tblitems`
  ADD CONSTRAINT `fk_tblitems_tblusers` FOREIGN KEY (`owner`) REFERENCES `tblusers` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
