-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 08:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kripto`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `role`, `username`, `password`) VALUES
(8, 'user', 'akun3', '5f5c57d23f6275a6f15337395a4633e4'),
(9, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(10, 'user', 'akun', '3d342d6e0c524dd57f1728a053eedff3'),
(11, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee'),
(13, 'user', 'user2', '7e58d63b60197ceb55a1c487989a3720'),
(15, 'user', 'user7', '3e0469fb134991f8f75a2760e409c6ed');

-- --------------------------------------------------------

--
-- Table structure for table `kritik`
--

CREATE TABLE `kritik` (
  `id` int(11) NOT NULL,
  `kritik` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kritik`
--

INSERT INTO `kritik` (`id`, `kritik`) VALUES
(9, 'EvxlVWolb9FryzWQvf3RwjXksGBMGMPO4d0CI2cbAAZKZ8o0BK/voldo9Q4bqb/7oWRVyzCBSXC2aUIVA7m9Aw=='),
(10, '2T4xAsJRbMJxNiTgp8jSylF73/8mrZHzxF0MdROMRMMfpFYSiuEAO39C108dMB5eK1lJlOMJc4z5dtiySFEo+rW1LVBg3kHkxQzDXZG67Gs='),
(11, '63i8LiHWJUDWQLx683oynoNKY154pZ0QB5ujMkF4Qqzb6orzmhFMwObu/zLL5xa/'),
(12, 'Z4a9IuGSZJZpVuZ+be+BpKbXGNGFBxXxtn2jdisnKnit+MaLm6ZKu+6CVFe7DRc4');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `review` varchar(999) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `review`, `image`) VALUES
(58, 'bNbbqwU9ttSAx6nKRRy0heyL/3RRnBpNkgPyP0JTLCMf3X7uhim918G0jT15NgGoIzbPSOU4kn8N7RR8aUfGYle+M+uLLQ3PnRwy8DF39CU=', 0x52305a744b30744d574859335354527457475630616d68515932685054324a5a655642516455397a52304e366558566b6155773261544233515430364f70696a7a694a396654694855516b364e65314e447a413d),
(60, 'z3qj6yU4/aGAqbggchiLfA==', 0x5455355a4e6b566f526a4a705a4852325647316b4f445a3156457052526c5270524846464e4535755333464f5256644c4d564e316430387a545430364f6a38374c774a7174644e33374f7731734f677368554d3d),
(61, 'bNbbqwU9ttSAx6nKRRy0hbKhVm4BThBTbkpe0PQZ+HQSv8TLvZYSW6A30FWCi4rB', 0x52546b76546d5a495a473948625746544e446c36635749335a6c563565584d7252584e74613068714e586857613274315a6d4e7452316f77565430364f753443592b786e56382b646655373275363274746e633d),
(62, 'jv3Cm1VZIWcHhWQMo3ICM23Lc2KYTnkosW3T2w9cwKdbqZ0Gp/trfQBr0OV7Spg1', 0x59546c6d616b56784e30464d6333424d546c4a32615568506445746165584243656b7434636c4673526c6330547a5a3655544a31624774454f4430364f6955737a523566315673573859365258424a685739733d);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
