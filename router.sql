-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 04:50 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `router`
--

CREATE TABLE `router` (
  `sapid` int(11) NOT NULL,
  `hostname` varchar(100) NOT NULL,
  `loopback` varchar(100) NOT NULL,
  `macaddress` varchar(100) NOT NULL,
  `delflag` tinyint(1) DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `router`
--

INSERT INTO `router` (`sapid`, `hostname`, `loopback`, `macaddress`, `delflag`, `created`, `modified`) VALUES
(1, 'test 1', 'test 2', 'test 3', 0, '2020-05-27 10:05:42', '2020-05-27 14:49:24'),
(2, 'www.byvpdzc.com', '175.226.191.202', '1r-4m-hn-50-vq-zb', 0, '2020-05-27 10:05:42', '2020-05-27 10:05:42'),
(3, 'www.arbgyvkmoz.com', '164.199.203.187', 'mj-u0-x7-gn-fa-fd', 0, '2020-05-27 10:05:42', '2020-05-27 10:05:42'),
(4, 'www.keorp.com', '203.171.212.197', 'nd-uk-nv-0c-ev-5l', 0, '2020-05-27 10:05:42', '2020-05-27 10:05:42'),
(5, 'www.ubger.com', '126.141.159.100', '1o-24-1q-n2-qa-j8', 0, '2020-05-27 10:05:42', '2020-05-27 10:05:42'),
(6, 'www.xsozi.com', '196.121.242.208', 'v7-9x-kl-w0-u6-tc', 0, '2020-05-27 10:05:42', '2020-05-27 10:05:42'),
(7, 'www.dafh.com', '173.101.150.102', 'n2-it-x1-xk-1c-f9', 0, '2020-05-27 10:05:42', '2020-05-27 10:05:42'),
(8, 'www.agonjpms.com', '215.207.206.127', '9k-bz-dg-i6-fk-ms', 0, '2020-05-27 10:05:42', '2020-05-27 10:05:42'),
(9, 'www.rlubycdi.com', '217.112.250.236', 'wl-cj-4h-k3-mu-kx', 0, '2020-05-27 10:05:42', '2020-05-27 10:05:42'),
(10, 'www.kgcumrwtv.com', '233.126.152.209', 'jh-0n-l7-m3-8d-gv', 0, '2020-05-27 10:05:42', '2020-05-27 10:05:42'),
(11, 'test 1', 'test 2', 'test 3', 0, '2020-05-27 14:41:13', '2020-05-27 14:41:13'),
(12, 'test 1', 'test 2', 'test 3', 0, '2020-05-27 14:48:49', '2020-05-27 14:48:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `router`
--
ALTER TABLE `router`
  ADD PRIMARY KEY (`sapid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `router`
--
ALTER TABLE `router`
  MODIFY `sapid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
