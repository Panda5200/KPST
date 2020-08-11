-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 03:13 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

DROP TABLE IF EXISTS `apps`;
CREATE TABLE `apps` (
  `id` int(11) NOT NULL,
  `namaapps` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `unitkerja` varchar(50) NOT NULL,
  `departemen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`id`, `namaapps`, `alamat`, `unitkerja`, `departemen`) VALUES
(1, 'apps1', 'alamat1', 'unitkerja1', 'departemen1'),
(2, 'apps2', 'alamat2', 'unitkerja2', 'departemen2'),
(3, 'apps3', 'alamat3', 'unitkerja3', 'departemen3'),
(4, 'apps4', 'alamat4', 'unitkerja4', 'departemen4'),
(5, 'apps5', 'alamat5', 'unitkerja5', 'departemen5'),
(6, 'apps6', 'alamat6', 'unitkerja6', 'departemen6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
